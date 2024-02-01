<?php

RequirePage::model('CRUD');
RequirePage::model('Recette');


class ControllerRecette extends Controller {

    public function index(){
        $recette = new Recette;
        $recette = $recette->select();
        

        return Twig::render('index.php', ['recettes'=>$recette]);

        
    }




}
?>
