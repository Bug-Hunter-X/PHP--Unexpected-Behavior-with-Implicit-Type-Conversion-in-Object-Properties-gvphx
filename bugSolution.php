The solution lies in using strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison checks for both value and type equality, preventing PHP from performing implicit type conversions. 

Here's the corrected code:

```php
<?php
class MyClass {
    public int $count = 0;
}

$obj = new MyClass();
$obj->count = "5"; //Incorrect string assignment

//Incorrect use of loose comparison
if ($obj->count == 5) {
    echo "Count is 5 (Incorrect!)";
} else {
    echo "Count is not 5 (Correct!)";
}

//Correct use of strict comparison
if ($obj->count === 5) {
    echo "\nCount is 5 (Incorrect!)";
} else {
    echo "\nCount is not 5 (Correct!)";
}

if ($obj->count === "5") {
    echo "\nCount is "5" (Correct!)";
} else {
    echo "\nCount is not "5" (Incorrect!)";
}
?>
```
This ensures that the comparison only succeeds when `$obj->count` is both numerically equal to 5 and also of integer type.