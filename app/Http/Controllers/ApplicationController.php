<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        return view("applications.index", compact("applications"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("applications.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            "title" => "required|string",
            "link" => "required|string|url",
            "salary" => "required|numeric",
            "currency" => "required|numeric|in:1,2",
            "modality" => "required|numeric|in:1,2,3",
            "status" => "required|numeric",
            "comments" => "required|string",
        ]);

        // dd($request->all());

        Application::create([
            "title" => $request->title,
            "link" => $request->link,
            "salary" => $request->salary,
            "currency" => $request->currency,
            "modality" => $request->modality,
            "status" => $request->status,
            "comments" => $request->comments,
        ]);

        return redirect()->route("applications.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        return view("applications.edit", compact("application"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        $this->validate($request, [
            "title" => "string",
            "link" => "string|url",
            "salary" => "numeric",
            "currency" => "numeric|in:1,2",
            "modality" => "numeric|in:1,2,3",
            "status" => "numeric",
            "comments" => "string",
        ]);

        $application->update($request->input());

        return redirect()->route("applications.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
