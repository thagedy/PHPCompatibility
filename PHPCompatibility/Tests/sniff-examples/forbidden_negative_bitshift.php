<?php

var_dump(1 >> -1); // Bad.
var_dump(1 >> - 1); // Bad.

var_dump(1 >> 1); // Ok.
var_dump(1 >> $variable); // Ok.
var_dump(1 >> - $variable); // Ok - as we don't know whether the contents of $variable is positive or negative.
var_dump(1 >> ($variable - 1)); // Ok - as we don't know whether the contents of $variable is positive or negative.

return ($a >> $b) & ~(1 << (8 * PHP_INT_SIZE - 1) >> ($b - 1)); // OK - as we don't know whether the contents of the variables and the constant is positive or negative.

// Don't throw errors on live code review.
var_dump(1 >>
