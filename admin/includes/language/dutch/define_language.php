<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Defineer Talen');

define('TABLE_HEADING_FILES', 'Bestanden');
define('TABLE_HEADING_WRITABLE', 'Schrijfbaar');
define('TABLE_HEADING_LAST_MODIFIED', 'Laatst gewijzigd');

define('TEXT_EDIT_NOTE', '<p class="lead">Bewerk Definities</p>

<p>Elke taaldefinitie wordt ingesteld met behulp van de PHP <a href="http://www.php.net/define" target="_blank">define()</a> functie op de volgende manier:</p>

<p><pre>defineer(\'TEXT_MAIN\', \'<span style="background-color: #FFFF99;">Deze tekst kan bewerkt worden. Het is heel gemakkelijk te doen! Vergeet geen notitie\'s te maken!</span>\');</pre></p>

<p>De gemarkeerde tekst kan worden bewerkt. Aangezien deze definitie enkele aanhalingstekens gebruikt om de tekst heen, moeten alle enkele aanhalingstekens binnen de tekstdefinitie worden omzeild met een backslash (eg, notitie\\\'s).</p>');

define('TEXT_FILE_DOES_NOT_EXIST', 'Bestand bestaat niet.');

define('ERROR_FILE_NOT_WRITEABLE', '<strong>FOUT:</strong> Ik kan niet naar dit bestand schrijven. Stel de juiste gebruikersrechten in op: %s');
