<?php require_once('includes/header.php');?>

<?php

    if(isset($_GET['movie_id'])){
        $movie_id = $_GET['movie_id'];

   $current_movie = array_filter($movies_array, function($movie) {
       global $movie_id;
    if($movie->id == $movie_id){
        return true;
    } else{
        return false;
    }
 }
);
 if(count($current_movie)==1){
$movie= (array) array_shift($current_movie);
?>

       
        <h1 class="mt-3 mb-3"> <?php echo $movie['title'];?> </h1>
       <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src=<?php echo $movie['posterUrl'];?> class="card-img-top" alt="...">
          </div>
          <div class="col-md-8">
          
          <br><strong>Year: </strong> <?php echo $year=$movie['year']; ?> <?php if(check_old_movie($year)){ ?>
            <span class="badge badge-info"><?php echo check_old_movie($year); ?></span>

         <?php };?> <br><br>
         <strong>Runtime: </strong> <?php echo runtime_prettier($movie['runtime']); ?>
          
          <br><br><b>Genres: </b>  <?php $ctr=0; foreach ($movie['genres'] as $genre) { $ctr++;
                if ($ctr<sizeof($movie['genres']))
                echo $genre.', ';
                else echo $genre;
             } ?>

          <br><br><strong> Plot: </strong> <?php echo $movie['plot'];?>
            <br><br> <b>Director:</b> <?php echo $movie['director'];?>
            <br> <br> <b>Actors:</b><?php
                        $actors = preg_split("/\,/", $movie['actors']);
                        foreach($actors as $actor) echo "<li> $actor </li>";
                        ?>
            
           
                
          </div>
        </div>
      </div>
      <?php } else{?>
          Acest id de film din link nu exista. Alege un film din lista de filme!
          <a href="/demo/movies.php" class="btn btn-primary"> Filme </a>
          <?php } ?>
          <?php } else{?>
          Nu ai in link id-ul filmului. Mergi inapoi la lista cu filme!
          <a href="/demo/movies.php" class="btn btn-primary"> Filme </a>
          <?php } ?>
<?php require_once('includes/footer.php');?>