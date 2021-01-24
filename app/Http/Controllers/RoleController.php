<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
   
    public function index(Request $request)
    {
        $query = Role::query();

        if($request->has('search')) 
        {
            $searchText = $request->query('search');
            
            $searchText = '%' . $searchText . '%'; 

            $query->where('name', 'like', $searchText);
            $query->orWhere('description', 'like', $searchText);
        }
        $roles = $query->paginate();
        return view('roles.index', compact('roles'));
        
        
        $roles = Role::paginate(); 
        return view ('roles.index', compact('roles'));

        
    }


    public function create()
    {
        return view('roles.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:roles|max:50',
            'description' =>'required|unique:roles|max:150'
        ]);

       
        $role = Role::create($validated);
        return view('roles.show', compact('role'));
    }

 
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view ('roles.show', compact('role'));
    }

   
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role'));
    }

    
    public function update(Request $request, $id)
    {
        $validated = $request->validate
        ([
            'name' => 'required|max:50',
            'description' => 'required|max:150',
        ]);

        $role = Role::findOrFail($id);
        $role->fill($validated);
        $role->save();

        return view('roles.show', compact('role'));
       
    }

    public function destroy($id)
    {
     
        Role::destroy($id);

        
        return redirect()->route('roles.index');
    }
}
