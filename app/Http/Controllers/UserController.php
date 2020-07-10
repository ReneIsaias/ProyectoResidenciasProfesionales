<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission\Models\Role;
use App\User;
use App\Post;
use App\Degrestudy;
use App\Career;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('haveaccess','user.index');

        $users = User::with('roles','post','degrestudy','career')->orderBy('id','Desc')->paginate(10);

        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create', User::class);

        //return 'Create';
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
    public function show(User $user)
    {
        $this->authorize('view', [$user, ['user.show','userown.show'] ]);

        $roles = Role::orderBy('name')->get();
        $posts = Post::orderBy('namePost')->get();
        $degrestudys = Degrestudy::orderBy('degreeStudy')->get();
        $careers = Career::orderBy('careerName')->get();

        return view('user.view', compact('roles', 'user', 'posts', 'degrestudys', 'careers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', [$user, ['user.edit','userown.edit'] ]);

        $roles= Role::orderBy('name')->get();
        $posts = Post::orderBy('namePost')->get();
        $degrestudys = Degrestudy::orderBy('degreeStudy')->get();
        $careers = Career::orderBy('careerName')->get();

        return view('user.edit', compact('roles', 'user', 'posts', 'degrestudys', 'careers'));
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
        $request->validate([
            'keyUser'           => 'min:5|max:30|unique:users,keyUser,' . $user->id,
            'nameUser'          => 'required|min:2|max:30',
            'firstLastname'     => 'required|min:2|max:30|',
            'secondLastname'    => 'required|min:2|max:30|',
            'phoneUser'         => 'required|numeric|unique:users,phoneUser,' . $user->id,
            'name'              => 'required|min:4|max:30|unique:users,name,' . $user->id,
            'email'             => 'required|email|max:100|unique:users,email,' . $user->id,
            'avatar'            => 'image',
            'statusUser'        => 'required',
            'posts_id'          => '',
            'degrestudies_id'   => '',
            'careers_id'        => '',
        ]);

        $user->update($request->all());

        if($request->file('avatar')){

            $user->avatar = $request->file('avatar')->store('public');
            $user->save();

            /* $path = Storage::disk('public')->put('haber', $request->file('avatar'));
            $user->fill(['avatar'=> asset($path) ])->save(); */
        }

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('user.index')
            ->with('status_success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('haveaccess','user.destroy');

        $user->delete();

        return redirect()->route('user.index')
            ->with('status_success','User successfully removed');
    }
}
