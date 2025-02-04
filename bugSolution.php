The solution is to ensure that array keys are always integers or strings.

```php
$myArray = ['a', 'b', 'c'];

// Correct usage:
$indexInteger = 1;
$valueInteger = $myArray[$indexInteger]; // Accesses element at index 1 ('b')
echo "Integer index: " . $valueInteger . "\n";

// Correct usage with string keys:
$myArray = ['one' => 'a', 'two' => 'b', 'three' => 'c'];
$valueString = $myArray['two']; // Accesses element with key 'two' ('b')
echo "String index: " . $valueString;

```
Avoid using floating-point numbers or booleans as array keys.