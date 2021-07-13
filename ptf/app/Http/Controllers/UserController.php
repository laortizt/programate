<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use App\Models\Country;
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
        $user['users']=User::paginate(10);
        return view('user.index', $user);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
         $users = User::with('users');
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
         $columns=[
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'telephone'=>'required',
        'idcountryFK'=>'required',
        'type'=>'required',

        ];
        $this->validate($request, $columns);

        $dateuser=request()->except('_token');

        User::insert($dateuser);
        return redirect('user')->with('msn','Usuario registrado exitosamente');
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $user=User::findOrFail($id);
        $user=User::all();
        return view('user.edit',compact('user'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        
        $columns=[
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'telephone'=>'required',
        'idcountryFK'=>'required',
        'type'=>'required',
        ];

        $this->validate($request, $columns);

        $dateuser=request()->except('_token','_method');
       
        User::where('id','=',$id)->update( $dateuser);
        return redirect('user')->with('msn','Usuario actualizado exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        

        // $album=Album::findOrFail($id);

        // if(Storage::delete('public/'.$album->photo)){
        //     Album::destroy($id);
        // }
        return redirect('user')->with('msn','Usuario eliminado exitosamente');
    }

}
