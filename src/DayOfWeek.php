<?php

    class DayOfWeek
    {
        function dayCheck($input_month, $input_day, $input_year)
        {
            include "codearrays.php";

            $day_code = $month_code[$input_month] + $input_day + $year_code[$input_year];

            while ($day_code > 6)
            {
                $day_code = $day_code - 7;
            }

            $result = array_search($day_code, $day_ofweek_code);

            return $result;
        }
    }
?>
