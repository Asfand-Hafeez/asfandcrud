<?php
include_once "config.php";
$id = $_GET['id'];
$query=$class->fetchdata("SELECT * FROM `ads` WHERE 1");
$data=$query->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['done']))
		{
			$name= $_POST['name'];
			$email= $_POST['email'];
			if($name =="" && $pass=="")
			{
				echo "Enter Data in Both Field ";
			}	
			else 
			{
			$class->updatedata($id,$name,$email);	
			$class->redirect("index.php");
			}
		
		}
?>
	<form method="POST">
		<input type="text" name="name" value="<?php echo $data['name']; ?>" required placeholder="Name" />
		<input type="text" name="email" value="<?php echo $data['email']; ?>"  required  placeholder="Email"/>
		<input type="submit" value="submit"  name="done"/>
		</form>