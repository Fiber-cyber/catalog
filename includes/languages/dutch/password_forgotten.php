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

const TEXT_MAIN = 'Voer hieronder uw e-mailadres in. We sturen u een link om uw wachtwoord opnieuw in te stellen.';

const TEXT_PASSWORD_RESET_INITIATED = 'Controleer je e-mail voor een link om je wachtwoord opnieuw in te stellen. De link is 24 uur geldig.';

const TEXT_NO_EMAIL_ADDRESS_FOUND = 'Er is geen account gevonden met dat e-mailadres. Controleer dit alstublieft.';

const EMAIL_PASSWORD_RESET_SUBJECT = STORE_NAME . ' - Wachtwoord opnieuw instellen';
const EMAIL_PASSWORD_RESET_BODY = 'We hebben een verzoek ontvangen om uw wachtwoord voor uw account opnieuw in te stellen. ' . STORE_NAME . '.' . "\n\n" . 'Klik op de onderstaande link om een ​​nieuw wachtwoord te kiezen:'. "\n\n%s\n\n" . 'Deze link verloopt na 24 uur.' . "\n\n" . 'Hulp nodig? Contact ons op: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n";

const ERROR_ACTION_RECORDER = 'Fout: er is al een link voor het opnieuw instellen van het wachtwoord verzonden. Probeer het over %s minuten opnieuw.';

const IMAGE_BUTTON_RESET_PASSWORD = 'Reset mijn wachtwoord';
