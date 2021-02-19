<?php

    $SSC_status = 'unchecked';
    $HSC_status = 'unchecked';
    $BSc_status = 'unchecked';
    $MSc_status = 'unchecked';
	if(isset($_POST['submit']))
    {

		if(!empty($_POST['degree'])){
            foreach($_POST['degree'] as $selected){
                if ($selected == 'SSC') {$SSC_status = 'checked';}
                else if ($selected == 'HSC') {$HSC_status = 'checked';}
                else if ($selected == 'BSc') {$BSc_status = 'checked';}
                else if ($selected == 'MSc') {$MSc_status = 'checked';}

            }}
        else{
		    echo "Invalid request...";}
	}
?>

<html>
<head> 
    <title>Degree Input</title>
</head>
<body>
    <fieldset>
        <legend><b>Degree</b></legend>
        <form method='POST' action=''>
                        <input type="checkbox" name="degree[]" value="SSC"<?php echo $SSC_status; ?>>SSC
                        <input type="checkbox" name="degree[]" value="HSC"<?php echo $HSC_status;?>>HSC
                        <input type="checkbox" name="degree[]" value="BSc"<?php echo $BSc_status; ?>>BSc
                        <input type="checkbox" name="degree[]" value="MSc"<?php echo $MSc_status;?>>MSc <br>
                        <Input type = "submit" Name = "submit" VALUE = "Submit">
        </form>
    </fieldset>
</body>
</html>