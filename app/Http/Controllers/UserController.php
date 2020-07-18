<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('1');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Users";

        $users = Users::orderBy('id', 'asc')->paginate(10);
        $usercount = Users::count('id');

        return view('admin.users', ['title' => $title,
        'users' => $users,
        'usercount' => $usercount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add new User";
        // 'password' => Hash::make($data['password']),
        return view('users.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'isAdmin' => 'required',
            'isStaff' => 'required',
            'isSponsor' => 'required',
            'name' => 'required',
            'email' => 'required'
        ]);
        $users = new Users;
        $users->id = $request->input('id');
        $users->isAdmin = $request->input('isAdmin');
        $users->isStaff = $request->input('isStaff');
        $users->isSponsor = $request->input('isSponsor');
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        // $users->password = Hash::make('password');

        $users->password = $request->input('password'); 
        $users->password = Hash::make('password');

        $users->save();
        return redirect('users/create')->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Users::find($id);
        // return view('admin.show')->with('staff', $staff);
        return view('admin.users')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit User';
        $users = Users::find($id);
        return view('users.edit', ['title' => $title,
        'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'isAdmin' => 'required',
            'isStaff' => 'required',
            'isSponsor' => 'required',
            'name' => 'required',
            'email' => 'required'
        ]);
        $users = Users::find($id);
        // $users->id = $request->input('id');
        $users->isAdmin = $request->input('isAdmin');
        $users->isStaff = $request->input('isStaff');
        $users->isSponsor = $request->input('isSponsor');
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make('password');
        
        $users->save();
        return redirect('users')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Users::find($id);
        $users->delete();
        return redirect('users')->with('success', 'User Removed');
    }
}
