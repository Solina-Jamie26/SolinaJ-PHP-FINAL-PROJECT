<?php
session_start();

// load XML file
$xml = simplexml_load_file("events.xml") or die("Error: Cannot create object");

// to handle carriage return character
$xml = simplexml_load_string(str_replace('&#13;', '', file_get_contents('events.xml')));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main2.css">
    <title>Admin</title>
</head>
<body>
	<div class="Form">
		<h3 class="title">Marinduque Events Calendar</h3>
        <div class="forms">
			<form method="POST" action="content.php">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" placeholder="Insert Here" required="required"/>
				</div>
				<div class="form-group">
					<label for="location">Location</label>
					<input type="text" class="form-control" name="location" placeholder="Insert Here" required="required"/>
				</div>
                <div class="form-group">
					<label for="date">Date</label>
					<input type="date" class="form-control" placeholder="Insert Here" name="date"/>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" name="image" placeholder="Insert Here" required="required"/>
				</div>
				<div class="form-group">
					<label for="content"><Details></Details></label>
                    <textarea type="text" class="form-control" name="details" placeholder="Insert Here" required="required"></textarea> 
				</div>
                <br/>
				<button class="btn btn-primary" name="insert">Insert</button>
			</form>
		</div>
        <div>
			<table>	
				<thead>
					<tr>
						<th>Title</th>
						<th>Location</th>
						<th>Date</th>
						<th>Image</th>
                        <th>Details</th>
					</tr>
				</thead>
				<tbody>
			<?php
			foreach($xml->event as $event){
				echo '
					<tr>
			    		<td>'.$event->title.'</td>
			    		<td>'.$event->location.'</td>
                        <td>'.$event->date.'</td>
						<td>'.$event->image.'</td>
			    		<td>'.$event->details.'</td>
					</tr>
					';
    			}
?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>