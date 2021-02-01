<?php

require 'TestCircle.php';
require 'TestShape.php';

try {

    $test_circle = new TestCircle();
    $validate_random_shape = $test_circle->validateRandomShape() ? 'Ok' : 'Error';
    print_r('Result Random Circle: '.$validate_random_shape);
    echo '<br>';
    $validate_calculated_area = $test_circle->validatetCalculatedArea() ? 'Ok' : 'Error';
    print_r('Result Circle Calculated Area: '.$validate_calculated_area);

    echo '<br>';
    $test_shape = new TestShape();
    $validate_random_shape = $test_shape->validateRandomShape() ? 'Ok' : 'Error';
    print_r('Result Random Shape: '.$validate_random_shape);
    echo '<br>';
    $validate_calculated_area = $test_shape->validatetCalculatedArea() ? 'Ok' : 'Error';
    print_r('Result Shape Calculated Area : '.$validate_calculated_area);


} catch (Exception $e) {

    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
