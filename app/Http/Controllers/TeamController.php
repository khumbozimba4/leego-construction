<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    // Display a list of teams
    public function index()
    {
        $teams = Team::paginate(10);
        return view('teams.index', compact('teams'));
    }

    // Show the form to create a new team
    public function create()
    {
        return view('teams.create');
    }

    // Store a new team
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'role' => 'required|string|max:255',
            'experience' => 'required|int',
            'image' => ['required', 'mimes:jpeg,jpg,png,webp', 'max:3072'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            // Now upload the image attachment
            $team_image_file = $request->image;

            $image_filename = time() . '.' . $team_image_file->getClientOriginalExtension();

            // Upload the image
            $image_upload = $team_image_file->storeAs('public/teams', $image_filename);

            $request->merge([
                "photo" => 'teams/' . $image_filename
            ]);
        }
        $request->merge([
            "user_id" => Auth::user()->id
        ]);
        Team::create($request->except('image'));
        return redirect()->route('teams.index')->with('success', 'Team created successfully!');
    }

    // Show a single team
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.show', compact('team'));
    }

    // Show the form to edit a team
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    // Update an existing team
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'role' => 'required|string|max:255',
            'experience' => 'required|int',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {

            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // now upload the receipt attachment
            $team_image_file = $request->image;

            $receipt_filename = time() . '.' . $team_image_file->getClientOriginalExtension();
            //upload
            $image_upload = $team_image_file->storeAs('public/teams', $receipt_filename);
            $request->merge([
                "photo" => 'teams/' . $receipt_filename
            ]);
        }


        $team = Team::findOrFail($id);
        $team->update($request->except('image'));
        return redirect()->route('teams.index')->with('success', 'Team updated successfully!');
    }

    // Delete team
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team deleted successfully!');
    }
}
