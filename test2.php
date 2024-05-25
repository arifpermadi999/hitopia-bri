<?php
    function isBalanced($chars){  
        $allowChar = [
            '(' , ')',
            '{' , '}',
            '[' , ']'
        ];
        $bracketMap = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];
        $bracketActive = [];
        $res = "";
        for ($i=0;$i<strlen($chars);$i++) {
            if(in_array($chars[$i],$allowChar)){
                if(!in_array($chars[$i],$bracketMap)){
                    $bracketActive[] = $chars[$i];
                }else{
                    $bracketActiveVal = $bracketActive[count($bracketActive) - 1];
                    if($chars[$i] == $bracketMap[$bracketActiveVal]){
                        $res = "YES";
                        array_pop($bracketActive);
                    }else{
                        return "NO";
                    }
                }
            }
        }
        return $res;
    }
        
    echo isBalanced("{ [ ( ) ] }");  
    echo "\n";
    echo isBalanced("{ [ ( ] ) }");  
    echo "\n";
    echo isBalanced("{ ( ( [ ] ) [ ] ) [ ] }"); 
?>

