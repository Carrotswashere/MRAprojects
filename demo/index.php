    
    <?php require_once('includes/header.php');?>
    
  
    <div class="timegreet"> 
    <?php   
            date_default_timezone_set( 'Europe/Bucharest' );
           
                  $t = localtime( time(), true ); 
                  $h = $t[ 'tm_hour' ]; 
                  
                  if( $h >= 4 && $h < 12 ) print "Good morning!";
                  elseif( $h >= 12 && $h < 18 ) print "Good afternoon!";
                  elseif( $h >= 18 && $h < 22 ) print "Good evening!";
                  elseif( $h >= 22 || $h<4 ) print "Good night!";
 
 
             ?></div>
       <div class="welcome"><br>We're glad you're here! Explore the (future, probably) largest library of movies online!</div>

       <?php require_once('includes/footer.php');?>
    
    
