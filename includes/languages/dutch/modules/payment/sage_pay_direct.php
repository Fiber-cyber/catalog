<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_TITLE', 'Sage Pay Direct');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_PUBLIC_TITLE', 'Krediet kaart (Verwerkt door Sage Pay)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_DESCRIPTION', '<i class="fas fa-info-circle"></i>&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&direct" target="_blank" rel="noreferrer" style="text-decoration: underline; font-weight: bold;">Bekijk de online documentatie</a><br><br><i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br><i>Het gebruik van de bovenstaande link om u aan te melden bij Sage Pay verleent osCommerce een kleine financiële bonus voor het doorverwijzen van een klant.</i></span>');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CURL', 'Deze module vereist dat cURL is ingeschakeld in PHP en wordt pas geladen nadat deze is ingeschakeld op deze webserver.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CONFIGURATION', 'Deze module wordt pas geladen nadat de parameter Vendor Login Name is geconfigureerd. Bewerk en configureer de instellingen van deze module.');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NEW', 'Voeg een nieuwe kaart toe');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_TYPE', 'Kaart Type:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_OWNER', 'Naam o pde kaart:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NUMBER', 'Kaart Nummer:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS', 'Start Datum:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS_INFO', '(alleen voor Maestro- en American Express-kaarten)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_EXPIRES', 'Verloopdatum:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER', 'Uitgiftenummer:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER_INFO', '(alleen voor Maestro Kaarten)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_CVC', 'Beveiligingscode:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_SAVE', 'Bewaar de kaart voor de volgende aankoop?');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_TITLE', '3D veilige verificatie');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_INFO', 'Klik op de knop DOORGAAN om uw kaart te verifiëren op de website van uw bank.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_BUTTON', 'DOORGAAN');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_TITLE', 'Er is een fout opgetreden bij het verwerken van uw kredietkaart');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_GENERAL', 'Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDTYPE', 'Het kaarttype wordt niet ondersteund. Probeer het opnieuw met een andere kaart en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDOWNER', 'De naam van de kaarteigenaar moet worden opgegeven om de bestelling te voltooien. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDNUMBER', 'Het kaartnummer kon niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDSTART', 'De startdatum van de kaart kon niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDEXPIRES', 'De vervaldatum van de kaart kon niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDISSUE', 'Het kaartnummer kan niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDCVC', 'De kaartbeveiligingscode kan niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_LINK_TITLE', 'Test API Server Connectie');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TITLE', 'API Server Connectie Test');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_GENERAL_TEXT', 'Test de connectie naar de server..');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_BUTTON_CLOSE', 'Sluiten');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TIME', 'Verbindingstijd:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_SUCCESS', 'Succes!');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_FAILED', 'Mislukt! Controleer de instellingen voor het SSL-certificaat en probeer het opnieuw.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_ERROR', 'Er is een fout opgetreden. Vernieuw de pagina, controleer uw instellingen en probeer het opnieuw.');
?>
