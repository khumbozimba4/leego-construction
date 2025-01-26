<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    //

    public function index()
    {
        $services = Service::paginate(10);
        return view('services.index', compact('services'));
    }

    // Show the form to create a new Service
    public function create()
    {
        return view('services.create');
    }

    // Store a new Service
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('image')) {
            // Now upload the image attachment
            $team_image_file = $request->image;

            $image_filename = time() . '.' . $team_image_file->getClientOriginalExtension();

            // Upload the image
            $image_upload = $team_image_file->storeAs('public/services', $image_filename);
            $request->merge([
                "photo" => 'services/' . $image_filename // Store only the relative path
            ]);
        }
        $request->merge([
            'user_id' => Auth::user()->id
        ]);

        Service::create($request->except('image'));
        return redirect()->route('services.index')->with('success', 'Service created successfully!');
    }

    // Show a single Service
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }

    // Show the form to edit a Service
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    // Update an existing Service
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Service = Service::findOrFail($id);

        // Handle file upload if a new photo is provided
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
            $image_upload = $team_image_file->storeAs('public/services', $image_filename);

            // Delete the old photo from storage if it exists
            if ($Service->photo) {
                Storage::disk('public')->delete($Service->photo);
            }

            // Set the new photo
            $request->merge(['photo' => 'services/' . $image_filename]);
        }
        $request->merge([
            'user_id' => Auth::user()->id
        ]);
        // Update the Service record
        $Service->update($request->except('image'));

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }


    // Delete Service
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }
}
