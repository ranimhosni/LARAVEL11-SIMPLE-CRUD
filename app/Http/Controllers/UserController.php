<?php

namespace app\Http\Controllers;
use app\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function index()
    {
        $users = User::all();
      return view ('Users.index')->with('Users', $users);
    }

    
    public function create()
    {
        return view('users.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('user')->with('flash_message', 'user Addedd!');  
    }

    
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show')->with('users', $user);
    }

    
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('users', $user);
    }

  
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'user Updated!');  
    }

   
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'user deleted!');  
    }
}