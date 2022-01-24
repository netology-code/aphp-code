<?php

namespace App\Report;

/**
 * Class Report
 * @package App\Report
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
                $name = 'Кассовый отчет App';
                break;
            case self::TOP_REPORT_TYPE:
                $name = 'Отчет для начальства App';
                break;
            default:
                $name = 'Неизвестный отчет App';
        }

        return $name . 'App';
    }
}
