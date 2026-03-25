

<!DOCTYPE html>
<html>
<body>

<h1>Two sum</h1>

<?php
class Solution {

    function twoSum( $nums, $target ){  
        $map = [];
        foreach ($nums as $index => $num) {
            $complement = $target - $num;  
            // if (isset($map[$complement])) {   
            if (array_key_exists($complement , $map)) {   
                return [$map[$complement], $index];
            } 
            $map[$num] = $index; 
            // print_r( $map   );
            // echo "<br>";
        } 
        return []; // no valid pair found 
    }
} 
    
    $solution = new Solution();
    $nums = [6,2, 11, 15 ,7];
    $target = 9; 
    print_r($solution->twoSum($nums, $target)); // Output: Array ( [0] => 0 [1] => 1 )


?>

</body>
</html>