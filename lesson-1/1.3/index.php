<?php
declare(strict_types=1);

require_once('autoload.php');

use App\Report as AppReport;
use Mobile\Report as MobileReport;

echo (AppReport::getReportNameByType(0));
echo (MobileReport::getReportNameByType(0));
