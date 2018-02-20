<?php
/** 
 * @file        recherche.php
 * @author      Oudayan Dutta, Zoraida Ortiz, Denise Ratté, Jorge Subirats 
 * @version     1.0
 * @date        10 février 2018
 * @brief       Page de recherche du site
 * @details     Liens pour recherche de logements par carte ou par liste
 */ 
?>
<main class="container-fluid mx-3">
    <div class="row">
        <aside class="recherche col-lg-3 border rounded py-3 mt-2">
            <form id="formulaire_recherche" method="post" action="<?= $donnees["action"] ?>" class="py-2">
                <input type="hidden" name="action" value="recherche">
                <div class="form-group d-flex justify-content-between">
                    <label>Trier par&nbsp;:</label>
                    <input type="checkbox" name="tri" <?= $donnees["tri"] ?> data-toggle="toggle" data-on="Prix" data-off="Évaluation" data-onstyle="bleu" data-offstyle="orange">
                    <input type="checkbox" name="asc" <?= $donnees["asc"] ?> data-toggle="toggle" data-on="Asc." data-off="Desc." data-onstyle="bleu" data-offstyle="orange">
                </div>
                <div class="form-group">
                    <label for="region">Région&nbsp;:</label>
                    <select class="form-control" id="region" name="region">
                        <option value="1" <?= ($donnees['region'] == 1 ? 'selected' : 'disabled') ?>>Bas-Saint-Laurent</option>
                        <option value="2" <?= ($donnees['region'] == 2 ? 'selected' : 'disabled') ?>>Saguenay–Lac-Saint-Jean</option>
                        <option value="3" <?= ($donnees['region'] == 3 ? 'selected' : 'disabled') ?>>Capitale-Nationale</option>
                        <option value="4" <?= ($donnees['region'] == 4 ? 'selected' : 'disabled') ?>>Mauricie</option>
                        <option value="5" <?= ($donnees['region'] == 5 ? 'selected' : 'disabled') ?>>Estrie</option>
                        <option value="6" <?= ($donnees['region'] == 6 ? 'selected' : 'disabled') ?>>Montréal</option>
                        <option value="7" <?= ($donnees['region'] == 7 ? 'selected' : 'disabled') ?>>Outaouais</option>
                        <option value="8" <?= ($donnees['region'] == 8 ? 'selected' : 'disabled') ?>>Abitibi-Témiscamingue</option>
                        <option value="9" <?= ($donnees['region'] == 9 ? 'selected' : 'disabled') ?>>Côte-Nord</option>
                        <option value="10" <?= ($donnees['region'] == 10 ? 'selected' : 'disabled') ?>>Nord-du-Québec</option>
                        <option value="11" <?= ($donnees['region'] == 11 ? 'selected' : 'disabled') ?>>Gaspésie–Îles-de-la-Madeleine</option>
                        <option value="12" <?= ($donnees['region'] == 12 ? 'selected' : 'disabled') ?>>Chaudière-Appalaches</option>
                        <option value="13" <?= ($donnees['region'] == 13 ? 'selected' : 'disabled') ?>>Laval</option>
                        <option value="14" <?= ($donnees['region'] == 14 ? 'selected' : 'disabled') ?>>Lanaudière</option>
                        <option value="15" <?= ($donnees['region'] == 15 ? 'selected' : 'disabled') ?>>Laurentides</option>
                        <option value="16" <?= ($donnees['region'] == 16 ? 'selected' : 'disabled') ?>>Montérégie</option>
                        <option value="17" <?= ($donnees['region'] == 17 ? 'selected' : 'disabled') ?>>Centre-du-Québec</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rayon">Rayon&nbsp;:</label>
                    <select class="form-control" id="rayon" name="rayon">
                        <option value="0.5" <?= ($donnees['rayon'] == 0.5 ? 'selected' : '') ?>>0.5 KM</option>
                        <option value="1" <?= ($donnees['rayon'] == 1 ? 'selected' : '') ?>>1 KM</option>
                        <option value="2" <?= ($donnees['rayon'] == 2 ? 'selected' : '') ?>>2 KM</option>
                        <option value="3" <?= ($donnees['rayon'] == 3 ? 'selected' : '') ?>>3 KM</option>
                        <option value="4" <?= ($donnees['rayon'] == 4 ? 'selected' : '') ?>>4 KM</option>
                        <option value="5" <?= ($donnees['rayon'] == 5 ? 'selected' : '') ?>>5 KM</option>
                        <option value="10" <?= ($donnees['rayon'] == 10 ? 'selected' : '') ?>>10 KM</option>
                        <option value="15" <?= ($donnees['rayon'] == 15 ? 'selected' : '') ?>>15 KM</option>
                        <option value="20" <?= ($donnees['rayon'] == 20 ? 'selected' : '') ?>>20 KM</option>
                        <option value="25" <?= ($donnees['rayon'] == 25 ? 'selected' : '') ?>>25 KM</option>
                        <option value="50" <?= ($donnees['rayon'] == 50 ? 'selected' : '') ?>>50 KM</option>
                        <option value="75" <?= ($donnees['rayon'] == 75 ? 'selected' : '') ?>>75 KM</option>
                        <option value="100" <?= ($donnees['rayon'] == 100 ? 'selected' : '') ?>>100 KM</option>
                        <option value="150" <?= ($donnees['rayon'] == 150 ? 'selected' : '') ?>>150 KM</option>
                        <option value="200" <?= ($donnees['rayon'] == 200 ? 'selected' : '') ?>>200 KM</option>
                        <option value="250" <?= ($donnees['rayon'] == 250 ? 'selected' : '') ?>>250 KM</option>
                        <option value="500" <?= ($donnees['rayon'] == 500 ? 'selected' : '') ?>>500 KM</option>
                        <option value="1000" <?= ($donnees['rayon'] == 1000 ? 'selected' : '') ?>>1000 KM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prixMin">Entre&nbsp;:</label>
                    <select class="form-control" id="prixMin" name="prixMin">
                        <option value="0" <?= ($donnees['prixMin'] == 0 ? 'selected' : '') ?>>Aucun prix minimum</option>
                        <option value="25" <?= ($donnees['prixMin'] == 25 ? 'selected' : '') ?>>25 $</option>
                        <option value="50" <?= ($donnees['prixMin'] == 50 ? 'selected' : '') ?>>50 $</option>
                        <option value="75" <?= ($donnees['prixMin'] == 75 ? 'selected' : '') ?>>75 $</option>
                        <option value="100" <?= ($donnees['prixMin'] == 100 ? 'selected' : '') ?>>100 $</option>
                        <option value="125" <?= ($donnees['prixMin'] == 125 ? 'selected' : '') ?>>125 $</option>
                        <option value="150" <?= ($donnees['prixMin'] == 150 ? 'selected' : '') ?>>150 $</option>
                        <option value="175" <?= ($donnees['prixMin'] == 175 ? 'selected' : '') ?>>175 $</option>
                        <option value="200" <?= ($donnees['prixMin'] == 200 ? 'selected' : '') ?>>200 $</option>
                        <option value="225" <?= ($donnees['prixMin'] == 225 ? 'selected' : '') ?>>225 $</option>
                        <option value="250" <?= ($donnees['prixMin'] == 250 ? 'selected' : '') ?>>250 $</option>
                        <option value="275" <?= ($donnees['prixMin'] == 275 ? 'selected' : '') ?>>275 $</option>
                        <option value="300" <?= ($donnees['prixMin'] == 300 ? 'selected' : '') ?>>300 $</option>
                        <option value="325" <?= ($donnees['prixMin'] == 325 ? 'selected' : '') ?>>325 $</option>
                        <option value="350" <?= ($donnees['prixMin'] == 350 ? 'selected' : '') ?>>350 $</option>
                        <option value="375" <?= ($donnees['prixMin'] == 375 ? 'selected' : '') ?>>375 $</option>
                        <option value="400" <?= ($donnees['prixMin'] == 400 ? 'selected' : '') ?>>400 $</option>
                        <option value="425" <?= ($donnees['prixMin'] == 425 ? 'selected' : '') ?>>425 $</option>
                        <option value="450" <?= ($donnees['prixMin'] == 450 ? 'selected' : '') ?>>450 $</option>
                        <option value="475" <?= ($donnees['prixMin'] == 475 ? 'selected' : '') ?>>475 $</option>
                        <option value="500" <?= ($donnees['prixMin'] == 500 ? 'selected' : '') ?>>500 $</option>
                        <option value="550" <?= ($donnees['prixMin'] == 550 ? 'selected' : '') ?>>550 $</option>
                        <option value="600" <?= ($donnees['prixMin'] == 600 ? 'selected' : '') ?>>600 $</option>
                        <option value="650" <?= ($donnees['prixMin'] == 650 ? 'selected' : '') ?>>650 $</option>
                        <option value="700" <?= ($donnees['prixMin'] == 700 ? 'selected' : '') ?>>700 $</option>
                        <option value="750" <?= ($donnees['prixMin'] == 750 ? 'selected' : '') ?>>750 $</option>
                        <option value="800" <?= ($donnees['prixMin'] == 800 ? 'selected' : '') ?>>800 $</option>
                        <option value="850" <?= ($donnees['prixMin'] == 850 ? 'selected' : '') ?>>850 $</option>
                        <option value="900" <?= ($donnees['prixMin'] == 900 ? 'selected' : '') ?>>900 $</option>
                        <option value="950" <?= ($donnees['prixMin'] == 950 ? 'selected' : '') ?>>950 $</option>
                        <option value="1000" <?= ($donnees['prixMin'] == 1000 ? 'selected' : '') ?>>1000 $</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prixMax">Et&nbsp;:</label>
                    <select class="form-control" id="prixMax" name="prixMax">
                        <option value="1000000" <?= ($donnees['prixMax'] == 1000000 ? 'selected' : '') ?>>Aucun prix maximum</option>
                        <option value="25" <?= ($donnees['prixMax'] == 25 ? 'selected' : '') ?>>25 $</option>
                        <option value="50" <?= ($donnees['prixMax'] == 50 ? 'selected' : '') ?>>50 $</option>
                        <option value="75" <?= ($donnees['prixMax'] == 75 ? 'selected' : '') ?>>75 $</option>
                        <option value="100" <?= ($donnees['prixMax'] == 100 ? 'selected' : '') ?>>100 $</option>
                        <option value="125" <?= ($donnees['prixMax'] == 125 ? 'selected' : '') ?>>125 $</option>
                        <option value="150" <?= ($donnees['prixMax'] == 150 ? 'selected' : '') ?>>150 $</option>
                        <option value="175" <?= ($donnees['prixMax'] == 175 ? 'selected' : '') ?>>175 $</option>
                        <option value="200" <?= ($donnees['prixMax'] == 200 ? 'selected' : '') ?>>200 $</option>
                        <option value="225" <?= ($donnees['prixMax'] == 225 ? 'selected' : '') ?>>225 $</option>
                        <option value="250" <?= ($donnees['prixMax'] == 250 ? 'selected' : '') ?>>250 $</option>
                        <option value="275" <?= ($donnees['prixMax'] == 275 ? 'selected' : '') ?>>275 $</option>
                        <option value="300" <?= ($donnees['prixMax'] == 300 ? 'selected' : '') ?>>300 $</option>
                        <option value="325" <?= ($donnees['prixMax'] == 325 ? 'selected' : '') ?>>325 $</option>
                        <option value="350" <?= ($donnees['prixMax'] == 350 ? 'selected' : '') ?>>350 $</option>
                        <option value="375" <?= ($donnees['prixMax'] == 375 ? 'selected' : '') ?>>375 $</option>
                        <option value="400" <?= ($donnees['prixMax'] == 400 ? 'selected' : '') ?>>400 $</option>
                        <option value="425" <?= ($donnees['prixMax'] == 425 ? 'selected' : '') ?>>425 $</option>
                        <option value="450" <?= ($donnees['prixMax'] == 450 ? 'selected' : '') ?>>450 $</option>
                        <option value="475" <?= ($donnees['prixMax'] == 475 ? 'selected' : '') ?>>475 $</option>
                        <option value="500" <?= ($donnees['prixMax'] == 500 ? 'selected' : '') ?>>500 $</option>
                        <option value="550" <?= ($donnees['prixMax'] == 550 ? 'selected' : '') ?>>550 $</option>
                        <option value="600" <?= ($donnees['prixMax'] == 600 ? 'selected' : '') ?>>600 $</option>
                        <option value="650" <?= ($donnees['prixMax'] == 650 ? 'selected' : '') ?>>650 $</option>
                        <option value="700" <?= ($donnees['prixMax'] == 700 ? 'selected' : '') ?>>700 $</option>
                        <option value="750" <?= ($donnees['prixMax'] == 750 ? 'selected' : '') ?>>750 $</option>
                        <option value="800" <?= ($donnees['prixMax'] == 800 ? 'selected' : '') ?>>800 $</option>
                        <option value="850" <?= ($donnees['prixMax'] == 850 ? 'selected' : '') ?>>850 $</option>
                        <option value="900" <?= ($donnees['prixMax'] == 900 ? 'selected' : '') ?>>900 $</option>
                        <option value="950" <?= ($donnees['prixMax'] == 950 ? 'selected' : '') ?>>950 $</option>
                        <option value="1000" <?= ($donnees['prixMax'] == 1000 ? 'selected' : '') ?>>1000 $</option>
                    </select>
                </div>
                <label>Types de logements&nbsp;:</label>
                <div class="form-group border rounded py-1">
                    <div class="form-check">
                    <?php foreach ($donnees["typesLogements"] as $typesLogements) { 
                        $icones = ["images/red-dot.png", "images/orange-dot.png", "images/yellow-dot.png", "images/purple-dot.png", "images/blue-dot.png", "images/green-dot.png"]
                        ?>
                        <div class="row>">
                            <input class="form-check-input col-1 offset-1" type="checkbox" value="<?= $typesLogements->lireIdTypeLogement() ?>" id="typeLogement<?= $typesLogements->lireIdTypeLogement() ?>" name="typeLogement<?= $typesLogements->lireIdTypeLogement() ?>" <?= $donnees["typeLogement" . $typesLogements->lireIdTypeLogement()] ?>>
                            <label class="form-check-label col-9" for="typeLogement<?= $typesLogements->lireIdTypeLogement() ?>"><?= $typesLogements->lireTypeLogement() ?></label>
                            <span class="legende col-1"><img src="<?= $icones[($typesLogements->lireIdTypeLogement() - 1)] ?>"></span>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="evaluation">Évaluation&nbsp;:</label>
                    <select class="form-control" id="evaluation" name="evaluation">
                        <option value="0" <?= ($donnees['evaluation'] == 0 ? 'selected' : '') ?>>Toutes les évaluations</option>
                        <option value="1" <?= ($donnees['evaluation'] == 1 ? 'selected' : '') ?>>1 étoile ou plus</option>
                        <option value="2" <?= ($donnees['evaluation'] == 2 ? 'selected' : '') ?>>2 étoiles ou plus</option>
                        <option value="3" <?= ($donnees['evaluation'] == 3 ? 'selected' : '') ?>>3 étoiles ou plus</option>
                        <option value="4" <?= ($donnees['evaluation'] == 4 ? 'selected' : '') ?>>4 étoiles ou plus</option>
                        <option value="5" <?= ($donnees['evaluation'] == 5 ? 'selected' : '') ?>>5 étoiles</option>
                    </select>
                </div>
                <button type="submit" id="recherche" class="btn btn-block btn-orange mb-2">Rechercher</button>
                <!-- <input type="text" class="form-control-plaintext" placeholder="test" disabled> -->
            </form>
        </aside>
        <div class="col-lg-9 mt-2">
            <nav>
                <div id="nav-tab" class="nav nav-tabs row mx-0" role="tablist">
                    <a class="nav-item nav-link col-6 active" id="nav-fiches-tab" data-toggle="tab" href="#fiches" role="tab" aria-controls="nav-fiches" aria-selected="true"><h3>Fiches</h3></a>
                    <a class="nav-item nav-link col-6" id="nav-carte-tab" data-toggle="tab" href="#carte" role="tab" aria-controls="nav-carte" aria-selected="false"><h3>Carte</h3></a>
                </div>
            </nav>
            <div id="nav-tabContent" class="tab-content border-left border-right border-bottom">
                <section id="carte" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-carte-tab">
                </section>
                <section id="fiches" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-fiches-tab">
                    <?php foreach ($donnees["logements"] as $logement) { ?>
                        <article id="fiche_<?= $logement->lireIdLogement(); ?>" class="row border rounded text-center m-2 p-2">
                            <div class="col-lg-4">

                                <div id="carousel_<?= $logement->lireIdLogement(); ?>" class="carousel slide mb-5" data-ride="carousel">
                                    <ol id="carousel_pagination_<?= $logement->lireIdLogement(); ?>" class="carousel-indicators">
                                        <li data-target="#carousel_<?= $logement->lireIdLogement(); ?>" data-slide-to="0"></li>
                                    </ol>
                                    <div id="liste_image_<?= $logement->lireIdLogement(); ?>" class="carousel-inner">
                                        <div class="carousel-item active"><img class="d-block w-100"  src="<?= $logement->lirePremierePhoto(); ?>"><div class="carousel-caption d-none d-md-block"><h5>Façade</h5></div></div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel_<?= $logement->lireIdLogement(); ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel_<?= $logement->lireIdLogement(); ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <script type="text/javascript">
                                        // Création des images du caroussel
                                        $.ajax({
                                            url: 'index.php?Recherche&action=afficherImagesCarousel', 
                                            type: 'POST',
                                            data:  { idLogement: <?= $logement->lireIdLogement(); ?> }, 
                                            dataType: 'json',
                                            success: function(donnees) {
                                                console.log(donnees);
                                                $('#liste_image_' + <?= $logement->lireIdLogement(); ?>).empty();
                                                $('#carousel_pagination_' + <?= $logement->lireIdLogement(); ?>).empty();
                                                for (var i=0; i<donnees.length; i++) {
                                                    $('<div class="carousel-item"><img class="d-block w-100" src="' + donnees[i][0] + '" alt="' + donnees[i][1] + '"><div class="carousel-caption d-none d-md-block"><h5>' + donnees[i][1] + '</h5></div></div>').appendTo('#liste_image_' + <?= $logement->lireIdLogement(); ?>);
                                                    $('<li data-target="#carousel_<?= $logement->lireIdLogement(); ?>" data-slide-to="' + i + '"></li>').appendTo('#carousel_pagination_' + <?= $logement->lireIdLogement(); ?>);
                                                    $(".carousel-item:first-child").addClass("active");
                                                    $(".carousel_pagination_" + <?= $logement->lireIdLogement(); ?> + ":first-child").addClass("active");
                                                }
                                            }
                                        });
                                    </script>
                                </div>                                    

                            </div>
                            <div class="col-lg-8 description-fiche">
                                <a href="index.php?Logement&action=afficherLogement">
                                    <div class="row">
                                        <h4 class="titre-fiche col-12 p-2"><?= $logement->lireNoCivique() . " " . $logement->lireRue() . " " . $logement->lireApt() . ", " . $logement->lireVille() . ", " . $logement->lireProvince(); ?></h4>
                                        <div class="col-sm-12 text-left my-3">
                                            <?= $logement->lireDescription(); ?><br>
                                        </div>
                                        <div class="col-sm-6 text-center text-sm-left my-3">
                                            Prix&nbsp;:&nbsp;<br><span class="prix mt-3"><strong><?= $logement->lirePrix(); ?>&nbsp;$</strong></span>
                                        </div>
                                        <div class="col-sm-6 text-center text-sm-right my-3">
                                            Évaluation&nbsp;:&nbsp;<?= round($logement->lireEvaluation(), 2); ?>&nbsp;/&nbsp;5
                                            <br><span class="score"><span style="width: <?= ($logement->lireEvaluation() / 5) * 100 ?>%"></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </article>
                    <?php } ?>
                </section>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    
    // Switch entre l'affichage des fiches ou de la carte
    $(window).on("load", function() {
        var url = window.location.search.substring(1);
        var fiches = new RegExp(/fiches=true/, "i");
        if (fiches.test(url)) {
            $("#nav-tab a:first-child").tab('show');
            $("#fiches").addClass('active');
            $(".legende").addClass('hidden');
        }
        var carte = new RegExp(/carte=true/, "i");
        if (carte.test(url)) {
            $("#nav-tab a:last-child").tab('show');
            $("#carte").addClass('active');
            $(".legende").removeClass('hidden');
        }
    });

    $("#nav-fiches-tab").on("click", function() {
        $(".legende").addClass("hidden");
        $("#formulaire_recherche").attr("action", "index.php?Recherche&fiches=true")
    });

    $("#nav-carte-tab").on("click", function() {
        $(".legende").removeClass("hidden");
        $("#formulaire_recherche").attr("action", "index.php?Recherche&carte=true")
    });

</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA22Ascl7tbt6eLIQVW8E_2h2rCIoFA4Aw"></script>
<script type="text/javascript">
    // Source : https://stackoverflow.com/questions/30439915/google-map-click-marker-by-external-link

    var markers = new Array();
    var map;

    var locations = [
        <?php foreach ($donnees["logements"] as $logement) {
            echo '[\'<a href="index.php?Logement&action=afficherLogement"><h4 class="p-2">' . $logement->lireNoCivique() . ' ' . $logement->lireRue() . ' ' . $logement->lireApt() . ', ' . $logement->lireVille() . ', ' . $logement->lireProvince() . '</h4></span><img src="' . $logement->lirePremierePhoto() . '"><div class="d-flex justify-content-between"><span class="prix pt-2"><strong>' . $logement->lirePrix() . '$</strong></span><span class="score"><span style="width:' . ($logement->lireEvaluation() / 5) * 100 . '%"></span></div></a>\', ' . $logement->lireLatitude() . ', ' . $logement->lireLongitude() . ', ' . ($logement->lireIdTypeLogement() - 1). '], ';
        } 
        ?>
    ];
    
    //console.log();
    
    // Setup the different icons and shadows
    var iconURLPrefix = 'images/';

    var icons = [
      iconURLPrefix + 'red-dot.png',
      iconURLPrefix + 'orange-dot.png',
      iconURLPrefix + 'yellow-dot.png',
      iconURLPrefix + 'purple-dot.png',
      iconURLPrefix + 'blue-dot.png',
      iconURLPrefix + 'green-dot.png',
      iconURLPrefix + 'pink-dot.png'
    ]

    function initialize() {
        var zoomlvl = <?= $donnees["zoom"] ?>;
        map = new google.maps.Map(document.getElementById('carte'), {
            zoom: zoomlvl,
            center: new google.maps.LatLng(45.56, -73.57),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            streetViewControl: false,
            panControl: false,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            }
        });


        var infowindow = new google.maps.InfoWindow({
            maxWidth: 300
        });

        var iconCounter = 0;

        // Add the markers and infowindows to the map
        for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: icons[locations[i][3]],
                title: 'Cliquer pour agrandir'
            });

            markers.push(marker);

            google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
                return function() {
                    infowindow.setContent('<div class="fiche-carte">' + locations[i][0] + '</div>');
                    infowindow.open(map, marker);
                    //map.setZoom(9);
                    //map.setCenter(marker.getPosition());
                }
            })(marker, i));

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                    map.setZoom(17);
                    map.setCenter(marker.getPosition());
                }
            })(marker, i));

        }
        //autoCenter();
    }
    
    google.maps.event.addDomListener(window, 'load', initialize);

    
    function triggerClick(i) {
        google.maps.event.trigger(markers[i], 'click');
        //map.getBounds();	
    }

    function autoCenter() {
        //  Create a new viewpoint bound
        var bounds = new google.maps.LatLngBounds();
        //  Go through each...
        for (var i = 0; i < markers.length; i++) {
            bounds.extend(markers[i].position);
        }
        //  Fit these bounds to the map
        map.fitBounds(bounds);
    }

</script>
