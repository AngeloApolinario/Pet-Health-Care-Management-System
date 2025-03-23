<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalRecord;
use App\Models\Pet;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index(Pet $pet)
    {
        $medicalRecords = $pet->medicalRecords;
        return view('admin.medical_records.index', compact('medicalRecords', 'pet'));
    }

    public function create(Pet $pet)
    {
        return view('admin.medical_records.create', compact('pet'));
    }

    public function store(Request $request, Pet $pet)
    {
        $request->validate([
            'date' => 'required|date',
            'vet_name' => 'required|string|max:255',
            'diagnosis' => 'required|string',
            'treatment' => 'nullable|string',
        ]);

        $pet->medicalRecords()->create($request->all());

        return redirect()->route('admin.pets.medical_records.index', $pet)->with('success', 'Medical record added successfully.');
    }

    public function edit(Pet $pet, MedicalRecord $medicalRecord)
    {
        return view('admin.medical_records.edit', compact('pet', 'medicalRecord'));
    }


    public function update(Request $request, Pet $pet, MedicalRecord $medicalRecord)
    {
        $request->validate([
            'date' => 'required|date',
            'vet_name' => 'required|string|max:255',
            'diagnosis' => 'required|string',
            'treatment' => 'nullable|string',
        ]);

        $medicalRecord->update($request->all());

        return redirect()->route('admin.pets.medical_records.index', $pet)->with('success', 'Medical record updated.');
    }

    public function destroy(Pet $pet, MedicalRecord $medicalRecord)
    {
        $medicalRecord->delete();
        return redirect()->route('admin.pets.medical_records.index', $pet)->with('success', 'Medical record deleted.');
    }
}
