<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::where('user_id', auth()->user()->id);
        response()->json($jobs, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'unique_id' => 'required|unique:jobs,unique_id|alpha_num',
            'description' => 'required',
            'category' => 'required',
            'level' => 'required|numeric'
        ]);

        $job = Job::create([
            'title' => $request->title,
            'unique_id' => $request->unique_id,
            'description' => $request->description,
            'category' => $request->category,
            'level' => $request->level
        ]);

        return response()->json($job, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $job = Job::find($unique_id);
        return response()->json($job, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unique_id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    /**
     * Display candidates for a specific job
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function candidates($unique_id)
    {
        $job = Job::find($unique_id);
            return response()->json($job, 200);
    }

    public function apply(Request $request){
        $request->validate([
            'email' => 'required|email',
            'firstname' => 'required',
            'lastname' => 'required',
            'resume_url' => 'required|url',
            'address' => 'required'
        ]);

        $job = Applicant::create($request->only(['email', 'firstname', 'lastname', 'resume_url', 'address']));

        return response()->json(['success' => 'Application successful'], 201);
    }
}