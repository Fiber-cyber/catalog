<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'De sessiemap bestaat niet: ' . tep_session_save_path() . '. Sessies werken pas als deze directory is aangemaakt.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Ik kan niet schrijven naar de sessiedirectory: ' . tep_session_save_path() . '. Sessies werken pas als de juiste gebruikersrechten zijn ingesteld.');
?>
