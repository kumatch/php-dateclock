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
            return $this->createDateTime('now', $timezone);
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
            $this->waitingDateTime = $this->createDateTime($date, $timezone);
        }
    }

    /**
     *
     */
    public function reset()
    {
        $this->waitingDateTime = null;
    }

    /**
     * @param $date
     * @param null $timezone
     * @return DateTime
     */
    protected function createDateTime($date, $timezone = null)
    {
        if (!is_null($timezone)) {
            return new DateTime($date, $timezone);
        } else {
            return new DateTime($date);
        }
    }
}
