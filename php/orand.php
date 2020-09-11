<?php
//AND
  if($_REQUEST["song_name"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["album_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["album_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["album_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["country_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["country_id"]!="" && $_REQUEST["album_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  
  if($_REQUEST["song_name"]!="" && $_REQUEST["gender_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["language_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["country_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["song_name"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["language_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["country_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["gender_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
  }
  if($_REQUEST["language_id"]!="" && $_REQUEST["country_id"]!=""){            
      $logicalOperator = "AND";
      $where = " WHERE ";
      foreach ($_POST as $key => $value) {            
        if($_POST[$key] && $key !== "submit"){
          $parameters[":$key"] = "%$value%";
          $where = $where . "$key LIKE :$key $logicalOperator ";
        }
      }
  }
  if($_REQUEST["language_id"]!="" && $_REQUEST["album_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
}
if($_REQUEST["language_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
}
if($_REQUEST["album_id"]!="" && $_REQUEST["artist_id"]!=""){            
    $logicalOperator = "AND";
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {            
      if($_POST[$key] && $key !== "submit"){
        $parameters[":$key"] = "%$value%";
        $where = $where . "$key LIKE :$key $logicalOperator ";
      }
    }
}
  
  
//OR
  if($_REQUEST["song_name"]!="" ){            
      $where = " WHERE ";
      foreach ($_POST as $key => $value) {            
        if($_POST[$key] && $key !== "submit"){
          $parameters[":$key"] = "%$value%";
          $where = $where . "$key LIKE :$key $logicalOperator ";
        }
      }
  }
  if($_REQUEST["gender_id"]!="" ){            
      $where = " WHERE ";
      foreach ($_POST as $key => $value) {
        if($_POST[$key] && $key !== "submit"){
            if($key == "gender_id") {
                $parameters[":$key"] = "$value";
                $where = $where . "$key = :$key $logicalOperator ";
            }
            else {
                $parameters[":$key"] = "%$value%";
                $where = $where . "$key LIKE :$key $logicalOperator ";
            }
        }
      }
  }
  if($_REQUEST["language_id"]!="" ){            
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {
      if($_POST[$key] && $key !== "submit"){
          if($key == "language_id") {
              $parameters[":$key"] = "$value";
              $where = $where . "$key = :$key $logicalOperator ";
          }
          else {
              $parameters[":$key"] = "%$value%";
              $where = $where . "$key LIKE :$key $logicalOperator ";
          }
      }
    }
      
  }
  if($_REQUEST["country_id"]!="" ){            
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {
      if($_POST[$key] && $key !== "submit"){
          if($key == "country_id") {
              $parameters[":$key"] = "$value";
              $where = $where . "$key = :$key $logicalOperator ";
          }
          else {
              $parameters[":$key"] = "%$value%";
              $where = $where . "$key LIKE :$key $logicalOperator ";
          }
      }
    }
      
  }
  if($_REQUEST["album_id"]!="" ){            
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {
      if($_POST[$key] && $key !== "submit"){
          if($key == "album_id") {
              $parameters[":$key"] = "$value";
              $where = $where . "$key = :$key $logicalOperator ";
          }
          else {
              $parameters[":$key"] = "%$value%";
              $where = $where . "$key LIKE :$key $logicalOperator ";
          }
      }
    }
      
  }
  if($_REQUEST["artist_id"]!="" ){            
    $where = " WHERE ";
    foreach ($_POST as $key => $value) {
      if($_POST[$key] && $key !== "submit"){
          if($key == "artist_id") {
              $parameters[":$key"] = "$value";
              $where = $where . "$key = :$key $logicalOperator ";
          }
          else {
              $parameters[":$key"] = "%$value%";
              $where = $where . "$key LIKE :$key $logicalOperator ";
          }
      }
    }
      
  }
?>