<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[  "title"=>"Listes des entreprises",

        "Listes_entreprise"=>Entreprise::all(),
    ];
        return  view("entreprises.index")->with(($data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $users=User::all();
        return view("entreprises.create" ,compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required|max:100',
            'city'=>'required|max:255',
            'address'=>'required|max:255',
            'neighborhood'=>'required|max:255',
            'user_id'=>'required|max:255',

        ]);
       Entreprise::create($validated_data);

        return redirect()->route('entreprises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        $users=User::all();
        return view("entreprises.edit" ,compact("entreprise","users"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required|max:100',
            'city'=>'required|max:255',
            'address'=>'required|max:255',
            'neighborhood'=>'required|max:255',
            'user_id'=>'required|max:255',

        ]);

        $entreprise->name=$request->name;
        $entreprise->country=$request->country;
        $entreprise->city=$request->city;
        $entreprise->address=$request->address;
        $entreprise->neighborhood=$request->neighborhood;
        $entreprise->user_id=$request->user_id;

        $entreprise->save();

        return  redirect()->route('entreprises.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {

        $entreprise->delete();
        return redirect()->route('entreprises.index');
    }
}
