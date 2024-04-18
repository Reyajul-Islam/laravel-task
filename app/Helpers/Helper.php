<?php
namespace App\Helpers;

class Helper
{
    public static function roomTypeByID($id)
    {
        switch ($id) {
            case 1:
                return "Single Room";
                break;
            case 2:
                return "Double Room";
                break;
        }
    }

    public static function dateFormat($date)
    {
        return date('d M, Y', strtotime($date));
    }
}