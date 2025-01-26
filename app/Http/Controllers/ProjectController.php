<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    // Display a list of projects
    public function index()
    {
        $projects = Project::paginate(10);
        return view('projects.index', compact('projects'));
    }

    // Show the form to create a new project
    public function create()
    {
        return view('projects.create');
    }

    // Store a new project
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:pending,completed,ongoing',
            'projectFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('projectFile')) {

            // Now upload the image attachment
            $team_image_file = $request->projectFile;

            $image_filename = time() . '.' . $team_image_file->getClientOriginalExtension();

            // Upload the image
            $image_upload = $team_image_file->storeAs('public/projects', $image_filename);
            $request->merge([
                "file" => 'projects/' . $image_filename // Store only the relative path
            ]);
        }
        $request->merge([
            "user_id" => Auth::user()->id // Store only the relative path
        ]);

        Project::create($request->all());
        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    // Show a single project
    public function show($id)
    {
        $project = Project::with('user')->findOrFail($id);
        return view('projects.show', compact('project'));
    }

    // Show the form to edit a project
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    // Update an existing project
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:pending,completed,ongoing',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $project = Project::findOrFail($id);

        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Upload the new image
            $team_image_file = $request->image;
            $image_filename = time() . '.' . $team_image_file->getClientOriginalExtension();
            $image_upload = $team_image_file->storeAs('public/projects', $image_filename);

            // Delete the old photo from storage if it exists
            if ($project->file) {
                Storage::disk('public')->delete($project->file);
            }

            // Set the new photo
            $request->merge(['file' => 'projects/' . $image_filename]);
        }
        $project->update($request->except('image'));
        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    // Delete a project
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}
