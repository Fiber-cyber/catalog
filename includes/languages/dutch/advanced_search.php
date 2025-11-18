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
<b>Zoekhulp – Zo werkt het zoeken</b><br>
<br>
<b>Meerdere zoekwoorden combineren:</b><br>
Typ meerdere woorden om op alle woorden tegelijk te zoeken.<br>
Gebruik het woord <b>EN</b> om precies aan te geven dat beide woorden moeten voorkomen.<br>
Bijvoorbeeld: <u>Peer EN Appel</u> zoekt resultaten waar beide woorden staan.<br>
<br>
<b>Kiezen tussen zoekwoorden:</b><br>
Wil je dat het resultaat één van beide woorden bevat? Zet <b>OF</b> tussen de woorden.<br>
Bijvoorbeeld: <u>sinaasappel OF citroen</u> zoekt naar alles waar 'sinaasappel', 'citroen' of beide woorden staan.<br>
<br>
<b>Zoek naar een exacte zin:</b><br>
Stop je zoekopdracht tussen dubbele aanhalingstekens (" ") als je precies die woordcombinatie zoekt.<br>
Bijvoorbeeld: <u>"groene appels"</u> laat alleen resultaten zien waar deze woorden precies zo achter elkaar staan.<br>
<br>
<b>Gebruik haakjes voor complexe zoekopdrachten:</b><br>
Haakjes maken je zoekopdracht flexibeler. Combineer EN en OF voor meer opties.<br>
Bijvoorbeeld: <u>Pixabay EN (limoen OF rood OF "groene appel")</u> zoekt naar resultaten met 'Pixabay' en één (of meer) van de woorden/woordgroepen in de haakjes.<br>
EOT;
const TEXT_CLOSE_WINDOW = '<u>Sluit venster</u> [x]';

const TEXT_NO_PRODUCTS = 'Er is geen artikel dat overeenkomt met de zoekcriteria.';

const ERROR_AT_LEAST_ONE_INPUT = 'Ten minste één van de velden in het zoekformulier moet worden ingevoerd.';

const ERROR_PRICE_FROM_MUST_BE_NUM = 'Prijs vanaf moet een nummer zijn.';
const ERROR_PRICE_TO_MUST_BE_NUM = 'Prijs moet een nummer zijn.';
const ERROR_PRICE_TO_LESS_THAN_PRICE_FROM = 'Prijs tot moet groter zijn dan of gelijk aan prijs vanaf.';
const ERROR_INVALID_KEYWORDS = 'Ongeldige zoekwoorden.';
