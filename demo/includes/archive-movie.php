
          <div class="h-100 pb-4" id='<?php echo $movie['id'];?>'>
          <div class="card h-100"> <img 
            class="card-img-top"
            src=<?php echo $movie['posterUrl']; ?>
            alt=<?php echo $movie['title']; ?>>
            <div class="card-body">
              <h5 class="card-title"><?php echo $movie['title']; ?></h5>
              <p class="card-text">
              <?php 
              $plot= $movie['plot']; 
              if(strlen($plot)>100){
                echo substr($plot, 0, 100).'. . .';
              } else echo $plot;
              ?>
              </p>
              <a href='movie.php?movie_id=<?php echo $movie['id']; ?>' class="btn btn-primary">Read more</a>
            </div>
          </div >
            
          </div>
         