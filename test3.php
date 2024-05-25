<?php
    function isPalindrome($input,$left,$right){
        if($input[$left] == $input[$right]){
            if(($right-1) == $left){
                return true;
            }
            $right--;
            $left++;
            return isPalindrome($input,$left,$right);    
        }else{
            return false;
        }
    }
    function highestPalindrome($input,$k,$left,$right,$res1,$res2,$hasPalindrome){
        if(($res1 != $input || $res2 != $input) && $k == 0){
            
            if(intval($res1) > intval($res2)){
                return $res1;
            }else{    
                return $res2;
            }
        }
        if($hasPalindrome){
            if($k > 0){
                if($k % 2 == 0 && $left > 0){
                    $k--;
                    $res2[$right] = $res2[$right + 1];
                    $right--;
                    return highestPalindrome($input,$k,$left,$right,$res1,$res2,$hasPalindrome);
                }else if($k%2 == 1 && $left > 0){
                    $k--;
                    $res2[$left] = $res2[$left - 1];
                    $left++;
                    return highestPalindrome($input,$k,$left,$right,$res1,$res2,$hasPalindrome);
                }
                if($res2[$left] == $res2[$right]){
                    $right--;
                    $left++;
                }
                return highestPalindrome($input,$k,$left,$right,$res1,$res2,$hasPalindrome);
            }
        }else{
            if($input[$left] == $input[$right] && $k > 0){
                $right--;
                $left++;
            }else{
                $res1[$left] = $res1[$right];
                $res2[$right] = $res2[$left];
                $k--;
                $right--;
                $left++;
            }
            return highestPalindrome($input,$k,$left,$right,$res1,$res2,$hasPalindrome);
        }
    }
    function getHighestPalindrome($input,$k){
        if(strlen($input) % 2 == 1){
            return -1;
        }
        $right = strlen($input) - 1;
        $left = 0;
        $hasPalindrome = isPalindrome($input,$left,$right);
        $res = highestPalindrome($input,$k,$left,$right,$input,$input,$hasPalindrome);
        if(!isPalindrome($res,$left,$right)){
            return -1;
        }
        return $res;
    }
    echo getHighestPalindrome("3943",1);
    echo "\n";
    echo getHighestPalindrome("932239",2);
    echo "\n";
?>
