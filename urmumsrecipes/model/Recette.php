<?php
require_once('CRUD.php');

class Recette extends CRUD {

    protected $table ='recette';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'description', 'ingredient', 'etapes'];
    
};