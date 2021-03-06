<?php

namespace App\Http\Controllers;

use App\Titular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Post;
use App\Busines;
use App\User;

class TitularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','titular.index');

        $titulars = Titular::with('post')->orderBy('id','Desc')->paginate(10);

        return view('titular.index',compact('titulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','titular.create');

        $posts = Post::where('statusPost',1)->get();
        $users = User::get()->all();
        $busines = Busines::orderBy('id','Desc')->get()->all();

        return view('titular.create',compact('posts','users','busines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','titular.create');

        $request->validate([
            'nameTitular'       => 'required|min:2|max:30',
            'firstLastname'     => 'required|min:2|max:30',
            'secondLastname'    => 'required|min:2|max:30',
            'phoneTitular'      => 'required|min:1000000000|max:9999999999|numeric',
            'statusTitular'     => 'required',
            'posts_id'          => 'required'
        ]);

        $titular = Titular::create($request->all());

<<<<<<< HEAD
        return redirect()->route('busines.create')
            ->with('status_success','Titular registrado satisfactoriamente');
=======
        return redirect()->route('proyect.create')
            ->with('status_success','Titular saved successfully');
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function show(Titular $titular)
    {
        $this->authorize('haveaccess','titular.show');

        $posts= Post::orderBy('namePost')->get();

        return view('titular.view', compact('posts','titular'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function edit(Titular $titular)
    {
        $this->authorize('haveaccess','titular.edit');

        $posts= Post::orderBy('namePost')->get();

        return view('titular.edit', compact('titular','posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titular $titular)
    {
        $this->authorize('haveaccess','titular.edit');

        $request->validate([
            'nameTitular'       => 'required|min:2|max:30',
            'firstLastname'     => 'required|min:2|max:30',
            'secondLastname'    => 'required|min:2|max:30',
            'phoneTitular'      => 'required|min:1000000000|max:9999999999|numeric',
            'statusTitular'     => 'required',
            'posts_id'          => 'required'
        ]);

        $titular -> update($request->all());

        return redirect()->route('titular.index')
            ->with('status_success','Titular updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titular $titular)
    {
        $this->authorize('haveaccess','titular.destroy');

        $titular->delete();

        return redirect()->route('titular.index')
            ->with('status_success','Titular successfully removed');
    }
}
