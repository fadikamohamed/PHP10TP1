<?php
//Tableau des pays du monde
$countryArray = ['Afrique du Sud', 'Afghanistan', 'Albanie', 'Algérie', 'Alger', 'Allemagne', 'Andorre', 'Angola', 'Antigua-et-Barbuda', 'Arabie Saoudite', 'Argentine', 'Arménie', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahreïn', 'Bangladesh', 'Barbade', 'Belgique',
    'Belize', 'Bénin', 'Bhoutan', 'Biélorussie', 'Birmanie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Brésil', 'Brunei', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun,Canada',
    'Cap-Vert', 'Chili', 'Chine', 'Chypre', 'Colombie', 'Comores', 'Corée du Nord', 'Corée du Sud', 'Costa Rica', 'Côte d’Ivoire', 'Croatie', 'Cuba', 'Danemark', 'Djibouti', 'Dominique', 'Égypte',
    'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Éthiopie', 'Fidji', 'Finlande', 'France', 'Gabon', 'Gambie', 'Géorgie', 'Ghana', 'Grèce', 'Grenade', 'Guatemala',
    'Guinée', 'Guinée équatoriale', 'Guinée-Bissau', 'Guyana', 'Haïti', 'Honduras', 'Hongrie', 'Îles Cook', 'Îles Marshall', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie',
    'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweït', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Liberia', 'Libye', 'Liechtenstein', 'Lituanie', 'Luxembourg',
    'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives', 'Mali', 'Malte', 'Maroc', 'Maurice', 'Mauritanie', 'Mexique', 'Micronésie', 'Moldavie', 'Monaco', 'Mongolie', 'Monténégro', 'Mozambique',
    'Namibie', 'Nauru', 'Népal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norvège', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palaos', 'Palestine', 'Panama', 'Papouasie-Nouvelle-Guinée',
    'Paraguay', 'Pays-Bas', 'Pérou', 'Philippines', 'Pologne', 'Portugal', 'Qatar', 'République centrafricaine', 'République démocratique du Congo', 'République Dominicaine', 'République du Congo',
    'République tchèque', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Saint-Kitts-et-Nevis', 'Saint-Vincent-et-les-Grenadines', 'Sainte-Lucie', 'Saint-Marin', 'Salomon', 'Salvador',
    'Samoa', 'São Tomé-et-Principe', 'Sénégal', 'Serbie', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Soudan du Sud', 'Sri Lanka', 'Suède', 'Suisse',
    'Suriname', 'Swaziland', 'Syrie', 'Tadjikistan', 'Tanzanie', 'Tchad', 'Thaïlande', 'Timor oriental', 'Togo', 'Tonga', 'Trinité-et-Tobago', 'Tunisie', 'Turkménistan', 'Turquie', 'Tuvalu', 'Ukine',
    'Uruguay', 'Vanuatu', 'Vatican', 'Venezuela', 'Viêt Nam', 'Yémen', 'Zambie', 'Zimbabwe'
];
//Tableau des regex
$regexArray = [
    'lastname' => '/^[a-z _\'\-àâäéèêëîïôöûüùçæ]*$/i',
    'firstname' => '/^[a-z _\'\-àâäéèêëîïôöûüùçæ]*$/i',
    'birthDate' => '/([1][\d]|[2][\d]|[3][0-1])/',
    'birthPlace' => '/^[\w\'\- àâäéèêëîïôöûüùçæ]*$/i',
    'nationality' => '/^[a-z _\'\-àâäéèêëîïôöûüùçæ]*$/i',
    'location' => '/^[\w\'\- àâäéèêëîïôöûüùçæ]*$/i',
    'mail' => '/^[\w]*[.]?[\w]*[@][\w]*[.](fr|org|net|com)$/',
    'foneNumber' => '/^[0][1-9]([\/\- .]?[\d]{2}){4}$/',
    'degrees' => '/sans|Bac(\+1|\+2|\+3)?|Supérieur/i',
    'idPoleEmploi' => '/^[\d]{6}[\a-zA-Z]$/',
    'badges' => '/^[1-9][0-9]?$/',
    'linkCc' => '/^http[:][\/]{2}[w]{3}[.]codecademy[.]com[\/]?$/',
    'herosText' => '/^[\w\'\-\sàâäéèêëîïôöûüùç,.!\/;()"\n:$€£%µ\?&#<>=+\-\*@^_`\[\]{}~°²¤]{20,}$/i',
    'hacksText' => '/^[\w\'\-\sàâäéèêëîïôöûüùç,.!\/;()"\n:$€£%µ\?&#<>=+\-\*@^_`\[\]{}~°²¤]{20,}$/i',
    'experiencesText' => '/^[\w\'\-\sàâäéèêëîïôöûüùç,.!\/;()"\n:$€£%µ\?&#<>=+\-\*@^_`\[\]{}~°²¤]{20,}$/i'
];
//Déclaration du tableau vide $verifArray
$verifArray = [];
//Boucle qui test les données reçu avec les tableau des regex
foreach ($regexArray as $key => $value) {
    //Si la clé associative existe et qu'elle n'est pas vide 
    if (!empty($_POST[$key])) {
        //Si le test de la regex est bon
        if (preg_match($value, $_POST[$key])) {
            //Enlver les balises et intégrer dans une variable
            $$key = htmlspecialchars($_POST[$key]);
            //Intégrer dans le tableau 
            array_push($verifArray, $key);
            //Sinon...
        } else {
            //La variable est égale a 'error'
            $$key = 'error';
        }
        //Sinon...
    } else {
        
    }
}
?>