<form id="center" method="post" action="index.php?controller=raviole&action=modifraviole&id=<?php echo($maRaviole->getId());?>">

    
    <label for="titre">saisir le titre de la recette?</label>
    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo($maRaviole->getTitre());?>"> 
     <!-- required>  -->
    

    <label for="ingredient_principal">saisir l'ingredient principal ?</label>
    <input type="text" class="form-control" id="ingredient_principal" name="ingredient_principal" value="<?php echo($maRaviole->getIngredient_principal());?>">
     <!-- required > -->
    

    <label for="recette">saisir la recette ? </label>
    <textarea type="text" class="form-control" id="recette" name="recette"> <?php echo($maRaviole->getRecette());?></textarea>
   


    <div>
    <label for="file">Selectionner une photo</label>    
    <input type="file" name="file" value="<?php echo($maRaviole->getFile());?>"> <br><br>
    </div>


    <input class="btn btn-success" type="submit" value="valider">
    <?php
      if(isset($errors) && count($errors) != 0){
            
        foreach ( $errors as $error){
          echo('<div class="error">'.$error.'</div>');
       }
      }
    ?>


  </form>
