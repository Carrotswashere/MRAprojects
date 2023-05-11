<?php require_once('includes/header.php');?>
       <h1>Movies</h1>
       <div class="row align-items-stretch">

          <?php $i=0; foreach ($movies_array as $movie_obj) : $movie= (array) $movie_obj ?>
             
             <div class="col-sm-6 col-lg-4">   
            <?php require 'includes/archive-movie.php'; ?>
            </div>

         <?php endforeach; ?>

       </div>
       <?php require 'includes/footer.php' ?>