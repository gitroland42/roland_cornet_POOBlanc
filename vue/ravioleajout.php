<form id="center" method="post" action="index.php?controller=raviole&action=addraviole" enctype="multipart/form-data">

    
    <label for="titre">saisir le titre de la recette?</label>
    <input type="text" class="form-control" id="titre" name="titre">
     <!-- required>  -->
    

    <label for="ingredient_principal">saisir l'ingredient principal ?</label>
    <input type="text" class="form-control" id="ingredient_principal" name="ingredient_principal" >
     <!-- required > -->
    


    <label for="recette">saisir la recette ?</label>
    <textarea type="text" class="form-control" id="recette" name="recette"> </textarea>
   


    <div>
    <label for="file">Selectionner une photo</label>    
    <input type="file" name="file"> <br><br>
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
