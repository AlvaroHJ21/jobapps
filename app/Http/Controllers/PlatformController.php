<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platforms = Platform::all();
        return view("platforms.index", compact("platforms"));
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
        $this->validate($request, [
            "name" => "required|string",
            "url" => "required|string|url",
            "user" => "required|string",
        ]);

        Platform::create([
            "name" => $request->name,
            "url" => $request->url,
            "user" => $request->user,
        ]);

        return redirect()->route("platforms.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Platform $platform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platform $platform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platform $platform)
    {
        $this->validate($request, [
            "name" => "string",
            "url" => "string|url",
            "user" => "string",
        ]);

        $platform->update($request->all());

        return redirect()->route("platforms.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platform $platform)
    {
        //
    }
}
