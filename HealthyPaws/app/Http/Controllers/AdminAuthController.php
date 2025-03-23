<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Pet;
use App\Models\User;
use App\Models\Schedule;
use Carbon\Carbon;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }



    public function index()
    {
        $totalUsers = User::count();
        $totalPets = Pet::count();
        $totalAppointments = Schedule::count();
        $appointmentsToday = Schedule::whereDate('dateTime', Carbon::today())->count();

        // Get the latest 5 appointments with pet and user relationships
        $recentAppointments = Schedule::with(['pet', 'user'])->latest()->limit(5)->get();

        return view('admin.dashboard', compact('totalUsers', 'totalPets', 'totalAppointments', 'appointmentsToday', 'recentAppointments'));
    }



    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }
}
