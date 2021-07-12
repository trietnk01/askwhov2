<?php
class DataConverter
{
    public static function orderConverter($data)
    {
        global $zController;
        $result = array();
        for ($i = 0; $i < count($data); $i++) {
            $result[$i] = array(
                "id" => doubleval($data[$i]["id"]),
                "sku" => $data[$i]["sku"],
                "fullname" => $data[$i]["fullname"],
                "email" => $data[$i]["email"],
                "phone" => $data[$i]["phone"],
                "customer_type_name" => $data[$i]["customer_type_name"],
                "total_quantity" => $zController->getHelper("CommonHelper")->fnPrice($data[$i]["total_quantity"]),
                "created_date" => $zController->getHelper('CommonHelper')->datetimeConverterByFormat($data[$i]["created_date"], "d/m/Y"),
                "status" => doubleval($data[$i]["status"]),
            );
        }
        return $result;
    }
    public static function couponsConverter($data)
    {
        global $zController;
        $result = array();
        for ($i = 0; $i < count($data); $i++) {
            $result[$i] = array(
                "id" => doubleval($data[$i]["id"]),
                "sku" => $data[$i]["sku"],
                "price" => $zController->getHelper('CommonHelper')->fnPrice($data[$i]["price"]),
                "price_v2" => $zController->getHelper('CommonHelper')->fnPrice($data[$i]["price_v2"]),
            );
        }
        return $result;
    }
    public static function provinceConverter($data)
    {
        global $zController;
        $result = array();
        for ($i = 0; $i < count($data); $i++) {
            $result[$i] = array(
                "id" => doubleval($data[$i]["id"]),
                "fullname" => $data[$i]["fullname"],
            );
        }
        return $result;
    }
}