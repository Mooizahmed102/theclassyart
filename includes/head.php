<?php

if (isset($_SERVER['HTTPS'])) {
  $requesMet = "https";
} else {
  $requesMet = "http";
}
?>

<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">
<link rel="stylesheet" href="assets/css/layout.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">