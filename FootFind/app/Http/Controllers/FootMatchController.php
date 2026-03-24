<?php

namespace App\Http\Controllers;

use App\Models\FootMatch;

use Illuminate\Http\Request;

class FootMatchController extends Controller
{
    // INDEX
    public function index()
    {
        $footMatches = FootMatch::all();
        return view('footMatches.index', compact('footMatches'));
    }

    // CREATE
    public function create()
    {
        //
    }

    // STORE
    public function store(Request $request)
    {
        //
    }

    // SHOW
    public function show(string $id)
    {
        //
    }

    // EDIT
    public function edit(string $id)
    {
        //
    }

    // UPDATE
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
