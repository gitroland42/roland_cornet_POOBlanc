<?php
    require_once('include.php');
    require_once('vue/menu.php');

     
    if(empty($_GET)){
       
        header( "Location: index.php?controller=default&action=home");
    }

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        // echo("DefaultController");
        $ravioleController = new DefaultController();
        $ravioleController->home();
    }
     
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'editraviole' && isset($_GET['id'])){
       $ravioleController = new ravioleController();
       $ravioleController->editeRaviole($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'affichage'){
        
        $ravioleController = new ravioleController();
        $ravioleController->afficheRavioles();
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addformraviole'){
        $ravioleController = new ravioleController();
        $ravioleController->ajoutFormRaviole();
        
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addraviole'){
        $ravioleController = new ravioleController();
        $ravioleController->ajoutRaviole();
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'supprraviole' && isset($_GET['id'])){
        $ravioleController = new ravioleController();
        $ravioleController->supprimeRaviole($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'modifformraviole' && isset($_GET['id'])){
        $ravioleController = new ravioleController();
        $ravioleController->modifformRaviole($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'modifraviole' && isset($_GET['id'])){
        $ravioleController = new ravioleController();
        $ravioleController->modifRaviole($_GET['id']);
    }
     else {
        throw new Exception('La page demandée n\'existe pas', 404);
    }
?>