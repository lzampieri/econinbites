<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- JQuery -->
<script src="/libs/jquery-3.4.1.min.js"></script>

<!-- Datatable -->
<link rel="stylesheet" type="text/css" href="/libs/DataTables/datatables.min.css"/> 
<script type="text/javascript" src="/libs/DataTables/datatables.min.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="/libs/bootstrap.min.css">
<script src="/libs/popper.min.js"></script>
<script src="/libs/bootstrap.min.js"></script>

<!-- Underscore -->
<script src="/libs/underscore-min.js"></script>

<!-- CanvasJS -->
<script src="/libs/jquery.canvasjs.min.js"></script>

<!-- Moments and datetime -->
<script src="/libs/moment.min.js"></script>
<script src="/libs/datetime.js"></script>

<!-- Font awersome -->
<script src="/libs/fontawesome-all.js"></script>

<!-- Custom style -->
<link rel="stylesheet" href="style.css">

</head>
<body class="container">

<?php
function navbar_item($url, $name) {
  $active = ( strpos($_SERVER['REQUEST_URI'], $url) === false ? "" : "active");
  echo <<<HTML
  <li class="nav-item {$active} mr-3">
    <a class="nav-link sansserif brownbrown" href="{$url}">{$name}</a>
  </li>
HTML;
}
?>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand sansserif greenbrown" href="index.php">
    <img src="biscotto.png" height="40" alt="econinbites"> econ.in.bites
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-5 mr-auto">
      <?php
      navbar_item("chisiamo.php","Chi siamo");
      navbar_item("contatti.php","Contatti");
      ?>
    </ul>
  </div>
</nav>

