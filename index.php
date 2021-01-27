<?php

// Premiere ligne
echo date("d-m-y") . "<br>";

$date = new DateTime('2018-12-10 11:35:07');

echo $date->format('Y.m.d') . "<br>";

echo $date->format('h:i:s') . "<br>";

