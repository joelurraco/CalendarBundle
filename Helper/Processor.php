<?php

namespace JoelUrraco\CalendarBundle\Helper;

/**
 * Class that generates the view data used in templates
 *
 * @author Joel Urraco <joelurraco@gmail.com>
 */
class Processor
{
/**
 	* Generates the view data needed for rendering a month
 	* @param \DateTime $day A \DateTime object from where to extract month and year
 	* @return array
 	*/
	public function renderMonth(\DateTime $day)
	{
        // Get which day of the week is the first day of the month
        $firstDay = $day->modify('first day of this month')->format('N');
        $daysInMonth = $day->format('t');

        $monthNumber = $day->format('m');
        $yearNumber = $day->format('Y');

        $weeks = array();

        // Array for the first week, fill it with blank days until we get to the first day in the week
        $week = array();	// Initialize the first week
        for($i = 1; $i < $firstDay; $i++)
        {
        	$week[] = array('day' => false);
        }

        // Get every day in the month
        for($i = 1; $i <= $daysInMonth; $i++)
        {
        	$week[] = array(
        			'day' 	=> $i,
        			'month'	=> $monthNumber,
        			'year' 	=> $yearNumber,
        	);

        	if(count($week) == 7)
        	{
        		$weeks[] = $week;
        		unset($week);
        		$week = array();
        	}
        }

        return array('weeks' => $weeks);
	}
}