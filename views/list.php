<?php $this->layout("_theme"); ?>

<div class="list_head">
    <h1>Listagem de imóveis com base me sua pesquisa</h1>
    <div class="list">
        <?php 
        
        if($properties):
            foreach($properties as $prop):
            ?>
            <a href="<?= URL_BASE . "/show/{$prop->id}" ?>">
                <div class="list_item">
                    <img src="<?= url("views/".$prop->image); ?>" alt="<?= $prop->codigo; ?>" >
                    <div class="list_description">
                        <h5>Codigo: <?= $prop->codigo; ?></h5>
                        <span>Cidade/UF: <?= $prop->cidade; ?></span> - 
                        <span><?= $prop->uf; ?></span><br>
                        
                        <span class="list_item_type"><?= $prop->tipo; ?></span>
                    </div>
                </div>
            </a>
            <?php
            endforeach;
        else:
            echo "Não possível encontrar dados.";
        endif;
        ?>
    </div>
</div>