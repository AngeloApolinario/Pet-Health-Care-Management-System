<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    
   

    
    public function index()
    {
        $pets = Auth::user()->pets; 
        return view('pet-views.index', compact('pets'));
    }

  
    public function create()
    {
        return view('pet-views.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'breed' => 'nullable|string|max:255',
            'age'   => 'nullable|integer|min:0',
            'gender' => 'required|in:Male,Female'
        ]);

        Auth::user()->pets()->create($request->all());

        return redirect()->route('pets.index')->with('success', 'Pet added successfully!');
    }

   
    public function show(Pet $pet)
    {
        $this->authorizePet($pet); 
        return view('pet-views.show', compact('pet'));
    }

   
    public function edit(Pet $pet)
    {
        $this->authorizePet($pet);
        return view('pet-views.edit', compact('pet'));
    }

  
    public function update(Request $request, Pet $pet)
    {
        $this->authorizePet($pet);

        $request->validate([
            'name'  => 'required|string|max:255',
            'breed' => 'nullable|string|max:255',
            'age'   => 'nullable|integer|min:0',
            'gender' => 'required|in:Male,Female'
        ]);

        $pet->update($request->all());

        return redirect()->route('pets.index')->with('success', 'Pet updated successfully!');
    }

   
    public function destroy(Pet $pet)
{
    $this->authorizePet($pet);
    $pet->delete();

    return redirect()->route('pets.index')->with('success', 'Pet deleted successfully!');
}


   
    private function authorizePet(Pet $pet)
    {
        if ($pet->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
