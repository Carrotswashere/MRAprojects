<?php
function runtime_prettier($movie_length = 0)
{   
    $hours = floor($movie_length /60);
    $minutes = $movie_length %60;
    
    $result= $hours.'h and '.$minutes. ' min';
    return $result;
}

function check_old_movie($year)
{ $age=(date('Y')  -$year);
    if( $age > 40) 
      $result= 'Old Movie: '. $age . ' years';
       else $result= false;

       return $result;
}

