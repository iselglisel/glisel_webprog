<?php

include 'connect.php';

function getInfo(){
	$query = mysql_query("SELECT * FROM tbmessages");
	$result = mysql_query($query);
	$get = array();
	if(mysql_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
			$get[] = $row;
		}
	}
	return $get;
}
$get = getInfo();
?>
	<table> 
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Messages</th>
		<th>Date Posted</th>
		<th>Is Approved</th>
		<th>Action</th>
		</tr>


	<?php foreach ($get as $getInfos):?>
		<tr>
			<td> <?php echo $getInfos['name'];?> </td>
			<td> <?php echo $getInfos['email'];?> </td>
			<td> <?php echo $getInfos['message'];?> </td>
			<td> <?php echo $getInfos['date_posted'];?> </td>
			<td> <?php echo $getInfos['is_approved'];?> </td>
			<td>
				<form action = "deleteMessage.php?id=<?=$getInfo['message'];?>" method = 'POST'>
			<input type = 'submit' name = 'delete' value = 'Delete' class="btn btn-warning btn-lg btn-block"></form></td>
		</tr>






	<?php endforeach;?>

	</table>

<?php

}

?>
