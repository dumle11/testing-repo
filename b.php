<? phpinfo(); ?>

function childStart(&$daemon)
{
    $dummy = new dummy();
    $dummy->setuniq();
    echo "Starting new child with: {$dummy->uniqid}\n";
    $daemon->childObject = $dummy;
    return TRUE;
}


 public function testCheck()
 {
     $d = new dummy();
     $_SERVER["REQUEST_METHOD"] = "POST";
     $res = $d->check(array('101A', 'UTN', 45888, 4, 400, 2.3, 'NO', 
'Alen', 4789658963));
     $this->assertEquals(array('101A', 'UTN', 45888, 4, 400, 2.3, 'NO', 
'Alen', 4789658963), $res);
     //res:OK
     $res = $d->check(array('101A', 'UTN', 4588998, 4, 400, 2.3, 'NO', 
'Alen', 4789658963));
     $this->assertEquals("Please fill out a valid zip code.", $res);
     // res: OK
     $res = $d->check(array('101A', 'UTN', 4588998, 4, 400, 2.3, 'NO', 
'Alen', 4789658963));
     $this->assertEquals("Please fill out a valid id.", $res);
     // res: Failure
 }




