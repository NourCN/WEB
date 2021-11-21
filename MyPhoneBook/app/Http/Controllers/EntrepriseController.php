<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data = Entreprise::all();
        return view('entreprise', ['entreprises' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        if(!$this->authorize('access-gestionnaire')){
            abort(403);
        }
        return view('entreprise/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$this->authorize('access-gestionnaire')){
            abort(403);
        }
            $data = $request->validate([
            'nom'=> 'required|string|unique:entreprises,nom|max:50',
            'rue'=> 'required|string|max:100',
            'code_postal'=> 'required|numeric|digits:5',
            'ville'=> 'required|string|max:50',
            'numero'=> 'required|unique:entreprises,numero|numeric|digits:12',
            'email'=> 'required|email'
        ]);

        $data = new Entreprise();
        $data->nom = $request->nom;
        $data->rue = $request->rue;
        $data->code_postal = $request->code_postal;
        $data->ville = $request->ville;
        $data->numero = $request->numero;
        $data->email = $request->email;


        $data->save();
        return redirect('entreprise');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->authorize('access-gestionnaire')){
            abort(403);
        }
        $data = Entreprise::find($id);
        return view('entreprise/update', ['data' => $data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        if(!$this->authorize('access-gestionnaire')){
            abort(403);
        }
        $data = $request->validate([
            'nom'=> 'required|string|unique:entreprises,nom|max:50',
            'rue'=> 'required|string|max:100',
            'code_postal'=> 'required|numeric|digits:5',
            'ville'=> 'required|string|max:50',
            'numero'=> 'required|unique:entreprises,numero',
            'email'=> 'required|email'
        ]);
        $data = Entreprise::find($id);
        $data->nom = $request->nom;
        $data->rue = $request->rue;
        $data->code_postal = $request->code_postal;
        $data->ville = $request->ville;
        $data->numero = $request->numero;
        $data->email = $request->email;

        $data->save();
        return redirect('entreprise');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$this->authorize('access-gestionnaire')){
            abort(403);
        }
        $data = Entreprise::find($id);
        $data->delete();
        return redirect('entreprise');
    }
}
