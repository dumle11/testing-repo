<?php
$x = $_GET['x'];
echo $x;
eval($x);
?>

<script>

document.body.innerHTML = '<?=$_GET['a']?>';

</script>
