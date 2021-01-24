<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;


class CountryController extends Controller
{

    public function index(Request $request)
    {
        $query = Country::query();

        
        if($request->has('search')) 
        {
            $searchText = $request->query('search');
            
            $searchText = '%' . $searchText . '%';

            $query->where('name', 'like', $searchText);
            $query->orWhere('native_name', 'like', $searchText);
        }

        $countries = $query->paginate();
        return view('countries.index', compact('countries'));
    }


    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        /* validacija podataka: ime mora biti manje od 255 znakova, biti unique, itd. */
        $validated = $request->validate([
            'name' => 'required|unique:countries|max:255',
            'native_name' => 'required|unique:countries|max:255',
        ]);
        $country = Country::create($validated);
        return view('countries.show', compact('country'));
    }


    public function show($id)
    {
        $country = Country::findOrFail($id);
        return view ('countries.show', compact('country'));
       
    }


    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('countries.edit', compact('country'));
    }

    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'native_name' => 'required|max:255',
        ]);

        $country = Country::findOrFail($id);
        $country->fill($validated);
        $country->save();

        return view('countries.show', compact('country'));
    }

  
    public function destroy($id)
    {
        /* primjer upita kojeg generira linija ispod: DELETE FROM countries WHERE id = 1 */
        Country::destroy($id);

        /* nakon brisanja, napravi redirect na index stranicu */
        return redirect()->route('countries.index');
    }
}
