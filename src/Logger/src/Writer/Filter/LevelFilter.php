<?php


namespace rollun\logger\Writer\Filter;


use Zend\Log\Filter\FilterInterface;

class LevelFilter implements FilterInterface
{
    /**
     * @var array
     */
    private $levels;

    /**
     * PriorityFilter constructor.
     * @param array $levels
     */
    public function __construct($levels = [])
    {
        $this->levels = $levels;
    }

    /**
     * Returns TRUE to accept the message, FALSE to block it.
     *
     * @param array $event event data
     * @return bool accepted?
     */
    public function filter(array $event)
    {
        return in_array($event["level"], $this->levels);
    }
}