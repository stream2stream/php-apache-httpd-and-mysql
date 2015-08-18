<?php
include('includes/header.php');


    //if the form has been submitted
    if (isset($_POST['submit'])){
		unset($_POST['submitted']);

        //sanitise those inputs
		if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])){

            //get safe copies of them all
			$new_user_name = $db->quote($_POST["username"]);
			$new_pass = $db->quote($_POST["password"]);
			$new_email = $db->quote($_POST["email"]);

            //create the query
			$q = "insert into user values (default, $new_user_name, $new_pass, $new_email, false)";
//			echo $q;

			try {
				$db->exec($q);

				//set session variables
				$_SESSION['username'] = $new_user_name;

				//get the ID for the user we just entered to include in the session
				$q2 = "select * from user where username = $new_user_name";
				$row = $db->query($q2)->fetch();

				$_SESSION['userid'] = $row['id'];
				$_SESSION['staff'] = 'false';
                $_SESSION['username'] = $row['username'];

				//redirect to the logged in page
				header( 'Location: userhome.php' );

//                print_r($_SESSION);

			} catch (PDOException $ex) {
				echo "<p>Sorry, a database error occurred. Please try again.</p>";
				echo "<p>(Error details: " . $ex->getMessage() . ")";
			}
        }

    }
?>

<div class = "row">
    <div class="large-12 columns">
        <header>
            <h1>Registration Form</h1>
        </header>

        <form action = "register.php" method = "post" >
            <label> Username: <input type = "text" name = "username" autofocus required/> </label>
            <label> Email: <input type = "email" name = "email" /> </label>
            <label> Password: <input type = "password" name = "password" required/> </label>
            <input type = "submit" name = "submit" />
        </form>
    </div>
</div>

<?php
include('includes/footer.php');
?>
