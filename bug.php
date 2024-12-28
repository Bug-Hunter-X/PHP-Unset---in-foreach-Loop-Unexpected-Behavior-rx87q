function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

//This will produce an unexpected result if the array is modified inside the loop.
//Consider using a copy or iterating backwards to avoid this issue.

function foo2(array $arr) {
  $result = [];
  foreach ($arr as $value) {
    if ($value !== 'a') {
      $result[] = $value;
    }
  }
  return $result;
}