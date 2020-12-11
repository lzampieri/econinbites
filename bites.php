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

<h2 class="sansserif brownbrown">bites</h2>
    <?php
    $bites = query("SELECT * FROM bites WHERE Visible = 1 ORDER BY ID DESC");
    $nl2br = 'nl2br';
    $strtolower = 'strtolower';
    while( $bite = mysqli_fetch_assoc($bites) ) {
        if( $bite['Visible'] )
            echo <<<HTML
            <div class="row my-5" id="bite{$bite['ID']}">
                <img src="fava.png" class="col-3 col-md-2 mb-auto" alt="fava" />
                <div class="mr-auto col-md-7">
                    <h2 class="sansserif greenbrown">{$strtolower($bite['Title'])}</h2>
                    {$nl2br($bite['Text'])}
                </div>
            </div>
HTML;
    }
    ?>
</div>

<div class="row">
    <img src="rotating.gif" class="col-3 col-md-1 mx-auto" />
</div>

<?php
require("footer.php");
?>