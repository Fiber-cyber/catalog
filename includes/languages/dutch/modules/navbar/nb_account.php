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
  <i title="Mijn Profiel" class="far fa-user fa-fw fa-xl"></i><span class="d-inline d-sm-none"> Mijn Profiel</span>
LI;
  
  const MODULE_NAVBAR_ACCOUNT_LOGGED_IN = <<<'LI'
  <span class="position-relative">
    <i title="Mijn Profiel" class="fas fa-user fa-fw fa-xl"></i>
    <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge">
      <i class="fas fa-check fa-2xl text-info"></i>
    </span>
  </span>
  <span class="d-inline d-sm-none">%s, je bent ingelogd</span>
LI;
  
const MODULE_NAVBAR_ACCOUNT_LOGIN = '<i class="fas fa-sign-in-alt fa-fw fa-xl"></i> Inloggen';
const MODULE_NAVBAR_ACCOUNT_LOGOFF = '<i class="fas fa-sign-out-alt fa-fw fa-xl"></i> Uitloggen';
const MODULE_NAVBAR_ACCOUNT = 'Mijn Profiel';
const MODULE_NAVBAR_ACCOUNT_HISTORY = 'Mijn Orders';
const MODULE_NAVBAR_ACCOUNT_EDIT = 'Mijn Gegevens';
const MODULE_NAVBAR_ACCOUNT_ADDRESS_BOOK = 'Mijn Adresboek';
const MODULE_NAVBAR_ACCOUNT_PASSWORD = 'Mijn Wachtwoord';
const MODULE_NAVBAR_ACCOUNT_REGISTER = '<i class="fas fa-pencil-alt fa-fw fa-xl"></i> Registreer';