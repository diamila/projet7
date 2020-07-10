<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CommandeModel;

use App\ClientModel;

use Session;

class CommandeController extends Controller
{
  
      //retourne moi la vu blog.blade.php
    public function index()
    {


   $donnee = CommandeModel::all();//on recupére ts les donné de notre base de donné */

    return view('COMMANDE/accueilCommande')->with('donnee', $donnee);
       /* revoi 1e vu avec la variabl qui comm valeur $donnee(l'ensemble des donnée fausse genérer par faker dans blocfactory et rempli dans la bd a laide de seeder) */
    }


      public function create()//qui va recevoir id
    {
        
   $donnee = ClientModel::all();//on recupére ts les donné de notre base de donné */



        return view('COMMANDE/createCommande')->with('donnee', $donnee);;
     }

   public function save(Request $request)//Request:recevoir 1e $request 'contenu du form'
    {
               //Validation ,name:obligatoire,
            $this->validate($request, ['date_commande' => 'required|min:2' ]);

    	$donneFormulaire= new CommandeModel;//$donneFormulaire va recevoir BlogModel

    	$donneFormulaire->date_commande = $request->date_commande;//$donneF->name reco 

      $donneFormulaire->client_id = $request->client_id;
       

      


    	$donneFormulaire->save();
            Session::flash('success', 'ajouter avec succes');

    	 return redirect()->route('accueilCommande');//partir vers la page qui a initialisé la requete

     }




   public function delete($id)//qui va recevoir id
    {
      $donneAsupprimer= CommandeModel::find($id);//recupérer ls donnée de l'id corres sur la bd
      $donneAsupprimer->delete();//requette pr supprimer les donné de l'id corres

          Session::flash('success', 'supprimer avec succes');

      return redirect()->back();//partir vers la page precedante
    }


    



     
    
}
