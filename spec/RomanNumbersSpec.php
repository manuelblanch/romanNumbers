<?php
namespace spec;
use RomanNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
class RomanNumberSpec extends ObjectBehavior {
    function it_is_initializable(){
        $this->shouldHaveType(\RomanNumbers::class);
    }
    function it_returnsI_if_1(){
        $this->convert(1)->shouldReturn('I');
    }
    function it_returnsII_if_2(){
        $this->convert(2)->shouldReturn('II');
    }
    function it_returnsIII_if_3(){
        $this->convert(3)->shouldReturn('III');
    }
    function it_returnsV_if_5(){
        $this->convert(5)->shouldReturn('V');
    }
    function it_returnsX_if_10(){
        $this->convert(10)->shouldReturn('X');
    }
}