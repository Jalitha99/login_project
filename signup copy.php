<?php
include_once 'header.php'
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <br>
    <form action="includes/signup.inc.php" method="post">
        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Full Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control form-control-sm" id="colFormLabelSm"
                       placeholder="Full name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control form-control-sm" id="colFormLabelSm"
                       placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Username</label>
            <div class="col-sm-10">
                <input type="text" name="uid" class="form-control form-control-sm" id="colFormLabelSm"
                       placeholder="Username">
            </div>
        </div>
        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
            <div class="col-sm-10">
                <input type="password" name="pwd" class="form-control form-control-sm" id="colFormLabelSm"
                       placeholder="Password">
            </div>
        </div>
        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Repeat Password</label>
            <div class="col-sm-10">
                <input type="password" name="pwdrepeat" class="form-control form-control-sm" id="colFormLabelSm"
                       placeholder="Repeat Password">
            </div>
        </div>

        <button type="submit" name="submit"> Sign Up</button>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] === "emptyinput") {
            echo "<p>Fill in all fields!!</p>";
        }
        else if ($_GET["error"] === "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        }
        else if ($_GET["error"] === "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] === "passwordsdontmatch") {
            echo "<p>Passwords doesn't match!</p>";
        }
        else if ($_GET["error"] === "stmtfailed") {
            echo "<p>Something went wrong!</p>";
        }
        else if ($_GET["error"] === "none") {
            echo "<p>You have Signed Up successfully!</p>";
        }

    }

    ?>


</section>


<?php
include_once 'footer.php'
?>

