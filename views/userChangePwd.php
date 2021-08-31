<?php 
    include 'userHeader.php';
?>
<main>
    <div id="container">
        <div>
            
            <div class="login-signupbox">
                <div class="login-signupform">
                    <div class="loguser-icon"></div>
                    <h2 class="login-signupheader">Login</h2>

                    <form action="" method="post" autocomplete="off">
                        <input class="input-box" type="password" name="new_pwd" placeholder="New Password" autocomplete="off">
                        <br>
                        <input class="input-box" type="password" name="re-enter_new_pwd" placeholder="ReEnter Password" autocomplete="off">
                        <br>
                        <button class="input-box loggin-signup-button" type="submit" name="confirm_new_pwd">Confirm</button>
                    </form>

                </div>
            </div>
        </div>


    </div>

    

</main>


<?php 
    include 'userFooter.php';
?>

</html>



