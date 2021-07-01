<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register['users']=User::paginate(20);
        $register['profesionals']=Profesional::all();

        return view('profesional.index', $register);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();

        return view('profesional.create', compact('users'));
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
            'yearsExperience'=>'required',
            'aboutMe'=>'required',
            'iduserFK'=>'required',
            'photo'=>'required|string|max:500|mimes:jpg,jpeg,png',
        ];
        //$this->validate($request, $columns);

        $dateprofesional=request()->except('_token');

        if($request->hasFile('photo')){
            $dateprofesional['photo']=$request->file('photo')->store('uploads', 'public');
        }

        Profesional::insert($dateprofesional);
        return redirect('profesional')->with('msn','Profesonal registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function show(Profesional $profesional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesional=Profesional::findOrFail($id);
        $user=User::all();
        return view('profesional.edit',compact('profesionals', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $columns=[
            'yearsExperience'=>'required',
            'aboutMe'=>'required',
            'iduserFK'=>'required',
            'photo'=>'required|string|max:500|mimes:jpg,jpeg,png',
        ];

        $this->validate($request, $columns);

        $dateprofesional=request()->except('_token','_method');
        if($request->hasFile('photo')){
            $profesional=Profesional::findOrFail($id);
            Storage::delete('public/'.$profesional->photo);
            $dateprofesional['photo']=$request->file('photo')->store('uploads', 'public');
            $request->file('photo')->storeAs('public/uploads', $dateprofesional['photo']);
        }
        Profesional::where('id','=',$id)->update( $dateprofesional);
        return redirect('profesional')->with('msn','Profesional actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profesional::destroy($id);
        

        // $album=Album::findOrFail($id);

        // if(Storage::delete('public/'.$album->photo)){
        //     Album::destroy($id);
        // }
        return redirect('profesional')->with('msn','Profesional eliminado exitosamente');
    }
}
