<?php

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'C' => 'Piros');

 function atalakit($tomb, $meret) {
                if($meret=='nagybetus')
        {
             foreach ($tomb as $kulcs => $ertek) {
                echo strtoupper($ertek)." ";
                    
                }
        }
        else if($meret=='kisbetus')
        {
             foreach ($tomb as $kulcs => $ertek) {
                echo strtolower($ertek)." ";
                    
                }
        }
             else{
                 echo "nem helyes meret";
             }   
                
            }
                atalakit($szinek,'nagybetus' );
                atalakit($szinek,'kisbetus' );
                
            

