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
      //Gender Table
      $sql = "SELECT id, gender_name  FROM gender";
      $q = $conn->prepare($sql);
      $result = $q->execute();
      $gender = $q->fetchAll();   
      //Country Table
      $sql2 = "SELECT id, country_name  FROM country";
      $q2 = $conn->prepare($sql2);
      $result2 = $q2->execute();
      $country = $q2->fetchAll();  
      //Language Table
      $sql3 = "SELECT id, language_name  FROM language";
      $q3 = $conn->prepare($sql3);
      $result3 = $q3->execute();
      $language = $q3->fetchAll();
      //Album Table
      $sql4 = "SELECT id, album_name  FROM album";
      $q4 = $conn->prepare($sql4);
      $result4 = $q4->execute();
      $album = $q4->fetchAll();
      //Artist Table
      $sql5 = "SELECT id, artistic_name  FROM artist";
      $q5 = $conn->prepare($sql5);
      $result5 = $q5->execute();
      $artist = $q5->fetchAll();              
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
            $song_name = $_REQUEST["song_name"];
            $duration = $_REQUEST["duration"];
            $gender_id = $_REQUEST["gender_id"];
            $language_id = $_REQUEST["language_id"];
            $country_id = $_REQUEST["country_id"];
            $link_song = $_REQUEST["link_song"];
            $album_id = $_REQUEST["album_id"];
            $artist_id = $_REQUEST["artist_id"];
            if( !empty($song_name && $duration && $gender_id && $language_id && $country_id && $link_song && $album_id && $artist_id)){
              $sql = "INSERT INTO song (id, song_name, duration, gender_id, language_id, country_id, link_song, album_id, artist_id) 
                      VALUES (:id, :song_name, :duration, :gender_id, :language_id, :country_id, :link_song, :album_id, :artist_id)";
              $q = $conn->prepare($sql);
              $result = $q->execute(array(
                  ':id'=>NULL,
                  ':song_name'=>$song_name,
                  ':duration'=>$duration,
                  ':gender_id'=>$gender_id,
                  ':language_id'=>$language_id,
                  ':country_id'=>$country_id,
                  ':link_song'=>$link_song,
                  ':album_id'=>$album_id,
                  ':artist_id'=>$artist_id));
              if($result){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">The Song: <?php echo $song_name; ?> has been created succesfully
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
            <form class="border p-3 my-2 " action="../php/song.php" method="POST">
              <h1 class="h4 text-center">Add Song</h1>
              <div class="form-row">
                <div class="form-group col-6">
                  <label>Song Name</label>
                  <input type="text" name="song_name" class="form-control" placeholder="Write a song name..." value="<?= (isset($_POST["song_name"])) ? $_POST["song_name"] : "" ?>">
                </div>
                <div class="form-group col-6">
                  <label>Duration</label>
                  <input type="text" name="duration" class="form-control" placeholder="Write a duration..." value="<?= (isset($_POST["duration"])) ? $_POST["duration"] : "" ?>">
                </div>
              </div>
              <div class="form-row">
                    <div class="form-group col-6">
                      <label>Song Gender</label>
                      <select class="form-control" name="gender_id">
                      <option value="">Please select a gender...</option>
                      <?php
                          for($i=0; $i < count($gender); $i++){
                      ?>
                      <option <?= (isset($_POST["gender_id"]) && $_POST["gender_id"] == $gender[$i]["id"]) ? "selected" : "" ?> class="text-capitalize" value="<?php echo $gender[$i]["id"];?>"><?php echo $gender[$i]["gender_name"];?></option>
                      <?php
                          }
                      ?>
                      </select> 
                    </div>
                    <div class="form-group col-6">
                      <label>Original Language</label>
                      <select class="form-control" name="language_id">
                      <option value="">Please select a language...</option>
                      <?php
                          for($i=0; $i < count($language); $i++){
                      ?>
                      <option <?= (isset($_POST["language_id"]) && $_POST["language_id"] == $language[$i]["id"]) ? "selected" : "" ?> class="text-capitalize" value="<?php echo $language[$i]["id"];?>"><?php echo $language[$i]["language_name"];?></option>
                      <?php
                          }
                      ?>
                      </select> 
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-6">
                      <label>Original Country</label>
                      <select class="form-control" name="country_id">
                      <option value="">Please select a country...</option>
                      <?php
                          for($i=0; $i < count($country); $i++){
                      ?>
                      <option <?= (isset($_POST["country_id"]) && $_POST["country_id"] == $country[$i]["id"]) ? "selected" : "" ?> class="text-capitalize" value="<?php echo $country[$i]["id"];?>"><?php echo $country[$i]["country_name"];?></option>
                      <?php
                          }
                      ?>
                      </select> 
                    </div>
                    <div class="form-group col-6">
                    <label>Song Link</label>
                    <input type="text" name="link_song" class="form-control" placeholder="Write a link..." value="<?= (isset($_POST["link_song"])) ? $_POST["link_song"] : "" ?>">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-6">
                      <label>Album ID</label>
                      <select class="form-control" name="album_id">
                      <option value="">Please select a album...</option>
                      <?php
                          for($i=0; $i < count($album); $i++){
                      ?>
                      <option <?= (isset($_POST["album_id"]) && $_POST["album_id"] == $album[$i]["id"]) ? "selected" : "" ?> class="text-capitalize" value="<?php echo $album[$i]["id"];?>"><?php echo $album[$i]["album_name"];?></option>
                      <?php
                          }
                      ?>
                      </select> 
                    </div>
                    <div class="form-group col-6">
                      <label>Artist ID</label>
                      <select class="form-control" name="artist_id">
                      <option value="">Please select a artist...</option>
                      <?php
                          for($i=0; $i < count($artist); $i++){
                      ?>
                      <option <?= (isset($_POST["artist_id"]) && $_POST["artist_id"] == $artist[$i]["id"]) ? "selected" : "" ?> class="text-capitalize" value="<?php echo $artist[$i]["id"];?>"><?php echo $artist[$i]["artistic_name"];?></option>
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