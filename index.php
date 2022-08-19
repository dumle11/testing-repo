<?php
$x = $_GET['x'];
echo $x;
?>

<script>

alert(window.location.search);

</script>

<?php header(“Location: “.$_GET[“go”]); die();  ?>
