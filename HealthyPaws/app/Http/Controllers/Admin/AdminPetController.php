<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class AdminPetController extends Controller
{
    public function index(Request $request)
    {
        $query = Pet::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('breed', 'like', "%{$search}%")
                ->orWhere('age', 'like', "%{$search}%");
        }

        $pets = $query->orderBy('created_at', 'desc')->get();

        return view('admin.pets.index', compact('pets'));
    }

    public function create()
    {
        return view('admin.pets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breed' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string|max:10',
        ]);

        Pet::create($request->all());

        return redirect()->route('admin.pets.index')->with('success', 'Pet added successfully.');
    }

    public function edit(Pet $pet)
    {
        return view('admin.pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breed' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string|max:10',
        ]);

        $pet->update($request->all());

        return redirect()->route('admin.pets.index')->with('success', 'Pet updated successfully.');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('admin.pets.index')->with('success', 'Pet deleted successfully.');
    }
}
