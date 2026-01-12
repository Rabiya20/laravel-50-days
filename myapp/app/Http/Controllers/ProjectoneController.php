<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectoneController extends Controller
{
    public function form()
    {
        return view('project-one.form');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:5'
        ]);

        // Get old contacts from session
        $contacts = session()->get('contacts', []);

        // Add new contact to array
        $contacts[] = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        // Save back to session
        session()->put('contacts', $contacts);

        return redirect()->route('project.contacts')
                         ->with('success', 'Contact saved successfully!');
    }

    public function list()
    {
        $contacts = session()->get('contacts', []);
        return view('project-one.list', compact('contacts'));
    }

    public function edit($id)
    {
        $contacts = session()->get('contacts', []);
        if (isset($contacts[$id])) {
            $contact = $contacts[$id];
        } else {
            return redirect()->route('project.contacts')
                             ->with('error', 'Contact not found!');
        }
        return view('project-one.edit', compact('contacts', 'id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        $contacts = session()->get('contacts', []);
        if (isset($contacts[$id])) {
            $contacts[$id]['name'] = $request->name;
            $contacts[$id]['email'] = $request->email;
            $contacts[$id]['phone'] = $request->phone;
            session()->put('contacts', $contacts);
            return redirect()->route('project.contacts')
                             ->with('success', 'Contact updated successfully!');
        } else {
            return redirect()->route('project.contacts')
                             ->with('error', 'Contact not found!');
        }
    }

    public function delete($id)
    {
        $contacts = session()->get('contacts', []);
        if (isset($contacts[$id])) {
            unset($contacts[$id]);
            session()->put('contacts', $contacts);
            return redirect()->route('project.contacts')
                             ->with('success', 'Contact deleted successfully!');
        } else {
            return redirect()->route('project.contacts')
                             ->with('error', 'Contact not found!');
        }
    }

    public function clear()
    {
        session()->forget('contacts');
        return redirect()->route('project.contacts')
                         ->with('success', 'All contacts cleared successfully!');
    }
}
