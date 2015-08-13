<?php

        require_once 'src/DayOfWeek.php';

        class DayOfWeekTest extends PHPUnit_Framework_TestCase
        {

                function test_initialDate()
                {
                    $test_DayOfWeek = new DayOfWeek;
                    $input_month = "01";
                    $input_day = 22;
                    $input_year = "2001";

                    $result = $test_DayOfWeek->dayCheck($input_month, $input_day, $input_year);

                    $this->assertEquals("Monday", $result);

                }
        }
?>
