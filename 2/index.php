<?php
    function missing_digit($str){
        $first_value = explode("=",$str)[0];
        $last_value = explode("=",$str)[1];

        // //check where the missing character is
        // if(strpos($last_value, "x")){

        // }else{}
        
        if(!is_string($first_value)){
            $eqaul_value = intval($first_value);
        } else {
            $operation_string = $first_value;
        }
        if(!is_string($last_value)){
            $eqaul_value = intval($last_value);
        }else{
            $operation_string = $last_value;
        }

        
        if(strpos($operation_string, "+")){
            $op_first_value = explode("+",$operation_string)[0];
            $op_last_value = explode("+",$operation_string)[1];

            if(!is_string($op_first_value)){
                $integer_value = intval($op_first_value);
            } else {
                $operation_value = $op_first_value;
            }

            if(!is_string($op_last_value)){
                $integer_value = intval();
            }else{
                $operation_value = $op_last_value;
            }
        }else{
            print_r(explode("-",$operation_string));
            $op_first_value = explode("-",$operation_string)[0];
            $op_last_value = explode("-",$operation_string)[1];

            if(!is_string($op_first_value)){
                $integer_value = intval($op_first_value);
            } else {
                $operation_value = $op_first_value;
            }

            if(!is_string($op_last_value)){
                $integer_value = intval();
            }else{
                $operation_value = $op_last_value;
            }
        }

        
        if(strpos($operation_string, "+") && !strpos($operation_value, "/")){
            return ($eqaul_value - $integer_value)/explode($operation_value[strlen($operation_value)-1], $operation_value)[0];
        } else if(strpos($operation_string, "-") && strpos($operation_value, "/")){
            return ($eqaul_value + $integer_value)*explode($operation_value[strlen($operation_value)-1], $operation_value)[0];
        }


    }

    echo missing_digit("3x + 12 = 46");

?>