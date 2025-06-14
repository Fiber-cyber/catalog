<?php
/*
  $Id$
  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
  
  Vertaald door Fiber - Phoenix 1.1.0.3
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_ALL, ['nl_NL.UTF-8', 'nl_NL.UTF8', 'nld_NLD']);

$long_date_formatter = new IntlDateFormatter('nl', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$short_date_formatter = new IntlDateFormatter('nl', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);
$date_time_formatter = new IntlDateFormatter('nl', IntlDateFormatter::SHORT, IntlDateFormatter::LONG);
const DATE_FORMAT = 'd/m/Y'; // this is used for date()


// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the application's default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
const HTML_PARAMS = ' dir="ltr" lang="nl" data-bs-theme="' . BOOTSTRAP_THEME . '"';

// charset for web pages and e-mails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Mijn Profiel';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Verzend informatie';
const CHECKOUT_BAR_PAYMENT = 'Betalings informatie';
const CHECKOUT_BAR_CONFIRMATION = 'Bevestiging';

// pull down default text
const PULL_DOWN_DEFAULT = 'Selecteer';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Selecteer een betalingsmethode voor uw bestelling.';

const IMAGE_BUTTON_ADD_ADDRESS = 'Voeg adres toe';
const IMAGE_BUTTON_BACK = 'Terug';
const IMAGE_BUTTON_CLOSE = 'Sluiten';
const IMAGE_BUTTON_CONTACT_US = 'Contact Ons';
const IMAGE_BUTTON_CONTINUE = 'Doorgaan';
const IMAGE_BUTTON_DELETE = 'Verwijder';
const IMAGE_BUTTON_SEARCH = 'Zoeken';
const IMAGE_BUTTON_UPDATE = 'Update';
const IMAGE_BUTTON_UPDATE_PREFERENCES = 'Update Voorkeuren';

const SMALL_IMAGE_BUTTON_DELETE = 'Delete';
const SMALL_IMAGE_BUTTON_EDIT = 'Edit';

const TEXT_SEARCH_PLACEHOLDER = 'Zoeken';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '';
const FORM_REQUIRED_INPUT = '';

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
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-end"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-euro-sign fa-fw fa-3x float-end"></i>';

const ENTRY_COMMENTS = 'Nog iets wat we moeten weten?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Reageer hier...';

const STAR_RATING = 'Beoordeeld %s';

// added BS5 template
const NAVBAR_ICON_CART_CONTENTS = '<span class="position-relative%2$s">
  <i title="Winkelwagen: %1$s artikel(en) in uw winkelwagen" class="fas fa-shopping-cart fa-fw fa-xl"></i>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary border">
    <span class="cart-count">%1$s</span>
  </span>
</span>';
