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
      $sql = "SELECT id, country_name  FROM country";
      $q = $conn->prepare($sql);
      $result = $q->execute();
      $country = $q->fetchAll();              
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
            $artistic_name = $_REQUEST["artistic_name"];
            $real_name = $_REQUEST["real_name"];
            $country_id = $_REQUEST["country_id"];
            $average_salary = $_REQUEST["average_salary"];
            $occupation = $_REQUEST["occupation"];
            if(!empty($artistic_name && $real_name && $country_id && $average_salary && $occupation)){
              $sql = "INSERT INTO artist (id, artistic_name, real_name, country_id, average_salary, occupation) 
                      VALUES (:id, :artistic_name, :real_name, :country_id, :average_salary, :occupation)";
              $q = $conn->prepare($sql);
              if ($average_salary>0) {
                $result = $q->execute(array(
                  ':id'=>NULL,
                  ':artistic_name'=>$artistic_name,
                  ':real_name'=>$real_name,
                  ':country_id'=>$country_id,
                  ':average_salary'=>$average_salary,
                  ':occupation'=>$occupation));
                  if($result){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">The Artist: <?php echo $artistic_name; ?> has been created succesfully
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php
                    }
              }
              else{
                ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">It's not permitted use numbers less than 0 or a letters
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
            <form class="border p-3 my-2 " action="../php/artist.php" method="POST">
              <h1 class="h4 text-center">Add Artist</h1>
              <div class="form-row">
                <div class="form-group col-6">
                  <label>Artistic Name</label>
                  <input type="text" name="artistic_name" class="form-control" placeholder="Write a artistic name..." value="<?= (isset($_POST["artistic_name"])) ? $_POST["artistic_name"] : "" ?>">
                </div>
                <div class="form-group col-6">
                  <label>Real Name</label>
                  <input type="text" name="real_name" class="form-control" placeholder="Write a real name..." value="<?= (isset($_POST["real_name"])) ? $_POST["real_name"] : "" ?>">
                </div>
              </div>
              <div class="form-group">
              <label>Native Country</label>
                <select class="form-control" name="country_id">
                  <option value="">Please select a native city...</option>
                  <?php
                    for($i=0; $i < count($country); $i++){
                  ?>
                  <option class="text-capitalize" <?= (isset($_POST["country_id"]) && $_POST["country_id"] == $country[$i]["id"]) ? "selected" : "" ?> value="<?php echo $country[$i]["id"];?>"><?php echo $country[$i]["country_name"];?></option>
                  <?php
                    }
                  ?>
                </select> 
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                    <label>Average Salary</label>
                    <input type="number" min="0" pattern="[0-9]" name="average_salary" class="form-control" placeholder="Write a real name..." value="<?= (isset($_POST["average_salary"])) ? $_POST["average_salary"] : "" ?>">
                    </div>
                    
                    <div class="form-group col-6">
                    <label>Ocuppation</label>
                    <input type="text" name="occupation" class="form-control" placeholder="Write a occupation..." value="<?= (isset($_POST["occupation"])) ? $_POST["occupation"] : "" ?>">
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