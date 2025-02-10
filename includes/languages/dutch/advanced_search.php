<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Geavanceerd zoeken';
const NAVBAR_TITLE_2 = 'Zoekresultaten';

const HEADING_TITLE_1 = 'Geavanceerd zoeken';
const HEADING_TITLE_2 = 'Artikelen die voldoen aan de zoekcriteria';

const HEADING_SEARCH_CRITERIA = 'Zoekcriteria';

const TEXT_SEARCH_IN_DESCRIPTION = 'Zoek ook in de artikelbeschrijving';
const ENTRY_CATEGORIES = 'Categorieën';
const ENTRY_INCLUDE_SUBCATEGORIES = 'Inclusief Subcategorieën';
const ENTRY_MANUFACTURERS = 'Fabrikanten';
const ENTRY_PRICE_FROM = 'Prijs van';
const ENTRY_PRICE_TO = 'Prijs tot';

const ENTRY_PRICE_FROM_TEXT = 'Geprijsd van';
const ENTRY_PRICE_TO_TEXT = 'Geprijsd tot';

const ENTRY_PRICE = 'Prijs';

const TEXT_SEARCH_HELP_LINK = '<i class="fas fa-info-circle"></i> Zoek hulp';

const TEXT_ALL_CATEGORIES = 'Alle Categorieën';
const TEXT_ALL_MANUFACTURERS = 'Alle Fabrikanten';

const HEADING_SEARCH_HELP = 'Zoek hulp';
const TEXT_SEARCH_HELP = <<<'EOT'
Sleutelwoorden kunnen worden gescheiden door  en/of instructies voor meer controle over de zoekresultaten.<br>
<br>
Als voorbeeld, <u>Fiacre EN Peer</u> genereert bijvoorbeeld een resultatenset die beide woorden bevat, echter voor <u>sinaasappel OF citroen</u>, de resultaatset die dan wordt geretourneerd, bevat beide of één van beide woorden.<br>
<br>
Naar exacte overeenkomsten kan worden gezocht door trefwoorden tussen dubbele aanhalingstekens te plaatsen.<br>
<br>
Als voorbeeld, <u>"groene appels"</u> genereert als zoekopdracht de exacte benaming van hetgeen wat tussen de aanhalingstekens werd ingevuld.<br>
<br>
Haakjes kunnen worden gebruikt voor verdere controle over de zoekresultaten<br>
<br>
Als voorbeeld, <u> Pixabay en (limoen of rood of "groene appel") </u>.
EOT;
const TEXT_CLOSE_WINDOW = '<u>Sluit venster</u> [x]';

const TEXT_NO_PRODUCTS = 'Er is geen artikel dat overeenkomt met de zoekcriteria.';

const ERROR_AT_LEAST_ONE_INPUT = 'Ten minste één van de velden in het zoekformulier moet worden ingevoerd.';

const ERROR_PRICE_FROM_MUST_BE_NUM = 'Prijs vanaf moet een nummer zijn.';
const ERROR_PRICE_TO_MUST_BE_NUM = 'Prijs moet een nummer zijn.';
const ERROR_PRICE_TO_LESS_THAN_PRICE_FROM = 'Prijs tot moet groter zijn dan of gelijk aan prijs vanaf.';
const ERROR_INVALID_KEYWORDS = 'Ongeldige zoekwoorden.';
