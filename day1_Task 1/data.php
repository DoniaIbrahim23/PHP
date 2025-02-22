<?php 


if(($_POST['gender']) == 'male'){

    echo "Thanks Mr ".$_POST['fname']." ".$_POST['lname'];
} else {
    echo "Thanks Miss ".$_POST['fname']." ".$_POST['lname'];
}
echo "<br>";

echo "please review your information";

echo "<br>";

echo "Name: ".$_POST['fname']." ".$_POST['lname'];
echo "<br>";
echo "Address: ".$_POST['address'];
echo "<br>";
echo "Your Skills is: ";

if(isset($_POST['skill1'])){echo $_POST['skill1']."<br>";}
if(isset($_POST['skill2'])){echo $_POST['skill2']."<br>";}
if(isset($_POST['skill3'])){echo $_POST['skill3']."<br>";}
if(isset($_POST['skill4'])){echo $_POST['skill4']."<br>";}
echo "<br>";

echo "Department: ".$_POST['department'];

?>