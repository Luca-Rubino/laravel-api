<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\StoreProjectRequest;

use App\Http\Controllers\Controller;
use App\Models\Creator;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\type;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10);

        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $creators = Creator::all();
        $technologies = Technology::all();
        return view('admin.project.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        /* dd($request->all()); */
        $data = $request->except('_token');
        $data = $request->validated();

       /*  $img_path = Storage::put('uploads/project', $request->file('img')); */
        $img_path = $request->file('img')->store('uploads/project', 'public');
        $data['img'] = $img_path;
        $newProject = new Project($data);
        $newProject->save();
        $newProject->technologies()->sync($data['technologies']);

        return redirect()->route('admin.project.show', ['project' => $newProject->id])->with('message_nuovo_progetto', $newProject->nome . " è stato Creato con successo!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {


        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

        $types = Type::all();
        $technologies = Technology::all();


        return view('admin.project.edit', compact('project', 'types', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $data = $request->except('_token');
        $data = $request->validated();
        if ($project->img) {
            Storage::disk('public')->delete($project->img);
        }

        $img_path = $request->file('img')->store('uploads/project', 'public');
        $data['img'] = $img_path;
        $project->update($data);
        $project->technologies()->sync($data['technologies']);


        return redirect()->route('admin.project.show', ['project' => $project->id])->with('message_update_progetto', $project->nome . " è stato aggiornato con successo!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('admin.project.index')->with('message_delete', $project->nome . " è stato cancellato con successo!!");
    }

    /* pagina con i progetti nel cestino */

    public function deletedIndex()
    {
        $projects = Project::onlyTrashed()->get();

        return view('admin.project.delete', compact('projects'));
    }

    /* ripristinare elementi dal cestino */
    public function restore(string $id)
    {
        $projects = Project::onlyTrashed()->findOrFail($id);
        $projects->restore();

        return redirect()->route('admin.project.index')->with('message_restore', $projects->nome . " è stato ripristinato con successo!!");
    }

    /* cancellare definitivamente un'elemento */
    public function delete(string $id)
    {
        $projects = Project::onlyTrashed()->findOrFail($id);
        $projects->technologies()->detach();
        $projects->forceDelete();
        return redirect()->route('admin.project.deleteindex')->with('message_delete', $projects->nome . " è stato cancellato permanentemente con successo!!");
    }
}
