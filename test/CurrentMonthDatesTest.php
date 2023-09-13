<?php
require __DIR__ . "/../src/CurrentMonthDates.php";

use App\CurrentMonthDates;

class CurrentMonthDatesTest extends \PHPUnit\Framework\TestCase {
    public function testCurrencyMonthDates() {
        $expected = [
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-30'
        ];

        $current_month_dates = new CurrentMonthDates();

        self::assertEquals(
            $expected,
            $current_month_dates->get_current_month_dates()
        );

    }

}