<?php require 'includes/header.php';?>
       <div class='container'>
      
      <?php if(isset($_GET['s'])) { ?>
       
       <h1>Search results for: <?php echo $search_phrase= $_GET['s'];?> </h1>
       <?php require 'includes/search-form.php';?>
       <?php if(strlen($search_phrase) >=3) {
           
           $search_results = array_filter($movies_array, function($movie) {
            global $search_phrase;
         if(stripos($movie->title, $search_phrase) !== false){
             return true;
         } else{
             return false;
         }
      }
     );
      ?>
         
   <?php if(count($search_results)>0) {?>  <div class="row align-items-stretch">

<?php $i=0; foreach ($search_results as $movie_obj) : $movie= (array) $movie_obj ?>
   
   <div class="col-sm-6 col-lg-4">   
  <?php require 'includes/archive-movie.php'; ?>
  </div>

<?php endforeach; ?>

   </div><?php } else {?> Nu a fost gasit niciun film. Incearca din nou! <?php } ?>

         
         <?php } else {?> 
         Fraza de cautare este prea scurta. 
         <?php }?>
      <?php } else {?> 
         <h1>Search results page </h1> Niciun rezultat. Cauta filme:
       <?php require 'includes/search-form.php';?>
          
         <?php }?>
       </div>
       
       <?php require 'includes/footer.php'; ?>