<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_TITLE', 'PayPal Express Checkout (Payflow Edition)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_PUBLIC_TITLE', 'PayPal (inclusief (krediet en Betaalpassen)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_DESCRIPTION', '<i class="fas fa-info-circle"></i>&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout_payflow" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bekijk de online documentatie</a><br><br><i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://www.paypal.com" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de PayPal Website</a>');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DIRECT_MODULE', 'PayPal schrijft voor dat de PayPal Payments Pro (Payflow Edition) -betalingsmodule moet worden ingeschakeld als deze module moet worden geactiveerd. Deze module wordt pas geladen nadat de PayPal Payments Pro (Payflow Edition) -module is geïnstalleerd.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADMIN_CURL', 'Deze module vereist dat cURL is ingeschakeld in PHP en wordt pas geladen nadat deze is ingeschakeld op deze webserver.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADMIN_CONFIGURATION', 'Deze module wordt pas geladen nadat de parameters Vendor en Password zijn geconfigureerd. Bewerk en configureer de instellingen van deze module.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_BUTTON', 'Betaal met Paypal');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_COMMENTS', 'Opmerkingen:');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_EMAIL_PASSWORD', 'Er is automatisch een account voor u aangemaakt met het volgende e-mailadres en wachtwoord:' . "\n\n" . 'Store Account E-Mail Address: %s' . "\n" . 'Store Account Password: %s' . "\n\n");

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_GENERAL', 'Fout: er is een algemeen probleem opgetreden met de transactie. Probeer het alstublieft opnieuw.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_CFG_ERROR', 'Fout: configuratiefout betalingsmodule. Controleer de inloggegevens.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADDRESS', 'Fout: een overeenkomst tussen het verzendadres, de staat en de postcode is mislukt. Probeer het alstublieft opnieuw.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DECLINED', 'Fout: deze transactie is geweigerd. Probeer het alstublieft opnieuw.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_EXPRESS_DISABLED', 'Fout: PayPal Express Checkout is uitgeschakeld voor deze verkoper. Neem contact op met de klantenservice van PayPal.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_LINK_TITLE', 'Test API Server Connectie');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_TITLE', 'API Server Connectie Test');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_GENERAL_TEXT', 'Test de connectie naar de server..');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_BUTTON_CLOSE', 'Sluiten');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_TIME', 'Verbindingstijd:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_SUCCESS', 'Succes!');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_FAILED', 'Mislukt! Controleer de instellingen voor het SSL-certificaat en probeer het opnieuw.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_ERROR', 'Er is een fout opgetreden. Vernieuw de pagina, controleer uw instellingen en probeer het opnieuw.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS', 'Verzending is momenteel niet beschikbaar voor het geselecteerde verzendadres. Selecteer of maak een nieuw afleveradres om te gebruiken bij uw aankoop.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_WARNING_LOCAL_LOGIN_REQUIRED', 'Log in op uw account om de bestelling te verifiëren.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_NOTICE_CHECKOUT_CONFIRMATION', 'Controleer en bevestig hieronder uw bestelling. Uw bestelling wordt pas verwerkt nadat deze is bevestigd.');
?>
