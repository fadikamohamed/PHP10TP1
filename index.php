<?= include('controller.php') ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>TP1</title>
    </head>
    <body>
        <div class="container bg-dark text-white">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xs-8 bg-secondary mb-5">
                    <?php
                    //Si le nombre d'entré dans le tableau $verifArray est égale a 15
                    if (count($verifArray) == 15) {
                        //Afficher les données reçu
                        ?>
                        <p class="text-center">Nom : <?= $lastname ?></p>
                        <p class="text-center">Prénom : <?= $firstname ?></p>
                        <p class="text-center">Date de naissance : <?= $birthDate ?></p>
                        <p class="text-center">Pays de naissance : <?= $birthPlace ?></p>
                        <p class="text-center">Nationalité : <?= $nationality ?></p>
                        <p class="text-center">Adresse : <?= $location ?></p>
                        <p class="text-center">Email : <?= $mail ?></p>
                        <p class="text-center">Téléphone : <?= $foneNumber ?></p>
                        <p class="text-center">Niveau d'etude : <?= $degrees ?></p>
                        <p class="text-center">Identifiant pole emploi : <?= $idPoleEmploi ?></p>
                        <p class="text-center">Badges : <?= $badges ?></p>
                        <p class="text-center">Lien codecademy : <?= $linkCc ?></p>
                        <p class="text-center mt-5">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? : </p>
                        <p class="text-center bg-dark"><?= $herosText ?></p>
                        <p class="text-center mt-5">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique). : </p>
                        <p class="text-center bg-dark"><?= $hacksText ?></p>
                        <p class="text-center mt-5">Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? : </p>
                        <p class="text-center bg-dark mb-5"><?= $experiencesText ?></p>
                        <?php
                    } else {
                        ?>
                        <!-- Formulaire -->
                        <form class="my-5 bg-secondary" action="index.php" method="POST">
                            <fieldset>
                                <div class="form-group row justify-content-center">
                                    <legend class="text-center">Formulaire d'inscription</legend>
                                </div>
                                <p class="text-center">Tout les champs doivent etre renseigné.</p>
                                <!-- Nom -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-2 col-xs-2" for="lastname">Nom : </label>
                                    <input class="form-control col-md-6" type="text" name="lastname" id="lastname" placeholder="Ex : Doe" value="<?=
                                    //Si la variable $lastname n'est pas vide et qu'elle n'est pas égale a 'error' afficher $lastname, sinon null
                                    (!empty($lastname) && ($lastname != 'error')) ? $lastname : NULL
                                    ?>">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $lastname n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($lastname) && ($lastname == 'error')) ? 'Veuillez entrer un nom valide' : NULL
                                    ?></p>
                                <!-- Prénom -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-2" for="firstname">Prénom : </label>
                                    <input class="form-control col-md-6" type="text" name="firstname" id="firstname" placeholder="Ex : John" value="<?=
                                    //Si la variable $firstname n'est pas vide et qu'elle n'est pas égale a 'error' afficher $firstname, sinon null
                                    (!empty($firstname) && ($firstname != 'error')) ? $firstname : NULL
                                    ?>">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $firstname n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($firstname) && ($firstname == 'error')) ? 'Veuillez entrer un prénom valide' : NULL
                                    ?></p>
                                <!-- Date de naissance -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-3" for="birthDate">Date de naissance : </label>
                                    <input class="form-control col-md-5" type="date" name="birthDate" id="birthDAte" value="<?=
                                    //Si la variable $birthDate n'est pas vide et qu'elle n'est pas égale a 'error' afficher $birthDate, sinon null
                                    (!empty($birthDate) && ($birthDate != 'error')) ? $birthDate : NULL
                                    ?>">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $birthDate n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur,  sinon null
                                    (!empty($birthDate) && ($birthDate == 'error')) ? 'Veuillez entrer une date valide' : NULL
                                    ?></p>
                                <!-- Pays de naissance -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-3" for="birthPlace">Pays de naissance : </label>
                                    <select name="birthPlace" id="birthPlace">
                                        <?php
                                        //Affichage du tableau des pays $countryArray en boucle dans un select chaque tour de boucle est une option
                                        foreach ($countryArray as $country) {
                                            ?>
                                            <option value="<?= $country ?>" <?=
                                            //Si la variable $birthPlace n'est pas vide et qu'elle est égale a $country afficher 'selected="selected"', sinon null
                                            (!empty($birthPlace) && ($birthPlace == $country)) ? 'selected="selected"' : NULL
                                            ?>><?= $country ?></option>
                                                <?php } ?>
                                    </select>
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $birthPlace n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur,  sinon null
                                    (!empty($birthPlace) && ($birthPlace == 'error')) ? 'Veuillez selectioner une des options' : NULL
                                    ?></p>
                                <!-- Nationalité -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-2" for="nationality">Nationalité : </label>
                                    <input class="form-control col-md-6" type="text" name="nationality" id="nationality" placeholder="Ex : Français" value="<?=
                                    //Si la variable $nationality n'est pas vide et qu'elle n'est pas égale a 'error' afficher $nationality, sinon null
                                    (!empty($nationality) && ($nationality != 'error')) ? $nationality : NULL
                                    ?>">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $nationality n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($nationality) && ($nationality == 'error')) ? 'Veuillez entrer votre nationalité' : NULL
                                    ?></p>
                                <!-- Adresse -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-2" for="location">Adresse : </label>
                                    <input class="form-control col-md-6" type="text" name="location" id="location" placeholder="Ex : 39 rue des champs à Angers" value="<?=
                                    //Si la variable $location n'est pas vide et qu'elle n'est pas égale a 'error' afficher $location, sinon null
                                    (!empty($location) && ($location != 'error')) ? $location : NULL
                                    ?>">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $location n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur,  sinon null
                                    (!empty($location) && ($location == 'error')) ? 'Veuillez entrer une adresse valide' : NULL
                                    ?></p>
                                <!-- Adresse e-mail -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-2" for="mail">Email : </label>
                                    <input class="form-control col-md-6" type="email" name="mail" id="mail" placeholder="Ex : BGdu24@voila.fr" value="<?=
                                    //Si la variable $mail n'est pas vide et qu'elle n'est pas égale a 'error' afficher $mail, sinon null
                                    (!empty($mail) && ($mail != 'error')) ? $mail : NULL
                                    ?>">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $mail n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur,  sinon null
                                    (!empty($mail) && ($mail == 'error')) ? 'Veuillez entrer une adresse email valide' : NULL
                                    ?></p>
                                <!-- Numéro de téléphone -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-2" for="foneNumber">Téléphone : </label>
                                    <input class="form-control col-md-6" type="tel" name="foneNumber" id="foneNumber" placeholder="Ex : 01.02.03.04.05" value="<?=
                                    //Si la variable $foneNumber n'est pas vide et qu'elle n'est pas égale a 'error' afficher $foneNumber, sinon null
                                    (!empty($foneNumber) && ($foneNumber != 'error')) ? $foneNumber : NULL
                                    ?>">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $foneNumber n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur,  sinon null
                                    (!empty($foneNumber) && ($foneNumber == 'error')) ? 'Veuillez entrer un numéro de telephone valide' : NULL
                                    ?></p>
                                <!-- Diplomes -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-3" for="diplomas">Niveau d'etude : </label>
                                    <select class="form-control col-md-5" name="degrees" id="diplomas">
                                        <option selected disabled>Definissez votre niveau d'étude</option>
                                        <option value="sans" <?=
                                        //Si la variable $degrees n'est pas vide et qu'elle est égale a 'sans' afficher 'selected = "selected"', sinon null
                                        (!empty($degrees) && ($degrees == 'sans')) ? 'selected = "selected"' : NULL
                                        ?>>sans</option>
                                        <option value="Bac" <?=
                                        //Si la variable $degrees n'est pas vide et qu'elle est égale a 'Bac' afficher 'selected = "selected"', sinon null
                                        (!empty($degrees) && ($degrees == 'Bac')) ? 'selected = "selected"' : NULL
                                        ?>>Bac</option>
                                        <option value="Bac+2" <?=
                                        //Si la variable $degrees n'est pas vide et qu'elle est égale a 'Bac+2' afficher 'selected = "selected"', sinon null
                                        (!empty($degrees) && ($degrees == 'Bac+2')) ? 'selected = "selected"' : NULL
                                        ?>>Bac+2</option>
                                        <option value="Bac+3" <?=
                                        //Si la variable $degrees n'est pas vide et qu'elle est égale a 'Bac+3' afficher 'selected = "selected"', sinon null
                                        (!empty($degrees) && ($degrees == 'Bac+3')) ? 'selected = "selected"' : NULL
                                        ?>>Bac+3</option>
                                        <option value="Supérieur" <?=
                                        //Si la variable $degrees n'est pas vide et qu'elle est égale a 'Supérieur' afficher 'selected = "selected"', sinon null
                                        (!empty($degrees) && ($degrees == 'Supérieur')) ? 'selected = "selected"' : NULL
                                        ?>>Supérieur</option>
                                    </select>
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $degrees n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($degrees) && ($degrees == 'error')) ? 'Veuillez selectioner une des options' : NULL
                                    ?></p>
                                <!-- ID Pole emploi -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-4" for="idPoleEmploi">Identifiant pole emploi : </label>
                                    <input class="form-control col-md-4" type="text" name="idPoleEmploi" id="idPoleEmploi" value="<?=
                                    //Si la variable $idPoleEmploi n'est pas vide et qu'elle n'est pas égale a 'error' afficher $idPoleEmploi, sinon null
                                    (!empty($idPoleEmploi) && ($idPoleEmploi != 'error')) ? $idPoleEmploi : NULL
                                    ?>" placeholder="Ex : 123456a">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $idPoleEmploi n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($idPoleEmploi) && ($idPoleEmploi == 'error')) ? 'Veuillez entrer un identifient pole emploi valide' : NULL
                                    ?></p>
                                <!-- Badges -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-2" for="badges">Badges : </label>
                                    <input class="form-control col-md-6" type="number" name="badges" id="badges" value="<?=
                                    //Si la variable $badges n'est pas vide et qu'elle n'est pas égale a 'error' afficher $badges, sinon null
                                    (!empty($badges) && ($badges != 'error')) ? $badges : NULL
                                    ?>" placeholder="Nombre de badges codcademy">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $badges n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($badges) && ($badges == 'error')) ? 'Veuillez entrer un nombre de badge' : NULL
                                    ?></p>
                                <!-- Lien linkedIn -->
                                <div class="form-group row justify-content-center m-2">
                                    <label class="col-md-3" for="linkCc">Lien codecademy : </label>
                                    <input class="form-control col-md-5" type="url" name="linkCc" id="linkCc" value="<?=
                                    //Si la variable $linkCc n'est pas vide et qu'elle n'est pas égale a 'error' afficher $linkCc, sinon null
                                    (!empty($linkCc) && ($linkCc != 'error')) ? $linkCc : NULL
                                    ?>" placeholder="">
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $linkCc n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($linkCc) && ($linkCc == 'error')) ? 'Veuillez entrer un lien codcademy valide' : NULL
                                    ?></p>
                                <!-- Texte sur le hero -->
                                <div class="form-group row justify-content-center mt-5 m-2">
                                    <label class="col-md-12 text-center" for="heros">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br />
                                    <textarea class="form-control col-md-10" name="herosText" id="heros" rows="8"><?=
                                        //Si la variable $herosText n'est pas vide et qu'elle n'est pas égale a 'error' afficher $herosText, sinon null
                                        (!empty($herosText) && ($herosText != 'error')) ? $herosText : NULL
                                        ?></textarea>
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $herosText n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($herosText) && ($herosText == 'error')) ? 'Ce champ doit contenir au minimum 20 caracteres !' : NULL
                                    ?></p>
                                <!-- Texte sur le hack -->
                                <div class="form-group row justify-content-center mt-5 m-2">
                                    <label class="col-md-12 text-center" for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label><br />
                                    <textarea class="form-control col-md-10" name="hacksText" id="hacks" rows="8"><?=
                                        //Si la variable $hacksText n'est pas vide et qu'elle n'est pas égale a 'error' afficher $hacksText, sinon null
                                        (!empty($hacksText) && ($hacksText != 'error')) ? $hacksText : NULL
                                        ?></textarea>
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $hacksText n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($hacksText) && ($hacksText == 'error')) ? 'Ce champ doit contenir au minimum 20 caracteres !' : NULL
                                    ?></p>
                                <!-- Texte sur l'expérience -->
                                <div class="form-group row justify-content-center mt-5 m-2">
                                    <label class="col-md-12 text-center" for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><br />
                                    <textarea class="form-control col-md-10" name="experiencesText" id="exp" rows="8"><?=
                                        //Si la variable $experiencesText n'est pas vide et qu'elle n'est pas égale a 'error' afficher $experiencesText, sinon null
                                        (!empty($experiencesText) && ($experiencesText != 'error')) ? $experiencesText : NULL
                                        ?></textarea>
                                </div>
                                <p class="text-danger text-center"><?=
                                    //Si la variable $experiencesText n'est pas vide et qu'elle est égale a 'error' afficher le message d'érreur, sinon null
                                    (!empty($experiencesText) && ($experiencesText == 'error')) ? 'Ce champ doit contenir au minimum 20 caracteres !' : NULL
                                    ?></p>
                                <!-- Bouton -->
                                <div class="text-center mt-5 ml-5  mr-5">
                                    <input class="btn btn-dark col-md-3 mb-4" type="submit" name="submit" value="Envoyer">
                                </div>
                            </fieldset>
                        </form>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
