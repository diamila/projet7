<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BlogModel;

use Session;

class BlogController extends Controller
{
  
      //retourne moi la vu blog.blade.php
    public function index()
    {


   /*$donnee = BlogModel::all();//on recupére ts les donné de notre base de donné */

    
     $donnee = BlogModel::orderBy('created_at', 'desc')->paginate(5);//ordre decroissante de la creation ,paginate(3) grouper en 3

    return view('blog')->with('donnee', $donnee);
       /* revoi 1e vu avec la variabl qui comm valeur $donnee(l'ensemble des donnée fausse genérer par faker dans blocfactory et rempli dans la bd a laide de seeder) */



    }

   public function save(Request $request)//Request:recevoir 1e $request 'contenu du form'
    {
               //Validation ,name:obligatoire,
            $this->validate($request, ['name' => 'required|min:3' ]);

    	$donneFormulaire= new BlogModel;//$donneFormulaire va recevoir BlogModel
    	$donneFormulaire->name = $request->name;//$donneF->name reco $request->name
    	$donneFormulaire->save();//on enregistre la nouvelle donné

            Session::flash('success', 'ajouter avec succes');

    	return redirect()->back();//partir vers la page qui a initialisé la requete
    	//return redirect()->route('blog');
     }



   public function delete($id)//qui va recevoir id
    {


        $donneAsupprimer= BlogModel::find($id);//find :rechercher par rapport a l'id
        $donneAsupprimer->delete();//supprimer l'id corespondant 

            Session::flash('success', 'supprimer avec succes');

        return redirect()->back();//partir vers la page precedante
     }




      public function edit($id)//qui va recevoir id
    {


        $donneAmodifier= BlogModel::find($id);//find :rechercher par rapport a l'id
       
        return view('edit')->with('donneAmodifier' ,$donneAmodifier);
           /*revoi 1e vu avec la variabl qui comm valeur
            $donneAmodifier (donné a modifier) */
     }

     

      public function update(Request $request, $id)//Request:recevoir 1e $request 'contenu du form'
    {
            //Validation ,name:obligatoire,
            $this->validate($request, ['name' => 'required|min:3' ]);


        $donneFormUpdate= BlogModel::find($id);
        $donneFormUpdate->name = $request->name;//$donneF->name reco $request->name
        $donneFormUpdate->update();//on enregistre la nouvelle donné

            Session::flash('success', 'modifier avec succes');

        return redirect()->route('premierP');//partir vers la page qui a initialisé la requete
        
     }     
 
 
    
}
