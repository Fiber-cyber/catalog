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
Om veiligheidsredenen moet u zich opnieuw aanmelden bij uw profiel om verder te winkelen.<br><br>
Sommige browsers hebben niet de mogelijkheid om automatisch een veilige SSL-sessie-ID te genereren. Als u een dergelijke browser gebruikt, raden we u aan over te stappen op een modernere browser, zoals <a href="https://www.microsoft.com/en-us/edge/download?form=MA13FJ" target="_blank" rel="noreferrer">Microsoft Edge</a> of <a href="https://support.google.com/chrome/answer/95346" target="_blank" rel="noreferrer">Google Chrome</a> of <a href="https://www.mozilla.org/en-GB/firefox/" target="_blank" rel="noreferrer">Mozilla Firefox</a> om onze site te blijven gebruiken.<br><br>
We hebben deze beveiligingsmaatregel voor uw voordeel genomen en verontschuldigen ons voor het ongemak.<br><br>
Neem <a class="btn btn-success" role="button" href="%s">contact met ons op</a> als u vragen hebt over deze vereiste.
EOT;

const BOX_INFORMATION_HEADING = 'Privacy en Veiligheid';
const BOX_INFORMATION = <<<'EOT'
We valideren de SSL-sessie-ID die automatisch door uw browser wordt gegenereerd op elk beveiligd paginabezoek aan deze server..<br><br>
Deze validatie zorgt ervoor dat u met uw account op deze site navigeert en niet iemand anders.
EOT;