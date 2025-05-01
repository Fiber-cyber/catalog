<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const TABLE_HEADING_NEW_PRODUCTS = 'Nieuwe artikelen voor %s';

const TEXT_NO_PRODUCTS = 'Er zijn geen artikelen beschikbaar in deze categorie.';
const TEXT_NUMBER_OF_PRODUCTS = 'Aantal artikelen: ';
const TEXT_SHOW = '<strong>Laat zien:</strong>';
const TEXT_BUY = 'Koop 1 \'';
const TEXT_NOW = '\' nu';
const TEXT_ALL_CATEGORIES = 'Alle Categoriën';
const TEXT_ALL_MANUFACTURERS = 'Alle Fabrikanten';

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Welkom in onze Online Winkel');
  define('META_SEO_DESCRIPTION','Ontdek onze ruime keuze van artikelen, en geniet van eenvoudig online winkelen met een geweldige klantenservice');
}

