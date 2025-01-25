<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EquipmentController extends Controller
{
    // Display a list of equipment
    public function index()
    {
        $equipments = Equipment::paginate(10);
        return view('equipments.index', compact('equipments'));
    }

    // Show the form to create new equipment
    public function create()
    {
        return view('equipments.create');
    }

    // Store a new equipment
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'serial_number' => 'required|string',
            'type' => 'nullable|string',
            'rental_price' => 'required|numeric|min:0',
            'available' => 'required|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('image')) {
            // Now upload the image attachment
            $team_image_file = $request->image;

            $image_filename = time() . '.' . $team_image_file->getClientOriginalExtension();

            // Upload the image
            $image_upload = $team_image_file->storeAs('public/equipments', $image_filename);
            $request->merge([
                "photo" => 'equipments/' . $image_filename // Store only the relative path
            ]);
        }

        Equipment::create($request->except('image'));
        return redirect()->route('equipments.index')->with('success', 'Equipment created successfully!');
    }

    // Show a single equipment
    public function show($id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('equipments.show', compact('equipment'));
    }

    // Show the form to edit equipment
    public function edit($id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('equipments.edit', compact('equipment'));
    }

    // Update existing equipment
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'daily_rate' => 'required|numeric|min:0',
            'available' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $equipment = Equipment::findOrFail($id);
        $equipment->update($request->all());
        return redirect()->route('equipments.index')->with('success', 'Equipment updated successfully!');
    }

    // Delete equipment
    public function destroy($id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->delete();
        return redirect()->route('equipments.index')->with('success', 'Equipment deleted successfully!');
    }
}
