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
<?
echo 1; // Adding new lines to trigger quality gate
echo 2;
echo 3;
echo $_POST;
var_dump($this);

class Example1
{
   public $cache_file;

   function __construct()
   {
      // some PHP code...
   }

   function __destruct()
   {
      $file = "/var/www/cache/tmp/{$this->cache_file}";
      if (file_exists($file)) @unlink($file);
   }
}

// some PHP code...

$user_data = unserialize($_GET['data']);

// some PHP code...





?>


<?php
// password: 12345
class warm {
  public $dir = ".";
  public function __wakeup() {
    echo "This folder contains:\n";
    system("ls " . $this->dir);
  }
}
$test = new warm();
$a = serialize($test);
echo "Example of an object:\n$a\n\n";
unserialize($argv[1]);


/* secret: 'super-secure-password'; */
