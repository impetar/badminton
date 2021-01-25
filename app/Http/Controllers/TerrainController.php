<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terrain;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Terrain::query();

        if($request->has('search')) 
        {
            $searchText = $request->query('search');
            
            $searchText = '%' . $searchText . '%'; 

            
            $query->where('size', 'like', $searchText);
            $query->orWhere('price', 'like', $searchText);
            $query->orWhere('description', 'like', $searchText);

        }
        $terrains = $query->paginate();
        return view('terrains.index', compact('terrains'));    
               
        
        
        $terrains = Terrain::paginate();
        return view ('terrains.index', compact('terrains'));
        //echo'terain';
        //die;
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
        $terrain = Terrain::findOrFail($id);
        return view ('terrains.show', compact('terrain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
