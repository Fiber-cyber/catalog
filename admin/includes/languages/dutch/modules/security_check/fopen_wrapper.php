<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

const MODULE_SECURITY_CHECK_FOPEN_WRAPPER_TITLE = 'allow_url_fopen';
const MODULE_SECURITY_CHECK_FOPEN_WRAPPER_ERROR = <<<'EOT'
allow_url_fopen zou ingeschakeld moeten zijn in php.ini<br>
Dit is een hostinginstelling en kan mogelijk worden uitgevoerd via uw hostingcontrolepaneel - zo niet, vraag uw host.
EOT;