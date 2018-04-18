
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../completedvideogamedb/img/favicon.ico">

    <title>Videogame database</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
     <!-- Font Awesome -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="../completedvideogamedb/css/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">VideogameDB</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../completedvideogamedb/viewvideogames.php">View Videogames <i class="fas fa-archive"></i></a></li>
                <li><a href="#">Link</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Videogame Collection</h1>
            <p class="lead">This is a collection of all your videogames for your potential customers. You can easily manage all your videogames with this database.</p>
            <img src="../completedvideogamedb/img/videogamdblogo.png" id="brandlogo" class="rounded float-right" alt="brandlogo">

        </div>
    </div>

    <ul class="cards">
      <li class="cards__item">
        <div class="card">
          <div class="card__image card__image--fence"></div>
          <div class="card__content">
            <div class="card__title">Publisher</div>
            <p class="card__text">Add a new publishers to your videogame collection.</p>
            <a href="../completedvideogamedb/addpublisher.php"><button class="btn btn--block card__btn">Add Publisher</button></a>
          </div>
        </div>
      </li>
      <li class="cards__item">
        <div class="card">
          <div class="card__image card__image--river"></div>
          <div class="card__content">
            <div class="card__title">Platform</div>
            <p class="card__text">Add a new platforms to your videogame collection.</p>
            <a href="../completedvideogamedb/addplatform.php"><button class="btn btn--block card__btn">Add Platform</button></a>
          </div>
        </div>
      </li>
      <li class="cards__item">
        <div class="card">
          <div class="card__image card__image--flowers"></div>
          <div class="card__content">
            <div class="card__title">Videogame</div>
            <p class="card__text">Add a new videogame to your videogame collection.</p>
            <a href="../completedvideogamedb/addvideogame.php"><button class="btn btn--block card__btn">Add Videogame</button></a>
          </div>
        </div>
      </li>
    </ul>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
