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
        if($_POST){
          $name = $_REQUEST["name"];
          $age = $_REQUEST["age"];
          if (isset($_POST['gender'])){
            $gender = $_REQUEST["gender"];
          }
          $role = $_REQUEST["role"];
          if( !empty($name && $age && $gender && $role)){
            $sql = "INSERT INTO staff (id, name, age, gender, role) 
                        VALUES (:id, :name, :age, :gender, :role)";
            $q = $conn->prepare($sql);
            if ($age>0 && $age<130) {
              $result = $q->execute(array(
                ':id'=>NULL,
                ':name'=>$name,
                ':age'=>$age,
                ':gender'=>$gender,
                ':role'=>$role));
              if($result){
                  ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">The staff: <?php echo $name; ?> has been created succesfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php
                } 
              }
              else{
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">It's not permitted use numbers less than 0 or bigger than 130 or a letter
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                }
            
              
            }
            else {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">if you want to add a staff, you should complete all the fields
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <?php
            }
          }
          ?>
          <form class="border p-3 my-5 " action="../php/staff.php" method="POST">
            <h1 class="h4 text-center">Add Staff</h1>
            <div class="form-row">
              <div class="form-group col-6">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Write a name..." value="<?= (isset($_POST["name"])) ? $_POST["name"] : "" ?>">
              </div>
              <div class="form-group col-6">
                <label>Age</label>
                <input type="number" name="age" min="0" class="form-control"  max="130" pattern="[0-9]" placeholder="Write a age..." value="<?= (isset($_POST["age"])) ? $_POST["age"] : "" ?>">
              </div>
            </div>
          <div class="form-group">
            <div>
              <label>Gender</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ?  'checked':'';?>>
              <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ?  'checked':'';?>>
              <label class="form-check-label">Female</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="other" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'other') ?  'checked':'';?>>
              <label class="form-check-label">Other</label>
            </div>
          </div>
            <div class="form-group">
              <label>Role</label>
              <input type="text" name="role" class="form-control" placeholder="Write a role..." value="<?= (isset($_POST["role"])) ? $_POST["role"] : "" ?>">
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