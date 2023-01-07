<?php 
session_start();
include 'admin/conn.php';
include 'header.php';
?>

	<div class="main-div">
		<div class="result-div">

             <h1>Search Result</h1>
			<form method="post" action="view_result.php">
				Student Roll No:
				<input type="text" name="roll" required> <br><br>

				Class:
             <select name="class" required>
             	<option>--select--</option>

			<?php 

     $sql = " SELECT `class` FROM `classes`";
     $result = mysqli_query($con, $sql);
     while( $row = mysqli_fetch_assoc($result)){

			?>
			<option> <?= $row['class']; ?></option>

       <?php 
              }
        ?>
 
    </select>
	<br><br>


				<button type="submit">Search</button>

			</form>

		</div>


		<span id="log-msg" style="background-color: red; padding: :5px;"></span>

		<div class="admin-div">
			<h1>Admin login</h1>
			<form method="post" action="index.php">
				Username:
				<input type="text" name="username" placeholder="Enter Username:ss" required> <br><br>
				Password:
				<input type="Password" name="password" placeholder="Enter Password:11" required> <br><br>

				<button type="submit" name="login-sub">Login</button>

			</form>

			<!--login php-->

			<?php
  
    if(isset($_POST['login-sub'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = filter_var($username, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM `admin` WHERE username = '$username' and password = '$password' ";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['loginUsername'] = $username;
            $_SESSION['loginPassword'] = $password;
            header('location:admin/index.php');
        }
        else 
        echo "invalid username or password";
        //header('location:login.php');

    }


    ?>
		</div>
	</div>

</body>
</html>
