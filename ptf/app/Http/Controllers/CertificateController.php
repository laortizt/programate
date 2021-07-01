<?php

namespace App\Http\Controllers;

use App\Models\Profesional;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register['profesionals']=Profesional::paginate(20);
        $register['certificates']=Certificate::all();

        return view('certificate.index', $register);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $profesionals=Profesional::all();
        return view('certificate.create', compact('profesionals'));
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
            'idprofesionalFK'=>'required',
            'jobTitle'=>'required',
            'anioIni'=>'required',
            'anioFin'=>'required',
            'companyName'=>'required',
            'doc'=>'required|string|max:500|mimes:pdf,docx,doc',
        ];
        //$this->validate($request, $columns);

        $datecertificate=request()->except('_token');

        if($request->hasFile('doc')){
            $datecertificate['doc']=$request->file('doc')->store('uploads', 'public');
        }

        Certificate::insert($datecertificate);
        return redirect('certificate')->with('msn','Certificado registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificate=Certificate::findOrFail($id);
        $profesional=Profesional::all();
        return view('certificate.edit',compact('profesionals', 'certificates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $columns=[
            'idprofesionalFK'=>'required',
            'jobTitle'=>'required',
            'anioIni'=>'required',
            'anioFin'=>'required',
            'companyName'=>'required',
            'doc'=>'required|string|max:500|mimes:pdf,docx,doc',
        ];

        $this->validate($request, $columns);

        $datecertificate=request()->except('_token','_method');
        if($request->hasFile('doc')){
            $certificate=Profesional::findOrFail($id);
            Storage::delete('public/'.$certificate->doc);
            $datecertificate['doc']=$request->file('doc')->store('uploads', 'public');
            $request->file('doc')->storeAs('public/uploads', $datecertificate['doc']);
        }
        Profesional::where('id','=',$id)->update( $datecertificate);
        return redirect('certificate')->with('msn','Certificado actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Certificate::destroy($id);
        

        // $album=Album::findOrFail($id);

        // if(Storage::delete('public/'.$album->photo)){
        //     Album::destroy($id);
        // }
        return redirect('certificate')->with('msn','Certificado eliminado exitosamente');
    }
}
