<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
class adminController extends Controller
{
    public function index(){
        return view('cree_taches');
    }

    public function ajouter_taches(Request $request){
        $tache = new task; //bd
       
        $tache->titre = $request->titre; //liason column
        $tache->description =$request->description;
        $tache->save();
        return redirect()->back()->with("message","enregistrer");
    }

    public function supprimer_taches($id){ 
        //function pour la supression du tache
        $tache = task::find($id);
        $tache->delete();
        return redirect()->back()->with("message","tache supprimer");
    }
    public function update_tache(Request $request ,$id){
        //modification des taches
        $tache = task::find($id);
        $tache->titre = $request->titre; //liason column
        $tache->description =$request->description;
        $tache->save();
        return view('update');
    }
}
