<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Definieer Talen';

const TABLE_HEADING_FILES = 'Bestanden';
const TABLE_HEADING_WRITABLE = 'Schrijfbaar';
const TABLE_HEADING_LAST_MODIFIED = 'Laatst gewijzigd';

const TEXT_EDIT_NOTE = <<<'EORT'
<p class="lead">Bewerk Definities</p>

<p>Elke taaldefinitie wordt op de volgende manier ingesteld als een PHP-constante:</p>

<p><pre>const TEXT_MAIN = '<span style="background-color: #FFFF99;">Deze tekst kan bewerkt worden. Het is heel gemakkelijk te doen!</span>');</pre></p>

<p>De gemarkeerde tekst kan worden bewerkt. Aangezien deze definitie enkele aanhalingstekens gebruikt om de tekst heen, moeten alle enkele aanhalingstekens binnen de tekstdefinitie worden omzeild met een backslash (eg, notitie\\\'s).</p>

<p>Meerdere regelinvoeren kunnen worden gedaan zoals:</p>

<p><pre>const TEXT_MAIN = <<<'EOT'
<span style="background-color: #FFFF99;">Deze tekst kan bewerkt worden.
Het is heel gemakkelijk te doen!</span>
EOT;</pre></p>
<p>Het is ook niet langer nodig om een backslash toe te voegen in meerdere regelitems zoals deze.</p>
EORT;

const TEXT_FILE_DOES_NOT_EXIST = 'Bestand bestaat niet.';
const TEXT_INFO_DOWNLOAD_ONLY = 'Alleen downloaden (niet opslaan aan de serverkant)';

const ERROR_FILE_NOT_WRITEABLE = '<strong>Error:</strong> Ik kan niet naar dit bestand schrijven, dus zal ik het downloaden in plaats van opslaan. Stel a.u.b. de juiste gebruikersrechten in %s als je het op zijn plaats wilt opslaan.';

