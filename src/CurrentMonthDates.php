<?php

namespace App;

class CurrentMonthDates {
    function get_current_month_dates(): array {
        $start_date = date('Y-m-01');

        $end_date = date('Y-m-t');

        return [
            'start_date' => $start_date,
            'end_date' => $end_date
        ];
    }


}