<?php
/*
  $Id$

    Copyright (c) 2016:
    Dan Cole - @Dan Cole
    James Keebaugh - @kymation
    Lambros - @Tsimi
    Rainer Schmied - @raiwa

  All rights reserved.
  
  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

  1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

  2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

  3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/


const MODULE_CONTENT_SC_STOCK_NOTICE_TITLE = 'Niet op voorraad kennisgeving';
const MODULE_CONTENT_SC_STOCK_NOTICE_DESCRIPTION = 'Toon voorraadbericht op de winkelwagenpagina.';

const MODULE_CONTENT_SC_STOCK_NOTICE_CANT_CHECKOUT = '<p class="lead">Artikelen gemarkeerd met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . <<<'EOT'
hebben we niet in de gewenste hoeveelheid in onze voorraad.</p>
<p>Wijzig de hoeveelheid artikelen gemarkeerd met 
EOT
. STOCK_MARK_PRODUCT_OUT_OF_STOCK . ', dank u wel.</p>';
const MODULE_CONTENT_SC_STOCK_NOTICE_CAN_CHECKOUT = '<p class="lead">Artikelen gemarkeerd met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . <<<'EOT'
hebben we niet in de gewenste hoeveelheid in onze voorraad.</p>
<p>U kunt ze toch kopen, en wat op voorraad is, verzenden we onmiddellijk en later volgt de rest.</p>
EOT;