<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Property;

class Web {

    private $view;

    public function __construct() 
    {
        $this->view = new Engine(__DIR__."/../../views");
    }

    public function home($data) 
    {
        echo $this->view->render("home");
    }

    public function listProperties($data)
    { 
        $model = new Property();

        $properties = $model->find("tipo = :tipo AND cidade = :cidade AND uf = :uf", "tipo={$data["tipo"]}&cidade={$data["cidade"]}&uf={$data["uf"]}")->fetch(true);
   
        echo $this->view->render("list", ["properties" => $properties]);
    }

    public function showProperty($data)
    {
        $model = new Property();

        $property = $model->findById($data['id']);

        echo $this->view->render("show", ["property" => $property]);
    }

    public function error($data) 
    {
        echo "Erro:";
        var_dump($data["errcode"]);
    }
}