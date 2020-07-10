<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ConcernerModel;

use App\CommandeModel;

use App\ProduitModel;

use Session;

class ConcernerController extends Controller
{
  
      //retourne moi la vu blog.blade.php
    public function index()
    {
   
   $donnee = ConcernerModel::all();//on recupére ts les donné de notre base de donné

    return view('CONCERNER/accueilConcerner')->with('donnee', $donnee);
       /* revoi 1e vu avec la variabl qui comm valeur $donnee(l'ensemble des donnée fausse genérer par faker dans blocfactory et rempli dans la bd a laide de seeder) */
    }


      public function create()//qui va recevoir id
    {
        
   $donnee = CommandeModel::all();//on recupére ts les donné de notre base de donné */

    $donneeP = ProduitModel::all();

        return view('CONCERNER/createConcerner' , compact('donnee','donneeP'));
     }


    


   public function save(Request $request)//Request:recevoir 1e $request 'contenu du form'
    {
               //Validation ,name:obligatoire,
            $this->validate($request, ['quantite_commande' => 'required|min:2' ]);

    	$donneFormulaire= new ConcernerModel;//$donneFormulaire va recevoir BlogModel

       
      $donneFormulaire->id_commande = $request->id_commande;

      $donneFormulaire->produit_id = $request->produit_id;

    	$donneFormulaire->quantite_commande = $request->quantite_commande;//$donneF->name reco 

       

      


    	$donneFormulaire->save();
            Session::flash('success', 'ajouter avec succes');

    	 return redirect()->route('accueilConcerner');//partir vers la page qui a initialisé la requete

     }




   public function delete($id)//qui va recevoir id
    {
      $donneAsupprimer= ConcernerModel::find($id);//recupérer ls donnée de l'id corres sur la bd
      $donneAsupprimer->delete();//requette pr supprimer les donné de l'id corres

          Session::flash('success', 'supprimer avec succes');

      return redirect()->back();//partir vers la page precedante
    }


    



     
    
}
