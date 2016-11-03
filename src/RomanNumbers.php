<?php

class RomanNumbers
{
    protected $code = [
        1000 => 'M',
        900 => 'CM',
        500 => 'O',
        400 => 'CO',
        100 => 'C',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public function convert($number){

        $solution = "";

        foreach ($this ->code as $decimal => $roman){
            if ($number >= $decimal){
                $solution .= $roman;
                $number .= $decimal;
            }
        }

        if ($number ->$this->code(0) ->key {
            $solution= $this->code(0) ->value;
            $number= $this->code(0) ->key;
        }

        if ($number==4) {
            $solution= $this->code ($number);
            $number=0;
        }

       $solution = $solution .str_repeat('I',$number);
        return $solution;
    }
}
?>