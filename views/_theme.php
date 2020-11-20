<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>

    <link rel="stylesheet" href="<?= url("views/styles.css") ?>">
    <link rel="stylesheet" href="<?= url("views/bootstrap/css/bootstrap.min.css") ?>">
</head>
<body>

<nav class="main_nav">
    <?php if( $this->section("sidebar")):
        echo $this->section("sidebar"); 
    else:
    ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= url() ?>"><?= TITLE ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </nav>
    <?php
    endif; ?>
</nav>

<main class="main_content">
    <?= $this->section("content"); ?>
</main>

<footer class="main_footer">
<?= TITLE; ?> - Todos os Direitos Reservados
</footer>
    
</body>
</html>