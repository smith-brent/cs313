<?php
  if(!empty($_POST['action'])) {
    $new_page = '';
    if(!empty($_POST['name'])) {
      $name = $_POST['name'];
      $new_page .= '<p>Name: '. $name .'</p>';
    }

    if(!empty($_POST['email'])) {
      $email = $_POST['email'];
      $new_page .= '<a href="mailto:'. $email .'">'.$email.'</a>';
    }

    if(!empty($_POST['major'])) {
      $major = $_POST['major'];
      $new_page .= '<p>Major: '. $major .'</p>';
    }

    
    // $new_page .= '<p>Visited:<br>';
    // for($i=0; $i < 8; $i++) {
    //   $temp = 'visited'.$i;
    //   if(!empty($_POST[$temp])) {
    //     $new_page .= $_POST[$temp].'<br>';
    //   }
    // }
    // $new_page .= '</p>';
    if(!empty($_POST['visited'])) {
      $new_page .= '<p>Visited:<br>';
      foreach($_POST['visited'] as $visit) {
        $new_page .= $visit.'<br>';
      }
      $new_page .= '</p>';
    }

    if(!empty($_POST['comments'])) {
      $comments = $_POST['comments'];
      $new_page .= '<p>Comments:<br>'. $comments .'</p>';
    }

  }
  include 'view.php';
  exit;