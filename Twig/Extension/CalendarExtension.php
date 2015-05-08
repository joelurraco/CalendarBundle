<?php

namespace JoelUrraco\CalendarBundle\Twig\Extension;

use JoelUrraco\CalendarBundle\Helper\Processor;

class CalendarExtension extends \Twig_Extension
{
    /**
     * @var Processor
     */
    private $processor;

    public function __construct(Processor $processor)
    {
        $this->processor = $processor;
    }

    public function getFunctions()
    {
        return array(
            'ju_calendar_month' => new \Twig_Function_Method($this, 'renderMonth', array('is_safe' => array('html'), 'needs_environment' => true)),
        );
    }

    /**
     * Renders one month's calendar
     * @param \Twig_Environment $environment
     * @param string $date A date string. Format is specified in the $format argument
     * @param string $format The date format. Defaults to 'Y/m/d'
     * @return string
    */
    public function renderMonth(\Twig_Environment $environment, $date, $format = 'Y/m/d')
    {
        $day = \DateTime::createFromFormat($format, $date);

        if(!$day)
        {
            throw new \Exception("Date format is not correct");
        }

        return $environment->render('JoelUrracoCalendarBundle:Calendar:month.html.twig', $this->processor->renderMonth($day));
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'ju_calendar';
    }
}