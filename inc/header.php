<?php 

include 'data.php';
include 'functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
      
    <!-- NibTrek 32 x 32 icon -->    
    <link rel="icon" type="image/png" href="/img/nibtrek.png">
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- social media: open graph protocal and twitter card -->

    <meta name="description" content="We develop web applications for automation, client/team management, & powerful insights. Designing the web and displaying data in meaningful ways is what we are all about." />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@NibTrek">
    <meta name="twitter:title" content="Dave Pierce | Web Developer and Audio Engineer Portfolio">
    <meta name="twitter:description" content="From a young age, Dave was fascinated with computers. After studying music recording technology, Dave found his passion for programming. He values helping others and building connections. When he is not designing or coding the web, he enjoys playing guitar, exercising, and drinking good coffee.">

    <meta name="twitter:image" content="https://www.whatdavedoes.com/img/opengraph-min.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Dave Pierce | Dave Pierce | Web Developer and Designer Portfolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.whatdavedoes.com/" />
    <meta property="og:image:width" content="1275" />
    <meta property="og:image:height" content="645" />
    <meta property="og:image" content="https://www.whatdavedoes.com/img/opengraph-min.jpg" />
    <meta property="og:image:alt" content="Portfolio of Dave Pierce" />
    <meta property="og:description" content="From a young age, Dave was fascinated with computers. After studying music recording technology, Dave found his passion for programming. He values helping others and building connections. When he is not designing or coding the web, he enjoys playing guitar, exercising, and drinking good coffee." />
    <meta property="fb:app_id" content="1450529895154643"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
      
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Roboto&display=swap" rel="stylesheet">
    

    <title>Dave Pierce | Web Developer/Audio Engineer</title>
  </head>
  
  <body>
  <div class="container"> 
    
<?php 

      $entryPageVars = [];
      
      foreach ($entries as $entry) {
          array_push($entryPageVars, $entry[0]);
      }
      
?>
<div class="row mb-4">
    <div class="col-md-6 navPadding ">
      <nav>
          <a class="nav-name big-txt" href="index.php"><?php echo $name; ?></a>
          <ul class="nav-list">
          <li class="sm-txt <?php if ($page == 'portfolio' || in_array($page, $entryPageVars)){echo 'active';} ?>">
            <a class="" href="index.php">Portfolio <?php if ($page == 'portfolio'){echo '<span class="sr-only">(current)</span>';} ?></a>
          </li>
          <li class="sm-txt <?php if ($page == 'about'){echo 'active';} ?>">
            <a class="" href="about.php">About <?php if ($page == 'about'){echo '<span class="sr-only">(current)</span>';} ?></a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-md-6 navPadding socialCtn">
        <?php addSocialIcons(); ?>
        
    </div>
</div>
