<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Registre;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function validateContact(Request $request)
    {
        $inconnu = "-----";

        $this->validate($request, [
            'num' => 'required|max:250',
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'blaze' => 'max:255',
            'phone' => 'required',
        ]);
        // On instancie la classe contact pour enregistré les informations
        $contact = new Contact();

        $contact->num = $request->get('num');
        $contact->lastname = $request->get('lastname');
        $contact->firstname = $request->get('firstname');
        $contact->blaze = $request->get('blaze');
        $contact->phone = $request->get('phone');

        if($contact->blaze === null) {

            $contact->blaze = $inconnu;

        }

        // Enregistrement des informations envoyé dans contact
        $contact->save();

        // Redirection sur la page de confirmation lorsque tout sera validé
        return redirect()->route('contact');
    }

    public function validateRegistre(Request $request)
    {
        $inconnu = '-----';
        $author = Auth::user()->name;

        $this->validate($request, [
            'lastname' => 'max:255',
            'firstname' => 'max:255',
            'phone' => 'max:255',
            'work' => 'max:255',
            'gang' => 'max:255',
            'immatriculation' => 'max:100',
            'vehicle' => 'max:255',
            'sign' => 'max:255',
            'info' => 'max:500',
            'urlPicture' => 'max:850',

        ]);

        // On instancie la classe registre pour enregistré les informations

        
        $registre = new Registre();

        
        $registre->author = $author;
        $registre->lastname = $request->get('lastname');
        $registre->firstname = $request->get('firstname');
        $registre->phone = $request->get('phone');
        $registre->work = $request->get('work');
        $registre->gang = $request->get('gang');
        $registre->immatriculation = $request->get('immatriculation');
        $registre->vehicle = $request->get('vehicle');
        $registre->sign = $request->get('sign');
        $registre->info = $request->get('info');

        
        if($registre->lastname === null) {

            $registre->lastname = $inconnu;

        }

        if($registre->firstname === null) {

            $registre->firstname = $inconnu;

        }

        if($registre->phone === null) {

            $registre->phone = $inconnu;

        }

        if($registre->work === null) {

            $registre->work = $inconnu;

        }

        if ($registre->gang === null) {

            $registre->gang = $inconnu;

        }

        if($registre->immatriculation === null) {

            $registre->immatriculation = $inconnu;

        }

        if($registre->vehicle === null) {

            $registre->vehicle = $inconnu;

        }

        if($registre->sign === null) {

            $registre->sign = $inconnu;

        }

        if($registre->info === null) {

            $registre->info = $inconnu;

        }


        // Enregistrement des informations envoyé dans registre
        $registre->save();

        // Redirection sur la page de confirmation lorsque tout sera validé
        return redirect()->route('registre');
    }

    public function validateComptabilite(Request $request)
    {
        $author = Auth::user()->name;
        $inconnu = "-----";

        $this->validate($request, [
            'author' => 'required|max:250',
            'name' => 'required|max:250',
            'dirtyMoney' => 'required|max:255',
            'cleanMoney' => 'required|max:255',
        ]);
        // On instancie la classe contact pour enregistré les informations
        $comptabilite = new Comptabilite();

        $comptabilite->author = $author;
        $comptabilite->name = $request->get('name');
        $comptabilite->dirtyMoney = $request->get('dirtyMoney');
        $comptabilite->cleanMoney = $request->get('cleanMoney');

        // Enregistrement des informations envoyé dans comptabilite
        $comptabilite->save();

        // Redirection sur la page de confirmation lorsque tout sera validé
        return redirect()->route('comptabilite');
    }

}
