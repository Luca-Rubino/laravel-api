<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::with("type", "Creator", "technologies")->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);

    }

    public function show(string $id){

        $project = Project::with("type", "Creator", "technologies")->findOrFail($id);

        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }

    public function projectSearch(Request $request){

        $data = $request->all();


        $projects = Project::where("nome", "LIKE", "%" . $data["nome"] . "%")->get();

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);

    }
}
