<?php
/*
  $Id$
  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
  
  Vertaald door Fiber - Phoenix 1.0.8.21
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_ALL, ['nl_NL.UTF-8', 'nl_NL.UTF8', 'nld_NLD']);

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the application's default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
const HTML_PARAMS = ' dir="ltr" lang="nl"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Mijn Account';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Verzend informatie';
const CHECKOUT_BAR_PAYMENT = 'Betalings informatie';
const CHECKOUT_BAR_CONFIRMATION = 'Bevestiging';

// pull down default text
const PULL_DOWN_DEFAULT = 'Selecteer';

// javascript messages
const JS_ERROR = 'Er zijn fouten opgetreden tijdens het proces van uw formulier.\n\nVul de volgende correcties aan:\n\n';

const JS_ERROR_NO_PAYMENT_MODULE_SELECTED = '* Selecteer een betalingsmethode voor uw bestelling.\n';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Selecteer een betalingsmethode voor uw bestelling.';

const IMAGE_BUTTON_ADD_ADDRESS = 'Voeg adres toe';
const IMAGE_BUTTON_BACK = 'Terug';
const IMAGE_BUTTON_BUY_NOW = 'Koop nu';
const IMAGE_BUTTON_CHANGE_ADDRESS = 'Verander adres';
const IMAGE_BUTTON_CHECKOUT = 'Afrekenen';
const IMAGE_BUTTON_CONFIRM_ORDER = 'Bevestig bestelling';
const IMAGE_BUTTON_CONTINUE = 'Doorgaan';
const IMAGE_BUTTON_DELETE = 'Verwijder';
const IMAGE_BUTTON_LOGIN = 'Log In';
const IMAGE_BUTTON_IN_CART = 'Voeg toe aan de winkelwagen';
const IMAGE_BUTTON_SEARCH = 'Zoeken';
const IMAGE_BUTTON_UPDATE = 'Update';
const IMAGE_BUTTON_UPDATE_PREFERENCES = 'Voorkeuren bijwerken';

const SMALL_IMAGE_BUTTON_DELETE = 'Verwijder';
const SMALL_IMAGE_BUTTON_EDIT = 'Bewerk';
const SMALL_IMAGE_BUTTON_VIEW = 'bekijk';
const SMALL_IMAGE_BUTTON_BUY = 'Koop';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'De opgegeven vervaldatum voor de creditcard is ongeldig. Controleer de datum en probeer het opnieuw.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'Het opgegeven creditcardnummer is ongeldig. Controleer het nummer en probeer het opnieuw.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'De eerste vier cijfers van het ingevoerde nummer zijn: %s. Als dat nummer correct is, accepteren we dat type creditcard niet. Probeer het opnieuw als het fout is.';

const TEXT_SEARCH_PLACEHOLDER = 'Zoeken';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Verplichte Informatie';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// product notifications
const PRODUCT_SUBSCRIBED = '%s is toegevoegd aan uw lijst met meldingen';
const PRODUCT_UNSUBSCRIBED = '%s is verwijderd uit uw lijst met meldingen';
const PRODUCT_ADDED = '%s is toegevoegd aan uw winkelwagen';
const PRODUCT_REMOVED = '%s is verwijderd uit uw winkelwagen';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><strong>JavaScript lijkt te zijn uitgeschakeld in uw browser.</strong></p>
<p>U moet JavaScript in uw browser hebben ingeschakeld om de functionaliteit van de website te gebruiken.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="noreferrer">Klik hier voor instructies over het inschakelen van javascript in uw browser</a>.</p>
EOT;

// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Bewerk</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>';

const ENTRY_COMMENTS = 'Nog iets wat we moeten weten?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Reageer hier...';
