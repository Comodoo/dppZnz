<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    // STORE (already done)
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'number' => 'required|integer',
            'year' => 'required|digits:4',
            'date_created' => 'required|date',
        ]);

        Achievement::create($request->all());

        return back()->with('success', 'Achievement created successfully');
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string',
            'number' => 'required|integer',
            'year' => 'required|digits:4',
            'date_created' => 'required|date',
        ]);

        $achievement = Achievement::findOrFail($id);
        $achievement->update($request->all());

        return back()->with('success', 'Achievement updated successfully');
    }

    // DELETE
    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return back()->with('success', 'Achievement deleted successfully');
    }
}
