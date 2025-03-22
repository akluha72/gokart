<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GokartTrack; // Import the GokartTrack model

class GokartController extends Controller
{
      // Method to display the map
      public function index()
      {
        // dd("tracks");
          // Fetch all GoKart tracks from the database
          $tracks = GokartTrack::all();
  
          // Pass the tracks to the view
          return view('dashboard', compact('tracks'));
      }
  
      // Method to show a single track
      public function show($id)
      {
          // Fetch a single track by ID
          $track = GokartTrack::findOrFail($id);
  
          // Pass the track to the view
          return view('track', compact('track'));
      }
  
      // Method to create a new track (form)
      public function create()
      {
          return view('tracks.create');
      }
  
      // Method to store a new track
      public function store(Request $request)
      {
          // Validate the request
          $request->validate([
              'name' => 'required|string|max:255',
              'latitude' => 'required|numeric',
              'longitude' => 'required|numeric',
              'description' => 'nullable|string',
          ]);
  
          // Create a new track
          GokartTrack::create($request->all());
  
          // Redirect to the index page
          return redirect()->route('tracks.index')->with('success', 'Track created successfully!');
      }
  
      // Method to edit a track (form)
      public function edit($id)
      {
          // Fetch the track by ID
          $track = GokartTrack::findOrFail($id);
  
          // Pass the track to the view
          return view('tracks.edit', compact('track'));
      }
  
      // Method to update a track
      public function update(Request $request, $id)
      {
          // Validate the request
          $request->validate([
              'name' => 'required|string|max:255',
              'latitude' => 'required|numeric',
              'longitude' => 'required|numeric',
              'description' => 'nullable|string',
          ]);
  
          // Fetch the track by ID
          $track = GokartTrack::findOrFail($id);
  
          // Update the track
          $track->update($request->all());
  
          // Redirect to the index page
          return redirect()->route('tracks.index')->with('success', 'Track updated successfully!');
      }
  
      // Method to delete a track
      public function destroy($id)
      {
          // Fetch the track by ID
          $track = GokartTrack::findOrFail($id);
  
          // Delete the track
          $track->delete();
  
          // Redirect to the index page
          return redirect()->route('tracks.index')->with('success', 'Track deleted successfully!');
      }
}
