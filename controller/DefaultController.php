<?php
class DefaultController{


    public function home()
    {
  
         $ravioleController = new ravioleController();
         $ravioleController->afficheRavioles();
 
      
    }
   
}

?>