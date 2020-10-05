<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Orders');
define('HEADING_TITLE_SEARCH', 'Order ID:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_ORDER', 'Order #%s');

define('TAB_TITLE_SUMMARY','<i class="fas fa-info-circle fa-fw mr-1"></i>Overzicht');
define('TAB_TITLE_PRODUCTS','<i class="fas fa-box-open fa-fw mr-1"></i>Artikelen');
define('TAB_TITLE_STATUS_HISTORY','<i class="fas fa-history fa-fw mr-1"></i>Status Historie');

define('TABLE_HEADING_OID', 'Order');
define('TABLE_HEADING_COMMENTS', 'Commentaar');
define('TABLE_HEADING_CUSTOMERS', 'Klant');
define('TABLE_HEADING_ORDER_TOTAL', 'Order Totaal');
define('TABLE_HEADING_DATE_PURCHASED', 'Aankoopdatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_QUANTITY', 'Aantal.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Artikelen');
define('TABLE_HEADING_TAX', 'BTW');
define('TABLE_HEADING_TOTAL', 'Totaal');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prijs (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prijs (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Totaal (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Totaal (inc)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Klant ingelicht');
define('TABLE_HEADING_DATE_ADDED', 'Datum toegevoegd');

define('ENTRY_CUSTOMER', 'Klant');
define('ENTRY_SOLD_TO', 'Verkocht aan:');
define('ENTRY_DELIVERY_TO', 'Geleverd aan:');
define('ENTRY_SHIP_TO', 'Verzonden aan:');
define('ENTRY_SHIPPING_ADDRESS', 'Verzendadres');
define('ENTRY_BILLING_ADDRESS', 'Factuuradres');
define('ENTRY_PAYMENT_METHOD', 'Betaalmethode');
define('ENTRY_CREDIT_CARD_TYPE', 'Krediet kaart Type:');
define('ENTRY_CREDIT_CARD_OWNER', 'Krediet kaart Eigenaar:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Krediet kaart Nummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Krediet kaart verloopt:');
define('ENTRY_SUB_TOTAL', 'Sub-Totaal');
define('ENTRY_TAX', 'BTW');
define('ENTRY_SHIPPING', 'Verzending');
define('ENTRY_TOTAL', 'Totaal');
define('ENTRY_DATE_PURCHASED', 'Aankoopdatum');
define('ENTRY_STATUS', 'Status');
define('ENTRY_DATE_LAST_UPDATED', 'Datum laatst bijgewerkt');
define('ENTRY_NOTIFY_CUSTOMER', 'Klant informeren');
define('ENTRY_NOTIFY_COMMENTS', 'Voeg opmerkingen toe');
define('ENTRY_PRINTABLE', 'Print Factuur');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Verwijder Order');
define('TEXT_INFO_DELETE_INTRO', 'Weet u het zeker dat u deze Order wilt veerwijderen?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Artikel hoeveelheid aanvullen');
define('TEXT_DATE_ORDER_CREATED', 'Datum gecree&euml;rd: %s');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Laatst gewijzigd: %s');
define('TEXT_INFO_PAYMENT_METHOD', 'Betaalmethode: %s');

define('TEXT_ALL_ORDERS', 'Alle Orders');
define('TEXT_NO_ORDER_HISTORY', 'Geen Order Historie beschikbaar');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Order Update');
define('EMAIL_TEXT_ORDER_NUMBER', 'Order Nummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Gedetailleerde Factuur:');
define('EMAIL_TEXT_DATE_ORDERED', 'Besteldatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Uw bestelling is bijgewerkt naar de volgende status.' . "\n\n" . 'Nieuwe status: %s' . "\n\n" . 'Beantwoord deze e-mail als u vragen heeft.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'De opmerkingen bij uw bestelling zijn' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', '<strong>FOUT:</strong> Order <strong>%s</strong> bestaat niet.');
define('SUCCESS_ORDER_UPDATED', '<strong>Succes:</strong> Bestelling is succesvol bijgewerkt.');
define('WARNING_ORDER_NOT_UPDATED', '<strong>Waarschuwing:</strong> Niets te veranderen. De bestelling is niet bijgewerkt.');

define('ENTRY_ADD_COMMENT', 'Voeg commentaar toe:');

define('ENTRY_NOTIFY_CUSTOMER_TEXT', 'Dit laat de klant weten dat zijn bestelling is bijgewerkt.');
define('ENTRY_NOTIFY_COMMENTS_TEXT', 'Dit voegt uw opmerkingen toe aan de bestelling en de e-mail.');

define('TEXT_ORDER_STATUS', '<strong>%s</strong> [%s]');
define('TEXT_ORDER_PAYMENT', '<strong>%s</strong> [%s]');
