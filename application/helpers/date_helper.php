<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('change_date_format')){
    function change_date_format($string_date) {
        $array_month = ['', 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ษ.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'];
        $array_date = explode("-",$string_date);
        // var_dump($array_date);
        $day = $array_date[2];
        $month = $array_month[(int)$array_date[1]];
        $year = ($array_date[0]+543);
        // print_r($year);

        return $day.' '.$month.' '.$year;
    }
}
