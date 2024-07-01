<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
 https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

  const MODULE_NAVBAR_BRAND_TITLE = 'Merk';
  const MODULE_NAVBAR_BRAND_DESCRIPTION = <<<'EOT'
 Toon merk in de Navbar.  <div class="alert alert-warning">Dit kan een eenvoudige link zijn of iets ingewikkelder, zoals een afbeelding.<br>
<br>
Voor meer informatie over het gebruik van een afbeelding klik op de link <a target="_blank" rel="noreferrer" href="https://getbootstrap.com/docs/4.6/components/navbar/#brand"><u>navbar/#brand</u></a></div>
EOT;

 define('MODULE_NAVBAR_BRAND_PUBLIC_TEXT', new Image('images/' . MINI_LOGO, [], htmlspecialchars(STORE_NAME)));
  