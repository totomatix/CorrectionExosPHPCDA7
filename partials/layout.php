<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/assets/style.css">
    <title>PHP - <?= $titre ?> <?php echo $titre ?></title>
</head>

<body>
    <?php require_once "menu.php"; ?>

    <div class="container">
        <h1 class="center-align"><?= $titre ?></h1>
        <div class="divider"></div>
        <?= $content ?>
    </div>

    <!-- <?php require_once "footer.php"; ?> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/assets/app.js"></script>
</body>

</html>