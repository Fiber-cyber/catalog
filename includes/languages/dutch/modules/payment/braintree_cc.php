<?php
/*
  $Id: $

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart 

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_TITLE', 'Braintree Payment Solutions');
  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_PUBLIC_TITLE', 'Krediet kaart');
  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_DESCRIPTION', '<i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://www.braintreepayments.com" target="_blank" rel="noreferrer">Braintree Payments Website</a>');

  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_PHP', 'De minimale PHP-versie die deze module ondersteunt, is %s en wordt pas geladen als de webserver is geïnstalleerd met een nieuwere versie.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_PHP_EXTENSIONS', 'Deze module vereist de volgende PHP-extensies en zal en zal niet laden totdat PHP is bijgewerkt:<br><br>%s');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_MERCHANT_ACCOUNTS', 'Deze module wordt pas geladen als er een verkopersaccount is gedefinieerd voor de valuta van %s.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_CONFIGURATION', 'Deze module wordt pas geladen nadat de parameters Merchant ID, Public Key, Private Key en Client Side Encryption Key zijn geconfigureerd. Bewerk en configureer de instellingen van deze module.');

  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_NEW', 'Voer een nieuwe kaart in');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_LAST_4', 'Laatste 4 cijfers:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_OWNER', 'naam op de kaart:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_NUMBER', 'kaart Nummer:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_EXPIRY', 'verloop datum:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_CVV', 'Beveiligingscode:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_SAVE', 'Kaart bewaren voor de volgende aankoop?');

  define('MODULE_PAYMENT_BRAINTREE_CC_CURRENCY_CHARGE', 'De valuta die momenteel wordt gebruikt om prijzen weer te geven, is in %3$s. Van uw creditcard wordt totaal in rekening gebracht <span style="white-space: nowrap;">%1$s %2$s</span> voor deze order.');

  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_TITLE', 'Er is een fout opgetreden bij het verwerken van uw kredietkaart');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_GENERAL', 'Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDOWNER', 'De naam van de kaarteigenaar moet worden opgegeven om de bestelling te voltooien. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDNUMBER', 'Het kaartnummer kon niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDEXPIRES', 'De vervaldatum van de kaart kon niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDCVV', 'De kaartbeveiligingscode kan niet worden verwerkt. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.');
?>
