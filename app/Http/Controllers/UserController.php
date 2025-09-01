<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function sachin(Request $request){
        
    }

    public function storeData(Request $reqeust){
        //logic for storing data

    }

    public function index(Request $request){



        $users = User::where('id', '>', 10)
        ->select('id', 'name', 'password')
        ->where("name", 'LIKE',"%sarola%")
        ->get()
        ->makeVisible('password');


        // dd($users->toArraY());
        
        // $sort = $request->get('sort', 'id'); // default sort by id
        // $direction = $request->get('direction', 'DESC'); // default direction
        
        // // Only allow sorting by name or email or id
        // if (!in_array($sort, ['name', 'email', 'id'])) {
        //     $sort = 'id';
        // }

        // if (!in_array($direction, ['asc', 'desc'])) {
        //     $direction = 'asc';
        // }

        // // dd($request->query());
        // $users = User::orderBy($sort, $direction)->paginate(10)->appends($request->query());
        // // dd($users->toArray());
        return view('user.index', ['users' => $users]);
    }
    public function create(Request $reqeust){
         return view('user.register_form');
    }
    public function store(Request $reqeust){
        //logic for storing data
        $user = new User;
        $user->name = $reqeust->name;
        $user->email = $reqeust->email;
        $user->password = bcrypt($reqeust->password);
        $user->save();
        return redirect()->route('students.index')->with('success', 'User registered successfully.');
    }
}