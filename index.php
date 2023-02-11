<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Practice</title>
</head>
<body>
<?php 
// $marks = [
//     "mohan" => ["maths" => 85, "sci" => 75, "sst" => 65],
//     "sohan" => ["maths" => 74, "sci" => 78, "sst" => 12],
//     "rohan" => ["maths" => 45, "sci" => 78, "sst" => 41],
// ];
// foreach ($marks as $key => $v1) {
//     echo $key . " ";
//     foreach ($v1 as $v2) {
//         echo $v2 . " ";
//     }
//     echo "<br>";
// } 
?>
<?php
$students =[
    "CSE"=> [
        ["name" => "Himel", "email" => "himel@gmail.com", "result" => "4"],
        ["name" => "zarin", "email" => "zarin@gmail.com", "result" => "4"],
    ],
    "BBA" =>[
        ["name" =>"tamim", "email"=> "tamim@gmail.com", "result" => "4"],
        ["name" =>"kafi", "email"=> "kafi@gmail.com", "result" => "3.9"]
    ]
    ];
echo "<pre>";
print_r($students);

foreach($students as $key => $v1){
    echo "Department : ".PHP_EOL;
    echo $key . " <br> ";
    

    foreach($v1 as $v2){
       
        echo "Name : ". $v2['name']. "Email : " . $v2['email']. "result : ".$v2['result']. "<br>";
    }
}




    // foreach($students as $key => $value){
    //     echo $key;
    //     if($key = "CSE"){
    //         echo $key;
    //         for($i = 0; $i < count($value); $i++){
    //                 echo "Name : ". $course_key[$index]["name"]. PHP_EOL;
    //             }
    //     }
    //     // for($i = 0; $i < 1; $i++){
    //     //     echo $key[$i]. "<br>";
    //     // }
    // }
    // foreach($students as $course => $course_info){
        // if($course == "CSE"){
        //     echo $course ;
        //     echo "<br>";
        //     for($index =0; $index < count($course_key); $index++ ){
        //     //     echo "Name : ". $course_key[$index]["name"]. PHP_EOL;
        //     foreach($course_key as $product_name => $product_value){
        //         echo "Name : ". $course_key[$index]["name"]. PHP_EOL;
        //     }
        //     }
            
            
        // }
    // }






    // foreach ($marks as $key => $v1) {
    //     echo $key . " ";
    //     for($x=0; $x < count($v1); $x++){
    //         foreach ($v1 as $v2) {
    //             echo $v1[$x] . " ";
    //         }
    //     }
    //     echo "<br>";
    // }
// foreach($students as $student_course => $student_info){
//     echo $student_course. " ";
//     for($x = 0; $x < count($students); $x++ ){
//         foreach($student_info as $student_value){
//         echo $student_info[$x];
//     // }
//     }
// }
//     // foreach($student_info as $student_value){
        
//     // }
// }

// echo "<pre>";
// print_r($students);

    

    


?>
<div>
    <!-- <p>Department:   -->
    <?php
    
    // foreach($students as $key => $v1){
        
    //     echo $key . " ";
    //     foreach($v1 as $v2){
    //         echo $v2. " ";
    //     }


        // if($course == "CSE"){
        //     echo $course ;
        //     echo "<br>";
        //     for($index =0; $index < count($course_key); $index++ ){
        //     //     echo "Name : ". $course_key[$index]["name"]. PHP_EOL;
        //     foreach($course_key as $product_name => $product_value){
        //         echo "Name : ". $course_key[$index]["name"]."Email : ". $product_key[$index]["email"]. PHP_EOL;
        //     }
        //     }
            
            
        // }
        
    // }
    // foreach($student["BBA"] as $key  => $value){
    //     echo $key;
    // }

    ?>
    </p>

    
</div>

<div>
    <!-- <br>
    <br>
    <br>
    <p>Department:   -->
    <?php
    
    // foreach($students as $k => $v){
        
    //     if($k == "BBA"){
    //         echo $k ;
            
    //     }
    // }
    // foreach($student["BBA"] as $key  => $value){
    //     echo $key;
    // }

    ?>
    <!-- </p> -->

    
</div>
    
</body>
</html>