<?php
class CurrencyFormat extends PHPUnit\Framework\TestCase
{
    public function currency_format($amount, $show_plus = true): string
    {
        $negative = false;

        if ($amount < 0.0) {
            $negative = true;
        } //end if

        $amount = abs($amount);

        $amount_string = number_format($amount);

        if ($negative) {
            $format = '(%s)';
        } else if ($show_plus) {
            $format = '+%s';
        } else {
            $format = '%s';
        } //end if

        return sprintf($format, $amount_string);
    } //currency_format

    public function currencyFormatShowsPlus() {
        self::assertEquals("+20", self::currency_format(20));
    }

    public function testCurrencyFormatShowsParenthesis() {
        self::assertEquals("(20)", self::currency_format(-20));
    }

    public function testCurrencyFormatDoesNotShowPlus() {
        self::assertEquals("20", self::currency_format(20, false));
    }

    public function testCurrencyFormatShowsPlusWhenZero() {
        self::assertEquals("+0", self::currency_format(0));
    }

    public function testCurrencyFormatAcceptsString() {
        self::assertEquals("20", self::currency_format("20", false));
    }

    public function testCurrencyFormatComma() {
        self::assertEquals("1,234", self::currency_format(1234, false));
    }

    public function testCurrencyFormatCommaWithString() {
        self::assertEquals("1,234", self::currency_format("1234", false));
    }

    public function testCurrencyFormatRemovesDecimal() {
        self::assertEquals("1,234", self::currency_format(1234.00000000, false));
    }

    public function testCurrencyFormatRemovesDecimalWithString() {
        self::assertEquals("1,234", self::currency_format("1234.00000000", false));
    }
    public function testCurrencyFormatRoundsUp() {
        self::assertEquals("1,235", self::currency_format(1234.5, false));
    }

    public function testCurrencyFormatRoundsUpWithString() {
        self::assertEquals("1,235", self::currency_format("1234.5", false));
    }

}
