<?php
namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titlePage = 'Exercise';
        $projects = Project::all();
        return view('page.exercise', compact('titlePage', 'projects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('page.exercise', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request)
    {
        $data = $request->validated();
        $newProject = Project::create($data);
        return redirect()->route('page.exercise', $newProject);
    }
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('page.exercise', compact('project'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $Project = Type::all();
        return view('page.exercise', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $data = $request->validated();
        $project->update($data);
        return redirect()->route('page.exercise', $project);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('page.exercise');
    }
}