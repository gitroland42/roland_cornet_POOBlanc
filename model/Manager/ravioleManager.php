<?php

    class RavioleManager extends  DbManager{

        public function __construct()
        {
            parent::__construct();
        }



        public function getAllRaviole(){
            $ravioles=[];
            // bdd viens de dbManager
            $query = $this->bdd->prepare('SELECT * FROM raviole');
            $query->execute();
            $fetchRes = $query->fetchAll();
            foreach($fetchRes as $ligne){
                $ravioles[]=new Raviole($ligne['id'],$ligne['ingredient_principal'],$ligne['titre'],$ligne['recette'],$ligne['file']);
            }
            return $ravioles;
        }


        public function getOneRaviole($id){
            $query = $this->bdd->prepare('SELECT * FROM raviole WHERE id = :id');
            $query->execute(['id'=> $id]);
            $fetchRes = $query->fetch();
            $raviole=new Raviole($fetchRes['id'],$fetchRes['ingredient_principal'],$fetchRes['titre'],$fetchRes['recette'],$fetchRes['file']);
           
            return $raviole;
       } 


      
        public function addRaviole($raviole){
            
            $query = $this->bdd->prepare('INSERT INTO raviole(ingredient_principal, titre, recette, file)
            VALUES(:ingredient_principal, :titre, :recette, :file)');
            $query->execute([
                'ingredient_principal' => $raviole->getIngredient_principal(),
                'titre' => $raviole->getTitre(),   
                'recette' => $raviole->getRecette(),
                'file' => $raviole->getFile(),
   
            ]);
            // $planets->setId($this->bdd->lastInsertId());
            // echo($planets->getId());
            // die();
        }


        public function deleteRaviole($id){
            $query = $this->bdd->prepare('DELETE FROM raviole WHERE id = :id');
            $query->execute(['id'=> $id]);
        
       } 



       public function updateRaviole($raviole){
       
        
            $query = $this->bdd->prepare('UPDATE raviole SET ingredient_principal= :ingredient, titre= :titre, recette= :recette, file= :file WHERE id = :id');
           
            $query->execute([
            'ingredient' => $raviole->getIngredient_principal(),
            'titre' => $raviole->getTitre(),   
            'recette' => $raviole->getRecette(),
            'file' => $raviole->getFile(),
            'id' => $raviole->getId(),
            ]);

        }



    }



?>