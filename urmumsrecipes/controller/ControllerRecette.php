<?php

RequirePage::model('CRUD');
RequirePage::model('Recette');


class ControllerRecette extends Controller {

    public function index(){
        
        $recette = new Recette;
        $recette = $recette->select();

        return Twig::render('recette-index.php', ['recettes'=>$recette]);

        
    }

    public function show($id){

        $recette = new Recette;
        $selectId = $recette->selectId($id);

        return Twig::render('recette-show.php', ['recette'=>$selectId]);
    }

    public function create(){

        $recette = new Recette;

        return Twig::render('recette-create.php');
    }

    public function store(){

        $recette = new Recette;
        $insert = $recette->insert($_POST);

        RequirePage::url('recette/show/' . $insert);
    }

    public function edit($id){
        $recette = new Recette;
        $selectId = $recette->selectId($id);

        return Twig::render('recette-edit.php', ['recette' => $selectId]);
    }

    public function update(){
        $recette = new Recette;
        $update = $recette->update($_POST);
        RequirePage::url('recette/show/'.$_POST['id']);
    }
    


    public function destroy(){
        $recette = new Recette;
        $delete = $recette->delete($_POST['id']);
        RequirePage::url('recette/index');
    }


}
?>
