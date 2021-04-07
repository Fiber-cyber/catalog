<?php
/*
  $Id$

  CE Phoenix, E-Commerce Made Easy
  https://phoenixcart.org
  
  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Versie Checker';

const TABLE_HEADING_VERSION = 'Versie';
const TABLE_HEADING_RELEASED = 'Datum van publicatie';
const TABLE_HEADING_ACTION = 'Actie';

const TITLE_INSTALLED_VERSION = 'Geïnstalleerde versie: <strong>CE Phoenix v%s</strong>';

const VERSION_SERVER_FAILURE = 'De beschikbare versies van de server kunnen niet worden geladen. Controleer uw internet verbinding of probeer het later opnieuw.';
const VERSION_RUNNING_LATEST = 'U gebruikt de nieuwste versie van CE Phoenix.';
const VERSION_UPGRADES_AVAILABLE = <<<'EOT'
<strong>CE Phoenix %s</strong>is de laatste versie die voor u beschikbaar is!<hr>
<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/viewtopic.php?f=26&t=309">Gecertificeerde Developers</a>
 en gedetailleerde "<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/app.php/tag/phoenix-update">Doe het zelf</a>"
 instructies zijn beschikbaar in de Phoenix Club.
EOT;
