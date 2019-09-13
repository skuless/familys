'use strict';

//------------------------------------------------------------------------------
//--------------------------------Contact --------------------------------------
//------------------------------------------------------------------------------

//On créée une function qui va supprimer la ligne choisis selon l'id dans la base de données
function deleteRequestContact(event) {

    event.preventDefault();

    var id = $(this).val();

    // Requête ajax qui supprime la ligne selon l'id récupèré et supprime dans la base de données
    $.ajax({
        url: route('contact.destroy', {id: id}),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'DELETE',
        dataType: 'json',
    }).done(updateTableContact).fail((jq, status) => {
        console.log(jq, status);
    });

}

// Envoie de la requête pour récuprer le tableau mis à jour
function updateTableContact() {

// On supprime la partie existante puis on la recharge pour effectuer la suppresion de la ligne
    $('#contentContact').empty();

    //On envoie la requete au controlleur pour récupèrer le tableau mis à jour
    $.get(route('contact'), getUpdateContact);

}

//Affichage dans le HTML de la reponse de la requête
function getUpdateContact(data) {

    // On affiche le tableau récupèrer sur la page
    // $('#contentContact').html(data);
    window.location.reload();

}


//------------------------------------------------------------------------------
//--------------------------------Registre --------------------------------------
//------------------------------------------------------------------------------

//On créée une function qui va supprimer la ligne choisis selon l'id dans la base de données
function deleteRequestRegistre(event) {

    event.preventDefault();

    var id = $(this).val();

    // Requête ajax qui supprime la ligne selon l'id récupèré et supprime dans la base de données
    $.ajax({
        url: route('registre.destroy', {id: id}),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'DELETE',
        dataType: 'json',
    }).done(updateTableRegistre).fail((jq, status) => {
        console.log(jq, status);
    });

}

// Envoie de la requête pour récuprer le tableau mis à jour
function updateTableRegistre() {

// On supprime la partie existante puis on la recharge pour effectuer la suppresion de la ligne
    $('#contentRegistre').empty();

    //On envoie la requete au controlleur pour récupèrer le tableau mis à jour
    $.get(route('registre'), getUpdateRegistre);

}

//Affichage dans le HTML de la reponse de la requête
function getUpdateRegistre(data) {

    // On affiche le tableau récupèrer sur la page
    // $('#contentRegistre').html(data);

    window.location.reload();

}

//------------------------------------------------------------------------------
//--------------------------------Admin --------------------------------------
//------------------------------------------------------------------------------

//On créée une function qui va supprimer la ligne choisis selon l'id dans la base de données
function deleteRequestUser(event) {

    event.preventDefault();

    var id = $(this).val();

    // Requête ajax qui supprime la ligne selon l'id récupèré et supprime dans la base de données
    $.ajax({
        url: route('administration.destroy', {id: id}),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'DELETE',
        dataType: 'json',
    }).done(updateTableUser).fail((jq, status) => {
        console.log(jq, status);
    });

}

// Envoie de la requête pour récuprer le tableau mis à jour
function updateTableUser() {

// On supprime la partie existante puis on la recharge pour effectuer la suppresion de la ligne
    $('#contentUser').empty();

    //On envoie la requete au controlleur pour récupèrer le tableau mis à jour
    $.get(route('admin'), getUpdateUser);

}

//Affichage dans le HTML de la reponse de la requête
function getUpdateUser(data) {

    // On affiche le tableau récupèrer sur la page
    // $('#contentUser').html(data);

    window.location.reload();

}


$(function () {

    // On affecte les événement au document directement suite à un problème
    // Les événements n'existait pas après chargement de la page du à l'ajax
    $(document).on('click', '#deleteContact' ,deleteRequestContact);
    $(document).on('click', '#deleteRegistre' ,deleteRequestRegistre);
    $(document).on('click', '#deleteUser' ,deleteRequestUser);
    
});