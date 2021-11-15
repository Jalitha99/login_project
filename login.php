<?php
include_once'header.php'
?>
<section class="Login-form">
    <h2>Log In</h2>
    <br>
    <form action="includes/login.inc.php" method="post">
        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Full Name/Email</label>
            <div class="col-sm-10">
                <input type="text" name="uid" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Full name / Email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
            <div class="col-sm-10">
                <input type="password" name="pwd" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Password">
            </div>
        </div>
        <button type="submit" name="submit" > Log In </button>
    </form>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] === "emptyinput") {
            echo "<p>Fill in all fields!!</p>";
        }
        else if ($_GET["error"] === "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    }

    ?>


</section>


<?php
include_once 'footer.php'
?>

