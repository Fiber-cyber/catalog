<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_NAVBAR_ACCOUNT_TITLE = 'Account';
const MODULE_NAVBAR_ACCOUNT_DESCRIPTION = 'Toon Klant Account acties in Navbar.';
  
const MODULE_NAVBAR_ACCOUNT_LOGGED_OUT = <<<'LI'
  <i title="Account" class="far fa-user fa-fw fa-xl"></i><span class="d-inline d-sm-none"> Account</span>
LI;
  
  const MODULE_NAVBAR_ACCOUNT_LOGGED_IN = <<<'LI'
  <span class="position-relative">
    <i title="Account" class="fas fa-user fa-fw fa-xl"></i>
    <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge">
      <i class="fas fa-check fa-2xl text-info"></i>
    </span>
  </span>
  <span class="d-inline d-sm-none">%s, je bent ingelogd</span>
LI;
  
const MODULE_NAVBAR_ACCOUNT_LOGIN = 'Inloggen';
const MODULE_NAVBAR_ACCOUNT_LOGOFF = 'Uitloggen';
const MODULE_NAVBAR_ACCOUNT = 'Instellingen';
const MODULE_NAVBAR_ACCOUNT_HISTORY = 'Orders';
const MODULE_NAVBAR_ACCOUNT_EDIT = 'Gegevens';
const MODULE_NAVBAR_ACCOUNT_ADDRESS_BOOK = 'Adresboek';
const MODULE_NAVBAR_ACCOUNT_PASSWORD = 'Wachtwoord';
const MODULE_NAVBAR_ACCOUNT_REGISTER = 'Registreer';