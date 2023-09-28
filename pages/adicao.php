<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adição</title>

    <link rel="stylesheet" href="../styles/generic/reset.css">
    <link rel="stylesheet" href="../styles/settings/colors.css">
    <link rel="stylesheet" href="../styles/settings/fonts.css">
    <link rel="stylesheet" href="../styles/components/components.css">
</head>
<body>

    <?php 
    
        $numero1 = $_POST["numero1"] ?? null;
        $numero2 = $_POST["numero2"] ?? null;

    ?>

    <section class="section-content">

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST" class="main-form">

            <legend class="form-title">Adição:</legend>

            <label for="numero1" class="description-tag">Número 1:</label>
            <input type="number" name="numero1" class="input-box" id="numero1" value="<?=$numero1?>">
            <label for="numero2" class="description-tag">Número 2:</label>
            <input type="number" name="numero2" class="input-box" id="numero2" value="<?=$numero2?>">
            <button type="submit" class="submit-button">Somar</button>
        </form>

        <article class="result-panel">

            <?php
                if (isset($numero1) and isset($numero2)) {
                    $soma = $numero1 + $numero2;
                    echo "$numero1 + $numero2 = $soma";
                }
            ?>

        </article>

        <a href="../index.html" class="back-button"><</a>

    </section>
    
</body>
</html>