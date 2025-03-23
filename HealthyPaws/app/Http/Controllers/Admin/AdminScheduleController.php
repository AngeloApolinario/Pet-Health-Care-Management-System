<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;

class AdminScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('pet.user')->get();
        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $pets = Pet::with('user')->get();
        return view('admin.schedules.create', compact('pets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'nullable|exists:pets,id',
            'dateTime' => 'required|date',
            'reason' => 'required|string',
        ]);

        Schedule::create($request->all());

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule added successfully.');
    }

    public function edit(Schedule $schedule)
    {
        $pets = Pet::with('user')->get();
        return view('admin.schedules.edit', compact('schedule', 'pets'));
    }


    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'pet_id' => 'nullable|exists:pets,id',
            'dateTime' => 'required|date',
            'reason' => 'required|string',
        ]);

        $schedule->update([
            'pet_id' => $request->pet_id,
            'dateTime' => \Carbon\Carbon::parse($request->dateTime),
            'reason' => $request->reason,
        ]);

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule updated successfully.');
    }


    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('admin.schedules.index')->with('success', 'Schedule deleted successfully.');
    }
}
