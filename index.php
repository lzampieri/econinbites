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

<?php
$results = query("SELECT * FROM home_settings");
$settings = array();
while( $result = mysqli_fetch_assoc($results) ) {
    $settings[$result['Chiave']] = $result['Valore'];
}
$strtolower = 'strtolower';
echo <<<HTML
<h2 class="sansserif brownbrown">idee</h2>
    <div class="row mb-5">
        <div class="col-12 col-md-4">
            <div class="col-12">
                <h3 class="sansserif greenbrown">{$strtolower($settings['Title1'])}</h3>
                {$settings['Content1']}
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="col-12">
                <h3 class="sansserif greenbrown">{$strtolower($settings['Title2'])}</h3>
                {$settings['Content2']}
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="col-12">
                <h3 class="sansserif greenbrown">{$strtolower($settings['Title3'])}</h3>
                {$settings['Content3']}
            </div>
        </div>
    </div>
    <div class="row">
        <h3 class="greenbrown sansserif mx-auto">{$settings['Quote']}</h3>
    </div>
</div>
HTML;
?>

<div class="row my-5">
    <img src="scomposto_largherrimo.png" class="col-8 col-md-3 mx-auto" />
</div>

<h2 class="sansserif brownbrown">ultimi bites</h2>
    <div class="row mb-5">
        <?php
        $bites = query("SELECT * FROM bites WHERE Visible = 1 ORDER BY ID DESC LIMIT 3");
        $substr = 'substr';
        $strtolower = 'strtolower';
        while( $bite = mysqli_fetch_assoc($bites) ) {
            if( $bite['Visible'] )
                echo <<<HTML
                <div class="col-12 col-md-4">
                    <img src="fava.png" class="col-3 col-md-4 mt-5" alt="fava" />
                    <div class="col-12">
                        <a href="bites.php#bite{$bite['ID']}"><h3 class="sansserif greenbrown">{$strtolower($bite['Title'])}</h3></a>
                        {$substr($bite['Text'],0,200)}...
                    </div>
                    <a href="bites.php#bite{$bite['ID']}" class="row">
                        <img src="biscotto.png" class="col-2 mx-auto mt-5" alt="fava" />
                    </a>
                </div>
HTML;
        }
        ?>
    </div>
    <a href="bites.php" class="row"><h3 class="mx-auto sansserif greenbrown">vedi tutti</h3></a>
</div>

<div class="row">
    <img src="rotating.gif" class="col-3 col-md-1 mx-auto" />
</div>

<?php
require("footer.php");
?>