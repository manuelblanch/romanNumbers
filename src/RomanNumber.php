<?php
class RomanNumbers
{
    public function convert($number) {
        if ($number == 10) {
            return "X";
        }
        if ($number == 5) {
            return "V";
        }
        return str_repeat('I',$number);
    }
}