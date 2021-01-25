<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = User::query();

        if($request->has('search')) 
        {
            $searchText = $request->query('search');
            
            $searchText = '%' . $searchText . '%'; 

            
            $query->where('first_name', 'like', $searchText);
            $query->orWhere('last_name', 'like', $searchText);
            $query->orWhere('email', 'like', $searchText);

        }
        $users = $query->paginate();
        return view('users.index', compact('users'));

        $users = User::with(['role'])->paginate();
        return view ('users.index', compact('users'));
        //echo'user';
        //die;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* validacija podataka: ime mora biti manje od 255 znakova, biti unique, itd. */
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'native_name' => 'required|unique:users|max:255',
        ]);
        $user = User::create($validated);
        return view('users.show', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with(['role'])->findOrFail($id);
        return view ('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id');

     
            

        return view('users.edit',
            compact('user', 'roles')
        );
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
        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'role_id'=> 'required'
        
        ]);

        $user = User::findOrFail($id);
        $user->fill($validated);
        $user->save();

        return redirect()->route('users.index', ['user'=> $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /* primjer upita kojeg generira linija ispod: DELETE FROM users WHERE id = 1 */
      User::destroy($id);

      /* nakon brisanja, napravi redirect na index stranicu */
      return redirect()->route('users.index');
    }
}
