<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Valuta\'s';

const TABLE_HEADING_CURRENCY_NAME = 'Valuta';
const TABLE_HEADING_CURRENCY_CODES = 'Code';
const TABLE_HEADING_CURRENCY_VALUE = 'Waarde';
const TABLE_HEADING_ACTION = 'Actie';

const TEXT_INFO_EDIT_INTRO = 'Breng de nodige wijzigingen aan';
const TEXT_INFO_COMMON_CURRENCIES = '-- Gemeenschappelijke valuta --';
const TEXT_INFO_CURRENCY_TITLE = 'Titel: %s';
const TEXT_INFO_CURRENCY_CODE = 'Code: %s';
const TEXT_INFO_CURRENCY_SYMBOL_LEFT = 'Symbool Links: %s';
const TEXT_INFO_CURRENCY_SYMBOL_RIGHT = 'Symbool Rechts: %s';
const TEXT_INFO_CURRENCY_DECIMAL_POINT = 'Decimaal Punt: %s';
const TEXT_INFO_CURRENCY_THOUSANDS_POINT = 'Duizend Punt: %s';
const TEXT_INFO_CURRENCY_DECIMAL_PLACES = 'Decimalen: %s';
const TEXT_INFO_CURRENCY_LAST_UPDATED = 'Laatst bijgewerkt: %s';
const TEXT_INFO_CURRENCY_VALUE = 'Waarde: %s';
const TEXT_INFO_CURRENCY_EXAMPLE = 'Voorbeeld Output: %s =  %s';

const TEXT_INFO_INSERT_INTRO = 'Voer de nieuwe valuta in met de bijbehorende gegevens';
const TEXT_INFO_DELETE_INTRO = 'Weet u zeker dat u deze valuta wilt verwijderen??';
const TEXT_INFO_HEADING_NEW_CURRENCY = 'Nieuwe Valuta';
const TEXT_INFO_HEADING_EDIT_CURRENCY = 'Bewerk Valuta';
const TEXT_INFO_HEADING_DELETE_CURRENCY = 'Verwijder Valuta';
const TEXT_INFO_SET_AS_DEFAULT = TEXT_SET_DEFAULT . ' (vereist een handmatige update van de valutawaarden)';
const TEXT_INFO_CURRENCY_UPDATED = 'De wisselkoers voor %s (%s) s succesvol bijgewerkt via %s.';

const ERROR_REMOVE_DEFAULT_CURRENCY = '<strong>Fout:</strong> De standaardvaluta kan niet worden verwijderd. Stel een andere valuta in als standaard en probeer het opnieuw.';
const ERROR_CURRENCY_INVALID = '<strong>Fout:</strong> De wisselkoers voor for %s (%s) is niet bijgewerkt via %s. Is het een geldige valutacode?';
const WARNING_PRIMARY_SERVER_FAILED = '<strong>Waarschuwing:</strong> De huidige wisselkoers server (%s) maakt geen verbinding %s (%s) - probeer de secundaire wisselkoersserver.';

const ERROR_INSTALL_CURRENCY_CONVERTER = 'U heeft geen valuta conversiemodule geïnstalleerd.  <a class="alert-link font-weight-bold" href="%s">Installeer Nu</a>';

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Currencies';