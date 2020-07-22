<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <title><?= $title ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $style ?>">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&display=swap');

.navbar{
    background:#ed8f54;
}

.navbar .navbar-nav .nav-item  .nav-link{
    font-weight:bold;
    color:white;
    font-family: 'Crimson Text', serif;
}

.navbar .navbar-nav .nav-item a:hover{
    color:rgba(59, 131, 145,1);
}

.navbar .navbar-brand img{
    width:10rem;
}
    
    
    </style>
</head>
<body >



<!-- the navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="m-auto">

            </div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">MISSION <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?prog=yes">PROGRAMME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PARTENAIRES</a>
            </li>
          </ul>
        </div>
</nav>
    
      <?php if(!empty($content)) echo $content; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>