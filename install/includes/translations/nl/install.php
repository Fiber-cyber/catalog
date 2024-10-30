<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const TEXT_TESTING_DB = '<i class="fas fa-spinner fa-spin fa-2x"></i> Databaseverbinding testen..';
const TEXT_IMPORTING_DB = '<i class="fas fa-spinner fa-spin fa-2x"></i> De databasestructuur wordt nu geïmporteerd. Wees geduldig tijdens deze procedure.';
const TEXT_DB_SUCCESS = '<i class="fas fa-thumbs-up fa-2x"></i> Database succesvol geïmporteerd.';
const TEXT_DB_PROBLEM = <<<'EOT'
<p><i class="fas fa-thumbs-down fa-2x text-danger"></i> Er is een probleem opgetreden bij het importeren van de database. De volgende fout was opgetreden:</p>
<p  class="text-danger"><strong>%s</strong></p>
<p class="text-danger">Controleer de verbindingsgegevens en probeer het opnieuw.</p>
EOT;
const TEXT_DB_CONNECTION_PROBLEM = <<<'EOT'
<p><i class="fas fa-thumbs-down fa-2x text-danger"></i> Er is een probleem opgetreden bij het verbinden met de databaseserver. De volgende fout was opgetreden:</p>
<p class="text-danger"><strong>%s</strong></p>
<p class="text-danger">Controleer de verbindingsgegevens en probeer het opnieuw.</p>
EOT;
const TEXT_DATABASE_ADDRESS = '<small class="form-text"> Het adres van de databaseserver dat kan zijn een hostnaam of IP-adres.</small>';
const TEXT_USERNAME = 'Gebruikersnaam';
const TEXT_USERNAME_DESCRIPTION = '<small class="form-text"> De gebruikersnaam die wordt gebruikt om verbinding te maken met de database-server.</small>';
const TEXT_PASSWORD = 'Wachtwoord';
const TEXT_PASSWORD_DESCRIPTION = '<small class="form-text"> Het wachtwoord dat samen met de gebruikersnaam wordt gebruikt om verbinding te maken met de database-server.</small>';
const TEXT_DATABASE_NAME = 'Database Naam';
const TEXT_NAME_DESCRIPTION = '<small class="form-text"> De naam van de database waarin de gegevens moeten worden opgeslagen.</small>';
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
