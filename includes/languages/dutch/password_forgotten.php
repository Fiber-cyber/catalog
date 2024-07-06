<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart 

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Aanmelden';
const NAVBAR_TITLE_2 = 'Wachtwoord vergeten';

const HEADING_TITLE = 'Ik ben mijn wachtwoord vergeten!';

const TEXT_MAIN = 'Als u uw wachtwoord bent vergeten, vul hieronder uw e-mailadres in en we sturen u instructies over hoe u uw wachtwoord veilig kunt wijzigen.';

const TEXT_PASSWORD_RESET_INITIATED = 'Controleer uw e-mail voor instructies over hoe u uw wachtwoord kunt wijzigen. De instructies bevatten een link die slechts 24 uur geldig is of totdat uw wachtwoord is bijgewerkt.';

const TEXT_NO_EMAIL_ADDRESS_FOUND = 'Fout: het e-mailadres is niet gevonden in onze database, probeer het opnieuw.';

const EMAIL_PASSWORD_RESET_SUBJECT = STORE_NAME . ' - Nieuw wachtwoord';
const EMAIL_PASSWORD_RESET_BODY = 'Er is een nieuw wachtwoord aangevraagd voor uw profiel op ' . STORE_NAME . '.' . "\n\n" . 'Volg deze persoonlijke link om uw wachtwoord veilig te wijzigen:' . "\n\n%s\n\n" . 'Deze link wordt automatisch verwijderd na 24 uur of nadat uw wachtwoord is gewijzigd.' . "\n\n" . 'Voor hulp bij een van onze online services kunt u een e-mail sturen naar de winkeleigenaar: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n";

const ERROR_ACTION_RECORDER = 'Fout: er is al een link voor het opnieuw instellen van het wachtwoord verzonden. Probeer het over %s minuten opnieuw.';

const IMAGE_BUTTON_RESET_PASSWORD = 'Reset mijn wachtwoord';
