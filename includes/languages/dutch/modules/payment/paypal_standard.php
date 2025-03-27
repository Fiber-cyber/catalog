<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Paypal Standard Payments
  Basic Paypal Payment Module for Phoenix Cart
  More sophisticated Paypal integration available at https://phoenixcart.org/forum/addons/

  author: John Ferguson @BrockleyJohn phoenix@cartmart.uk

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_TITLE = 'Paypal Standaard Betalingen';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PUBLIC_TITLE = 'Paypal';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_DESCRIPTION = '<div class="alert alert-warning text-break">Schakel Automatisch retourneren voor websitebetalingen in uw PayPal-instellingen in en configureer de retour-URL als volgt:<br/>%s<br><br>Schakel PDT in en kopieer het identiteitstoken naar de module.<br><br>Schakel Directe betalingsmelding in en stel de meldings-URL in op:<br/>%s</div><i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://www.paypal.com" target="_blank" rel="noreferrer">Paypal Website</a>';

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_RETURN_BUTTON = 'Terug naar ' . STORE_NAME; // max length 60 chars

const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_SELLER = 'Deze module wordt niet geladen totdat de Verkoper Email-parameter is geconfigureerd. Bewerk en configureer de instellingen van deze module.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_PDT = 'De module wordt niet geladen zonder het PDT Identity Token voor extra betalingsbeveiliging.';

const MODULE_PAYMENT_PAYPAL_STANDARD_CONFIG_ERROR = 'Paypal is niet correct geconfigureerd. Probeer een andere betaalmethode of neem contact met ons op.';
const MODULE_PAYMENT_PAYPAL_STANDARD_UPDATE_COMMENT_ERROR = 'Het is niet gelukt om ordercommentaren op te nemen. Probeer het opnieuw en neem contact met ons op als de problemen aanhouden.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_VALIDATE_FAIL = 'De Paypal-transactie kon niet worden geverifieerd - probeer het opnieuw. Als de problemen aanhouden, probeer dan een andere betaalmethode of neem contact met ons op.';

const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_LINK_TEXT = 'Test Server Connectie';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TITLE = 'API Server Connectie Test';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_GENERAL_TEXT = 'Testen connectie naar de server...';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_CLOSE = 'Sluiten';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TIME = 'Verbindingstijd:';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_SUCCESS = 'Succes!';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_FAILED = 'Failed to connect: please review your settings and try again.';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_ERROR = 'Er is een fout opgetreden. Vernieuw de pagina, controleer uw instellingen en probeer het opnieuw.';

