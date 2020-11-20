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
        $ufs = array();
        $response = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome");
        $array = json_decode($response, true);

        foreach($array as $uf){
            array_push($ufs, $uf['sigla']);
        }
        
        echo $this->view->render("home", ["ufs" => $ufs]);
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