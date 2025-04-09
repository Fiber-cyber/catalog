<?php
/*
* $Id: stripe_sca.php
* $Loc: /includes/languages/english/modules/payment/
*
* Name: StripeSCA
* Version: 1.70
* Release Date: 2025-03-02
* Author: Rainer Schmied
* 	 phoenixcartaddonsaddons.com / raiwa@phoenixcartaddons.com
*
* License: Released under the GNU General Public License
*
* Comments: Author: [Rainer Schmied @raiwa]
* Author URI: [www.phoenixcartaddons.com]
* 
* CE Phoenix, E-Commerce made Easy
* https://phoenixcart.org
* 
* Copyright (c) 2021 Phoenix Cart
* 
* 
*/
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_TITLE = 'Stripe SCA';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_PUBLIC_TITLE = 'Krediet Kaart (Stripe SCA)';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_DESCRIPTION = '<i class="fas fa-external-link-alt me-2"></i><a href="https://www.stripe.com" target="_blank" rel="noopener">Bezoek de Stripe Website</a>';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_INSTRUCTIONS = '<p>Instructie(s):<br><i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://phoenixcart.org/phoenixcartwiki/index.php?title=Payment#Stripe_SCA" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Webhook Setup</a></p>';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CURL = 'Voor deze module moet cURL ingeschakeld zijn in de PHP configuratie. De module wordt pas geladen als cURL is ingeschakeld op deze webserver.';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CONFIGURATION = 'Deze module wordt niet geladen totdat de Publiseerbare Key en Secret Key parameters zijn geconfigureerd. Bewerk en configureer de instellingen van deze module.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_TITLE = 'Schakel de Stripe SCA Module in';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_DESC = 'Wilt u Stripe v3-betalingen accepteren?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_TITLE = 'Transactie Server';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_DESC = 'Transacties uitvoeren op de productieserver of op de testserver?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_TITLE = 'Live Publiseerbare API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_DESC = 'De publiceerbare API-sleutel van het Stripe-account die gebruikt kan worden voor productietransacties.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_TITLE = 'Live Secret API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_DESC = 'De geheime API-sleutel van het Stripe-account die u met de live publiceerbare sleutel kunt gebruiken.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_TITLE = 'Live Webhook Signing Secret';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_DESC = 'Het live webhook-ondertekeningsgeheim van de Stripe-account van de webhook die u hebt gemaakt om te luisteren naar payment_intent.succeeded-gebeurtenissen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_TITLE = 'Test Publiseerbare API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_DESC = 'De Stripe account publiseerbare API key om te gebruiken voor het testen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_TITLE = 'Test Secret API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_DESC = 'De geheime API-sleutel van het Stripe-account die moet worden gebruikt met de publiceerbare testsleutel.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_TITLE = 'Test Webhook Signing Secret';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_DESC = 'Het geheim van de webhook-ondertekening van de Stripe-accounttest die u hebt gemaakt om te luisteren naar payment_intent.succeeded-gebeurtenissen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_TITLE = 'Tokens aanmaken';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_DESC = 'Tokens aanmaken en opslaan voor kaartbetalingen die klanten bij hun volgende aankoop kunnen gebruiken?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_TITLE = 'Gebruik één regelkaart Gegevensinvoer';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_DESC = 'Gebruik één invoerveld voor gegevens op de regelkaart als deze is ingesteld op "True" of 3 afzonderlijke invoervelden als deze is ingesteld op "False".';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_TITLE = 'Logboekgebeurtenissen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_DESC = 'Log Stripe functies?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_TITLE = 'Transactie Methode';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_DESC = 'De verwerkingsmethode die voor elke transactie moet worden gebruikt.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_TITLE = 'Nieuwe orderstatus instellen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_DESC = 'Stel de status van bestellingen die met deze betalingsmodule zijn gemaakt in op deze waarde';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_TITLE = 'Status van bestelling verwerkt instellen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_DESC = 'Stel de status van succesvol verwerkte bestellingen met deze betalingsmodule in op deze waarde';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_TITLE = 'Transactie Order Status';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_DESC = 'Transactie-informatie opnemen in dit orderstatusniveau';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_TITLE = 'Betalingszone';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_DESC = 'Als er een zone is geselecteerd, schakelt u deze betaalmethode alleen in voor die zone.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_TITLE = 'SSL-certificaat verifiëren';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_DESC = 'SSL-certificaat van gateway-server verifiëren bij verbinding?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_TITLE = 'Proxy Server';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_DESC = 'API-verzoeken verzenden via deze proxyserver. (host:poort, bijv.: 123.45.67.89:8080 of proxy.example.com:8080)';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_TITLE = 'Debug E-Mail Adres';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_DESC = 'Alle parameters van een ongeldige transactie worden naar dit e-mailadres verzonden.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_TITLE = 'Dagen wachten om Stripe-orders voorbereiden te verwijderen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_DESC = 'Na hoeveel dagen moeten onafgemaakte Stripe-orders automatisch worden verwijderd? Laat leeg om uit te schakelen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SORT_TITLE = 'Sorteervolgorde van weergave.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SOR_DESC = 'Sorteervolgorde van weergave. Laagste, niet-nul, wordt als eerste weergegeven.';

  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NEW = 'Voer een nieuwe kaart in';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_OWNER = 'Kaarthouder Naam';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_TYPE = 'Kaartnummer > dan Vervaldatum > dan 3 cijfers op de achterkant (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NUMBER = 'Kaartnummer';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_EXPIRY = 'Verloop Datum (MM/YY)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_CVC = '3 cijfers op de achterkant (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_SAVE = 'Kaart opslaan voor de volgende aankoop?';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_INTENT = 'Ontbrekende intentie-id';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CUSTOMER_TOKEN = 'Ontbrekend klanttoken';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CARD_FOR_TOKEN = 'Geen kaartgegevens gevonden voor token ';

  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_PARAMETER = 'Onverwachte parameterwaarde ontvangen';
  const MODULE_PAYMENT_STRIPE_SCA_SECRET_ERROR = 'Ongeldig webhook-ondertekeningsgeheim';
  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_SERVER = 'Server error - check de logs';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_TITLE = 'Er is een fout opgetreden bij het verwerken van uw creditcard';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_GENERAL = 'Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode..';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_CARDSTORED = 'De opgeslagen kaart kon niet worden gevonden. Probeer het opnieuw en als de problemen aanhouden, probeer dan een andere betaalmethode.';

  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_LINK_TITLE = 'Test API Server Connectie';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TITLE = 'API Server Connectie Test';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_GENERAL_TEXT = 'Testen van de connectie naar de server..';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_BUTTON_CLOSE = 'Sluiten';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TIME = 'Verbindingstijd:';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_SUCCESS = 'Succes!';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_FAILED = 'Mislukt! Controleer de instellingen van het SSL-certificaat verifiëren en probeer het opnieuw.';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_ERROR = 'Er is een fout opgetreden. Vernieuw de pagina, controleer uw instellingen en probeer het opnieuw.';

  const MODULE_PAYMENT_STRIPE_SCA_PROCESSING_TEXT = 'Bedankt. Wij plaatsen nu uw bestelling...';
  const MODULE_PAYMENT_STRIPE_SCA_FINALIZE_TEXT = ' Finaliseren en betalen';
