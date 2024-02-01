<?php

RequirePage::model('CRUD');



class ControllerTimbre extends Controller {

    public function index(){
        $recette = new Recette;
        $recette = $recette->select();
        

        return Twig::render('recette/index.php', ['recettes'=>$recette]);

        
    }




}
?>
