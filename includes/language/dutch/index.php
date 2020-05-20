<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

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
  /*
  keywords are USELESS unless you are selling into China and want to be listed in Baidu Search Engine
  */
  define('META_SEO_KEYWORDS', 'dit, zijn, de, door, komma\'s gescheiden, sleutelwoorden, die worden gebruikt in het META-sleutelwoordenelement');
}

