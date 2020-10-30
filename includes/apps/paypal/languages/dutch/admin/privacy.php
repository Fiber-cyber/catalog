privacy_title = Privacy Beleid

privacy_body = <h5>API Referenties</h5>

<p>Met de PayPal-app voor OSCOM CE Phoenix kunnen winkeleigenaars de app automatisch instellen en configureren met hun PayPal API-inloggegevens zonder deze handmatig in te voeren. Dit wordt veilig uitgevoerd door osCommerce toegang te verlenen om de API-referenties op te halen van het PayPal-account van de winkeleigenaar.</p>

<p>Door osCommerce toegang te verlenen, kan de volgende beperkte informatie worden opgehaald van de PayPal-rekening van de winkeleigenaar:</p>

<ul>
  <li>API Gebruikersnaam</li>
  <li>API Wachtwoord</li>
  <li>API Handtekening</li>
  <li>Account ID</li>
</ul>

<p>Er is geen andere accountinformatie toegankelijk (bijv. Gebruikersnaam of wachtwoord van PayPal-account, saldo, transactiegeschiedenis, enz.).</p>

<p>De API-gebruikersnaam, API-wachtwoord, API-handtekening en account-ID-informatie worden gebruikt om de PayPal-modules die zijn gebundeld in de PayPal-app automatisch te configureren, inclusief:</p>

<ul>
  <li>PayPal Payments Standard</li>
  <li>PayPal Express Checkout</li>
  <li>PayPal Payments Pro (Direct Payment)</li>
  <li>PayPal Payments Pro (Hosted Solution)</li>
  <li>Log In met PayPal</li>
</ul>

<p>Het proces wordt gestart met behulp van de buttons "Live-referenties ophalen" en "Sandbox-referenties ophalen" die worden weergegeven op de startpagina van de PayPal-app en inloggegevens. De winkeleigenaar wordt veilig naar de website van PayPal gebracht, waar hem wordt gevraagd osCommerce toegang te verlenen om de API-referenties op te halen, en wordt vervolgens teruggestuurd naar zijn online winkel om de configuratie van de PayPal-app voort te zetten. Dit wordt gedaan met de volgende stappen:</p>

<ol>
  <li>De winkeleigenaar klikt op "Live-referenties ophalen" of "Sandbox-referenties ophalen" en wordt veilig naar een initialisatiepagina op de osCommerce-website gebracht die het verzoek registreert en de winkeleigenaar onmiddellijk doorverwijst naar een pagina op de PayPal-website. osCommerce registreert de volgende informatie in het verzoek:
    <ul>
      <li>Een uniek gegenereerde sessie ID.</li>
      <li>Een geheime ID die overeenkomt met de sessie ID.</li>
      <li>De URL van de PayPal-app van de winkeleigenaar (om de winkeleigenaar te re-directen).</li>
      <li>Het IP-adres van de winkeleigenaar.</li>
    </ul>
  </li>
  <li>PayPal vraagt de winkeleigenaar om in te loggen op zijn bestaande PayPal-account of om een nieuw account aan te maken.</li>
  <li>PayPal vraagt de winkeleigenaar osCommerce toestemming te geven om hun API-referenties op te halen.</li>
  <li>PayPal leidt de winkeleigenaar terug naar de initialisatiepagina op de osCommerce-website.</li>
  <li>osCommerce haalt de volgende informatie veilig op en slaat deze op van PayPal:
    <ul>
      <li>API Gebruikersnaam</li>
      <li>API Wachtwoord</li>
      <li>API Handtekening</li>
      <li>Account ID</li>
    </ul>
  </li>
  <li>De winkeleigenaar wordt automatisch teruggestuurd naar zijn PayPal-app.</li>
  <li>De PayPal-app voert een beveiligde HTTPS-oproep uit naar de osCommerce-website om de API-inloggegevens op te halen.</li>
  <li>De osCommerce-website verifieert de beveiligde HTTPS-aanroep, verzendt de API-inloggegevens en verwijdert lokaal de API-inloggegevens en PayPal-app-URL die zijn opgeslagen in stap 1 en 5.</li>
  <li>De PayPal-app configureert zichzelf met de API-inloggegevens.</li>
</ol>

<div class="alert alert-warning">
  <p>De API-referenties die zijn opgehaald van de PayPal-rekening van de winkeleigenaar, worden alleen gebruikt om de PayPal-app te configureren. osCommerce slaat de API-referenties tijdelijk op zoals beschreven in dit privacybeleid en verwijdert de API-referenties zodra het proces voorbij is. Er wordt ook een back-endscript uitgevoerd om opgeslagen informatie te verwijderen voor processen die niet zijn afgerond.</p>
</div>

<div class="alert alert-info">
  <p>osCommerce heeft nauw samengewerkt met PayPal om ervoor te zorgen dat de PayPal-app het strikte privacy- en beveiligingsbeleid volgt.</p>
</div>

<h5>PayPal Modules</h5>

<p>PayPal-modules sturen winkeleigenaar, online winkel en klantgerelateerde informatie naar PayPal om API-transacties te verwerken. Deze omvatten de volgende modules:</p>

<ul>
  <li>PayPal Payments Standard</li>
  <li>PayPal Express Checkout</li>
  <li>PayPal Payments Pro (Direct Payment)</li>
  <li>PayPal Payments Pro (Hosted Solution)</li>
  <li>Log In met PayPal</li>
</ul>

<p>De volgende informatie is opgenomen in API-aanroepen die naar PayPal zijn verzonden:</p>

<ul>
  <li>PayPal-accountgegevens van de verkoper winkeleigenaar, inclusief het e-mailadres en API-inloggegevens.</li>
  <li>Klant verzend- en factuuradressen.</li>
  <li>Artikel informatie inclusief naam, prijs en hoeveelheid.</li>
  <li>Verzend- en belastinggegevens die van toepassing zijn op de bestelling.</li>
  <li>Het ordertotaal en de valuta.</li>
  <li>Sla URL's op om PayPal-transacties te verwerken, verifiëren en af te ronden, inclusief succesvolle, geannuleerde en IPN-URL's.</li>
  <li>Identificatie van e-commerce-oplossingen.</li>
</ul>

<div class="alert alert-info">
  <p>De parameters van elke naar PayPal verzonden en ontvangen transactie kunnen worden bekeken op de PayPal App Log-pagina.</p>
</div>

<h5>Gehoste bibliotheken (gebruikersinterface van jQuery en jQuery) </h5>

<p>Als jQuery of jQuery UI nog niet zijn geladen in de Administration Tool, de beheerpagina's van de PayPal-app laden de bibliotheken  veilig en automatisch.</p>