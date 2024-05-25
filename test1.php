<?php
    function getValueChar($char){
        $number = 1;
        $res  = 0;
        for($i='a';$i<='z';$i++){
            if($i == $char){
                return $number;
            }
            $number++;
        }
        return $res;
    }
    function getWeightedValues($string){
        $currentChar = '';
        $weight = [];
        for($i=0;$i<strlen($string);$i++){
            if($currentChar == $string[$i]){
                $weight[$i] = $weight[$i - 1] + getValueChar($string[$i]);
            }else{
                $weight[$i] = getValueChar($string[$i]);
            }
          $currentChar = $string[$i];
        }
        return $weight;
    }
    function weightedValidation($string, $queries){
        $weights = getWeightedValues($string);
        $results = [];
        foreach ($queries as $query) {
            if (in_array($query, $weights)) {
                $results[] = "Yes";
            } else {
                $results[] = "No";
            }
        }    
        return $results;
    }
    print_r(weightedValidation('abbcccd',[1, 3, 9, 8]));
?>