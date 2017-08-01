<html>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap/js/bootstrap.min.js"></script>
<body>
<a class="btn btn-danger">Button</a>
<?php
echo 'Hello World';
$a = 5;

function show_a ($x)
{
    global $a;
    echo $x." ".$a."jackass";
}

show_a(15);

include ("menu.php");

?>
<p><strong>THIS TEXT IS STRONG!!</strong></p>

</body>
</html>

