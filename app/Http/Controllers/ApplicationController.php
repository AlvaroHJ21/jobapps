<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Platform;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $applications = Application::orderBy("created_at", "desc")
            ->with("platform")
            ->get();

        return view("applications.index", compact("applications"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $platforms = Platform::all();
        return view("applications.create", compact("platforms"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $this->validate($request, [
            "title" => "required|string",
            "link" => "required|string|url",
            "min_salary" => "required|numeric",
            "max_salary" => "required|numeric",
            "to_agree" => "required|boolean",
            "currency" => "required|numeric|in:1,2",
            "modality" => "required|numeric|in:1,2,3",
            "status" => "required|numeric",
            "comments" => "nullable|string",
            "description" => "nullable|string",
            "company" => "string",
            "location" => "string",
            "platform_id" => "numeric",
        ]);


        Application::create($request->all());



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
        $platforms = Platform::all();
        return view("applications.edit", compact("application", "platforms"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        $this->validate($request, [
            "title" => "string",
            "link" => "string|url",
            "min_salary" => "numeric",
            "max_salary" => "numeric",
            "to_agree" => "boolean",
            "currency" => "numeric|in:1,2",
            "modality" => "numeric|in:1,2,3",
            "status" => "numeric",
            "comments" => "nullable|string",
            "description" => "nullable|string",
            "company" => "string",
            "location" => "string",
            "platform_id" => "numeric",
        ]);

        $application->update($request->input());

        return redirect()->route("applications.index");
    }

    public function changeActive(Application $application)
    {
        $application->update([
            "is_active" => !$application->is_active
        ]);

        return redirect()->route("applications.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }

    public function getAll()
    {
        $applications = Application::orderBy("created_at", "desc")
            ->with("platform")
            ->get();

        return response()->json($applications);
    }
}
