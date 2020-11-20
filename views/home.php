<?php $this->layout("_theme"); ?>

<div class="home">
    <div class="home_head">
        <h1>Seja Bem Vindo</h1>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque semper dictum eros laoreet scelerisque. Pellentesque vel sem lorem. Quisque elementum ante ipsum, at egestas felis pharetra in. Ut quis consectetur sapien. Maecenas mattis lectus quis felis imperdiet, eu tincidunt ex rutrum. Donec elit erat, scelerisque eget neque tristique, varius pharetra magna. Vivamus varius, eros eget consequat feugiat, sem risus ullamcorper tellus, at ultrices purus enim eu nulla. Curabitur tincidunt lobortis enim, id sodales nisi posuere ornare.
        </p>
        <form action="<?= URL_BASE."/busca" ?>" method="post">
            <input type="hidden" name="_method" value="post">
            <select name="tipo" id="tipo">
                <option value="Aluguel">Aluguel</option>
                <option value="Venda">Venda</option>
            </select>
            <select name="uf" id="uf">
                <option value="">Estado -</option>
            <?php 
                foreach($ufs as $uf): 
            ?>
                <option value="<?= $uf; ?>"><?= $uf; ?></option>
            <?php
                endforeach; 
                ?>
            ?>
            </select>
            <input type="text" name="cidade" id="cidade">           
            <button type="submit">Buscar</button>
        </form>
    </div>    
</div>
