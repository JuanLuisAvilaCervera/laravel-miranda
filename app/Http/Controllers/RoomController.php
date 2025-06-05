<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::get();
        return $rooms;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'room' , ['room' => Room::findOrFail($id)]
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
        $room = Room::find($id);

        if ($room === null) {
            return response(
                "Room with id {$id} not found",
                Response::HTTP_NOT_FOUND
            );
        }

        if ($room->delete() === false) {
            return response(
                "Couldn't delete the room with id {$id}",
                Response::HTTP_BAD_REQUEST
            );
        }

        return response(["id" => $id, "deleted" => true], Response::HTTP_OK);
    }
}
