<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php foreach($students as $student){
             if($student->attendence){

                echo "<strike>". $student->present ."</strike>";
             }
    
             else {

                 echo $student->present;
             }
    
            
    } ?>

    
</body>
</html>