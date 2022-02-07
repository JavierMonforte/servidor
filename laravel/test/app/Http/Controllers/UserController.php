<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

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
    $users= User::all();
    return view('user.index', ['users' => $users]);// Variables con corchetes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //version corta
        $user = User::create($request->all());

        //version larga, comentada
        // $study = new Study;
        // $study->code = $request->code;
        // $study->name = $request->name;
        // $study->abreviation = $request->abreviation;
        // $study->save();

        // header('Location .....');
        return redirect(('/users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //version larga, comentada
        // $study->code = $request->code;
        // $study->name = $request->name;
        // $study->abreviation = $request->abreviation;
        
        //version corta
        $user->fill($request->all());

        $user->save();
        return redirect('/user');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addRole(Request $request){
        $user = User::find(1);
        $role = Role::find(1);
        $user->addRole($role);
        // $users = User::all();
        // return view('user.index' , ['users'=> $users]);
    }
    public function destroy($id)
    {
        //
    }
}
