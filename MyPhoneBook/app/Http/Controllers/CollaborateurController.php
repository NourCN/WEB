<?php

namespace App\Http\Controllers;

use App\Models\Collaborateur;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CollaborateurController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
        $collaborateurs = Collaborateur::with('entreprise')->get();
        $entreprises = Entreprise::with('collaborateurs')->get();
        
        
        // Get the search value from the request
          $search = $request->search;


    // Search in the title and body columns from the posts table
   
     $MySearchs = DB::table('collaborateurs')
     ->where('nom',$search)
     ->orWhere('prenom',$search)
     ->orWhere('entreprise_id',$search)
     ->orWhere('numero',$search)
     ->orWhere('email',$search)
     ->get();
    
    // Return the search view with the resluts compacted
        return view('collaborateur', compact('collaborateurs', 'entreprises','MySearchs'));
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
        return view('collaborateur/create');
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
            'numero'=> 'required|unique:entreprises,numero',
            'email'=> 'required|email'
        ]); 
        $data = new Collaborateur;
        $data->civilite = $request->civilite;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->rue = $request->rue;
        $data->code_postal = $request->code_postal;
        $data->ville = $request->ville;
        $data->numero = $request->numero;
        $data->email = $request->email;
        $data->entreprise_id = $request->entreprise_id;

        $data->save();


        return redirect('collaborateur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collaborateur  $collaborateur
     * @return \Illuminate\Http\Response
     */
   public function show()
    {

    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborateur  $collaborateur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->authorize('access-gestionnaire')){
            abort(403);
        }
        $data = Collaborateur::find($id);
        return view('collaborateur/update', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collaborateur  $collaborateur
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
        $data = Collaborateur::find($id);
        $data->civilite = $request->newcivilite;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->rue = $request->rue;
        $data->code_postal = $request->code_postal;
        $data->ville = $request->ville;
        $data->numero = $request->numero;
        $data->email = $request->email;
        $data->entreprise_id = $request->entreprise_id;
        
        DB::table('entreprises')
         ->updateOrInsert(
        ['id' => $request->entreprise_id],
        ['nom' =>$request->nom_ent ]
    );

        $data->save();
        return redirect('collaborateur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collaborateur  $collaborateur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$this->authorize('access-gestionnaire')){
            abort(403);
        }
        $data = Collaborateur::find($id);
        $data->delete();
        return redirect('collaborateur');
    }
}
