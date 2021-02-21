<?php

include ('db_connection.php');

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

$dataSource = [];
while($student = mysqli_fetch_assoc($result))
{
  //  echo($student);
    $dataSource[] = $student;
}

print json_encode($dataSource);


mysqli_close($conn);

















// echo('{"students":
//     [ 
//         {
//             "id": "php",
//             "name": "Yousef Samir Allam",
//             "faculty":"Faculty of Computers and Information Technology",
//             "image_path":"20132627.png"
//         },
//         {
//             "id": "20190000",
//             "name": "xyz",
//             "faculty":"Faculty 2",
//             "image_path":"20132627.png"
//         },
//         {
//             "id": "20181877",
//             "name": "Abdalla Ahmed Elsayed Ahmed",
//             "faculty":"Faculty of Computers and Information Technology",
//             "image_path":"20132627.png"
//         }
//     ]

// }');


?>