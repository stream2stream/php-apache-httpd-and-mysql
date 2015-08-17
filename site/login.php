<?php
    include ('includes/header.php');

    if (isset($_POST['submit'])) {

        //sanitise inputs
        $safe_username = $db->quote($_POST['username']);

        //get user from the database
        $query = "select * from user where username = $safe_username";

        //if there is a result in the dataset then forward to userhome
        $result = $db->query($query);

        foreach ($result as $row) {
            if ($row['password'] == $_POST['password']) {

               	$_SESSION['userid'] = $row['id'];
				$_SESSION['staff'] = $row['staff_account'];
                $_SESSION['username'] = $row['username'];

                header( 'Location: userhome.php' );
            }
        }

        //if it gets here there was an error

        echo ('<div class = "row">
                    <div data-alert class="alert-box alert round">
                        Error with username or password
                    </div>
                </div>'
             );
    }
?>


<div class = "row">
    <div class = "large-12 collumn">
        <h1>Login</h1>

        <form action = "login.php" method = "post" >
            <label>User Name: <input type="text" name="username" size="15" maxlength="20" /></label>
            <label>Password: <input type="password" name="password" size="15" maxlength="20" /></label>
            <p><input type="submit" name="submit" value="Submit" /></p>
        </form>
    </div>
</div>


<?php
    include ('includes/footer.php');
?>
