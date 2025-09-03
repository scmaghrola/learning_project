<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
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

    public function index(Request $request){
        $sort = $request->get('sort', 'id'); // default sort by id
        $direction = $request->get('direction', 'DESC'); // default direction
        
        // Only allow sorting by name or email or id
        if (!in_array($sort, ['name', 'email', 'id'])) {
            $sort = 'id';
        }

        if (!in_array($direction, ['asc', 'desc'])) {
            $direction = 'asc';
        }

        // dd($request->query());
        $users = User::orderBy($sort, $direction)->paginate(10)->appends($request->query());
        // dd($users->toArray());
        return view('user.index', ['users' => $users]);
    }
    public function create(Request $reqeust){
         return view('user.register_form');
    }
    public function store(StoreUserRequest $request){
        // The request is already validated
        $validated = $request->validated();
        dd('here');
        //logic for storing data
        $user = new User;
        $user->name = $reqeust->name;
        $user->email = $reqeust->email;
        $user->password = bcrypt($reqeust->password);
        $user->save();
        return redirect()->route('students.index')->with('success', 'User registered successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('user.register_form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validated();

        info('validated'); info($validated);
        info('request'); info($request->all());

        // Only update password if provided
        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
    
    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}