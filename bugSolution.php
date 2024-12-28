function foo2(array $arr) {
  $result = [];
  foreach ($arr as $value) {
    if ($value !== 'a') {
      $result[] = $value;
    }
  }
  return $result;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => b [1] => c )

//Alternative solution using array_filter
$result = array_filter($arr, function ($value) { return $value !== 'a';});
print_r($result); //Output: Array ( [1] => b [3] => c )