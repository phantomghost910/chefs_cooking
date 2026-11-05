<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chefs cooking</title>

    <link rel="stylesheet" href="views/css/style.css">
    <script src="views/script/script.js" defer></script>

</head>

<body>

<header>
    <h1>Chef's cooking</h1>
</header>

<!-- Zoekbalk -->

<div class="topnav">

    <input
            type="text"
            id="searchInput"
            placeholder="Zoek een recept..."
    >

</div>

<!-- Filtersysteem -->

<div class="filters">

    <select id="categoryFilter">

        <option value="">Alle categorieën</option>
        <option value="pasta">Pasta</option>
        <option value="vlees">Vlees</option>
        <option value="vegetarisch">Vegetarisch</option>
        <option value="vis">Vis</option>
        <option value="rijst">Rijst</option>

    </select>

    <select id="timeFilter">

        <option value="">Alle bereidingstijden</option>
        <option value="15">Maximaal 15 minuten</option>
        <option value="20">Maximaal 20 minuten</option>
        <option value="30">Maximaal 30 minuten</option>
        <option value="45">Maximaal 45 minuten</option>

    </select>

    <select id="priceFilter">

        <option value="">Alle prijzen</option>
        <option value="2">Maximaal €2</option>
        <option value="3">Maximaal €3</option>
        <option value="4">Maximaal €4</option>

    </select>

    <button id="resetFilters" type="button">
        Filters wissen
    </button>

</div>

<!-- Aantal resultaten -->

<p id="resultCount"></p>

<!-- Geen recepten gevonden -->

<p id="noResults" style="display: none;">
    Geen recepten gevonden!
</p>

<!-- Container -->
<?php
if ($aantal_recepten > 0){?>

<div class="container">

    <!-- Recept 1 -->

        <?php foreach ($resultaten_recepten as $rij) { ?>
        <div class="box"
            data-category="pasta"
            data-time="20"
            data-price="2.50">

            <img src="<?= $rij["foto"] ?>" alt="Foto">

            <h1><?= $rij["Naam"] ?></h1>

            <h2>Prijs: <?= $rij["Prijs"] ?></h2>

            <h3>Bereidingstijd: <?= $rij["Tijd"] ?></h3>

            <p><?= $rij["info"] ?></p>

            <a href="recept.html?id=tomaten-pasta" class="recipeButton">
            Bekijk recept →
            </a>
        </div>
        <?php }  ?>


</div>
<?php }; ?>
</body>
</html>
