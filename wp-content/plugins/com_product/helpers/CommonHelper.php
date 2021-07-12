<?php

class CommonHelper
{
    public static function datetimeConverterByFormat($date, $format = "d/m/Y H:i:s")
    {
        $result = "";
        if (!empty($date) && $date != '0000-00-00 00:00:00' && $date != '0000-00-00') {
            $arrDate = date_parse_from_format('Y-m-d H:i:s', $date);
            $ts = mktime($arrDate["hour"], $arrDate["minute"], $arrDate["second"], $arrDate['month'], $arrDate['day'], $arrDate['year']);
            $result = date($format, $ts);
        }
        return $result;
    }
    public static function fnPrice($price)
    {
        return number_format($price, 0, ".", ",");
    }
    public static function randomCodeNumber()
    {
        $data = range(0, 9);
        $subject = implode('', $data);
        $subject = str_shuffle($subject);
        return $subject;
    }
    public static function t_df_lang()
    {
        if (function_exists('pll_current_language')) {
            $acf_pr = pll_current_language() == "vi" ? "" : "_en";
        } else {
            $acf_pr = "";
        }
        return $acf_pr;
    }
}