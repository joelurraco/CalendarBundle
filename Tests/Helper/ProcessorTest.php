<?php

namespace JoelUrraco\CalendarBundle\Tests\Helper;

use JoelUrraco\CalendarBundle\Helper\Processor;

class ProcessorTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $processor = new Processor();
        $day = \DateTime::createFromFormat("Y-m-d", "2015-12-08");
        $result = $processor->renderMonth($day);

        $weeks = array(
            array(
                array(
                    'day'   => false,
                    ),
                array(
                    'day'   => 1,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 2,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 3,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 4,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 5,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 6,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                ),
            array(
                array(
                    'day'   => 7,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 8,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 9,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 10,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 11,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 12,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 13,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                ),
            array(
                array(
                    'day'   => 14,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 15,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 16,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 17,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 18,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 19,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 20,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                ),
            array(
                array(
                    'day'   => 21,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 22,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 23,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 24,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 25,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 26,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 27,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                ),
            array(
                array(
                    'day'   => 28,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 29,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 30,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                array(
                    'day'   => 31,
                    'month' => '12',
                    'year'  => '2015',
                    ),
                ),
            );

        $answer = array('weeks' => $weeks);

        $this->assertEquals($answer, $result);
    }
}