<?php
$TimeStr="2012-01-01 12:00:00";
$TimeZoneNameFrom="UTC";
$TimeZoneNameTo="Asia/Kolkata";
echo date_create($TimeStr, new DateTimeZone($TimeZoneNameFrom))
        ->setTimezone(new DateTimeZone($TimeZoneNameTo))->format("Y-m-d H:i:s");


?>