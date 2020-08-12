<main role="main">

    <div class="container p-5">
        <div class="row">

           <div class="col-md-12 ">
              
                <a title="retour" href="index.php?controller=raviole&action=affichage">retour menu</a> 
                
                <div class="card-header">
                     <h1><?php echo($maRaviole->getTitre()) ?></h1><br>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo($maRaviole->getIngredient_principal()) ?> </li>
                    <li class="list-group-item"><?php echo($maRaviole->getRecette()) ?> </li>
                    <li class="list-group-item">
                    
                    <img  height="250" width="338" src="<?php echo('vue/telechargement/'.$maRaviole->getfile()); ?>"/>
                    </li>
                </ul>
             </div>
         </div>
    </div>
</main>