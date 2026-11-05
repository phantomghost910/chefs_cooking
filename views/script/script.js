    const searchInput = document.getElementById("searchInput");
    const recipes = document.querySelectorAll(".box");
    const noResults = document.getElementById("noResults");

    searchInput.addEventListener("input", function() {

    const searchValue = searchInput.value.toLowerCase();
    let found = 0;

    recipes.forEach(function(recipe) {

    const recipeName = recipe.querySelector("h1").textContent.toLowerCase();

    if (recipeName.includes(searchValue)) {
    recipe.style.display = "flex";
    found++;
} else {
    recipe.style.display = "none";
}

});

    if (found === 0) {
    noResults.style.display = "block";
} else {
    noResults.style.display = "none";
}

});

