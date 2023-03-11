<?php

// CONSTANTES REGEX
define('REGEXP_NO_NUMBER',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('REGEXP_TEXTAREA','^[a-zA-Z\n\r]*$');
define('REGEXP_DATE','^([0-9]{4})[\/\-]?([0-9]{2})[\/\-]?([0-9]{2})$');
define('REGEXP_FACEBOOK','^(https?:\/\/)?(?:www\.)?facebook\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-\.]*)');
define('REGEXP_INSTAGRAM', '^(?:(?:http|https):\/\/)?(?:www.)?(?:instagram.com|instagr.am|instagr.com)\/(\w+)');

// CONSTANTES ARRAY
define('LEGAL_NOTICE', ["Conditions Générales d'utilisation.", "Politique de Protection des Données Personnelles."]);
define('AUTHORIZED_IMAGE_FORMAT', ['image/jpeg', 'image/png']);
define('ARRAY_COUNTRIES', ['France', 'Belgique', 'Luxembourg', 'Suisse', 'Monaco', 'Bénin', 'Burkina Faso', 'RDC', 'Côte d\'ivoire', 'Gabon', 'Guinée', 'Mali', 'Niger', 'Sénégal', 'Togo', 'Canada', 'Burundi', 'Cameron', 'Comores', 'Djibouti', 'Guinée équatoriale', 'Madagascar', 'République centrafrique', 'Rwanda', 'Seychelles', 'Tchad', 'Haïti', 'Vanuatu', 'Algérie', 'Maroc', 'Tunisie', 'Mauritanie', 'Liban', 'Maurice', 'Andorre']);