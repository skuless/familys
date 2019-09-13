<?php

namespace App\Http\Controllers\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Controllers\FormController;

class ContactController extends Controller {
    
    public function index() {
        // function de base lors du chargement de la page
    }

    // Function qui supprime dans la bdd la ligne selon l'id récupèré
    public function destroy($id) {
        return Contact::destroy($id);
    }

    public function show() {
        if(auth()->check() === false)
        {

            return view('auth.login');
            
        }else {
            // Récupèration de toutes les infos de la table contact dans la bdd
            $contacts = Contact::all();

            // Return des infos récupèré
            return view('table\carnet', [
                'contacts' => $contacts
            ]);
        }
    }

}
