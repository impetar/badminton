<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;


class ClubController extends Controller
{
 


    public function index(Request $request)
    {
        $query = Club::query();

        if($request->has('search')) 
        {
            $searchText = $request->query('search');
            
            $searchText = '%' . $searchText . '%'; 

            $query->where('club_name', 'like', $searchText);

        }
        $clubs = $query->paginate();
        return view('clubs.index', compact('clubs'));
        
        
        $clubs = Club::paginate(); 
        return view ('clubs.index', compact('clubs'));
        
        
        

    }


    public function create()
    {
        return view('clubs.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'club_name' => 'required|unique:roles|max:255',
            'country_id'=> 'required'
            ]);

       
        $role = Club::create($validated);
        return view('clubs.show', compact('club'));
    }

   
    public function show($id)
    {
        $club = Club::findOrFail($id);
        return view ('clubs.show', compact('club'));
        //
    }

    public function edit($id)
    {
        //
    }

    

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}