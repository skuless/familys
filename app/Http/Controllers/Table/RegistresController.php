<?php

namespace App\Http\Controllers\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Registre;

class RegistresController extends Controller {
    
    public function index() {
        // function de base lors du chargement de la page
        if(auth()->check() === false)
        {

            return view('auth.login');
            
        }else {

            $registres = Registre::all();

            return view('table.registreTable', [
                'registres' => $registres
            ]);
        }
    }

    // Function qui supprime dans la bdd la ligne selon l'id récupèré
    public function destroy($id) {
        return Registre::destroy($id);
    }

    public function show() {

        if(auth()->check() === false)
        {

            return view('auth.login');
            
        }else {
            // Récupèration de toutes les infos de la table contact dans la bdd
            $registres = Registre::all();

            // Return des infos récupèré
            return view('table\registreTable', [
                'registres' => $registres
            ]);
        }
    }

}
