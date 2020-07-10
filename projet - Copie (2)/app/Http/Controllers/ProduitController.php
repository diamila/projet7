<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProduitModel;

use Session;

class ProduitController extends Controller
{
  
      //retourne moi la vu blog.blade.php
    public function index()
    {


   $donnee = ProduitModel::all();//on recupére ts les donné de notre base de donné */

    return view('PRODUIT/accueilProduit')->with('donnee', $donnee);
       /* revoi 1e vu avec la variabl qui comm valeur $donnee(l'ensemble des donnée fausse genérer par faker dans blocfactory et rempli dans la bd a laide de seeder) */
    }


      public function create()//qui va recevoir id
    {
        return view('PRODUIT/createProduit');
     }

   public function save(Request $request)//Request:recevoir 1e $request 'contenu du form'
    {
               //Validation ,name:obligatoire,
            $this->validate($request, ['designation' => 'required|min:3' ]);

    	$donneFormulaire= new ProduitModel;//$donneFormulaire va recevoir BlogModel

    	$donneFormulaire->designation = $request->designation;//$donneF->name reco $request->name
      $donneFormulaire->prix_unitaire = $request->prix_unitaire;
     

    	$donneFormulaire->save();
            Session::flash('success', 'ajouter avec succes');

    	 return redirect()->route('accueilProduit');//partir vers la page qui a initialisé la requete

     }




   public function delete($id)//qui va recevoir id
    {
      $donneAsupprimer=ProduitModel::find($id);//recupérer ls donnée de l'id corres sur la bd
      $donneAsupprimer->delete();//requette pr supprimer les donné de l'id corres

          Session::flash('success', 'supprimer avec succes');

      return redirect()->back();//partir vers la page precedante
    }


    



     
    
}
