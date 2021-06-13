<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\ProfileEditRequest;

use App\Models\User;
use App\Models\Role;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $roles = Role::pluck('name', 'id');

        if ($user->id == $id) {
            return view('admin.profile.edit', compact('user', 'roles'));
        }

        return abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileEditRequest $request, $id)
    {
        if (Auth::user()->id == $id) {
            $user = User::findOrFail($id);
            $data = [
                'name' => $request->name,
                'email' =>  strtolower( $request->email),
                'role_id' => $request->role_id,
                'is_active' => $request->is_active
            ];

            if ($request->password_change_request === 'true') {
                $data['password'] = Hash::make($request->password);
            }

            $user->update($data);
            $request->session()->flash('message', 'Profile updated successfully');
            
            return redirect()->route('admin.profile.edit', $id);
        }

        return abort(403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
