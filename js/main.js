
const pokedexDiv = document.querySelector(".pokedex");
const searchPoke = document.querySelector(".pokemon-search");
const searchPokeBtn = document.querySelector(".go-btn");
let pokedex = {}; // {1 : {"name": bulbasaur, "img" : url, "type" : ["grass", "poison"], "desc" : "..."}}

window.onload = async function(){
    for(let i = 1;i<= 1000;i++){
        await getPokemon(i);
    }    
}

//Get pokemon data
async function getPokemon(num){
    console.log("processing");

    const url = `https://pokeapi.co/api/v2/pokemon/${num}`;

    let fetchUrl = await fetch(url);
    console.log("done fetching");

    let pokemonData = await fetchUrl.json();


    let name = pokemonData["name"];
    let pokemonType = pokemonData["types"];
    let pokemonImg = pokemonData["sprites"]["other"]["official-artwork"]["front_default"];

    fetchUrl = await fetch(pokemonData["species"]["url"]);
    let pokemonDesc = await fetchUrl.json();

    console.log("done fetching");
    
    let desc = pokemonDesc["flavor_text_entries"][0]["flavor_text"];
    let gen = pokemonDesc["generation"]["name"];
    pokedex[num] = {"name" : name,
                    "type" : pokemonType,
                    "image" : pokemonImg,
                    "desc" : desc,
                    "gen" : gen
                }
    
    //console.log(gen);
    //console.log(pokedex[num]);
    
    addPokemonDisplay(pokedex[num], num);
    addToPokemonList(pokedex[num], num);

}
    
    function addPokemonDisplay(pokemon, id){
    let pokedexDiv = document.createElement("div");
    pokedexDiv.classList.add("carousel-item");
    if (id === 1){
        pokedexDiv.classList.add("active");

    }

    let pokedex = document.createElement("div");
    pokedex.classList.add("pokedex");

    let entry = document.createElement("div");
    entry.classList.add("container-fluid");

     
    let imgRow = document.createElement("div");
    imgRow.classList.add("row");
    imgRow.classList.add("pokemon-img");
    imgRow.classList.add("w-75");

    imgRow.style.border = "2px solid black";
    imgRow.style.borderRadius = "5px";
    imgRow.style.margin = "auto";
    imgRow.style.marginTop = "40px";
    imgRow.style.marginBottom = "40px";


    let img = document.createElement("img");
    img.src = pokemon["image"];
    img.style.width = "500px";
    img.style.width = "500px";


    imgRow.appendChild(img);

    let nameRow = document.createElement("div");
    nameRow.style.border = "2px solid black";
    nameRow.style.textAlign = "center";
    nameRow.style.verticalAlign = "middle";
    nameRow.style.borderRadius = "5px";
    nameRow.style.background = "white";
    nameRow.style.margin = "auto";
    nameRow.classList.add("row");
    nameRow.classList.add("pokemon-name");
    let name = document.createElement("p");
    pokemon["name"]
    name.textContent = pokemon["name"];
    name.style.margin = "10px 10px 10px 5px";
    nameRow.appendChild(name);
    
    let typeRow = document.createElement("div");
    typeRow.style.border = "2px solid black";
    typeRow.classList.add("row");
    typeRow.classList.add("pokemon-type");
    typeRow.style.textAlign = "center";
    typeRow.style.verticalAlign = "middle";
    typeRow.style.borderRadius = "5px";
    typeRow.style.background = "white";
    typeRow.style.margin = "auto";
    typeRow.style.marginTop = "5px";
     for(let t in pokemon["type"]){
        //console.log(pokemon["type"][t]);
        typeCol = document.createElement("div");
        typeCol.classList.add("col");
        typeCol.style.padding = "5px";
        type = document.createElement("p");
        type.style.color = "white";

        switch(pokemon["type"][t]["type"]["name"]){
            case "normal":
                type.style.background = "#c796a5";
                type.style.border = "2px solid #75515b";
            break;
            case "bug":
                type.style.background = "#3b9852";
                type.style.border = "2px solid #1c4b27";

            break;
            case "dark":
                type.style.background = "#5a5979";
                type.style.border = "2px solid #040707";

            break;
            case "dragon":
                type.style.background = "#63c9d8";
                type.style.border = "2px solid #458a93";

            break;
            case "electric":
                type.style.background = "#EBE434";
                type.style.border = "2px solid #e3e32b";

            break;
            case "fairy":
                type.style.background = "#ea1369";
                type.style.border = "2px solid #971944";

            break;
            case "fighting":
                type.style.background = "#ef6138";
                type.style.border = "2px solid #994025";
            break;
            case "fire":
                type.style.background = "#fe4c5a";
                type.style.border = "2px solid #ab2024";
            break;
            case "flying":
                type.style.background = "#93b2c7";
                type.style.border = "2px solid #49677d";

            break;
            case "ghost":
                type.style.background = "#906790";
                type.style.border = "2px solid #33336b";

            break;
            case "grass":
                type.style.background = "#27cb4f";
                type.style.border = "2px solid #137c3d";

            break;
            case "ground":
                type.style.background = "#6e491f";
                type.style.border = "2px solid #a4712b";

            break;
            case "ice":
                type.style.background = "#86EFFA";
                type.style.border = "2px solid #86d2f5";

            break;
            case "poison":
                type.style.background = "#9b69db";
                type.style.border = "2px solid #5e2d88";

            break;
            case "psychic":
                type.style.background = "#f81c91";
                type.style.border = "2px solid #a42a6c";
            break;
            case "rock":
                type.style.background = "#8b3e21";
                type.style.border = "2px solid #48180b";

            break;
            case "steel":
                type.style.background = "#42bd94";
                type.style.border = "2px solid #5f756c";

            break;
            case "water":
                type.style.background = "#86a8fc";
                type.style.border = "2px solid #1552e2";
            break;
        }
        type.style.textAlign = "center";
        type.style.margin = "auto";
        type.textContent  = pokemon["type"][t]["type"]["name"];
        
        typeCol.appendChild(type);
        typeRow.appendChild(typeCol);
    }

    let descRow = document.createElement("div");
    descRow.style.border = "2px solid black";
    descRow.classList.add("row");
    descRow.classList.add("pokemon-desc");
    let desc = document.createElement("p");
    descRow.style.textAlign = "center";
    descRow.style.verticalAlign = "middle";
    descRow.style.borderRadius = "5px";
    descRow.style.background = "white";
    descRow.style.margin = "auto";
    descRow.style.marginTop = "5px";
    descRow.style.height = "100px";
    desc.textContent = pokemon["desc"];
    descRow.appendChild(desc);

    entry.appendChild(imgRow);
    entry.appendChild(nameRow);
    entry.appendChild(typeRow);
    entry.appendChild(descRow);
    pokedex.appendChild(entry);
    pokedexDiv.appendChild(entry);

    document.querySelector(".carousel-pokedex-inner").appendChild(pokedexDiv);
    
}


function addToPokemonList(poke, id){
    let btn = document.createElement("button");
    btn.classList.add("pokeBtn");
    btn.type = "button";
    btn.style.height = "50px";



    let content = document.createElement("div");
    content.classList.add("container");
    let row = document.createElement("row");
    row.classList.add("row");
    let name = document.createElement("p");
    name.classList.add("col");
    name.textContent = poke["name"];
    name.style.margin = "auto";
    let pokeId = document.createElement("p");
    pokeId.classList.add("col");
    pokeId.textContent = "" + id;
    pokeId.style.margin = "auto";

    row.appendChild(name);
    row.appendChild(pokeId);
    content.appendChild(row);
    btn.appendChild(content);

    btn.setAttribute("data-bs-target", "#pokemonCarousel");
    btn.setAttribute("data-bs-slide-to", id-1);
    document.querySelector(".pokemon-entries").appendChild(btn);
}

searchPoke.addEventListener("input", () => {
    //console.log(searchPoke.value);
    //console.log(Object.keys(pokedex).find(key => pokedex[key]["name"] === searchPoke.value));
    let keyValue = Number(Object.keys(pokedex).find(key => pokedex[key]["name"] === searchPoke.value));
    if(keyValue in pokedex)
        searchPokeBtn.setAttribute("data-bs-slide-to", keyValue-1);
    else
        searchPokeBtn.setAttribute("data-bs-slide-to", 0);
});

