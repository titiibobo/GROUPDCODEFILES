 <!-- to connect to the database groupddatabase -->
 <?php
//@ $db = mysqli_connect('localhost', 'root', ''); 
//@ $db = mysql_pconnect('localhost', 'greenlan_scotty', 'NewPass1');
//@ $db = mysqli_connect('localhost', 'staczqbg_scott', 'Trader8080*'); 
@ $db = mysqli_connect('localhost', 'root', '');
if (!$db)

{

echo 'Database connecton error: Could not connect to database. Please try again later.';

exit;

}
//mysql_select_db('members');
mysqli_select_db($db, 'groupddatabase');

?>
