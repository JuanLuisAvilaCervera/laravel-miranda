<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Activity;


class Resource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::get();
        return $activities;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resource = Activity::create(['datetime' => '2025-07-12',
        'paid' => true,
        'notes' => 'asdfasdf',
        'satisfaction' => 4,
        'type' => 'surf',
        'user_id' => 1]);

        dd($resource);
        return $resource;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view (
            'activity' , ['activity' => Activity::findOrFail($id)]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::find($id);

        if ($activity === null) {
            return response(
                "Activity with id {$id} not found",
                Response::HTTP_NOT_FOUND
            );
        }

        if ($activity->delete() === false) {
            return response(
                "Couldn't delete the activity with id {$id}",
                Response::HTTP_BAD_REQUEST
            );
        }

        return response(["id" => $id, "deleted" => true], Response::HTTP_OK);
    }

}
