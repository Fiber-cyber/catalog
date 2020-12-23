<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Advertentie Manager';

const TABLE_HEADING_ADVERT = 'Advertentie';
const TABLE_HEADING_GROUP = 'Groep';
const TABLE_HEADING_SORT_ORDER = 'Sorteer volgorde';
const TABLE_HEADING_STATUS = 'Status';
const TABLE_HEADING_ACTION = 'Actie';

const TEXT_ADVERT_TITLE = 'Title';
const TEXT_ADVERT_URL = 'URL';
const TEXT_ADVERT_FRAGMENT = 'Fragment';
const TEXT_ADVERT_GROUP = 'Groep';
const TEXT_ADVERT_SORT_ORDER = 'Sorteer volgorde';
const TEXT_ADVERT_NEW_GROUP = 'Of maak een nieuwe groep';
const TEXT_ADVERT_IMAGE = 'Plaatje';
const TEXT_ADVERT_IMAGE_LOCAL = 'Of voer de lokale bestandsnaam in';
const TEXT_ADVERT_IMAGE_TARGET = 'Opslaan in map';
const TEXT_ADVERT_HTML_TEXT = 'HTML Tekst';

const TEXT_ADVERT_TITLE_HELP = 'Dit wordt alleen gebruikt in de lijst met advertenties als herinnering voor u.';
const TEXT_ADVERT_URL_HELP = 'Inclusief https:// voor externe links of alleen een paginanaam voor interne links (eg product_info.php of advanced_search_result.php)';
const TEXT_ADVERT_FRAGMENT_HELP = 'Alleen gebruikt in combinatie met interne links in uw shop!  Fragment URL is (voorbeeld) products_id=3 of zoekwoorden=xyz';
const TEXT_ADVERT_SORT_HELP = 'Dit bepaalt de advertentie sorteervolgorde * binnen * de groep.';

const TEXT_ADVERT_NOTE = '
<strong>Advertentie notities:</strong>
<ul>
  <li>Je kunt een afbeelding en / of HTML gebruiken (meestal tekst!).</li>
  <li>De uitvoer van de afbeelding / html is afhankelijk van de add-on aan de winkelzijde.</li>
</ul>';
const TEXT_INSERT_NOTE = '
<strong>Belangrijke opmerkingen over afbeeldingen:</strong>
<ul>
  <li>Upload-mappen moeten gebruikersmachtigingen (schrijven) hebben ingesteld!</li>
  <li>Vul het veld "Opslaan in map" <span class="text-danger font-weight-bolder">niet in</span> als u geen afbeelding uploadt naar de webserver (ie, u gebruikt een lokale (serverside) afbeelding).</li>
  <li>Het veld "Opslaan in map" moet een bestaande map zijn met een <span class="text-danger font-weight-bolder">backslash</span> (eg, adverts/ or carousels/).</li>
</ul>';

const TEXT_IMAGE_NONEXISTENT = 'Afbeelding is er NIET!';

const TEXT_ADVERT_DATE_ADDED = 'Datum toegevoegd: %s';
const TEXT_ADVERT_STATUS_CHANGE = 'Status verandering: %s';

const TEXT_INFO_DELETE_INTRO = 'Weet u zeker dat u deze advertentie wilt verwijderen?';
const TEXT_INFO_DELETE_IMAGE = 'Verwijder plaatje';

const SUCCESS_IMAGE_INSERTED = '<strong>Success:</strong> Nieuwe advertentie ingevoegd.';
const SUCCESS_IMAGE_UPDATED = '<strong>Success:</strong> Deze advertentie is bijgewerkt.';
const SUCCESS_IMAGE_REMOVED = '<strong>Success:</strong> Deze advertentie is verwijderd.';
const SUCCESS_ADVERT_STATUS_UPDATED = '<strong>Success:</strong> De status van deze advertentie is bijgewerkt.';

const ERROR_ADVERT_TITLE_REQUIRED = '<strong>Error:</strong> Advertentie titel is verplicht.';
const ERROR_ADVERT_GROUP_REQUIRED = '<strong>Error:</strong> Advertentie groep is verplicht.';
const ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST = '<strong>Error:</strong> Doelmap bestaat niet: %s';
const ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE = '<strong>Error:</strong> Doelmap is niet beschrijfbaar: %s';
const ERROR_IMAGE_DOES_NOT_EXIST = '<strong>Error:</strong> Plaatje bestaat niet.';
const ERROR_IMAGE_IS_NOT_WRITEABLE = '<strong>Error:</strong> Plaatje kan niet verwijderd worden.';
const ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED = '<strong>Error:</strong> U heeftt geen afbeelding of tekst ingevoegd.  Advertenties hebben afbeelding / tekst / nodig om te worden weergegeven.';

const TEXT_DISPLAY_NUMBER_OF_ADVERTS = 'Weergeven <b>%s</b> van <b>%s</b> of <b>%s</b> Advertentie';
const IMAGE_NEW_ADVERT = 'Nieuwe advertentie';

const TEXT_ADVERT_EXTERNAL_URL = '<i class="fas fa-external-link-alt mr-1"></i> uitgaande link:<br>%s';
const TEXT_ADVERT_INTERNAL_URL = '<i class="fas fa-link mr-1"></i> interne link:<br>%s';

const IMAGE_IMPORT_ADVERT = 'Poging banner import';
const IMAGE_IMPORT_ADVERT_EXPLANATION = 'Dit importeert gegevens uit de databasetabel "banners". Mogelijk moet u sommige gegevens na het importeren verwijderen, aangezien "banners" nooit bedoeld waren voor carrouselgebruik...';
const SUCCESS_BANNERS_IMPORTED = '<strong>Succes:</strong>  Banners tabel geimporteerd!';

