<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
      $dbhost 	= "localhost";
	    $dbname		= "record_company";
	    $dbuser		= "root";
	    $dbpass		= "";
      $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
      //SELECT
      //Country Table
      $sql = "SELECT id, artistic_name  FROM artist";
      $q = $conn->prepare($sql);
      $result = $q->execute();
      $artist = $q->fetchAll();              
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
        <img src="../img/logo.png" alt="" width="100px" class="centro"><a class="navbar-brand name" href="../index.html">MOON AND SUN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse centro">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown mx-5">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Forms
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../php/staff.php">Staff</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../php/dependency.php">Dependency</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../php/artist.php">Artist</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../php/album.php">Album</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../php/song.php">Songs</a>
                  </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/search.php">Filter Out Data</a>
              </li>
          </ul>
        </div>
    </nav>
    <div class="row mx-0">
        <div class="col-2 columna">
        </div>
        <div class="col-8 form">
        <?php 
        if($_POST){
            $album_name = $_REQUEST["album_name"];
            $album_cover = $_REQUEST["album_cover"];
            $song_quantity = $_REQUEST["song_quantity"];
            $duration = $_REQUEST["duration"];
            $link_album = $_REQUEST["link_album"];
            $artist_id = $_REQUEST["artist_id"];
            if( !empty($album_name && $album_cover && $song_quantity && $duration && $link_album && $artist_id)){
              $sql = "INSERT INTO album (id, album_name, album_cover, song_quantity, duration, link_album, artist_id) 
                      VALUES (:id, :album_name, :album_cover, :song_quantity, :duration, :link_album, :artist_id)";
              $q = $conn->prepare($sql);
              if ($song_quantity>0) {
                $result = $q->execute(array(
                  ':id'=>NULL,
                  ':album_name'=>$album_name,
                  ':album_cover'=>$album_cover,
                  ':song_quantity'=>$song_quantity,
                  ':duration'=>$duration,
                  ':link_album'=>$link_album,
                  ':artist_id'=>$artist_id));
                  if($result){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">The album: <?php echo $album_name; ?> has been created succesfully
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php
                    }
              }
              else{
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">It's not permitted use numbers less than 0 or a letter
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
              }
              
            }
            else {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">if you want to add a artist, you should complete all the fields
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <?php
            }
          }
        ?> 
            <form class="border p-3 my-2 " action="../php/album.php" method="POST">
              <input name="form" type="hidden" readonly/>
              <h1 class="h4 text-center">Add Album</h1>
              <div class="form-row">
                <div class="form-group col-6">
                  <label>Album Name</label>
                  <input type="text" name="album_name" class="form-control" placeholder="Write a album name..."  value="<?= (isset($_POST["album_name"])) ? $_POST["album_name"] : "" ?>">
                </div>
                <div class="form-group col-6">
                  <label>Album Cover</label>
                  <input type="text" name="album_cover" class="form-control" placeholder="Write a cover..." value="<?= (isset($_POST["album_cover"])) ? $_POST["album_cover"] : "" ?>">
                </div>
              </div>
              
                <div class="form-row">
                    <div class="form-group col-6">
                    <label>Song quiantity</label>
                    <input type="number" name="song_quantity" min="0" pattern="[0-9]" class="form-control" placeholder="Write a song quantity..." value="<?= (isset($_POST["song_quantity"])) ? $_POST["song_quantity"] : "" ?>">
                    </div>
                    
                    <div class="form-group col-6">
                    <label>Duration</label>
                    <input type="text" name="duration" class="form-control" placeholder="Write a duration..." value="<?= (isset($_POST["duration"])) ? $_POST["duration"] : "" ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label>Link Album</label>
                        <input type="text" name="link_album" class="form-control" placeholder="Write a link..." value="<?= (isset($_POST["link_album"])) ? $_POST["link_album"] : "" ?>">
                    </div>
                    <div class="form-group col-6">
                    <label>Artist</label>
                    <select class="form-control" name="artist_id">
                    <option value="">Please select a artist...</option>
                    <?php
                        for($i=0; $i < count($artist); $i++){
                    ?>
                    <option class="text-capitalize" <?= (isset($_POST["artist_id"]) && $_POST["artist_id"] == $artist[$i]["id"]) ? "selected" : "" ?> value="<?php echo $artist[$i]["id"];?>"><?php echo $artist[$i]["artistic_name"];?></option>
                    <?php
                        }
                    ?>
                    </select> 
                    </div>
                </div>
              <button type="submit" class="btn btn-success" style="width: 775px;">Send</button>
            </form>
        </div>
        <div class="col-2 columna">
        </div>
    </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>