<?php

session_start();

if(isset($_POST['name19']) && isset($_POST['pgcolor']))
{
    $name19 = $_POST['name19'];
    $pgcolor = $_POST['pgcolor'];
    
    setcookie("name", $name19);
    setcookie("page_color", $pgcolor);
    
    $q = array(
        'name' => $name19,
        'page color' => $pgcolor
        );
    
}

?>

<!DOCTYPE html>
<html>
<body>

<?php

function makeTable($stringA, $stringB, $stringC, $stringD){

    echo "<table border='1'><tr>
    <th>$stringA</th>
    <th>$stringB</th>
    <th>$stringC</th>
    <th>$stringD</th>
    </tr></table>";
}



print "<b>Lesson 1:</b>
<br>
I'd like to learn how to write web applications and learn to write websites using PHP. I think PHP helps with interacting with a backend side of development like databases.
<br><br>";

// delimiter tag is <?php..
print "<b>Lesson 3 </b>
<br>
Hello Web!
<br><br>";

print "<b>Lesson 4</b>
<br>";

$a = "ham";
$b = 24;
$c = 19;
$d = "banana";
$e = false;

print gettype($a);
print "<br>";

print gettype($b);
print "<br>";

print gettype($c);
print "<br>";

print gettype($d);
print "<br>";

print gettype($e);

print "<br><br>";
print " value1: $b
<br>
value2: $c
<br>";

$tf = ($b == $c);
var_dump($tf);

print "<br>";
$tf = ($b < $c);
var_dump($tf);

print "<br>";
$tf = ($b > $c);
var_dump($tf);

print "<br>";
$tf = ($b <+ $c);
var_dump($tf);

print "<br><br>";

print "<b>Lesson 5</b>
<br> The ternary operator is an if statement that compares 2 statements by the syntax (condition) ? (statement1) : (statement2). This decreases the length of the code.<br><br>";



print "<b>Lesson 6</b>
<br>";
$string1 = "hello";
$string2 = "who";
$string3 = "is";
$string4 = "this";

echo makeTable($string1, $string2, $string3, $string4);

print "<br>";

print "<b>Lesson 7</b><br>";

$movies = array (
array ( "Comedy",
    "The Disaster Artist", 
    "Zoolander",
    "Napoleon Dynamite"
    ),
array ( "Animated",
    "Up",
    "Spirited Away",
    "Shrek"
    ),
array ( "Horror",
    "Hereditary",
    "IT",
    "Insidious"
    )
);

for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 4; $col++){
        print $movies[$row][$col]."<br>";
    }
    print "<br>";
}

print "<b>Lesson 8</b><br>";

function validateEmail($username, $email){

    $emailLower = strtolower($email);

    if (strstr($email,"@")){
        return $emailLower;
    }
    else return false;
}

echo validateEmail("kanana","KaTHu@gMail.Com")."<br>";
var_dump(validateEmail("cami","camila"));
print "<br><br>";


$numbers= array(1,2,2.763,3,23,8.5321, 12, 1111.12);

for($index=0; $index< count($numbers); $index++){
    print money_format("%20.2n",$numbers[$index])."<br>";
}

print "<br>";


print "Lesson 9<br>";
class baseCalc 
{
    public $valUno;
    public $valDos;

    function __construct($valUno, $valDos)
    {
        $this->valUno = $valUno;
        $this->valDos = $valDos;
    }
   
   
    function calculate() 
    {
        return $this->valUno." ".$this->valDos;
    }
}

class addCalc extends baseCalc
{
    function __construct($valUno,$valDos) 
    {
        parent::__construct($valUno,$valDos);
    }

    function calculate() 
    {
        return ($this ->valUno + $this->valDos);
    }
}

class minusCalc extends baseCalc
{

    function __construct($valUno,$valDos) 
    {
        parent::__construct($valUno,$valDos);
    }

    function calculate() 
    {
        return ($this ->valUno - $this->valDos);
    }
}

$base = new baseCalc(21,12);
echo $base->calculate()."<br>";

$add = new addCalc(21,12);
echo $add->calculate()."<br>";

$minus = new minusCalc(21,12);
echo $minus->calculate()."<br>";


print "<br>";
print "<b>Lesson 10</b><br> Enter two numbers";
?>

<div>
<form action="learn.php" method="post">
<p><input type="number" name="num1"/></p>
<p><input type="number" name="num2"/></p>
<p>Enter +,-,*, or / <br>
<input type="text" name="operation"/></p>
<p><input type="submit" value="calculate" /></p>
</form>
</div>

<?php

if (isset($_POST['num1'])) {
    $num1 = $_POST['num1']; 
}

if (isset($_POST['num2'])) {
    $num2 = $_POST['num2'];
}

if (isset($_POST['operation'])) {
    $operation = $_POST['operation'];

    if($operation == '+'){
        echo $num1+$num2;
    }
    
    else if($operation == '-'){
        echo $num1-$num2;
    }
    
    else if($operation == '*'){
        echo $num1*$num2;
    }
    
    else if($operation == '/'){
        echo $num1/$num2;
    }
    else echo "Invalid input.";
}

print "<br>";
print "<b>Lesson 11</b><br> Enter first name and last name<br>";

touch("name.txt");

$file = fopen("name.txt","w");

if(isset($_GET['fName']) && isset($_GET['lName']))
{
    fwrite($file, $_GET['fName']." ".$_GET['lName']);

    echo $_GET['fName']." ".$_GET['lName'];
}


?>

<div>
<form action="learn.php" method="get">
<p><input type="text" name="fName"/></p>
<p><input type="text" name="lName"/></p>


<p><input type="submit" value="create file" /></p>
</form>
</div>


<br><b>Lesson 13</b><br>

<div>
<form action="learn.php" method="post">
<p>
    Enter email:<br>
    <input type="text" name="email"/></p>
<p>
    Enter message:<br>
    <input type="text" name="message"/></p>

<p><input type="submit" value="submit" /></p>
</form>
</div>

<?php

$servername = "localhost";
$database = "u608829345_testDB";
$username = "u608829345_klnavarro";
$password = "#Diamond12";
$time = time();
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email']))
{
    $email = $_POST['email'];
}

if(isset($_POST['message']))
{
    $message = $_GET['message'];

    $conn->select_db( $database ) or die ( "Couldn't open $database: ".mysqli_error() );

    $query = "INSERT INTO email( email, message, date ) values( '{$email}', '{$message}', '{$time}')";
    print "running query: <br />\n$query<br />\n";
    $conn->query( $query )
    or die ( "INSERT error: ".mysql_error() );

    $select = "SELECT FROM email WHERE email='{$email}'";
    $res = $conn->query( $select );
    $result = $res -> fetch_row();
    print $result;

}

?>



<br><b>Lesson 14</b><br>

<div>
<form action="learn.php" method="post">
<p>
    Enter website host:<br>
    <input type="text" name="website"/></p>

<p><input type="submit" value="submit" /></p>
</form>
</div>

<div>
<form action="learn.php" method="post">
<p>
    Enter message:<br>
    <input type="text" name="message2"/></p>

<p><input type="submit" value="submit" /></p>
</form>
</div>

<?php

if(isset($_POST['website']))
{
    $host = $_POST['website'];
    
    $fp = fsockopen( "$host", 80, $errno, $errdesc, 10);
   print "Trying $host<br/>\n";
   if ( !$fp ) {
     print "Couldn't connect to $host:<br/>\n";
     print "Error: $errno<br/>\n";
     print "Desc: $errdesc<br/>\n";
   } else {
     print "Trying to get $page<br/>\n";
     fputs( $fp, "HEAD $page HTTP/1.0\r\n" );
     fputs( $fp, "Host: $host\r\n" );
     fputs( $fp, "\r\n" );
     print fgets( $fp, 1024 );
     fclose( $fp );
   }
   print "</p>\n";
}

if(isset($_POST['message2']))
{
    $to = "klnavarro@my.canyons.edu";
    $from = "kthlnnvrr@gmail.com";
    $subject = "hi";
    $message2 = $_POST['message2'];
    
    mail( $to, $subject, $message2, "From: $from\r\nX-Priority: 1 (Highest)" )
or print "Could not send mail";
}




?>


<?php

echo "<br><b>Lesson 15</b></br>";

function create_progress() {
echo "
<style>
#text {
  position: absolute;
  left: 20%;
  margin: 0px 0px 0px -150px;
  font-size: 18px;
  text-align: center;
  width: 300px;
}
  #barbox_a {
  position: absolute;
  left: 20%;
  margin: 0px 0px 0px -160px;
  width: 304px;
  height: 24px;
  background-color: black;
}
.per {
  position: absolute;
  font-size: 18px;
  left: 20%;
  margin: 1px 0px 0px 150px;
  background-color: #FFFFFF;
}

.bar {
  position: absolute;
  left: 20%;
  margin: 0px 0px 0px -158px;
  width: 0px;
  height: 20px;
  background-color: #A3798A;
}

.blank {
  background-color: white;
  width: 300px;
}
</style>
";

  echo "
<div id='text'>Script Progress</div>
<div id='barbox_a'></div>
<div class='bar blank'></div>
<div class='per'>0%</div>
";

  flush();
}

function update_progress($money) {
    
    $percent = ($money / 50000) * 100;
    
    
  echo "<div class='per'>\$$money /
    \$50000</div>\n";
    
  echo "<div class='bar' style='width: ",
    $percent * 3, "px'></div>\n";

  flush();
}

create_progress();
 
 
update_progress(29000);

echo "<br><br><br><br>";


?>



<div>
<form action="learn.php" method="post">
<p>
    Enter width:<br>
    <input type="number" name="width"/></p>
    <p>
    Enter height:<br>
    <input type="number" name="height"/></p>
    <p>
    Select foreground color:<br>
    <select id="color" name="color">
  <option value="red">red</option>
  <option value="orange">orange</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="blue">blue</option>
  <option value="indigo">indigo</option>
  <option value="purple">purple</option>
</select>
    <p>
    Enter background color:<br>
        <select id="color" name="bgcolor">
  <option value="red">red</option>
  <option value="orange">orange</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="blue">blue</option>
  <option value="indigo">indigo</option>
  <option value="purple">purple</option>
</select>
    <p>
    Drop shadow?<br>
    <input type="checkbox" name="drop"/></p>
    
    

<p><input type="submit" value="submit" /></p>
</form>
</div>

<?php
/*Write a script that writes a headline image based on input from a form or query string. Allow user input to determine the canvas size, background and foreground colors, and the presence and offset of a drop shadow.*/

header("Content-type: image/png");

if(isset($_POST['width']) && isset($_POST['height']) && isset($_POST['color']))
{
    $width = $_POST['width'];
    $height = $_POST['height'];
    $color = $_POST['color'];
    $bgcolor = $_POST['bgcolor'];
    $dropshadow = $_POST['dropshadow'];
    
    
    $image = imagecreate( $width, $height );
    
    $fill = imagecolorallocate(0,0,0);
    
    switch ($color) 
    {
        case "red":
            $fill = imagecolorallocate(255,0,0);
            break;
            
        case "orange":
            $fill = imagecolorallocate(255,119,0);
            break;
            
        case "yellow":
            $fill = imagecolorallocate($image,255,239,0);
            break;
            
        case "green":
            $fill = imagecolorallocate($image,0,104,0);
            break;
            
        case "blue":
            $fill = imagecolorallocate($image,0,0,255);
            break;
            
        case "indigo":
            $fill = imagecolorallocate($image,51,0,255);
            break;
            
        case "purple":
            $fill = imagecolorallocate($image,102,0,255);
            break;
    }
    
    
    imagefill ( $image, $width, $height, $fill );
    
    imagepng($image);
}



echo "<b>Lesson 16</b>";
?>

<div>
<form action="learn.php" method="post">
<p>
    Enter Birthday:<br>
    <input type="date" name="bday"/></p>
    <p><input type="submit" value="submit" /></p>
</form>
</div>

<?php

function CountDown($date)
{

    $date = strtotime($date);
	$current = strtotime("now");
	$difference =($date-$current);
	
    $days = floor($difference / (60*60*24));
    $hours = floor(($difference - ($days * (60*60*24)))/(60*60));
    $minutes = floor(($difference - $days*(60*60*24) - $hours*(60*60))/60);
    $seconds = floor(($difference - $days*(60*60*24) - $hours*(60*60) - $minutes*60));
    
	return ("Days: $days Hours:$hours Minutes:$minutes Seconds:$seconds");

}

if(isset($_POST['bday']))
{
    $bday = $_POST['bday'];
    
    echo "Time until $bday:<br>";
    echo CountDown($bday);
}

echo "<br><br><b>Lesson 17</b><br> 
Using an object oriented approach would help make code more readable and would also help avoid copy and pasting code, which helps make debugging and maintaining the code easier. You could probably reuse a lot of the code that interacts with MySQL into its own class.
<br>
You might need to throw exceptions if you are unable to write/read/or connect to the database.";

echo "<br><br><b>Lesson 18</b><br>";

$file = fopen("email.txt","r");
$i=0;

while(!feof($file))
{
    $email = fgets($file);
    
    $pattern =  "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,})$/";
    
    if(preg_match($pattern, $email, $array)){
        print_r($array[0]);
        echo "<br>";
    }

    $i+=1;
    

}

fclose($file);

echo "<br><br><b>Lesson 19</b><br><br>";


if ( isset( $_COOKIE['name']) && isset( $_COOKIE['page_color'])) 
{
    print "<p>Hello again, ";
    print "{$_COOKIE['name']}</p>";
    
    print "<p>Page color is ";
    print "{$_COOKIE['page_color']}</p>";
    
    echo http_build_query($q);
}
else 
{
    print "<p>Hello. This may be your first visit</p>";
}


?>

<div>
<form action="learn.php" method="post">
<p>
    Enter name:<br>
    <input type="text" name="name19"/></p>
    <p>
    Select page color:<br>
    <select id="pgcolor" name="pgcolor">
  <option value="red">red</option>
  <option value="orange">orange</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="blue">blue</option>
  <option value="indigo">indigo</option>
  <option value="purple">purple</option>
</select>
<p><input type="submit" value="submit" /></p>
</form>
</div>

<?php

echo "<br><br><b>Lesson 20</b><br><br>";
    
if(isset($_POST['name19']) && isset($_POST['pgcolor']))
{
    $name20 = $_POST['name19'];
    $pgcolor = $_POST['pgcolor'];
    
    
    $_SESSION['name'] = $name20;
    $_SESSION['pagecolor'] = $pgcolor;
    
    print "Hello, ".$_SESSION['name'];
    print "<br>The page color is set to ".$_SESSION['pgcolor'];
    
}

echo "<br><br><b>Lesson 21</b><br><br>";
echo "<br><br><b>Lesson 22</b><br><br>";

$parser = xml_parser_create();

xml_parser_set_option( $parser, XML_OPTION_CASE_FOLDING, 0 );
xml_set_element_handler( $parser, "start_handler", "end_handler" );
xml_set_character_data_handler( $parser, "char_data" );

$xml_str = file_get_contents( "https://slashdot.org/slashdot.xml", 0 );

xml_parse( $parser, $xml_str )
    or die( format_error( $parser ) );

function start_handler( $parser, $el_name, $attribs ) 
{
    print "$el_name:";
    foreach( $attribs as $at_name=>$at_val ) {
        print "\t$at_name=>\"$at_val";
    }
    print "\t<blockquote><div>";
}

function end_handler( $parser, $el_name ) 
{
    print "\t</div></blockquote>\n";
    //print "$el_name end<br />\n";
}

function char_data( $parser, $data ) 
{
    print "\t<i>".trim($data)."</i>\n";
}

function format_error( $p ) 
{
    $code = xml_get_error_code( $p );
    $str = xml_error_string( $code );
    $line = xml_get_current_line_number ( $p );
    return "XML ERROR ($code): $str at line $line";
}

echo "XSL version";
$xslt = new xsltprocessor();

$xml_doc = new DomDocument();
$xml_doc->loadXML( file_get_contents("https://slashdot.org/slashdot.xml") );

$xsl_doc = new DomDocument();
$xsl_doc->loadXML( file_get_contents("https://slashdot.org/slashdot.xml") );

$xslt->importStylesheet( $xsl_doc );
print $xslt->transformToXml( $xml_doc );


echo "<br><br><b>Lesson 23</b><br><br>

A lot if not all the problems we've worked on through the course seem to be solved by PEAR packages so it's nice learning that a library for PHP exists.
";


echo "<br><br><b>Lesson 23</b><br><br>

Working with databases and parsing through XML and other files would help me a lot with creating websites. Otherwise, I feel like a lot of the other things covered like time and formatting could be handled by JavaScript or even CSS/HTML. 
";


?>


</body>
</html>
