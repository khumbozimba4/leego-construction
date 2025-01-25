<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    // Display a list of sliders
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('sliders.index', compact('sliders'));
    }

    // Show the form to create a new slider
    public function create()
    {
        return view('sliders.create');
    }

    // Store a new slider
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
            $image_upload = $team_image_file->storeAs('public/sliders', $image_filename);
            $request->merge([
                "photo" => 'sliders/' . $image_filename // Store only the relative path
            ]);
        }


        Slider::create($request->except('image'));
        return redirect()->route('sliders.index')->with('success', 'Slider created successfully!');
    }

    // Show a single slider
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders.show', compact('slider'));
    }

    // Show the form to edit a slider
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders.edit', compact('slider'));
    }

    // Update an existing slider
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slider = Slider::findOrFail($id);

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
            $image_upload = $team_image_file->storeAs('public/sliders', $image_filename);

            // Delete the old photo from storage if it exists
            if ($slider->photo) {
                Storage::disk('public')->delete($slider->photo);
            }

            // Set the new photo
            $request->merge(['photo' => 'sliders/' . $image_filename]);
        }

        // Update the slider record
        $slider->update($request->except('image'));

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully!');
    }


    // Delete slider
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully!');
    }
}
