<?php
require("header.php");
require_once("utilities.php");
?>

<div class="row my-5">
    <img src="copertina.png" class="col-md-6 ml-auto" alt="copertina" />
    <h1 class="sansserif ml-auto mr-2 ml-md-0 mr-md-auto mt-auto mb-auto greenbrown">economist<br/>society</h1>
</div>

<div class="row my-5">
    <img src="scomposto_largherrimo.png" class="col-8 col-md-3 mx-auto" />
</div>

<h2 class="sansserif brownbrown">ultimi bites</h2>
    <?php
    $bites = query("SELECT * FROM bites WHERE Visible = 1 ORDER BY ID DESC LIMIT 3");
    $substr = 'substr';
    $strtolower = 'strtolower';
    while( $bite = mysqli_fetch_assoc($bites) ) {
        if( $bite['Visible'] )
            echo <<<HTML
            <div class="row my-5">
                <img src="fava.png" class="col-3 col-md-2 mb-auto" alt="fava" />
                <div class="mr-auto col-md-7">
                    <a href="bites.php#bite{$bite['ID']}"><h2 class="sansserif greenbrown">{$strtolower($bite['Title'])}</h2></a>
                    {$substr($bite['Text'],0,200)}...
                </div>
            </div>
HTML;
    }
    ?>
    <a href="bites.php" class="row"><h3 class="mx-auto sansserif greenbrown">vedi tutti</h3></a>
</div>

<div class="row">
    <img src="rotating.gif" class="col-3 col-md-1 mx-auto" />
</div>

<?php
require("footer.php");
?>