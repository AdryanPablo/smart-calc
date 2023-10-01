<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link rel="stylesheet" href="../styles/generic/reset.css">
    <link rel="stylesheet" href="../styles/settings/colors.css">
    <link rel="stylesheet" href="../styles/settings/fonts.css">
    <link rel="stylesheet" href="../styles/components/components.css">
</head>
<body>
    
    <section class="calculator-panel">

        <article class="calculator-display">

            <?php

                echo "Display";

            ?>


        </article>

        <article class="calculator-buttons">

            <button class="calculator-button -operator">^</button>
            <button class="calculator-button -operator">/</button>
            <button class="calculator-button -operator">*</button>
            <button class="calculator-button -operator">-</button>

            <button class="calculator-button">7</button>
            <button class="calculator-button">8</button>
            <button class="calculator-button">9</button>
            <button class="calculator-button -operator">+</button>

            <button class="calculator-button">4</button>
            <button class="calculator-button">5</button>
            <button class="calculator-button">6</button>
            <button class="calculator-button -point">.</button>            

            <button class="calculator-button">1</button>
            <button class="calculator-button">2</button>
            <button class="calculator-button">3</button>
            <button class="calculator-button -comma">,</button>
            
            <button class="calculator-button -zero">0</button>
            <button class="calculator-button -enter">Enter</button>
            
        </article>

    </section>
    
</body>
</html>