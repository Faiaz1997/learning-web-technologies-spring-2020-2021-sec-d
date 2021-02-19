<?PHP

$male_status = 'unchecked';
$female_status = 'unchecked';
$other_status = 'unchecked';

if (isset($_POST['submit'])) 
{
$selected_radio = $_POST['gender'];
if ($selected_radio == 'male') {$male_status = 'checked';}
else if ($selected_radio == 'female') {$female_status = 'checked';}
else if ($selected_radio == 'other') {$other_status = 'checked';}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Gender</legend>
			<Input type = 'Radio' Name ='gender' value= 'male'<?PHP print $male_status; ?>>Male
			<Input type = 'Radio' Name ='gender' value= 'female'<?PHP print $female_status; ?>>Female
			<Input type = 'Radio' Name ='gender' value= 'other'<?PHP print $other_status; ?>>Other
			<Input type = "submit" Name = "submit" VALUE = "Submit">
		</fieldset>
	</form>
	
</body>
</html>