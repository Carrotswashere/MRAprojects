<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manea Raluca Andreea</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <link rel="stylesheet" href="styles.css">

    <?php
        require_once('functions.php');
        $current_page_name= (basename($_SERVER['PHP_SELF'], '.php'));
         $pages_dont_load_movies= array('index', 'contact');

    
         if(!in_array($current_page_name,$pages_dont_load_movies)){
             $movies_array = json_decode(file_get_contents('assets/movies-list-db.json'))->movies;
         } 
         $nav_elements=array(
            array(
              'name' =>'Home',
              'link' => 'index.php'
            ),
            array(
                'name' =>'Movies',
                'link' => 'movies.php'
            ),
            array(
                'name' =>'Contact',
                'link' => 'contact.php'
            )

            );
         ?>
</head>
<body>
  <?php define('INITIALE', 'RAM') ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo INITIALE; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if($nav_elements) {?>
            <ul class="navbar-nav mr-auto">
           
           <?php foreach($nav_elements as $nav_element) { ?>
            <li class="nav-item <?php if($current_page_name.'php'===$nav_element['link']){echo 'active';}?>">
             <a class="nav-link" href=<?php echo $nav_element['link'];?>><?php echo $nav_element['name'];?></a>
           </li>
            <?php }?>
        
           
         </ul>

        <?php }?>
        <?php include('search-form.php');?>
        </div>
      </nav>
      <div class="container">