<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Valuta\'s');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Code');
define('TABLE_HEADING_CURRENCY_VALUE', 'Waarde');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Breng de nodige wijzigingen aan');
define('TEXT_INFO_COMMON_CURRENCIES', '-- Gemeenschappelijke valuta --');
define('TEXT_INFO_CURRENCY_TITLE', 'Titel: %s');
define('TEXT_INFO_CURRENCY_CODE', 'Code: %s');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbool Links: %s');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbool Rechts: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Decimaal Punt: %s');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Duizend Punt: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimalen: %s');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Laatst bijgewerkt: %s');
define('TEXT_INFO_CURRENCY_VALUE', 'Waarde: %s');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Voorbeeld output: %s =  %s');

define('TEXT_INFO_INSERT_INTRO', 'Voer de nieuwe valuta in met de bijbehorende gegevens');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze valuta wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nieuwe Valuta');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Bewerk Valuta');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Verwijder Valuta');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (vereist een handmatige update van de valutawaarden)');
define('TEXT_INFO_CURRENCY_UPDATED', 'De wisselkoers voor %s (%s) is succesvol bijgewerkt via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', '<strong>FOUT:</strong> De standaardvaluta kan niet worden verwijderd. Stel een andere valuta in als standaard en probeer het opnieuw.');
define('ERROR_CURRENCY_INVALID', '<strong>FOUT:</strong> De wisselkoers voor %s (%s) is niet bijgewerkt  via %s. Is het een geldige valutacode?');
define('WARNING_PRIMARY_SERVER_FAILED', '<strong>Waarschuwing:</strong> De huidige wisselkoers server (%s) maakt geen verbinding %s (%s) - probeer de secundaire wisselkoersserver.');

define('ERROR_INSTALL_CURRENCY_CONVERTER', 'U heeft geen valuta conversiemodule geïnstalleerd.  <a class="alert-link font-weight-bold" href="' . tep_href_link('modules.php', 'set=currencies') . '">Installeer Nu</a>');
