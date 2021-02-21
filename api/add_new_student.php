<?php
include ('db_connection.php');


if(isset($_POST['add']))
{
$full_name = $_POST['txtFullName'];
$birth_date = $_POST['txtBirthDate'];
$gender = $_POST['gender'];
$email = $_POST['txtEmail'];
$phone = $_POST['txtPhone'];
$address = $_POST['txtAddress'];
$faculty = $_POST['faculty'];
$univ_id = 20132627;
$sql = "INSERT INTO student_info (student_info_name,sutdent_info_birthdate,sutdent_info_gender,sutdent_info_email,sutdent_info_phone,sutdent_info_address,sutdent_info_faculty,sutdent_info_univ_id)
        VALUES ('$full_name','$birth_date','$gender','$email','$phone','$address','$faculty',$univ_id) ";

if (mysqli_query($conn,$sql))
{
    echo("Student Inserted.");

}else{
    echo "error".mysqli_error($conn);
}

mysqli_close($conn);

echo($full_name);
echo($birth_date);
echo($gender);
echo($email);
echo($phone);
echo($address);
echo($faculty);
}
else{
    echo("this is not a form visit");
}

?>