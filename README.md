# PHP Unset() in foreach Loop Unexpected Behavior

This repository demonstrates an uncommon error in PHP related to using `unset()` within a `foreach` loop to modify an array.  The issue arises from how PHP's `foreach` loop internally manages the array's internal pointer and the keys.  Incorrectly using `unset()` can lead to skipping elements or unexpected array results.

The `bug.php` file contains code that exhibits the unexpected behavior.  The `bugSolution.php` file provides a corrected solution to ensure accurate array modification.

This example highlights the importance of understanding the intricacies of array manipulation in PHP, especially when dealing with loops and `unset()`.