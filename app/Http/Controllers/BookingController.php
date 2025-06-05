<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'booking' , ['booking' => Booking::findOrFail($id)]
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
        $booking = Booking::find($id);

        if ($booking === null) {
            return response(
                "Booking with id {$id} not found",
                Response::HTTP_NOT_FOUND
            );
        }

        if ($booking->delete() === false) {
            return response(
                "Couldn't delete the booking with id {$id}",
                Response::HTTP_BAD_REQUEST
            );
        }

        return response(["id" => $id, "deleted" => true], Response::HTTP_OK);
    }
}
