<?php

    class Search
    {
        public function __construct(
            public string $seq,
            public array $pos = []
        ) {
        }
    }
    $content = [2,1,4,2, 6, 1, 9, 2, 6, 1];
    $seq = [2, 6, 1]; 
     function search_pos_word($content,$seq){
        $pos = [];

        for ($i=0; $i < count($content); $i++) { 
            $j = 0;
            if($seq[$j] == $content[$i]){
                while($j < count($seq)){
                    if($seq[$j] === $content[$i + 1]){
                        echo "avant " . $content[$i + 1]. " $j " . $seq[$j] . PHP_EOL;
                        $j++;
                        if($seq[$j] == $content[$i + 2]){
                            echo "suite " . $content[$i + 2]. " $j " . $seq[$j] . PHP_EOL;
                            $pos[] = $i;
                            $objSearch = new Search(json_encode($seq),$pos);
                            // break 1;
                        }
                    }
                    
                    $j++;
                }
            }
        }
        return $objSearch;      
    };
    var_dump( search_pos_word($content,  $seq));

    function search_pos_seq_all(){

    }