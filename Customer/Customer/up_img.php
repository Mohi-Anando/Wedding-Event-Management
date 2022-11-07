<?php
session_start();
  $target_dir = "Image/";
  if(strpos($_FILES['file_to_upload']['type'], 'image/') !== false){
    $ext = substr($_FILES['file_to_upload']['name'], strlen($_FILES['file_to_upload']['name'])-4, 4);
    if(strtolower($ext) == 'jpeg'){
      $ext = substr($_FILES['file_to_upload']['name'], strlen($_FILES['file_to_upload']['name'])-5, 5);
    }
    $moving_path = $target_dir.time().$ext;
    if(move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $moving_path)){
      if($_SESSION['user']['profilePicPath'] != 'Image/'){
        unlink($_SESSION['user']['profilePicPath']);
      }
      $users = json_decode(file_get_contents('users.json'),true);


      foreach ($users as $key => $value) {
        if ($value['username'] ==  $_SESSION['user']['username']){

          $set = [
            'name' => $_SESSION['user']['name'],
            'email' => $_SESSION['user']['email'],
            'username' => $_SESSION['user']['username'],
            'password' => $_SESSION['user']['password'],
            'gender' => $_SESSION['user']['gender'],
            'dob' => $_SESSION['user']['dob'],
            'profilePicPath' => $moving_path
          ];
          $_SESSION['user'] = $set;
          if(isset($_COOKIE['user'])){
            setrawcookie('user', base64_encode(json_encode($_SESSION['user'])));
          }
          $users[$key] = $_SESSION['user'];
          file_put_contents('users.json', json_encode($users));

          header('Location: viewPr.php');
          break;
        }
      }
    }else{
      echo 'failed to upload file';
    }
  }else{
    echo 'uploaded file not a image';
  }
?>