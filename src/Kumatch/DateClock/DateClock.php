<?php

namespace Kumatch\DateClock;

use DateTime;

class DateClock
{
    /** @var  DateTime */
    protected $waitingDateTime;

    /**
     * @param null $timezone
     * @return DateTime
     */
    public function now($timezone = null)
    {
        if ($this->waitingDateTime) {
            return $this->waitingDateTime;
        } else {
            return new DateTime('now', $timezone);
        }
    }

    /**
     * @param $date
     * @param null $timezone
     */
    public function stop($date, $timezone = null)
    {
        if (is_a($date, '\DateTime')) {
            $this->waitingDateTime = $date;
        } else {
            $this->waitingDateTime = new DateTime($date, $timezone);
        }
    }

    /**
     *
     */
    public function reset()
    {
        $this->waitingDateTime = null;
    }
}
