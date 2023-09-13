<?php
require __DIR__ . "/../src/CurrencyFormat.php";

use App\CurrencyFormat;

class CurrencyFormatTest extends \PHPUnit\Framework\TestCase {
    public function testCurrencyFormat() {
        $currency_format = new CurrencyFormat();
        self::assertEquals(
            "+20",
            $currency_format->get_currency_format(20.00)
        );

        self::assertEquals(
            "(20)",
            $currency_format->get_currency_format(-20.00)
        );

        self::assertEquals(
            "20",
            $currency_format->get_currency_format(20.00000, false)
        );
    }
}