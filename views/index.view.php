
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chefs cooking</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="script/script.js" defer></script>

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

<div class="container">

    <!-- Recept 1 -->

    <div class="box"
         data-category="pasta"
         data-time="20"
         data-price="2.50">

        <img src="./images/tomaten pasta.webp" alt="Foto">

        <h1>Tomaten pasta</h1>

        <h2>Prijs: €1,80 – €2,50</h2>

        <h3>Bereidingstijd: 20 minuten</h3>

        <p>Zin in een heerlijke Italiaanse maaltijd zonder veel geld uit te geven? Ontdek deze smaakvolle spaghetti boordevol groenten!</p>

        <a href="recept.html?id=tomaten-pasta" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 2 -->

    <div class="box"
         data-category="vlees"
         data-time="25"
         data-price="3.50">

        <img src="./images/rijst.jpg" alt="Foto">

        <h1>Rijst met kip en groenten</h1>

        <h2>Prijs: €2,50 – €3,50</h2>

        <h3>Bereidingstijd: 25 minuten</h3>

        <p>Op zoek naar een voedzame maaltijd die je snel op tafel zet? Deze rijst met kip en groenten is perfect voor een drukke student!</p>

        <a href="recept.html?id=rijst-kip" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 3 -->

    <div class="box"
         data-category="vegetarisch"
         data-time="15"
         data-price="2.20">

        <img src="./images/omelet.png" alt="Foto">

        <h1>Groenteomelet</h1>

        <h2>Prijs: €1,50 – €2,20</h2>

        <h3>Bereidingstijd: 10–15 minuten</h3>

        <p>Weinig tijd en weinig ingrediënten in huis? Maak deze heerlijke groenteomelet die binnen 15 minuten klaar is!</p>

        <a href="recept.html?id=groenteomelet" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 4 -->

    <div class="box"
         data-category="vegetarisch"
         data-time="25"
         data-price="2.80">

        <img src="./images/chili.png" alt="Foto">

        <h1>Chili sin carne</h1>

        <h2>Prijs: €2,00 – €2,80</h2>

        <h3>Bereidingstijd: 25 minuten</h3>

        <p>Wie zegt dat lekker eten duur moet zijn? Deze goedgevulde chili zit boordevol smaak, groenten en plantaardige eiwitten!</p>

        <a href="recept.html?id=chili-sin-carne" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 5 -->

    <div class="box"
         data-category="vis"
         data-time="20"
         data-price="3.00">

        <img src="./images/tonijnPasta.jpg" alt="Foto">

        <h1>Pastasalade met tonijn</h1>

        <h2>Prijs: €2,00 – €3,00</h2>

        <h3>Bereidingstijd: 15–20 minuten</h3>

        <p>Geen zin om lang in de keuken te staan? Deze frisse pastasalade met tonijn is ideaal voor een snelle lunch of avondmaaltijd!</p>

        <a href="recept.html?id=tonijn-pasta" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 6 -->

    <div class="box"
         data-category="vegetarisch"
         data-time="30"
         data-price="2.80">

        <img src="./images/kikkererewten.jpg.webp" alt="Foto">

        <h1>Kikkererwtencurry</h1>

        <h2>Prijs: €2,00 – €2,80</h2>

        <h3>Bereidingstijd: 25–30 minuten</h3>

        <p>Zin in iets kruidigs en verrassends? Probeer deze romige kikkererwtencurry die lekker, gezond én budgetvriendelijk is!</p>

        <a href="recept.html?id=kikkererwtencurry" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 7 -->

    <div class="box"
         data-category="vlees"
         data-time="15"
         data-price="3.50">

        <img src="./images/wraps.png" alt="Foto">

        <h1>Volkoren wraps met kip</h1>

        <h2>Prijs: €2,50 – €3,50</h2>

        <h3>Bereidingstijd: 15 minuten</h3>

        <p>Op zoek naar een snelle maaltijd die je helemaal naar eigen smaak kunt vullen? Deze volkoren wraps met kip zijn de perfecte keuze!</p>

        <a href="recept.html?id=wraps-kip" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 8 -->

    <div class="box"
         data-category="vegetarisch"
         data-time="40"
         data-price="2.50">

        <img src="./images/aardappel.jpg" alt="Foto">

        <h1>Gepofte aardappel met hüttenkäse</h1>

        <h2>Prijs: €1,50 – €2,50</h2>

        <h3>Bereidingstijd: 30–40 minuten</h3>

        <p>Maak van een simpele aardappel een heerlijke maaltijd! Deze gepofte aardappel met hüttenkäse is verrassend lekker en goedkoop!</p>

        <a href="recept.html?id=aardappel" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 9 -->

    <div class="box"
         data-category="vegetarisch"
         data-time="30"
         data-price="2.20">

        <img src="./images/linzensoep-2.jpg" alt="Foto">

        <h1>Linzensoep</h1>

        <h2>Prijs: €1,50 – €2,20</h2>

        <h3>Bereidingstijd: 25–30 minuten</h3>

        <p>Op koude dagen is er niets lekkerder dan een warme kom soep! Deze voedzame linzensoep is goedkoop, makkelijk en perfect voor meerdere dagen!</p>

        <a href="recept.html?id=linzensoep" class="recipeButton">
            Bekijk recept →
        </a>

    </div>


    <!-- Recept 10 -->

    <div class="box"
         data-category="rijst"
         data-time="15"
         data-price="2.20">

        <img src="./images/FriedRice.jpg" alt="Foto">

        <h1>Gebakken rijst met ei</h1>

        <h2>Prijs: €1,50 – €2,20</h2>

        <h3>Bereidingstijd: 15 minuten</h3>

        <p>Nog wat rijst en groenten over in de koelkast? Gooi ze niet weg, maar maak er deze heerlijke en budgetvriendelijke gebakken rijst van!</p>

        <a href="recept.html?id=gebakken-rijst" class="recipeButton">
            Bekijk recept →
        </a>

    </div>

</div>

</body>
</html>
