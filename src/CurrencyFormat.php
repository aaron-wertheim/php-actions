<?php

namespace App;

class CurrencyFormat {
    public function get_currency_format($amount, $show_plus = true): string {
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

}
