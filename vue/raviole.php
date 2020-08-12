
<a href="index.php?controller=raviole&action=addformraviole">ajouter une recette</a>


<!-- <img src="/PHPOO/MVCraviole/star1.jpg" height=100 width=100> </img> -->

  <table class="table table-dark">
      <thead>
          <tr>
          <th scope="col">id</th>
          <th scope="col">Titre</th>
          <th scope="col">Ingredient principal</th>
          <th scope="col">recette</th>
          <th scope="col">Photo</th>
          </tr>
      </thead>
      <tbody>

          <?php
             
              foreach ($mesRavioles as $raviole) {
                  ?>
                  <tr>
                  <td><?php echo($raviole->getId()); ?></td>
                  <td><?php echo($raviole->gettitre()); ?></td>
                  <td><?php echo($raviole->getingredient_principal()); ?></td>
                  <td><?php echo($raviole->getrecette()); ?></td>
                  
                
                  
                  <td><img  height="250" width="338" src="<?php echo('vue/telechargement/'.$raviole->getfile()); ?>"/></td>

                  <td>
                  <a href="index.php?controller=raviole&action=editraviole&id=<?php echo $raviole->getId()?>">Detail</a>
                  </td>
                  <td>
                  <a href="index.php?controller=raviole&action=modifformraviole&id=<?php echo $raviole->getId()?>">Modifier</a>
                  </td>
                  <td>
                  <a href="index.php?controller=raviole&action=supprraviole&id=<?php echo $raviole->getId()?>">Supprimer</a>
                  </td>
              </tr>
           <?php 
              } 
              
             ?> 
      </tbody>
  </table>
