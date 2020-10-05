<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Database Backup Manager');

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Grootte');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nieuwe Backup');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Herstel lokaal');
define('TEXT_INFO_NEW_BACKUP', 'Onderbreek het back-up proces niet, dit kan enkele minuten duren.');
define('TEXT_INFO_UNPACK', '<br /><br />(na het uitpakken van het bestand uit het archief)');
define('TEXT_INFO_RESTORE', 'Onderbreek het herstelproces niet.<br /><br />Hoe groter de back-up, hoe langer dit proces duurt!<br /><br />Gebruik indien mogelijk de mysql-client.<br /><br />Voorbeeld:<br /><br /><strong>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </strong> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Onderbreek het herstelproces niet.<br /><br />Hoe groter de back-up, hoe langer dit proces duurt!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Het geüploade bestand moet een onbewerkt sql (tekst) bestand zijn.');
define('TEXT_INFO_DATE', 'Datum: %s');
define('TEXT_INFO_SIZE', 'Grootte: %s');
define('TEXT_INFO_COMPRESSION', 'Compressie: %s');
define('TEXT_INFO_USE_GZIP', 'Gebruik GZIP');
define('TEXT_INFO_USE_ZIP', 'gebruik ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Geen compressie(Pure SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Alleen downloaden');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Het beste via een HTTPS-verbinding');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze back-up wilt verwijderen?');
define('TEXT_NO_EXTENSION', 'Geen');
define('TEXT_BACKUP_DIRECTORY', 'Backup Directory:<br>%s');
define('TEXT_LAST_RESTORATION', 'Laatste herstel van de backup:<br>%s');
define('TEXT_FORGET', 'vergeet');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', '<strong>FOUT:</strong> Back-up map bestaat niet. Stel dit in configure.php in.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', '<strong>FOUT:</strong> Back-upm ap is niet beschrijfbaar.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', '<strong>FOUT:</strong> Downloadlink is niet acceptabel.');

define('SUCCESS_LAST_RESTORE_CLEARED', '<strong>Succes:</strong> De laatste herstel datum is gewist.');
define('SUCCESS_DATABASE_SAVED', '<strong>Succes:</strong> De database is opgeslagen.');
define('SUCCESS_DATABASE_RESTORED', '<strong>Succes:</strong> De database is hersteld.');
define('SUCCESS_BACKUP_DELETED', '<strong>Succes:</strong> De backup is verwijderd.');

define('TEXT_INFO_BACKUP_SIZE', '%s MB');
