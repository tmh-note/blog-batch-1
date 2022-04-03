<?php

if(Auth::guest()) {
    redirect('login.php');
}

// if(! Auth::check()) {
//     redirect('login.php');
// }

// if(!isset($_SESSION['auth'])) {
//     redirect('login.php');
// }