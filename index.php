<?php

//Janelle Zheng July 11th 2017

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

//foreach loop through the array and get output table
$html="<table class='table-bordered'>";
$id=1;
foreach ($people as $value) {
	
	$html.="<tr class='tr_".$id."'>";
	foreach ($value as $key => $val) {
		$html.="<td class='".$key."'>$val</td>";
	}
	$html.="<td><input type='button' class='btn btn-default' id='".$id."' value='CLICK'>";
	$html.="</tr>";
	$id++;
}
$html.="</table>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<body>
 <?php  echo $html;?>

</body>
<script type="text/javascript">
//Jquery click function
	$('input').click(function(){
		var msg="";
		var n=1;
		$(".tr_"+this.id+" td").each(function(){
			if(n!==1&&n!==5){
				msg+=$(this).html()+" ";
			}
			n++;
		});
		alert(msg);
	});
</script>
</html>