<?php
include_once'header.php'
?>


<div align="center" style="padding-top: 50px">
<h1>THIS IS JUST A PAGE</h1>
<h2>KEEP CALM AND</h2>
<h3>EAT PIZZA!!!</h3>
    <?php
    if (isset($_SESSION["useruid"])){
        echo '<h2>Hello there! '.$_SESSION["useruid"].'</h2>';
    }

    ?>
</div>

<?php
include_once 'footer.php'
?>
