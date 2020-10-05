<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Advertentie Manager');

define('TABLE_HEADING_ADVERT', 'Advertentie');
define('TABLE_HEADING_GROUP', 'Groep');
define('TABLE_HEADING_SORT_ORDER', 'Sorteer volgorde');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_ADVERT_TITLE', 'Titel');
define('TEXT_ADVERT_URL', 'URL');
define('TEXT_ADVERT_FRAGMENT', 'Fragment');
define('TEXT_ADVERT_GROUP', 'Groep');
define('TEXT_ADVERT_SORT_ORDER', 'Sorteer volgorde');
define('TEXT_ADVERT_NEW_GROUP', 'Of maak een nieuwe groep');
define('TEXT_ADVERT_IMAGE', 'Plaatje');
define('TEXT_ADVERT_IMAGE_LOCAL', 'Of voer de lokale bestandsnaam in');
define('TEXT_ADVERT_IMAGE_TARGET', 'Opslaan in map');
define('TEXT_ADVERT_HTML_TEXT', 'HTML Tekst');

define('TEXT_ADVERT_TITLE_HELP', 'Dit wordt alleen gebruikt in de lijst met advertenties als herinnering voor u.');
define('TEXT_ADVERT_URL_HELP', 'Inclusief https:// voor externe links of alleen een paginanaam voor interne links (eg product_info.php of advanced_search_result.php)');
define('TEXT_ADVERT_FRAGMENT_HELP', 'Alleen gebruikt in combinatie met interne links in uw shop!  Fragment URL is (voorbeeld) products_id=3 of zoekwoorden=xyz');
define('TEXT_ADVERT_SORT_HELP', 'Dit bepaalt de advertentie sorteervolgorde * binnen * de groep.');

define('TEXT_ADVERT_NOTE', '
<strong>Advertentie notities:</strong>
<ul>
  <li>Je kunt een afbeelding en / of HTML gebruiken (meestal tekst!).</li>
  <li>De uitvoer van de afbeelding / html is afhankelijk van de add-on aan de winkelzijde.</li>
</ul>');
define('TEXT_INSERT_NOTE', '
<strong>Belangrijke opmerkingen over afbeeldingen:</strong>
<ul>
  <li>Upload-mappen moeten gebruikersmachtigingen (schrijven) hebben ingesteld!</li>
  <li>Vul het veld "Opslaan in map" niet in als u geen afbeelding uploadt naar de webserver (ie, u gebruikt een lokale (serverside) afbeelding).</li>
  <li>Het veld "Opslaan in map" moet een bestaande map zijn met een backslash (eg, adverts/ or carousels/).</li>
</ul>');

define('TEXT_IMAGE_NONEXISTENT', 'Afbeelding is er NIET!');

define('TEXT_ADVERT_DATE_ADDED', 'Datum toegevoegd: %s');
define('TEXT_ADVERT_STATUS_CHANGE', 'Status verandering: %s');

define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze advertentie wilt verwijderen?');
define('TEXT_INFO_DELETE_IMAGE', 'Verwijder plaatje');

define('SUCCESS_IMAGE_INSERTED', '<strong>Success:</strong> Nieuwe advertentie ingevoegd.');
define('SUCCESS_IMAGE_UPDATED', '<strong>Success:</strong> Deze advertentie is bijgewerkt.');
define('SUCCESS_IMAGE_REMOVED', '<strong>Success:</strong> Deze advertentie is verwijderd.');
define('SUCCESS_ADVERT_STATUS_UPDATED', '<strong>Success:</strong> De status van deze advertentie is bijgewerkt.');

define('ERROR_ADVERT_TITLE_REQUIRED', '<strong>FOUT:</strong> Advertentie titel is verplicht.');
define('ERROR_ADVERT_GROUP_REQUIRED', '<strong>FOUT:</strong> Advertentie groep is verplicht.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '<strong>FOUT:</strong>Doelmap bestaat niet: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '<strong>Error:</strong> Doelmao is niet beschrijfbaar: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '<strong>FOUT:</strong> Plaatje bestaat niet.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '<strong>FOUT:</strong> Plaatje kan niet verwijderd worden.');
define('ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED', '<strong>FOUT:</strong> U heeftt geen afbeelding of tekst ingevoegd.  Advertenties hebben afbeelding / tekst / nodig om te worden weergegeven.');

define('TEXT_DISPLAY_NUMBER_OF_ADVERTS', 'Weergeven <b>%s</b> van <b>%s</b> of <b>%s</b> Advertenties');
define('IMAGE_NEW_ADVERT', 'Nieuwe advertentie');

define('TEXT_ADVERT_EXTERNAL_URL', '<i class="fas fa-external-link-alt mr-1"></i> uitgaande link:<br>%s');
define('TEXT_ADVERT_INTERNAL_URL', '<i class="fas fa-link mr-1"></i> interne link:<br>%s');

define('IMAGE_IMPORT_ADVERT', 'Poging banner import');
define('IMAGE_IMPORT_ADVERT_EXPLANATION', 'Dit importeert gegevens uit de databasetabel "banners". Mogelijk moet u sommige gegevens na het importeren verwijderen, aangezien "banners" nooit bedoeld waren voor carrouselgebruik...');
define('SUCCESS_BANNERS_IMPORTED', '<strong>Success:</strong>  Banners tabel geimporteerd!');
