
const searchInput = document.getElementById("searchInput");
const categoryFilter = document.getElementById("categoryFilter");
const timeFilter = document.getElementById("timeFilter");
const priceFilter = document.getElementById("priceFilter");

const recipes = document.querySelectorAll(".box");
const noResults = document.getElementById("noResults");
const resultCount = document.getElementById("resultCount");
const resetFilters = document.getElementById("resetFilters");

function filterRecipes() {

    const searchValue = searchInput.value.toLowerCase().trim();
    const selectedCategory = categoryFilter.value;
    const selectedTime = Number(timeFilter.value) || Infinity;
    const selectedPrice = Number(priceFilter.value) || Infinity;

    let found = 0;

    recipes.forEach(recipe => {

        const name = recipe.querySelector("h1").textContent.toLowerCase();
        const description = recipe.querySelector("p").textContent.toLowerCase();

        const category = recipe.dataset.category;
        const time = Number(recipe.dataset.time);
        const price = Number(recipe.dataset.price);

        // Zoek op naam en beschrijving
        const matchesSearch =
            name.includes(searchValue) ||
            description.includes(searchValue);

        // Controleer de filters
        const matchesCategory =
            selectedCategory === "" ||
            category === selectedCategory;

        const matchesTime = time <= selectedTime;

        const matchesPrice = price <= selectedPrice;

        // Toon of verberg recept
        if (
            matchesSearch &&
            matchesCategory &&
            matchesTime &&
            matchesPrice
        ) {

            recipe.style.display = "flex";
            found++;

        } else {

            recipe.style.display = "none";

        }

    });

    // Toon aantal gevonden recepten
    resultCount.textContent =
        found + (found === 1 ? " recept gevonden" : " recepten gevonden");

    // Geen resultaten
    noResults.style.display = found === 0 ? "block" : "none";
}

// Luister naar veranderingen
searchInput.addEventListener("input", filterRecipes);
categoryFilter.addEventListener("change", filterRecipes);
timeFilter.addEventListener("change", filterRecipes);
priceFilter.addEventListener("change", filterRecipes);

// Filters resetten
resetFilters.addEventListener("click", () => {

    searchInput.value = "";
    categoryFilter.value = "";
    timeFilter.value = "";
    priceFilter.value = "";

    filterRecipes();

});

// Start
filterRecipes();
