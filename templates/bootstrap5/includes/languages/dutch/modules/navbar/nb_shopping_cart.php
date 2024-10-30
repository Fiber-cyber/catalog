<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

  const MODULE_NAVBAR_SHOPPING_CART_TITLE = 'Winkelwagen';
  const MODULE_NAVBAR_SHOPPING_CART_DESCRIPTION = 'Laat winkelwagen zien in de Navigatiebalk';

  // unused in BS5 template
  // see new language const NAVBAR_ICON_CART_CONTENTS in /includes/languages/english.php
  const MODULE_NAVBAR_SHOPPING_CART_CONTENTS = <<<'SC'
  <span class="position-relative">
    <i title="Winkelwagen: %1$s artikel(en) in u winkelwagen" class="fas fa-shopping-cart fa-fw fa-xl"></i>
    <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info border">
      <span class="cart-count">%1$s</span>
    </span>
  </span>
  <span class="d-inline d-sm-none"><span class="cart-count">%1$s</span> artikel(en) in u Winkelwagen</span>
SC;
  // eof unused

  const MODULE_NAVBAR_SHOPPING_CART_NO_CONTENTS = '<i class="fas fa-shopping-cart fa-fw"></i> 0 atikel(en)';
  const MODULE_NAVBAR_SHOPPING_CART_HAS_CONTENTS = '<span class="cart-count">%s</span> Artikel(en) <span class="cart-value">%s</span>';
  const MODULE_NAVBAR_SHOPPING_CART_VIEW_CART = '<i class="fas fa-eye fa-fw"></i> Bekijk volledige Winkelwagen';
  const MODULE_NAVBAR_SHOPPING_CART_CHECKOUT = '<i class="fas fa-angle-right fa-fw"></i> Afrekenen';

  const MODULE_NAVBAR_SHOPPING_CART_PRODUCT = '%s x %s';