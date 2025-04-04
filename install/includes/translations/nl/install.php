<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const TEXT_TESTING_DB = <<<'EOT'
<div class="row">
  <div class="col-1 d-flex align-items-center">
    <i class="fas fa-spinner fa-spin fa-2x"></i>
  </div>
  <div class="col d-flex align-items-center">
    <p>Testen database verbinding..</p>
  </div>
</div>
EOT;
const TEXT_IMPORTING_DB = <<<'EOT'
<div class="row">
  <div class="col-1 d-flex align-items-center">
    <i class="fas fa-spinner fa-spin fa-2x"></i>
  </div>
  <div class="col d-flex align-items-center">
    <p>De database structuur wordt nu geïmporteerd. Wees geduldig tijdens deze procedure...</p>
  </div>
</div>
EOT;
const TEXT_DB_SUCCESS = <<<'EOT'
<div class="row">
  <div class="col-1 d-flex align-items-center">
    <i class="fas fa-thumbs-up fa-2x"></i>
  </div>
  <div class="col d-flex align-items-center">
    <p>Database is succesvol geïmporteerd.</p>
  </div>
</div>
EOT;
const TEXT_DB_PROBLEM = <<<'EOT'
<div class="row">
  <div class="col-1 d-flex align-items-center">
    <i class="fas fa-thumbs-down fa-2x text-danger"></i>
  </div>
  <div class="col d-flex align-items-center">
    <p class="text-danger">Er is een probleem opgetreden bij het importeren van de database:</p>
    <p class="text-danger font-monospace">%s</p>
    <p class="text-danger mb-0"><strong>Controleer uw server-, gebruikers- en wachtwoordgegevens en probeer het opnieuw.</strong></p>
  </div>
</div>
EOT;
const TEXT_DB_CONNECTION_PROBLEM = <<<'EOT'
<div class="row">
  <div class="col-1 d-flex align-items-center">
    <i class="fas fa-thumbs-down fa-2x text-danger"></i>
  </div>
  <div class="col d-flex align-items-center">
    <p class="text-danger">Er is een probleem opgetreden bij het verbinden met de databaseserver:</p>
    <p class="text-danger font-monospace">%s</p>
    <p class="text-danger mb-0"><strong>Controleer uw server-, gebruikers- en wachtwoordgegevens en probeer het opnieuw.</strong></p>
  </div>
</div>
EOT;
const TEXT_DATABASE_ADDRESS = '<small class="form-text"> Het adres van de databaseserver dat kan zijn een hostnaam of IP-adres.</small>';
const TEXT_USERNAME = 'Gebruikersnaam';
const TEXT_USERNAME_DESCRIPTION = '<small class="form-text"> De gebruikersnaam die wordt gebruikt om verbinding te maken met de database-server.</small>';
const TEXT_PASSWORD = 'Wachtwoord';
const TEXT_PASSWORD_DESCRIPTION = '<small class="form-text"> Het wachtwoord dat samen met de gebruikersnaam wordt gebruikt om verbinding te maken met de database-server.</small>';
const TEXT_DATABASE_NAME = 'Database Naam';
const TEXT_NAME_DESCRIPTION = '<small class="form-text">De naam van de database waarin de gegevens worden opgeslagen. Als deze database niet bestaat, zal Phoenix proberen deze aan te maken.</small><br><small class="form-text text-danger fw-bold">WAARSCHUWING: Als u een reeds bestaande database gebruikt, kunnen de gegevens in die database verloren gaan.</small>';
const TEXT_IMPORT_SAMPLE_DATA = 'Importeer Voorbeeld Data';
const TEXT_SAMPLE_IMPORT_DESCRIPTION = '<small class="form-text"> Voorbeeld artikel en categoriegegevens importeren?</small>';
const TEXT_CONTINUE_STEP_2 = 'Doorgaan naar stap 2';
const TEXT_STEP_1 = 'Stap 1';
const TEXT_DB_EXPLANATION = <<<'EOT'
<p>De database-server slaat gegevens op zoals artikelinformatie, klantinformatie en de gemaakte bestellingen.</p>
<p>Raadpleeg uw serverbeheerder (host) als uw database-servergegevens nog niet bekend zijn.</p>
EOT;
const TEXT_DATABASE = 'Database';
const TEXT_SKIP_SAMPLE_DATA = 'Voorbeeld-data overslaan';
