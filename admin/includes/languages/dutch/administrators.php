<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Administrators';

const TABLE_HEADING_ADMINISTRATORS = 'Administrators';
const TABLE_HEADING_HTPASSWD = 'Beveiligd door htpasswd';
const TABLE_HEADING_ACTION = 'Actie';

const TEXT_INFO_INSERT_INTRO = 'Voer de nieuwe beheerder in met de bijbehorende gegevens';
const TEXT_INFO_EDIT_INTRO = 'Breng de nodige wijzigingen aan';
const TEXT_INFO_DELETE_INTRO = 'Weet u zeker dat u deze beheerder wilt verwijderen?';
const TEXT_INFO_HEADING_NEW_ADMINISTRATOR = 'Nieuwe Beheerder';
const TEXT_INFO_USERNAME = 'Gebruikersnaam:';
const TEXT_INFO_NEW_PASSWORD = 'Nieuw wachtwoord:';
const TEXT_INFO_PASSWORD = 'Wachtwoord:';
const TEXT_INFO_PROTECT_WITH_HTPASSWD = 'Beveiligd met htaccess/htpasswd';
const TEXT_HTPASSWRD_NA_IIS = 'N/A';

const ERROR_ADMINISTRATOR_EXISTS = '<strong>Error:</strong> Beheerder bestaat al.';

const HTPASSWD_INFO = <<<'EOT'
<strong>Extra bescherming met htaccess / htpasswd</strong>
<p>Deze installatie van de CE Phoenix Beheerders Tool is <strong>niet</strong> extra beveiligd via htaccess / htpasswd.</p>
<p>Door de htaccess / htpasswd-beveiligingslaag in te schakelen, worden de gebruikersnaam en wachtwoorden van de beheerder automatisch opgeslagen in een htpasswd-bestand bij het bijwerken van beheerderswachtwoordrecords.</p>
<p><strong>Houd er rekening mee dat</strong>, als deze extra beveiligingslaag is ingeschakeld en u geen toegang meer hebt tot de Beheerders Tool,
breng dan de volgende wijzigingen aan en raadpleeg uw hostingprovider om htaccess / htpasswd-bescherming in te schakelen:</p>
<p><u><strong>1. Bewerk dit bestand:</strong></u><br /><br />%s</p>
<p>Verwijder de volgende regels als ze er zijn:</p>
<p><i>%s</i></p>
<p><u><strong>2. Verwijder dit bestand:</strong></u><br /><br />%s</p>
EOT;
const HTPASSWD_SECURED = <<<'EOT'
<strong>Extra bescherming met htaccess / htpasswd</strong>
<p>Deze CE Phoenix Beheerders Tool-installatie is beveiligd via htaccess / htpasswd-middelen.</p>
EOT;
const HTPASSWD_PERMISSIONS = <<<'EOT'
<strong>Extra bescherming met htaccess / htpasswd</strong>
<p>Deze installatie van de CE Phoenix Administration Tool is niet extra beveiligd via htaccess / htpasswd.</p>
<p>De volgende bestanden moeten schrijfbaar zijn door de webserver om de htaccess / htpasswd-beveiligingslaag in te schakelen:</p>
<ul>
<li>%s</li>
<li>%s</li>
</ul>
<p>Laad deze pagina opnieuw om te bevestigen of de juiste bestandsrechten zijn ingesteld.</p>
EOT;

const IMAGE_INSERT_NEW_ADMIN = 'Nieuwe Beheerder';

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Administrators';
