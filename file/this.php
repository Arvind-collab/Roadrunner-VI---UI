<?php 
	if(empty($_POST)===false)
	{	$username=$_POST['username'];
		$password=$_POST['password'];
		if(empty($username)||empty($password))
			echo "<h2 style='color:#fff;height:200px;border-radius:14px;padding:40px; font-size:30px; margin:100px; background:grey;'>Both fields are required...</h2>";
		else 
		if(($username)===kejri && ($password)===kejri12345){
				header('Location: http://www.Roadrunner6.com/index_2.php');
				exit;
		}
		else
			{						
			echo "<h2 style='color:#fff;height:200px;border-radius:14px;padding:40px; font-size:30px; margin:100px; background:grey;'>Please Come again after some time.<br><br>Thankyou.<br><br><br>Arvind</h2>" ;
				exit();
				}
			}
		
?>