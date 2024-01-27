<?php require("partials/thehead.php")?>
    
<?php require("partials/nav.php")?>

    <div class = "container flexbox-container pokdex">
        <div class = "row gx-0">
            <div class = "col pokedex-column">
                <div id="pokemonCarousel" class="carousel slide" style = "width: 400px; height: 550px;">
                <div class="carousel-inner carousel-pokedex-inner">

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#pokemonCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#pokemonCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>


            <div class = "col list-column">
                <div class = "pokemon-list">
                    <div style = "position:sticky; width: 100%;">
                        <div class = "container">
                            <div class = "row justify-content-center gx-0">
                                <div class = "col">
                                    <input type = "text" placeholder = "Enter pokemon name" class = "pokemon-search">
                                </div>
                                <div class = "col">
                                    <button type = "button" data-bs-target="#pokemonCarousel" class = "go-btn">Go</button>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col d-flex justify-content-center" style = "margin-top: 10px; color: white;background: black;">
                                    <p style = "margin: auto;">Name</p>
                                </div>
                                <div class = "col d-flex" style = "margin-top: 10px; color: white; background: black;">
                                    <p style = "margin: auto; margin-left: 74px;">id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "pokemon-entries">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "partials/footer.php"?>


