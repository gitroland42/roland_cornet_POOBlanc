
<?php
 class RavioleController{

      
    public function afficheRavioles()
    {
       
       
       $ravioleManager = new RavioleManager();
       $mesRavioles= $ravioleManager->getAllRaviole();
      
        require 'vue/Raviole.php';
    }

    public function editeRaviole($id)
    {
      
        $ravioleManager = new RavioleManager();
        $maRaviole= $ravioleManager->getOneRaviole($id);
     
       require 'vue/ravioldetail.php';
    }
    

    public function ajoutFormRaviole()
    {

       // $ravioleManager = new RavioleManager();
        
        require 'vue/ravioleajout.php';
    }

    public function ajoutRaviole(){
               
        $nomFic="";
        $errors=[];

        if(empty($_POST['titre'])){
            $errors[]='erreur: la saisie du titre est obligatoire';
        }

        if(empty($_POST['ingredient_principal'])){
            $errors[]='erreur: la saisie de l\'ingredient principal est obligatoire';
        }

        // test validite image
        // peut etre une fonction private qui sera reutilise dans la modif
        // test de la taille si image obligatoire
        if (count($errors) ==0){ 
            // $_FILES['file']['error'] == 0) permet d'enregistrer des ravioles sans images
            if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0) {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['file']['size'] <= 1000000)
                {
                    // Testons si l'extension est autorisée
                    $infosfichier = pathinfo($_FILES['file']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $fichier_type = $_FILES['file']['type'];
                    $extensions_autorisees = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');
                    if (in_array($fichier_type , $extensions_autorisees))
                    {
                
                        $nomFic=uniqid().'.'.$extension_upload;
                    
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['file']['tmp_name'], 'vue/telechargement/'.$nomFic);
                    }else{
                        $errors[]="format de l'image incorrect";
                    }
                }else{
                    $errors[]="taille de l'image incorrect"; 
                }
            }
        }  


        if(count($errors)===0){
                $newRaviole=new Raviole(null,$_POST['titre'],$_POST['ingredient_principal'],$_POST['recette'],$nomFic);
                $ravioleManager = new RavioleManager();
                $ravioleManager->addRaviole($newRaviole);

         
               header('Location: index.php?controller=raviole&action=affichage');
        }
        else{
            require 'vue/ravioleajout.php';
        }    
    }


    public function supprimeRaviole($id)
    {
     
        $ravioleManager = new RavioleManager();
        $maRaviole= $ravioleManager->getOneRaviole($id);
        $ravioleManager->deleteRaviole($id);
    
       
        header('Location: index.php?controller=raviole&action=affichage');
    }

    public function modifFormRaviole($id)
    {
     
        $ravioleManager = new RavioleManager();
        $maRaviole= $ravioleManager->getOneraviole($id);

  
        require 'vue/raviolemodif.php';
    }

    public function modifRaviole($id)
    {
        $ravioleManager = new RavioleManager();
        $maRaviole= $ravioleManager->getOneraviole($id);

        $errors=[];

        if(empty($_POST['titre'])){
            $errors[]='erreur: la saisie du titre est obligatoire';
        }

        if(empty($_POST['ingredient_principal'])){
            $errors[]='erreur: la saisie de l\'ingredient principal est obligatoire';
        }



        // test validite image et image modifié
        




        if(count($errors)===0){
       
            $maRaviole = new Raviole($id,$_POST['ingredient_principal'],$_POST['titre'],$_POST['recette'],$_POST['file']);
            $ravioleManager->updateRaviole($maRaviole);

  
            header('Location: index.php?controller=raviole&action=affichage');
        }
        else{
            require 'vue/raviolemodif.php';
        }
    }



    }

?>