<?php
    
    //3.Longest Substring Without Repeating Characters
    
    
    $string='aabcabccab';
    $s='';
    //函数方法
    $array=str_split($string);
    foreach($array as $key => $val)
    {
        $j=0;
        for($i=0;$i<count($array);$i++)
        {
            if($val!=$array[$i])
            {
                $j++;
            }
        }
        
        
    }



    //2.Add Two Numbers 链表不会



    //1.two sum
    /*
    $numbers=[2, 7, 11, 15]; $target=9;
    
    foreach($numbers as $key => $val)
    {
        
        for($i=0;$i<count($numbers);$i++)
        {
            
            $n=$val+$numbers[$i];
            if($n==$target)
            {
                var_dump($key+1);
            }
            
        }

    }
?>