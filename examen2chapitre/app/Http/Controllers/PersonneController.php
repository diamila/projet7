<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PersonneModel;

use Session;

class PersonneController extends Controller
{
  
      //retourne moi la vu blog.blade.php
    public function index()
    {


   $donnee = PersonneModel::all();//on recupére ts les donné de notre base de donné */

    return view('accueil')->with('donnee', $donnee);
       /* revoi 1e vu avec la variabl qui comm valeur $donnee(l'ensemble des donnée fausse genérer par faker dans blocfactory et rempli dans la bd a laide de seeder) */
    }


      public function create()//qui va recevoir id
    {
        return view('create');
     }

   public function save(Request $request)//Request:recevoir 1e $request 'contenu du form'
    {
               //Validation ,name:obligatoire,
            $this->validate($request, ['nom' => 'required|min:3' ]);

    	$donneFormulaire= new PersonneModel;//$donneFormulaire va recevoir BlogModel

    	$donneFormulaire->cni = $request->cni;//$donneF->name reco $request->name
      $donneFormulaire->prenom = $request->prenom;
      $donneFormulaire->nom = $request->nom;
      $donneFormulaire->date_naiss = $request->date_naiss;
      $donneFormulaire->lieu_naissance= $request->lieu_naissance;
       $donneFormulaire->tel= $request->tel;


    	$donneFormulaire->save();
            Session::flash('success', 'ajouter avec succes');

    	 return redirect()->route('premierP');//partir vers la page qui a initialisé la requete

     }




   public function delete($id)//qui va recevoir id
    {
      $donneAsupprimer= PersonneModel::find($id);//recupérer ls donnée de l'id corres sur la bd
      $donneAsupprimer->delete();//requette pr supprimer les donné de l'id corres

          Session::flash('success', 'supprimer avec succes');

      return redirect()->back();//partir vers la page precedante
    }


    



     
    
}
