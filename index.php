<?php
$x = $_GET['x'];
echo $x;
eval($x); // ?
?>

<script>

alert(window.location.search);

</script>

<?php header(“Location: “.$_GET[“go”]); die();  ?>
