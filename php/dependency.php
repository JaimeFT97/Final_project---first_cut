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
        //INSERT
        //Type product Insert
        if(isset ($_POST['form1'])){
          $country_name = $_REQUEST["country_name"];
          if( !empty($country_name)){
            $sql = "INSERT INTO country (id, country_name) 
                        VALUES (:id, :country_name)";
            $q = $conn->prepare($sql);
            $result = $q->execute(array(
                ':id'=>NULL,
                ':country_name'=>$country_name)); 
              if($result){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">The country: <?php echo $country_name; ?> has been created succesfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              }
            }
            else {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">if you want to add a country, you should complete all the fields
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <?php
            }
          }
          //Category Insert
          if(isset ($_POST['form2'])){
            $gender_name = $_REQUEST["gender_name"];
            if( !empty($gender_name)){
              $sql = "INSERT INTO gender (id, gender_name) 
                          VALUES (:id, :gender_name)";
              $q = $conn->prepare($sql);
              $result = $q->execute(array(
                  ':id'=>NULL,
                  ':gender_name'=>$gender_name)); 
                if($result){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">The gender: <?php echo $gender_name; ?> has been created succesfully
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                }
              }
              else {
                  ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">if you want to add a gender, you should complete all the fields
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <?php
              }
            }
          //Product Insert
          if(isset ($_POST['form3'])){
            $language_name = $_REQUEST["language_name"];
            if( !empty($language_name)){
              $sql = "INSERT INTO language (id, language_name) 
                          VALUES (:id, :language_name)";
              $q = $conn->prepare($sql);
              $result = $q->execute(array(
                  ':id'=>NULL,
                  ':language_name'=>$language_name)); 
                if($result){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">The language: <?php echo $language_name; ?> has been created succesfully
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                }
              }
              else {
                  ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">if you want to add a language, you should complete all the fields
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <?php
              }
            }
        ?>
            <div class=" form-group form-row">
                <div class="col-6">
                    <form class="border p-3" action="../php/dependency.php" method="POST">
                        <input name="form1" type="hidden" readonly/>
                        <h1 class="h4 text-center">Add Country</h1>
                        <div class="form-group">
                          <label>Country</label>
                          <input type="text" class="form-control" name="country_name" placeholder="Write a country...">
                        </div>
                        <button type="submit" class="btn btn-success" style="width: 365px;">Send</button>
                    </form>
                </div> 
                <div class="col-6">
                    <form class="border p-3" action="../php/dependency.php" method="POST">
                        <input name="form2" type="hidden" readonly/>
                        <h1 class="h4 text-center">Add Gender</h1>
                        <div class="form-group">
                          <label>Gender</label>
                          <input type="text" class="form-control" name="gender_name" placeholder="Write a Gender...">
                        </div>
                        <button type="submit" class="btn btn-success" style="width: 370px;">Send</button>
                    </form>
                </div> 
            </div>   
            <div class="form-group " style="margin-left:200px">
                <form class="border p-3 col-8" action="../php/dependency.php" method="POST">
                    <input name="form3" type="hidden" readonly/>
                    <h1 class="h4 text-center">Add Language</h1>
                        <div class="form-group">
                            <label>Language</label>
                            <input type="text" class="form-control " name="language_name" placeholder="Write a Language...">
                        </div>
                    <button type="submit" class="btn btn-success" style="width: 370px;">Send</button>
                </form>
            </div>
            
        </div>
        <div class="col-2 columna">
        </div>
    </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>