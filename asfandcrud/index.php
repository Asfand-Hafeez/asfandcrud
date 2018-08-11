		<?php
		include_once "config.php";
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
			$class->insertdata($name,$email);	
			}
		
		}
		?>
		<form method="POST">
		<input type="text" name="name" required placeholder="Name" />
		<input type="text" name="email" required  placeholder="Email"/>
		<input type="submit" value="submit"  name="done"/>
		
		  
		</form>
<?php
include_once "config.php";
?>
	<table border="2">
	<tr>
	<th>Id</th>
	<th>Email</th>
	<th>Pass</th>
	<th>Action</th>
	</tr>
<?php
$query= $class->fetchdata(" select * from crud");
while ($data=$query->fetch(PDO::FETCH_ASSOC))
{	?>
	<tr>
	
	<td><?php echo $data['id'];  ?> </td>
	<td><?php echo $data['name'];  ?> </td>
	<td><?php echo $data['email'];  ?> </td>
		<td><a href="delet.php?id=<?php echo $data['id'];  ?>">Delete</a>  || <a href="edit.php?id=<?php echo $data['id'];  ?>">Edit</a></td>
	</tr>
<?php 
}
?>
	</table>