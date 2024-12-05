<?php
function getWednesdays($y, $m)
{
    return new DatePeriod(
        new DateTime("first wednesday of $y-$m"),
        DateInterval::createFromDateString('next wednesday'),
        new DateTime("last day of $y-$m")
    );
}
?>