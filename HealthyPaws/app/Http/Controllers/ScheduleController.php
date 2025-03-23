<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Pet;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        // Eager load the pet relationship to avoid null pet issues
        $appointments = Schedule::where('user_id', auth()->id())
            ->with('pet') // Ensure pet data is loaded
            ->get();

        return view('schedule-views.index', compact('appointments'));
    }

    public function create()
    {
        $pets = auth()->user()->pets; // Ensure user owns these pets
        return view('schedule-views.create', compact('pets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'nullable|exists:pets,id',
            'dateTime' => 'required|date',
            'reason' => 'required|string|max:500',
        ]);

        // Ensure the pet belongs to the authenticated user
        if ($request->pet_id) {
            $pet = Pet::where('id', $request->pet_id)
                ->where('user_id', auth()->id()) // Ensure pet belongs to the user
                ->first();

            if (!$pet) {
                return back()->withErrors(['pet_id' => 'Invalid pet selection']);
            }
        }

        Schedule::create([
            'user_id' => auth()->id(),
            'pet_id' => $request->pet_id, // Will be null if not selected
            'dateTime' => $request->dateTime,
            'reason' => $request->reason,
        ]);

        return redirect()->route('schedules.index')->with('success', 'Appointment created!');
    }

    public function show(Schedule $schedule)
    {
        $this->authorizeAccess($schedule); // Prevent unauthorized access
        return view('schedule-views.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        $this->authorizeAccess($schedule);
        $pets = auth()->user()->pets; // Show only user's pets
        return view('schedule-views.edit', compact('schedule', 'pets'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $this->authorizeAccess($schedule);

        $request->validate([
            'dateTime' => 'required|date',
            'reason' => 'required|string|max:500',
        ]);

        $schedule->update([
            'dateTime' => $request->dateTime,
            'reason' => $request->reason,
        ]);

        return redirect()->route('schedules.index')->with('success', 'Appointment updated!');
    }

    public function destroy(Schedule $schedule)
    {
        $this->authorizeAccess($schedule);
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Appointment deleted!');
    }

    private function authorizeAccess(Schedule $schedule)
    {
        if ($schedule->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
