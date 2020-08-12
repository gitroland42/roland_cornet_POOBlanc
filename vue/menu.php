<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- on peut faire un fichier appart pour le stylesheet et faire des includes -->
                
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       
       
       <title>Raviole</title>
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ravioles</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- <img class="img-fluid" src="../../../assets/images/star.jpg"> -->
            <ul class="navbar-nav">
            <li class="nav-item">
          
                <!-- <a class="nav-link" routerLink="/home"> Home </a> -->
                <a class="nav-link" href="index.php?controller=default&action=home"> Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=raviole&action=affichage">Recettes</a>
            </li>
           

            

        </div>
        
    </nav>
    
    
</body>
</html>