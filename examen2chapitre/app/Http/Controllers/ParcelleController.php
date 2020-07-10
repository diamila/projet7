<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ParcelleModel;

use App\PersonneModel;

use Session;

class ParcelleController extends Controller
{
  
      //retourne moi la vu blog.blade.php
    public function index()
    {


   $donnee = ParcelleModel::all();//on recupére ts les donné de notre base de donné */

    return view('accueilParcelle')->with('donnee', $donnee);
       /* revoi 1e vu avec la variabl qui comm valeur $donnee(l'ensemble des donnée fausse genérer par faker dans blocfactory et rempli dans la bd a laide de seeder) */
    }


      public function create()//qui va recevoir id
    {
        
   $donnee = PersonneModel::all();//on recupére ts les donné de notre base de donné */



        return view('createParcelle')->with('donnee', $donnee);;
     }

   public function save(Request $request)//Request:recevoir 1e $request 'contenu du form'
    {
               //Validation ,name:obligatoire,
            $this->validate($request, ['superficie' => 'required|min:2' ]);

    	$donneFormulaire= new ParcelleModel;//$donneFormulaire va recevoir BlogModel

    	$donneFormulaire->cni = $request->cni;//$donneF->name reco $request->name
      $donneFormulaire->prenom = $request->prenom;
      $donneFormulaire->nom = $request->nom;
      $donneFormulaire->date_naiss = $request->date_naiss;
      $donneFormulaire->lieu_naissance= $request->lieu_naissance;
       $donneFormulaire->tel= $request->tel;


    	$donneFormulaire->save();
            Session::flash('success', 'ajouter avec succes');

    	 return redirect()->route('accueilParcelle');//partir vers la page qui a initialisé la requete

     }




   public function delete($id)//qui va recevoir id
    {
      $donneAsupprimer= ParcelleModel::find($id);//recupérer ls donnée de l'id corres sur la bd
      $donneAsupprimer->delete();//requette pr supprimer les donné de l'id corres

          Session::flash('success', 'supprimer avec succes');

      return redirect()->back();//partir vers la page precedante
    }


    



     
    
}
