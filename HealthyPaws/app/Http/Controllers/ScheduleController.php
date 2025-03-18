<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $appointments = Schedule::where('user_id', auth()->id())->get();
        return view('schedule-views.index', compact('appointments'));
    }


    public function create()
    {
        $pets = auth()->user()->pets;
        return view('schedule-views.create', compact('pets'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'nullable|exists:pets,id',
            'dateTime' => 'required|date',
            'reason' => 'required|string|max:500',
        ]);

        Schedule::create([
            'user_id' => auth()->id(),
            'pet_id' => $request->pet_id,
            'dateTime' => $request->dateTime,
            'reason' => $request->reason,
        ]);

        return redirect()->route('schedules.index')->with('success', 'Appointment created!');
    }


    public function show(Schedule $schedule)
    {
        return view('schedule-views.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        return view('schedule-views.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'dateTime' => 'required|date',
            'reason' => 'required|string|max:500',
        ]);

        $schedule->update($request->all());

        return redirect()->route('schedules.index')->with('success', 'Appointment updated!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedules.index')->with('success', 'Appointment deleted!');
    }
}
