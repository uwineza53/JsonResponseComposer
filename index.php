<?php

require_once 'vendor/autoload.php';

use Joescreencast\ResponseClass\JsonResponse;

$student = [
    'name'=> 'Joel Uwineza',
    'dept'=> 'CSC',
    'age'=> 24
];

new JsonResponse('Ok', '', $student);