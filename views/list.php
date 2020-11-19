<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    if($properties):
        foreach($properties as $prop):
        ?>
            <div style="width: 500px; border: 1px solid #999; margin: 12px;">
                <img src="<?= url("views/".$prop->image); ?>" alt="<?= $prop->codigo; ?>" >
                <h5>Codigo: <?= $prop->codigo; ?></h5>
                <span>Cidade/UF: <?= $prop->cidade; ?></span> - 
                <span><?= $prop->uf; ?></span><br>
                <span>IPTU: <?= $prop->iptu; ?></span><br>
                <span>Area: <?= $prop->area; ?></span><br>
                <span>Dormitorios: <?= $prop->dormitorios; ?></span><br>
                <span>Banheiros: <?= $prop->banheiros; ?></span><br>
                <span>Suítes: <?= $prop->suites; ?></span><br>
                <span>Vagas: <?= $prop->vagas; ?></span><br>
                <span><?= $prop->tipo; ?></span>
            </div>
        <?php
        endforeach;
    else:
        echo "Não possível encontrar dados.";
    endif;
    ?>
</body>
</html>