<?php

namespace Kumatch\Test\DateClock;

use Kumatch\DateClock\DateClock;
use DateTime;

class DateClockTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function testGetCurrentDateTime()
    {
        $clock = new DateClock();
        $date = $clock->now();

        $this->assertInstanceOf('\DateTime', $date);
        $this->assertEquals(date('Y'), $date->format('Y'));
        $this->assertEquals(date('m'), $date->format('m'));
        $this->assertEquals(date('d'), $date->format('d'));
        $this->assertEquals(date('H'), $date->format('H'));
        $this->assertEquals(date('i'), $date->format('i'));
    }


    public function testStopDateFormatAndGet()
    {
        $clock = new DateClock();
        $clock->stop('2001-01-02 10:05:08');

        $date = $clock->now();

        $this->assertInstanceOf('\DateTime', $date);
        $this->assertEquals('2001', $date->format('Y'));
        $this->assertEquals('01', $date->format('m'));
        $this->assertEquals('02', $date->format('d'));
        $this->assertEquals('10', $date->format('H'));
        $this->assertEquals('05', $date->format('i'));
        $this->assertEquals('08', $date->format('s'));
    }


    public function testStopDateTimeObjectAndGet()
    {
        $clock = new DateClock();
        $clock->stop(new DateTime('2001-01-02 10:05:08'));

        $date = $clock->now();

        $this->assertInstanceOf('\DateTime', $date);
        $this->assertEquals('2001', $date->format('Y'));
        $this->assertEquals('01', $date->format('m'));
        $this->assertEquals('02', $date->format('d'));
        $this->assertEquals('10', $date->format('H'));
        $this->assertEquals('05', $date->format('i'));
        $this->assertEquals('08', $date->format('s'));
    }


    public function testStopAndReset()
    {
        $clock = new DateClock();

        $clock->stop('2001-01-02 10:05:08');
        $date = $clock->now();

        $this->assertEquals('2001', $date->format('Y'));

        $clock->reset();
        $date = $clock->now();

        $this->assertEquals(date('Y'), $date->format('Y'));
    }
}