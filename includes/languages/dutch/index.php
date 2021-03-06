<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_PRODUCTS', 'Nieuwe artikelen voor %s');

define('TEXT_NO_PRODUCTS', 'Er zijn geen artikelen beschikbaar in deze categorie.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Aantal artikelen: ');
define('TEXT_SHOW', '<strong>Laat zien:</strong>');
define('TEXT_BUY', 'Koop 1 \'');
define('TEXT_NOW', '\' nu');
define('TEXT_ALL_CATEGORIES', 'Alle Categorie&euml;n');
define('TEXT_ALL_MANUFACTURERS', 'Alle Fabrikanten');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Index Pagina Titel');
  define('META_SEO_DESCRIPTION', 'Dit is de beschrijving van uw site die in het META-beschrijvingselement kan worden gebruikt');
}

