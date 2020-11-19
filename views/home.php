<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home | Imobiliária</h1>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque semper dictum eros laoreet scelerisque. Pellentesque vel sem lorem. Quisque elementum ante ipsum, at egestas felis pharetra in. Ut quis consectetur sapien. Maecenas mattis lectus quis felis imperdiet, eu tincidunt ex rutrum. Donec elit erat, scelerisque eget neque tristique, varius pharetra magna. Vivamus varius, eros eget consequat feugiat, sem risus ullamcorper tellus, at ultrices purus enim eu nulla. Curabitur tincidunt lobortis enim, id sodales nisi posuere ornare.
    </p>
    <form action="<?= $url."/busca" ?>" method="post">
        <input type="hidden" name="_method" value="post">
        <select name="tipo" id="tipo">
            <option value="Aluguel">Aluguel</option>
            <option value="Venda">Venda</option>
        </select>
        <input type="text" name="cidade" id="cidade">
        <input type="text" name="uf" id="uf">
        <button type="submit">Buscar</button>
    </form>
</body>
</html>