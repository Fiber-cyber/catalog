<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Database Backup Manager';

const TABLE_HEADING_TITLE = 'Titel';
const TABLE_HEADING_FILE_DATE = 'Datum';
const TABLE_HEADING_FILE_SIZE = 'Grootte';
const TABLE_HEADING_ACTION = 'Actie';

const TEXT_INFO_HEADING_NEW_BACKUP = 'Nieuwe Backup';
const TEXT_INFO_HEADING_RESTORE_LOCAL = 'Herstel Lokaal';
const TEXT_INFO_NEW_BACKUP = 'Onderbreek het back-up proces niet, dit kan enkele minuten duren.';
const TEXT_INFO_UNPACK = '<br /><br /> (na het uitpakken van het bestand uit het archief)';
const TEXT_INFO_RESTORE = 'Onderbreek het herstelproces niet.<br /><br />Hoe groter de back-up, hoe langer dit proces duurt!<br /><br />Gebruik indien mogelijk de mysql-client.<br /><br />Voorbeeld:<br /><br /><strong>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </strong> %s';
const TEXT_INFO_RESTORE_LOCAL = 'Onderbreek het herstelproces niet.<br /><br />Hoe groter de back-up, hoe langer dit proces duurt!';
const TEXT_INFO_RESTORE_LOCAL_RAW_FILE = 'Het geüploade bestand moet een onbewerkt sql (tekst) bestand zijn.';
const TEXT_INFO_DATE = 'Datum: %s';
const TEXT_INFO_SIZE = 'Grootte: %s';
const TEXT_INFO_COMPRESSION = 'Compressie: %s';
const TEXT_INFO_USE_GZIP = 'Gebruik GZIP';
const TEXT_INFO_USE_ZIP = 'Gebruik ZIP';
const TEXT_INFO_USE_NO_COMPRESSION = 'Geen Compressie(Pure SQL)';
const TEXT_INFO_DOWNLOAD_ONLY = 'Alleen Downloaden (niet opslaan in de server)';
const TEXT_INFO_BEST_THROUGH_HTTPS = 'Het beste via een HTTPS-verbinding';
const TEXT_DELETE_INTRO = 'Weet u zeker dat u deze back-up wilt verwijderen?';
const TEXT_NO_EXTENSION = 'Geen';
const TEXT_BACKUP_DIRECTORY = 'Backup Directory:<br>%s';
const TEXT_LAST_RESTORATION = 'Laatste herstel van de backup:<br>%s';
const TEXT_FORGET = 'Vergeet';

const ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST = '<strong>Error:</strong> Backup map bestaat niet! Stel dit in configure.php in.';
const ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE = '<strong>Error:</strong> Backup map is niet schrijfbaar.';
const ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE = '<strong>Error:</strong> Download link is niet acceptabel.';
const ERROR_INVALID_FILE = 'Het bestand [%s] wordt niet herkend als een geldige back-up. Controleer of het bestaat, de extensie .sql heeft en een redelijke omvang heeft.';
const ERROR_FILE_TOO_LARGE = 'Het bestand is "%d" bytes maar de limiet is "%s".';
const ERROR_PATH_NOT_REMOVEABLE = '<strong>Error:</strong> Kan backup bestand niet verwijderen "%s"';

const SUCCESS_LAST_RESTORE_CLEARED = '<strong>Success:</strong> De laatste herstel datum is gewist.';
const SUCCESS_DATABASE_SAVED = '<strong>Success:</strong> De database is opgeslagen.';
const SUCCESS_DATABASE_RESTORED = '<strong>Success:</strong> De database is hersteld.';
const SUCCESS_BACKUP_DELETED = '<strong>Success:</strong> De backup is verwijderd.';

const TEXT_INFO_BACKUP_SIZE = '%s MB';
