<?php
    $content = [2,1,4,2, 6, 1, 2, 3, 7];
    $seq = [1,2,3]; 
     function search_pos_word($content,$seq){
        $pos = 0;
        foreach ($content as $key => $value) {
            $i = 0;
            if($seq[0] == $value){
                $pos = $key;
                $i = 0;

                while($i < count($seq)){
                    if($seq[$i] == $content[$key + 1]){
                        if($seq[$i] == $content[$key + 1]){
                            echo PHP_EOL . "tata " . $content[$key + 2] ;
                            // continue;
                        }
                        // echo PHP_EOL . "tata " . $seq[$i] ;
                        // continue;
                    }
                    $i++;
                }
            }
            else{
                
                echo(PHP_EOL ."toto " . $value. " " . $pos);
            }
        }
    };
    search_pos_word($content,  $seq);