<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
    // Display a list of quotations
    public function index()
    {
        $quotations = Quotation::paginate(10);
        return view('quotations.index', compact('quotations'));
    }

    // Show the form to create a new quotation
    public function create()
    {
        $equipments = Equipment::all();  // Get all equipment for the quotation
        return view('quotations.create', compact('equipments'));
    }

    // Store a new quotation
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'equipment_id' => 'required|exists:equipments,id',
            'quantity' => 'required|integer|min:1',
            'duration' => 'required|integer|min:1',
            'total_cost' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Quotation::create($request->all());
        return redirect()->route('quotations.index')->with('success', 'Quotation created successfully!');
    }

    // Show a single quotation
    public function show($id)
    {
        $quotation = Quotation::findOrFail($id);
        return view('quotations.show', compact('quotation'));
    }

    // Show the form to edit a quotation
    public function edit($id)
    {
        $quotation = Quotation::findOrFail($id);
        $equipments = Equipment::all();  // Get all equipment for the quotation
        return view('quotations.edit', compact('quotation', 'equipments'));
    }

    // Update an existing quotation
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'equipment_id' => 'required|exists:equipments,id',
            'quantity' => 'required|integer|min:1',
            'duration' => 'required|integer|min:1',
            'total_cost' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $quotation = Quotation::findOrFail($id);
        $quotation->update($request->all());
        return redirect()->route('quotations.index')->with('success', 'Quotation updated successfully!');
    }

    // Delete quotation
    public function destroy($id)
    {
        $quotation = Quotation::findOrFail($id);
        $quotation->delete();
        return redirect()->route('quotations.index')->with('success', 'Quotation deleted successfully!');
    }
}
