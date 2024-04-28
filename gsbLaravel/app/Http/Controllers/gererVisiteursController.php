<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;
use App\Post;
use PDF;
class gererVisiteursController extends Controller
{
    function lister()
    {
        $les_visiteurs=PdoGsb::getInfosVisiteurs();
        $nb_visiteurs=PdoGsb::nombredeVisiteurs();
        $view= view('listerVisiteurs')
            ->with('les_visiteurs',$les_visiteurs)
            ->with('comptable',session('comptable')
                                      );
                                      
        return $view;
    }
    
    function ajouterSaisie()
    {
   return view('ajouterVisiteur')->with('comptable',session('comptable'));
   }

    function ajouterValider(Request $request)
    {
        $id = $request['id'];
        $nom = $request['nom'];
        $prenom = $request['prenom'];
        $login = PdoGsb::LoginGeneration($nom,$prenom);
        $mdp = PdoGsb::MdpGeneration(5);
       $adresse = $request['adresse'];
        $cp = $request['cp'];
        $ville = $request['ville'];
        $dateEmbauche = $request['dateEmbauche'];
        //affecter $prenom
        PdoGsb::ajouterVisiteur($id, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche);
       $les_visiteurs=PdoGsb::getInfosVisiteurs();
        $view= view('listerVisiteurs')->with('comptable',session('comptable'))
                                     ->with('les_visiteurs',$les_visiteurs);
        
       return $view;
   }

    function modifierChoix()
    {
        $les_visiteurs=PdoGsb::getInfosVisiteurs();
        $view = view('modifier')->with('comptable',session('comptable'))
                                        ->with('les_visiteurs',$les_visiteurs);
        return $view;
    }

   function modifierSaisie(Request $request)
    {
        $idVisiteur = $request['id'];

         $nom = $request['nom'];
         $prenom = $request['prenom'];
       $les_visiteurs=PdoGsb::getInfosVisiteurs();
        $leVisiteur = PdoGsb::getUnVisiteur($idVisiteur);
        $view = view('modifierVisiteursSaisie')->with('comptable',session('comptable'))
                                              ->with('leVisiteur',$leVisiteur)
                                               ->with('les_visiteurs',$les_visiteurs);
        return $view;
    }

    function modifierValider(Request $request)
    {
        $id = $request['id'];
        $nom=$request['nom'];
       $prenom=$request['prenom'];
        $adresse=$request['adresse'];
        $cp=$request['cp'];
        $ville=$request['ville'];
       $dateEmbauche=$request['dateEmbauche'];
        
        $modif = PdoGsb::modifierVisiteur($id, $nom, $prenom, $adresse, $cp, $ville, $dateEmbauche);
        $les_visiteurs= PdoGsb::getInfosVisiteurs();
       $message="le membre a bien été modifié";
        $view = view('listerVisiteurs')->with('comptable',session('comptable'))
                                        ->with('les_visiteurs',$les_visiteurs);
        return $view;
    }

    public function getPostPdf (Post $post)
    {
        dd($post);
        
        $pdf = PDF::loadView('pdf.user');
        $pdf = PDF::loadFile(public_path("documents/fichier.html"));
       $pdf = PDF::loadHTML("<p>Mon contenu HTML ici</p>");
        return $pdf->download('user.pdf');
        
        
    }
////////////////fraishorsforfait//////////////////
    function listerfraishorsforfait()
    {
        $les_visiteurs=PdoGsb::getInfosParVisiteurPourFraishorsforfait();
        $view= view('listerFraisHorsForfait')
            ->with('les_visiteurs',$les_visiteurs)
            ->with('comptable',session('comptable')
                                    );
                                    
        return $view;
    }

    function listerVisiteurParDepartement()
    {
        $les_visiteurs=PdoGsb::getInfosVisiteurspardepartement();
        $view= view('listerVisiteursParDepartement')
            ->with('les_visiteurs',$les_visiteurs)
           ->with('comptable',session('comptable')
                                      );
                                      
        return $view;
    }

    function supprimerChoix()
    {
        if( session('comptable') != null)
        {
            $comptable = session('comptable');       
            $lesVisiteurs = PdoGsb::getInfosLesVisiteurs();
            $lesCles = array_keys( $lesVisiteurs );
		    $visiteurASelectionner = $lesCles[0];		    
 
            return view('supprimer')                       
                        ->with('lesVisiteurs',$lesVisiteurs)
                        ->with('visiteurASelectionner',$visiteurASelectionner)
                        ->with('comptable',$comptable);  
        }
        else{
    return view('connexion')->with('erreurs',null);
        }

    }

    function supprimerValider(Request $request)
    {
        $nom = $request['nom'];
        //dd($nom);
        $modif = PdoGsb::supprimerVisiteur($nom);
        $lesVisiteurs = PdoGsb::getInfosLesVisiteurs();
        //dd($lesVisiteurs);
        $message = "Le visiteur a bien été supprimé";
        $view = view('listerVisiteursSuprimerVisiteur')
            ->with('comptable', session('comptable'))
            ->with('lesvisiteurs', $lesVisiteurs);
    
        return $view;
    }
    

    function voirVisiteurParDepartement()
    {
       if (session('comptable') != null) {
            $comptable = session("comptable");

            $les_Visiteurs = PdoGsb::getLesVisiteursParDepartement();

            $vue = view('voirVisiteurParDepartement')
                ->with('comptable', $comptable)
                ->with('les_Visiteurs', $les_Visiteurs);

           return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function afficherVisiteurParDepartement(Request $request)
    {
        if (session('comptable') != null) {
            $comptable = session("comptable");

            $leVisiteur = $request['visiteur'];
            $les_Visiteurs = PdoGsb::getLesVisiteursParDepartement();

            $lesInfos = PdoGsb::getInfosParVisiteurParDepartement($leVisiteur);
            
            $vue = view('afficherVisiteurParDepartement')
                ->with('comptable', $comptable)
                ->with('lesInfos', $lesInfos)
                ->with('les_Visiteurs', $les_Visiteurs)
                ->with('leVisiteur', $leVisiteur);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }


}
?>
