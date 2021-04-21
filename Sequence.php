<?php
    $content = [2,1,4,2, 6, 1, 2, 3, 7];
    $seq = [2, 6, 1]; 
     function search_pos_word($content,$seq){
        $pos = 0;

        for ($i=0; $i < count($content); $i++) { 
            $j = 0;
            if($seq[$j] == $content[$i]){
                while($j < count($seq)){
                    if($seq[$j] == $content[$i + 1]){
                        $j++;
                        if($seq[$j] == $content[$i + 2]){
                            $pos = $i;
                            break;
                        }
                    }
                    
                    $j++;
                }
            }
        }
        return $pos;

        //test pour git

      
    };
    echo search_pos_word($content,  $seq);