<?php

echo date('d/m/Y') . "<br>";

echo strtotime('5 years') . "<br>";

echo date('d/m/Y', strtotime("5 years")) . "<br>";