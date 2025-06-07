<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();
        return $contacts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = Contact::create([
            'comment_date' => '2025-07-12',
            'subject' => "true",
            'comment' => 'asdfasdf',
            'archived' => false
        ]);

        return $resource;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view (
            'contact' , ['contact' => Contact::findOrFail($id)]
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
        $contact = Contact::find($id);

        if ($contact === null) {
            return response(
                "Contact with id {$id} not found",
                Response::HTTP_NOT_FOUND
            );
        }

        if ($contact->delete() === false) {
            return response(
                "Couldn't delete the contact with id {$id}",
                Response::HTTP_BAD_REQUEST
            );
        }

        return response(["id" => $id, "deleted" => true], Response::HTTP_OK);
    }
}
