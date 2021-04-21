<?php
    $content = [2,1,4,2, 6, 1, 2, 3, 7];
    $seq = [2,3,7]; 
     function search_pos_word($content,$seq){
        $pos = 0;

        for ($i=0; $i < count($content); $i++) { 
            $j = 0;
            if($seq[$j] == $content[$i]){
                while($j < count($seq)){
                    // echo $content[$i] .PHP_EOL;
                    $pos = $i;
                    if($seq[$j] == $content[$i + 1]){
                        // echo $content[$i + 1] .PHP_EOL;
                        $j++;
                        if($seq[$j] == $content[$i + 2]){
                            break;
                            // echo $content[$i + 2] . " b " .PHP_EOL;
                        }
                    }
                    
                    $j++;
                }
            }
        }
        echo $pos;
      
    };
    echo search_pos_word($content,  $seq);