DateClock
===========

Creates current date/time, or stop.


Install
-----

Add "kumatch/DateClock" as a dependency in your project's composer.json file.


    {
      "require": {
        "kumatch/dateclock": "*"
      }
    }

And install your dependencies.

    $ composer install



Usage
-----

```php
use Kumatch\DateClock\DateClock;

$clock = new DateClock();
$dateTime = $clock->now();  // Returns current DateTime object.

$clock->stop("2001-01-01 00:00:00"); // or set DateTime object
$dateTime = $clock->now();  // Returns "2001-01-01 00:00:00" DateTime object any time.

$clock->reset();
$dateTime = $clock->now();  // Returns current DateTime object.

```


License
--------

Licensed under the MIT License.

Copyright (c) 2013 Yosuke Kumakura

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
