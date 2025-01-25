<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $request->merge([
            'phoneNumber' => $request->phone
        ]);

        Message::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully!',
        ]);
    }
    // Display a list of messages
    public function index()
    {
        $messages = Message::paginate(10);
        return view('messages.index', compact('messages'));
    }

    // Show the form to create a new message
    public function create()
    {
        return view('messages.create');
    }

    // Store a new message
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sender_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Message::create($request->all());
        return redirect()->route('messages.index')->with('success', 'Message sent successfully!');
    }

    // Show a single message
    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show', compact('message'));
    }

    // Show the form to edit a message
    public function edit($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.edit', compact('message'));
    }

    // Update an existing message
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'sender_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $message = Message::findOrFail($id);
        $message->update($request->all());
        return redirect()->route('messages.index')->with('success', 'Message updated successfully!');
    }

    // Delete message
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message deleted successfully!');
    }
}
