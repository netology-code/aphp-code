<?php
declare(strict_types=1);

/**
 * Class Report
 */
class Report
{
    public const CASHIER_REPORT_TYPE = 1;
    public const TOP_REPORT_TYPE = 2;

    /**
     * @param int $type
     * @return string
     */
    public static function getReportNameByType(int $type): string
    {
        switch ($type) {
            case self::CASHIER_REPORT_TYPE:
                $name = 'Кассовый отчет';
                break;
            case self::TOP_REPORT_TYPE:
                $name = 'Отчет для начальства';
                break;
            default:
                $name = 'Неизвестный отчет';
        }

        return $name;

    }
}

echo Report::getReportNameByType(Report::TOP_REPORT_TYPE);
echo Report::getReportNameByType(Report::CASHIER_REPORT_TYPE);
echo Report::getReportNameByType(0);
