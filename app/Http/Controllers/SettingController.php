<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    // Display a list of settings
    public function index()
    {
        $settings = Setting::paginate(10);
        return view('settings.index', compact('settings'));
    }

    // Show the form to create a new setting
    public function create()
    {
        return view('settings.create');
    }

    // Store a new setting
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key' => 'required|string|max:255|unique:settings',
            'value' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Setting::create($request->all());
        return redirect()->route('settings.index')->with('success', 'Setting created successfully!');
    }

    // Show a single setting
    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('settings.show', compact('setting'));
    }

    // Show the form to edit a setting
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('settings.edit', compact('setting'));
    }

    // Update an existing setting
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'key' => 'required|string|max:255|unique:settings,key,' . $id,
            'value' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $setting = Setting::findOrFail($id);
        $setting->update($request->all());
        return redirect()->route('settings.index')->with('success', 'Setting updated successfully!');
    }

    // Delete setting
    public function destroy($id)
    {
        $setting = Setting::findOrFail($id);
        $setting->delete();
        return redirect()->route('settings.index')->with('success', 'Setting deleted successfully!');
    }
}
