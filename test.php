<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 18/03/2017
 * Time: 11:25
 */

$date = date_create('2016-05-29');
date_add($date, date_interval_create_from_date_string('12 month')); // 6 m // 12 m // 18 m
echo date_format($date, 'Y-m-d');