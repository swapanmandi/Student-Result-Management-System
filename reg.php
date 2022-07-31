<?php
error_reporting(0);
include 'admin/conn.php';
include 'header.php';

?>



<div class="reg-div">
		<div class="content-div">
			<h3>Registration For Admin</h3>
             <form method="post">
             Username:
			<input type="text" name="username" placeholder="username" required> <br>
			Password:
			<input type="Password" name="password" placeholder="password" required> <br>
			<input type="submit" name="submit">
			Are you forgot password? <a href="">Click here</a>

            </form>

			</div>
		</div>


		<?php 

		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$sql = "INSERT INTO `admin`(`username`, `password`) VALUES ('$username','$password')";
			$result = mysqli_query($con,$sql);
			if ($result) {
				echo "<span class='msg'>You successfully registered.</span>";
			}
			else
				echo mysqli_error();
		}



		?>

		</body>
</html>