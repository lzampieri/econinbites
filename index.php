<?php
require("header.php");
require_once("utilities.php");
?>

<div class="row my-5">
    <img src="copertina.png" class="col-md-6 ml-auto" alt="copertina" />
    <h1 class="sansserif mr-auto mt-auto mb-auto greenbrown">economist<br/>society</h1>
</div>

<div class="row my-5">
    <img src="scomposto_largherrimo.png" class="col-3 mx-auto" />
</div>

<h2 class="sansserif brownbrown">Bites</h2>
    <?php
    $bites = query("SELECT * FROM bites ORDER BY ID DESC");
    while( $bite = mysqli_fetch_assoc($bites) ) {
        if( $bite['Visible'] )
            echo <<<HTML
            <div class="row my-5">
                <img src="fava.png" class="col-3 col-md-2 mb-auto" alt="fava" />
                <div class="mr-auto col-md-7">
                    <h2 class="sansserif greenbrown">{$bite['Title']}</h2>
                    {$bite['Text']}
                </div>
            </div>
HTML;
    }
    ?>
</div>

<div class="row">
    <img src="rotating.gif" class="col-1 mx-auto" />
</div>

<hr/>
<a href="https://www.instagram.com/econ.in.bites/" class="sansserif greenbrown mr-auto">
    <img src="instagram.png" class="col-3 col-md-1" alt="instagram" />econ.in.bites
</a>
<div class="row"><a href="easy_cms/" class="ml-auto"><i class="fas fa-lock greenbrown"></i></a><div>
<?php
require("footer.php");
?>