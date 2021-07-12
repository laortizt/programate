<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $register['users']=User::paginate(5);
        return view('user.index', $register);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // $users = User::with('users');
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $columns=[
        //    'name'=>'required|string|max:100',
        // ];
        // $this->validate($request, $columns);

        // $datecategory=request()->except('_token');

        // Category::insert($datecategory);
        
        // return redirect('category')->with('msn','Categoría registrada exitosamente');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::findOrFail($id);
        $user=User::all();
        return view('user.edit',compact('user'));
    }


}
