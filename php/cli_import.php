<?php

namespace Lychee;

use Lychee\Modules\Import;

require(__DIR__ . '/define.php');
require(__DIR__ . '/autoload.php');

require(__DIR__ . '/helpers/fastImageCopyResampled.php');
require(__DIR__ . '/helpers/generateID.php');
require(__DIR__ . '/helpers/getExtension.php');
require(__DIR__ . '/helpers/getGPSCoordinate.php');
require(__DIR__ . '/helpers/getGraphHeader.php');
require(__DIR__ . '/helpers/getHashedString.php');
require(__DIR__ . '/helpers/hasPermissions.php');
require(__DIR__ . '/helpers/search.php');


$import = new Import();
$import->server(NULL);

?>
