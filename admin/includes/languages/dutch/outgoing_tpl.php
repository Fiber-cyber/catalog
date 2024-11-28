<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Uitgaande E-mail Templates';

const BUTTON_INSERT_NEW_SLUG = 'Voeg een nieuw E-mail Template toe';
const HEADING_DELETE_SLUG = 'Verwijder deze E-mail Template';
const HEADING_NEW_SLUG = 'Nieuw E-mail Template';

const SLUG_SELECT = '--- Selecteer alstublieft ---';

const TABLE_HEADING_SLUG = 'Template Naam';
const TABLE_HEADING_TITLE = 'Titel';
const TABLE_HEADING_DATE_ADDED = 'Datum Toegevoegd';	
const TABLE_HEADING_ACTION = 'Actie';

const TEXT_OUTGOING_SLUG = 'Template Naam';
const TEXT_OUTGOING_SLUG_TITLE = 'Email Titel';
const TEXT_OUTGOING_SLUG_TEXT = 'Email Tekst';

const MISSING_SLUGS = '<div class="alert alert-danger d-flex justify-content-between">
<span>Attentie:  Deze Modules bestaan en er MOET een template voor gemaakt worden!<br><b>%s</b></span>
<span>%s</span>
</div>';

const TEXT_HEADING_NEW_OUTGOING_EMAIL = 'Nieuwe e-mail templatetoevoegen';
const TEXT_HEADING_EDIT_OUTGOING_EMAIL = 'Bewerk E-mail Template';
const TEXT_HEADING_DELETE_OUTGOING_EMAIL = 'Verwijder E-mail uit de wachtrij';

const TEXT_OUTGOING_DATE = 'Verzenden op:';
const TEXT_OUTGOING_EMAIL = 'E-mail Adres:';

const TEXT_NEW_INTRO = 'Vul de volgende gegevens in voor het nieuwe e-mailbericht';
const TEXT_EDIT_INTRO = 'Breng de nodige wijzigingen aan';
const TEXT_DELETE_INTRO = 'Weet u zeker dat u dit e-mailbericht wilt verwijderen??';

const TEXT_DATE_ADDED = 'Datum toegevoegd: %s';
const TEXT_LAST_MODIFIED = 'Laatst Gewijzigd: %s';

const TEXT_DISPLAY_NUMBER_OF_OUTGOING = '<b>%s</b> tot <b>%s</b> van <b>%s</b> e-mail templates weergeven';
const IMAGE_VIEW_EMAIL = 'Bekijk deze E-mail';

$available_merge_tags = ['{{FNAME}}' => 'Voornaam',
                         '{{LNAME}}' => 'Achternaam',
                         '{{EMAIL}}' => 'E-mail Adres'];

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Queued_Emails';
const GET_ADDONS_LINKS = [ADDONS_COMMERCIAL => 'https://phoenixcart.org/forum/app.php/addons/commercial/queued_emails-48',];
