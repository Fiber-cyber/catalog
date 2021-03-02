<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Administrators');

define('TABLE_HEADING_ADMINISTRATORS', 'Administrators');
define('TABLE_HEADING_HTPASSWD', 'Beveiligd door htpasswd');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_INSERT_INTRO', 'Voer de nieuwe beheerder in met de bijbehorende gegevens');
define('TEXT_INFO_EDIT_INTRO', 'Breng de nodige wijzigingen aan');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze beheerder wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Nieuwe Beheerder');
define('TEXT_INFO_USERNAME', 'Gebruikersnaam:');
define('TEXT_INFO_NEW_PASSWORD', 'Nieuw wachtwoord:');
define('TEXT_INFO_PASSWORD', 'Wachtwoord:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD', 'beveiligd met htaccess/htpasswd');

define('ERROR_ADMINISTRATOR_EXISTS', '<strong>FOUT:</strong> Beheerder bestaat al.');

define('HTPASSWD_INFO', '<strong>Extra bescherming met htaccess/htpasswd</strong><p>Deze CE Phoenix Beheerder is niet extra beveiligd via htaccess/htpasswd.</p><p>Het inschakelen van de htaccess/htpasswd beveiligingslaag slaat automatisch de gebruikersnaam en wachtwoorden van de beheerder op in een htpasswd-bestand wanneer de beheerderswachtwoordgegevens worden bijgewerkt.</p><p><strong>Houd er rekening mee dat</strong>, als deze extra beveiligingslaag is ingeschakeld en u geen toegang meer heeft tot de Admindirectory, breng dan de volgende wijzigingen aan en raadpleeg uw hostingprovider om htaccess / htpasswd-beveiliging in te schakelen:</p><p><u><strong>1. Bewerk dit bestand:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Verwijder de volgende regels als ze bestaan:</p><p><i>%s</i></p><p><u><strong>2. Verwijder dit bestand:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<strong>Extra bescherming met htaccess/htpasswd</strong><p>Deze CE Phoenix Beheerder is extra beveiligd via htaccess/htpasswd.</p>');
define('HTPASSWD_PERMISSIONS', '<strong>Extra bescherming met htaccess/htpasswd</strong><p>Deze CE Phoenix Beheerder is niet extra beveiligd via htaccess/htpasswd.</p><p>De volgende bestanden moeten door de webserver schrijfbaar zijn voor de htaccess/htpasswd beveiligingslaag:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Laad deze pagina opnieuw om te bevestigen of de juiste bestandsrechten zijn ingesteld.</p>');

define('IMAGE_INSERT_NEW_ADMIN', 'Nieuwe Beheerder');
