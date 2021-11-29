<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
 https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_CUSTOMER_DATA_DOB_TEXT_TITLE = 'Geboortedatum';
const MODULE_CUSTOMER_DATA_DOB_TEXT_DESCRIPTION = 'Toon geboortedatum veld in create account pagina';

const ENTRY_DOB = 'Geboortedatum';
const ENTRY_DOB_ERROR = 'Uw geboortedatum moet in deze formaat: DD/MM/YYYY (eg 21/05/1970)';
const ENTRY_DOB_TEXT = 'eg. 21/05/1970';

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function cd_dob_date_raw($date, $reverse = false) {
  return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
}
