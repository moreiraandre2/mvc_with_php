<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Property extends DataLayer {
    public function __construct() {
        //parent::__construct(table_name, campos_requeridos, chave_primaira, timestamps);
        parent::__construct("imoveis", ["codigo", "uf", "tipo"], "id", false);
    }
}