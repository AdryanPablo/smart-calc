<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link rel="stylesheet" href="./src/styles/generic/reset.css">
    <link rel="stylesheet" href="./src/styles/settings/colors.css">
    <link rel="stylesheet" href="./src/styles/settings/fonts.css">
    <link rel="stylesheet" href="./src/styles/components/components.css">
</head>
<body>
    
    <form action="./index.php" method="POST" class="calculator-panel">

        <input type="text" name="expression" class="expression">
        <article name="calculator-display" class="calculator-display" disabled><?php
            
            $expression = $_POST["expression"] ?? null;

            if ($expression !== null) {

                echo $expression;

            }

        ?></article>

        <article class="calculator-buttons">

            <button type="button" class="calculator-button -operator">^</button>
            <button type="button" class="calculator-button -operator">/</button>
            <button type="button" class="calculator-button -operator">*</button>
            <button type="button" class="calculator-button -operator">-</button>

            <button type="button" class="calculator-button">7</button>
            <button type="button" class="calculator-button">8</button>
            <button type="button" class="calculator-button">9</button>
            <button type="button" class="calculator-button -operator">+</button>

            <button type="button" class="calculator-button">4</button>
            <button type="button" class="calculator-button">5</button>
            <button type="button" class="calculator-button">6</button>
            <button type="button" class="calculator-button -point">.</button>            

            <button type="button" class="calculator-button">1</button>
            <button type="button" class="calculator-button">2</button>
            <button type="button" class="calculator-button">3</button>
            <button type="button" class="calculator-button -comma">,</button>
            
            <button type="button" class="calculator-button -zero">0</button>
            <button type="submit" class="calculator-button -enter">Enter</button>
            
        </article>

    </form>
    
    <script type="module" src="./src/tools/insertContentOnDisplay.js"></script>
    <script type="module" src="./src/tools/submitWithEnterKey.js"></script>
</body>
</html>