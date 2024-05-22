<?php

include_once __dir__ . '/../vendor/autoload.php';

use App\model\Todo;
$todo1 = new Todo(1, 'Learn PHP');
print_r($todo1->title);
