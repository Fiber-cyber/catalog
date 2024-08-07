<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
 https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE = 'Veiligheidscontrole';
const HEADING_TITLE = 'Veiligheidscontrole';

const TEXT_INFORMATION = <<<'EOT'
We hebben vastgesteld dat uw browser een andere SSL-sessie-ID heeft gegenereerd op onze beveiligde pagina\'s<br><br>
Voor beveiligingsmaatregelen moet u zich opnieuw aanmelden in uw profiel om online te kunnen winkelen.<br><br>
Sommige browsers, zoals Konqueror 3.1, kunnen niet automatisch een veilige SSL-sessie-ID genereren die we nodig hebben. Als u een dergelijke browser gebruikt, raden we u aan over te schakelen naar een andere browser zoals <a class="btn btn-light btn-sm" role="button" href="http://www.microsoft.com/ie/" target="_blank" rel="noreferrer">Microsoft Internet Explorer</a> of <a class="btn btn-light btn-sm" role="button" href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank" rel="noreferrer">Netscape</a> of <a class="btn btn-light btn-sm" role="button" href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a> om uw online winkelervaring voort te zetten.<br><br>
We hebben deze beveiligingsmaatregel genomen om uw veiligheid te waarborgen en bieden vooraf onze excuses aan als er zich ongemakken voordoen.<br><br>
AUB <a class="btn btn-success btn-sm" role="button" href="%s">neem contact op met de winkeleigenaar</a> als u vragen heeft hierover of als u artikelen offline wilt blijven kopen.
EOT;

const BOX_INFORMATION_HEADING = 'Privacy en Veiligheid';
const BOX_INFORMATION = <<<'EOT'
We valideren de SSL-sessie-ID die automatisch door uw browser wordt gegenereerd op elk beveiligd paginabezoek aan deze server..<br><br>
Deze validatie zorgt ervoor dat u met uw account op deze site navigeert en niet iemand anders.
EOT;