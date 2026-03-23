<?php

echo "<pre>";

$path = '/home/iwdev18/viawork.iwdev18.beget.tech/public_html';

chdir($path);

echo shell_exec('git pull origin main 2>&1');

echo "</pre>";
