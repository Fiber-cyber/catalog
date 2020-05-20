<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Log in');
define('NAVBAR_TITLE_2', 'Wachtwoord vergeten');

define('HEADING_TITLE', 'Ik ben mijn wachtworod vergeten!');

define('TEXT_MAIN', 'Als u uw wachtwoord bent vergeten, vul hieronder uw e-mailadres in en we sturen u instructies over hoe u uw wachtwoord veilig kunt wijzigen.');

define('TEXT_PASSWORD_RESET_INITIATED', 'Controleer uw e-mail voor instructies over hoe u uw wachtwoord kunt wijzigen. De instructies bevatten een link die slechts 24 uur geldig is of totdat uw wachtwoord is bijgewerkt.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Fout: het e-mailadres is niet gevonden in onze administratie, probeer het opnieuw.');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Nieuw wachtwoord');
define('EMAIL_PASSWORD_RESET_BODY', 'Er is een nieuw wachtwoord aangevraagd voor uw account op ' . STORE_NAME . '.' . "\n\n" . 'Volg deze persoonlijke link om uw wachtwoord veilig te wijzigen:' . "\n\n" . '%s' . "\n\n" . 'Deze link wordt automatisch verwijderd na 24 uur of nadat uw wachtwoord is gewijzigd.' . "\n\n" . 'Voor hulp bij een van onze online services kunt u een e-mail sturen naar de winkeleigenaar: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Fout: Er is al een link voor het opnieuw instellen van het wachtwoord verzonden. Probeer het opnieuw in %s minuten.');

define('IMAGE_BUTTON_RESET_PASSWORD', 'Verander mijn wachtwoord');
