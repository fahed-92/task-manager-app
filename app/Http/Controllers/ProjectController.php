<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {

    }
    public function viewProjectsAsBoard($board_id)
    {
        $projects=Project::where('board_id',$board_id)->get();
        return view('Projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user_id=Auth::user()->id;
        $board=Board::where('boards.user_id',$user_id)->first()->id;
        $project=Project::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'board_id'=>$board,
            'exp_duration'=>$request->exp_duration,
            'cost'=>$request->cost,
        ]);
        return redirect(route('projects.index',$board));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function show($project_id)
    {
        return view('Projects.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
