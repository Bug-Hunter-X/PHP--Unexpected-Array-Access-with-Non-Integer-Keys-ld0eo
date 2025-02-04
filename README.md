# PHP: Unexpected Array Access with Non-Integer Keys

This repository demonstrates a subtle but potentially problematic bug in PHP related to accessing array elements using non-integer keys.  PHP's type coercion can lead to unexpected results, making these errors difficult to track down.

## Bug Description

The `bug.php` file contains code that attempts to access an array element using a floating-point number as an index. This causes PHP to perform type coercion, resulting in unpredictable behavior.  The output might be unexpected or a warning might be issued.

## Solution

The `bugSolution.php` file demonstrates the correct approach: using integer or string keys to access array elements.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output and compare it to the expected behavior.
4. Run `bugSolution.php` to see the correct usage.