<?php
/*
  $Id$
  
  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org
  
  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License

  Vertaald door Fiber - Phoenix 1.1.0.5

*/

// look in your $PATH_LOCALE/locale direcvanry for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'

setlocale(LC_ALL, ['nl_NL.UTF-8', 'nl_NL.UTF8', 'nl_nld']);
$long_date_formatter = new IntlDateFormatter('nl', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$short_date_formatter = new IntlDateFormatter('nl', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);
$date_time_formatter = new IntlDateFormatter('nl', IntlDateFormatter::SHORT, IntlDateFormatter::LONG);

// Global entries for the <html> tag
const HTML_PARAMS = ' dir="ltr" lang="nl"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = 'CE Phoenix Cart - Beheer';

// header text in includes/hooks/admin/siteWide/hMenu.php
const HEADER_TITLE_ONLINE_CATALOG = '<i class="fas fa-shopping-cart me-1 text-primary" aria-hidden="true" title="Uw Shop"></i><span class="border-bottom border-primary">Uw Shop</span>';
const HEADER_TITLE_PHOENIX_CLUB = '<i class="fas fa-question-circle me-1 text-primary" aria-hidden="true" title="Phoenix Forum"></i><span class="border-bottom border-primary d-none d-md-inline">Phoenix Forum</span>';
const HEADER_TITLE_PHOENIX_WIKI = '<i class="fas fa-school me-1 text-primary" aria-hidden="true" title="Handleiding"></i><span class="border-bottom border-primary d-none d-md-inline">Handleiding</span>';
const HEADER_TITLE_CERTIFIED_DEVELOPERS = '<i class="fas fa-laptop-code me-1 text-primary" aria-hidden="true" title="Partners"></i><span class="border-bottom border-primary d-none d-md-inline">Gecertificeerde Partners</span>';
const HEADER_TITLE_CERTIFIED_ADDONS = '<i class="fas fa-folder-plus me-1 text-primary" aria-hidden="true" title="Add-ons"></i><span class="border-bottom border-primary d-none d-md-inline">Add-ons</span>';
const HEADER_TITLE_LOGOFF = '<i class="fas fa-lock me-1" aria-hidden="true" title="Uitloggen"></i><span class="border-bottom border-danger">%s, veilig uitloggen</span>';

// images
const IMAGE_BACK = 'Terug';
const IMAGE_BACKUP = 'Backup';
const IMAGE_CANCEL = 'Annuleren';
const IMAGE_COPY = 'Kopieer';
const IMAGE_COPY_TO = 'Kopi&euml;ren naar';
const IMAGE_DETAILS = 'gegevens';
const IMAGE_DELETE = 'Verwijder';
const IMAGE_EDIT = 'Bewerk';
const IMAGE_EMAIL = 'Email';
const IMAGE_EXPORT = 'Exporteer';
const IMAGE_INSERT = 'Invoegen';
const IMAGE_LOCK = 'Slot';
const IMAGE_MODULE_INSTALL = 'Installeer Module';
const IMAGE_MODULE_REMOVE = 'Verwijder Module';
const IMAGE_MOVE = 'Verplaats';
const IMAGE_NEW_CATEGORY = 'Nieuwe Categorie';
const IMAGE_NEW_COUNTRY = 'Nieuw Land';
const IMAGE_NEW_CURRENCY = 'Nieuwe Valuta';
const IMAGE_NEW_CUSTOMER_DATA_GROUP = 'Nieuwe klant gegevensgroep';
const IMAGE_NEW_LANGUAGE = 'Nieuwe Taal';
const IMAGE_NEW_NEWSLETTER = 'Nieuwe Nieuwsbrief';
const IMAGE_NEW_PRODUCT = 'Nieuw Artikel';
const IMAGE_NEW_TAX_CLASS = 'Nieuwe BTW klas';
const IMAGE_NEW_TAX_RATE = 'Nieuw BTW tarief';
const IMAGE_NEW_ZONE = 'Nieuwe Zone';
const IMAGE_ORDERS = 'Orders';
const IMAGE_ORDERS_INVOICE = 'Factuur';
const IMAGE_ORDERS_PACKINGSLIP = 'Pakbon';
const IMAGE_PREVIEW = 'Voorbeeld';
const IMAGE_RESTORE = 'Herstellen';
const IMAGE_RESET = 'Reset';
const IMAGE_SAVE = 'opslaan';
const IMAGE_SELECT = 'Selecteer';
const IMAGE_SEND = 'Verzenden';
const IMAGE_SEND_EMAIL = 'Verzend e-mail';
const IMAGE_UNLOCK = 'Ontgrendelen';
const IMAGE_UPDATE = 'Update';
const IMAGE_UPDATE_CURRENCIES = 'Wisselkoers bijwerken';
const IMAGE_UPLOAD = 'Upload';

const ICON_FILE = 'Bestand';
const ICON_FILE_DOWNLOAD = 'Download';

// constants for use in pagination
const TEXT_RESULT_PAGE = 'Pagina %s van %d';
const TEXT_DISPLAY_NUMBER_OF_COUNTRIES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> landen)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMER_DATA_GROUPS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> klantgegevens data groepen)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMERS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> klanten)';
const TEXT_DISPLAY_NUMBER_OF_CURRENCIES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> valuta\'s)';
const TEXT_DISPLAY_NUMBER_OF_ENTRIES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> entries)';
const TEXT_DISPLAY_NUMBER_OF_LANGUAGES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> talen)';
const TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> fabrikanten)';
const TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> nieuwsbrieven)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> orders)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> orders status)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> artikelen)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> artikelen verwacht)';
const TEXT_DISPLAY_NUMBER_OF_REVIEWS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> artikel recensies)';
const TEXT_DISPLAY_NUMBER_OF_SPECIALS = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> artikel aanbiedingen)';
const TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> btw klassen)';
const TEXT_DISPLAY_NUMBER_OF_TAX_ZONES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> btw zones)';
const TEXT_DISPLAY_NUMBER_OF_TAX_RATES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> btw tarieven)';
const TEXT_DISPLAY_NUMBER_OF_ZONES = 'Weergeven <strong>%d</strong> van <strong>%d</strong> (of <strong>%d</strong> zones)';

const SPLIT_PAGES = 'Selecteer Pagina';

const TEXT_DEFAULT = 'standaard';
const TEXT_SET_DEFAULT = 'Stel in als standaard';

const TEXT_NONE = '--geen----';
const TEXT_TOP = 'Top';
const TEXT_ALL = 'Alle';

const ERROR_DESTINATION_DOES_NOT_EXIST = '<strong>FOUT:</strong> Bestemming bestaat niet.';
const ERROR_DESTINATION_NOT_WRITEABLE = '<strong>FOUT:</strong> Bestemming is niet schrijfbaar.';
const ERROR_FILE_NOT_SAVED = '<strong>FOUT:</strong> Bestand is niet opgeslagen.';
const ERROR_FILETYPE_NOT_ALLOWED = '<strong>FOUT:</strong> Het type bestand is niet toegestaan om te uploaden.';
const SUCCESS_FILE_SAVED_SUCCESSFULLY = '<strong>Succes:</strong> Bestand is succesvol opgeslagen.';
const WARNING_NO_FILE_UPLOADED = '<strong>Waarschuwing:</strong> Geen bestand geupload.';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = <<<'EOT'
<p>Content breedte kan 12 of minder zijn per kolom per rij.</p>
<p>12/12 = 100% wijdte, 6/12 = 50% wijdte, 4/12 = 33% wijdte.</p>
<p>getal van alle kolommen in een rij moet gelijk zijn aan 12 (ed:  3 boxes van elk 4 kolommen, 1 box van 12 kolommen en zo verder).</p>
EOT;

// seo helper
const PLACEHOLDER_COMMA_SEPARATION = 'Moet, zijn, komma, gescheiden';

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

const TEXT_IMAGE_NON_EXISTENT = 'PLAATJE BESTAAT NIET';

const STAR_RATING = 'Beoordeeld als %s sterren';

const GET_HELP = '<img alt="" src="images/icon_phoenix.png" class="me-2">Help';
const GET_ADDONS = '<img alt="" src="images/icon_phoenix.png" class="me-2">Addons';
const ADDONS_FREE = 'Gratis';
const ADDONS_COMMERCIAL = 'Betaald';
const ADDONS_PRO = 'PRO';