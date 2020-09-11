<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
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
          
          //Search
          $where = "";
          $logicalOperator = 'OR';        
          $parameters = array();
          if (isset($_POST["submit"])){
            include 'orand.php';  
            
          }
          $where = substr($where, 0, strlen($where) - (strlen($logicalOperator) + 1));
          $sqlSong = "SELECT id, song_name, gender_id, language_id, country_id, link_song, album_id, artist_id FROM song $where";
          $qSong = $conn->prepare($sqlSong);
          $resultSong = $qSong->execute($parameters);        
          $song = $qSong->fetchAll();        
      ?>        

      <div class="row mx-0">
        <div class="col-2 columna" style="height:auto">
        </div>
        <div class="col-8">
        <h4 class="mt-4 text-center">Search PHP</h4>
        <hr>
        <ul class="list-group-item">
        <form method="post">
          <div class="row">
            <div class="form-group col-4">
              <label>Song Name</label>
              <input name="song_name" type="text" class="form-control" placeholder="write the key word" value="<?= (isset($_POST["song_name"])) ? $_POST["song_name"] : "" ?>">
            </div>
            <div class="form-group col-4">
              <label>Gender</label>
              <select class="form-control" name="gender_id">
                    <option value="">select a gender...</option>
                    <?php
                      for($i=0; $i < count($gender); $i++){
                    ?>
                        <option class="text-capitalize"
                            <?= (isset($_POST["gender_id"]) && $_POST["gender_id"] == $gender[$i]["id"]) ? "selected" : "" ?>
                            value="<?php echo $gender[$i]["id"];  ?>">
                            <?php echo $gender[$i]["gender_name"];  ?>
                        </option>
                    <?php
                        }
                    ?>
              </select> 
            </div>
            <div class="form-group col-4">
              <label>Language</label>
              <select class="form-control" name="language_id">
                    <option value="">select a language...</option>
                    <?php
                      for($i=0; $i < count($language); $i++){
                    ?>
                        <option  class="text-capitalize"
                            <?= (isset($_POST["language_id"]) && $_POST["language_id"] == $language[$i]["id"]) ? "selected" : "" ?>
                            value="<?php echo $language[$i]["id"];  ?>">
                            <?php echo $language[$i]["language_name"];  ?>
                        </option>
                    <?php
                        }
                    ?>
              </select> 
            </div>
          </div>
            <div class="row">
              <div class="form-group col-4">
                <label>Country</label>
                <select class="form-control" name="country_id">
                      <option value="">select a Country...</option>
                      <?php
                        for($i=0; $i < count($country); $i++){
                      ?>
                          <option  class="text-capitalize"
                              <?= (isset($_POST["country_id"]) && $_POST["country_id"] == $country[$i]["id"]) ? "selected" : "" ?>
                              value="<?php echo $country[$i]["id"];  ?>">
                              <?php echo $country[$i]["country_name"];  ?>
                          </option>
                      <?php
                          }
                      ?>
                </select> 
              </div>
              <div class="form-group col-4">
                <label>Album</label>
                <select class="form-control" name="album_id">
                      <option value="">select a Album...</option>
                      <?php
                        for($i=0; $i < count($album); $i++){
                      ?>
                          <option  class="text-capitalize"
                              <?= (isset($_POST["album_id"]) && $_POST["album_id"] == $album[$i]["id"]) ? "selected" : "" ?>
                              value="<?php echo $album[$i]["id"];  ?>">
                              <?php echo $album[$i]["album_name"];  ?>
                          </option>
                      <?php
                          }
                      ?>
                </select> 
              </div>
              <div class="form-group col-4">
                <label>Artist</label>
                <select class="form-control" name="artist_id">
                      <option value="">select a Artist...</option>
                      <?php
                        for($i=0; $i < count($artist); $i++){
                      ?>
                          <option  class="text-capitalize"
                              <?= (isset($_POST["artist_id"]) && $_POST["artist_id"] == $artist[$i]["id"]) ? "selected" : "" ?>
                              value="<?php echo $artist[$i]["id"];  ?>">
                              <?php echo $artist[$i]["artistic_name"];  ?>
                          </option>
                      <?php
                          }
                      ?>
                </select> 
              </div>
          </div>
          
          <div class="text-center">
          <button type="submit" name="submit" class="btn btn-primary">Search Now</button>
          </div>
          
        </form>
        </ul>
          <div>
          <?php
            if($_POST){
              if($song) {
                if(!count($parameters)) {
          ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">Specify at least a search parameter
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
          <?php
              }else{
          ?>
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Song Name</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Language</th>
                      <th scope="col">Country</th>
                      <th scope="col">Album</th>
                      <th scope="col">Artist</th>
                      <th scope="col">Song Link</th>
                      
                    </tr>
                  </thead>
                  <tbody>    
          <?php
                  for($i=0; $i < count($song); $i++){
          ?>
                <tr>
                        <td class="text-capitalize"><?php echo $song[$i]["id"]; ?></td>
                        <td class="text-capitalize"><?php echo $song[$i]["song_name"]; ?></td>
                        <td class="text-capitalize">
          <?php 
                        for($j=0; $j < count($gender); $j++){
                          if ($song[$i]['gender_id']==$gender[$j]["id"]) {
                          echo $gender[$j]["gender_name"];
                          }
                        }
          ?>
                      </td>
                      <td class="text-capitalize">
                  <?php 
                        for($j=0; $j < count($language); $j++){
                          if ($song[$i]['language_id']==$language[$j]["id"]) {
                          echo $language[$j]["language_name"];
                          }
                        }
          ?>
                      </td>
                      <td class="text-capitalize">
                  <?php 
                        for($j=0; $j < count($country); $j++){
                          if ($song[$i]['country_id']==$country[$j]["id"]) {
                          echo $country[$j]["country_name"];
                          }
                        }
          ?>
                      </td>
                      <td class="text-capitalize">
                  <?php 
                        for($j=0; $j < count($album); $j++){
                          if ($song[$i]['album_id']==$album[$j]["id"]) {
                          echo $album[$j]["album_name"];
                          }
                        }
          ?>
                      </td>
                      <td class="text-capitalize">
          <?php 
                        for($j=0; $j < count($artist); $j++){
                          if ($song[$i]['artist_id']==$artist[$j]["id"]) {
                          echo $artist[$j]["artistic_name"];
                          }
                        }
          ?>
                      </td>
                      <td>
                        <a href="<?php echo $song[$i]["link_song"]; ?>" target="_blank">
                          <button type="button" class="btn btn-outline-primary">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-film" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z"></path>
                            </svg>
                          </button>
                        </a>
                      </td>
                  </tr>
          <?php
                    }
          ?> 
                  </tbody>
                </table>
          <?php
                  }

                }else{
                    ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">No record found
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <?php

                  
                }
              }
          ?>      
        </div>
      </div>
      <div class="col-2 columna" style="height:auto">
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>