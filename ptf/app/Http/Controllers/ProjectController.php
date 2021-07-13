<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Profesional;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register['project']=Project::paginate(20);
        $register['categories']=Category::all();
        $register['profesionals']=Profesional::all();

        return view('project.index', $register);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects=Project::all();
        $categories=Category::all();
        $profesionals=Profesional::all();
        return view('project.create', compact('categories','profesionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $columns=[
            'nameProject'=>'required',
            'anioIni'=>'required',
            'anioFin'=>'required',
            'description'=>'required',
            'idprofesionalFK'=>'required',
            'idcategoryFK'=>'required',
            
        ];
        //$this->validate($request, $columns);

        $dateproject=request()->except('_token');

        Project::insert( $dateproject);
        return redirect('project')->with('msn','Proyecto registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Project::findOrFail($id);
        
        $register=Category::all();
        $register=Profesional::all();
        return view('project.edit',compact('category', 'profesionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $columns=[
            'nameProject'=>'required',
            'anioIni'=>'required',
            'anioFin'=>'required',
            'description'=>'required',
            'idprofesionalFK'=>'required',
            'idcategoryFK'=>'required',
        ];

        $this->validate($request, $columns);

        $dateproject=request()->except('_token','_method');

  
        Project::where('id','=',$id)->update($dateproject);
        return redirect('project')->with('msn','Proyecto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        
        return redirect('project')->with('msn','Project eliminado exitosamente');
    }
}
