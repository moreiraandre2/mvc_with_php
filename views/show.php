<?php $this->layout("_theme"); ?>

<div class="show_head">
    <h1>Detalhes do Imóvel</h1>
    <div class="show">
        <div class="show_box">
            <div>
                <img src="<?= url("views/".$property->image); ?>" alt="<?= $property->codigo; ?>">
                <h4><?= $property->codigo . " - " . $property->cidade . "/" . $property->uf; ?></h4>
            </div>
            <div class="show_description">
                <div class="show_item">
                    IPTU: R$ <?= $property->iptu; ?>
                    <br>
                    Condominio: R$ <?= $property->condominio; ?>
                    
                </div>
                <div class="show_item">
                    Dormitórios: <?= $property->dormitorios; ?>
                    <br>
                    Suíte: <?= $property->suite; ?>
                </div>
                <div class="show_item">
                    Banheiros: <?= $property->banheiros; ?>
                    <br>
                    Vagas: <?= $property->vagas; ?>
                </div>
                <div class="show_item">
                    Área: <?= $property->area; ?>
                    <br>
                    Tipo: <?= $property->tipo; ?>
                </div>
            </div>
        </div>
    </div>
</div>
