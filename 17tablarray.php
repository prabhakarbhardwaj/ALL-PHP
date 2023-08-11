<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablarrey</title>
</head> 
<body>
    <table border='1' cellspacing='0' cellpadding='0' width='500px'> -->
<!-- 123123

    $tab = [  [ "bhardwaj", 214, "BA", "Maths"],
                ["Amit" ,215, "BA", "English"],
                ["Robin",216, "BA", "Hindi"],
                ["Rohan" ,217, "BA", "Science"]
            ];

   
    // for($row=0; $row<4; $row++){

    //     for($col=0; $col<4; $col++){
    //         echo $tab[$row][$col]." ";
    //     }
    //     echo "<br>";
    // }   

   
   echo "<table border='2px' cellpadding='5px' cellspacing='0'>;
          <tr>
             <th>name</th>
             <th>name</th>
             <th>name</th>
             <th>name</th>
          </tr>"; -->
    <!-- foreach($tab as list($name,$age,$course,$subject)){
        echo "<tr><td>$name</td>.<td>$age</td>.<td>$course</td>.<td>$subject</td></tr>";
    }
     
    echo "</table>";
    
// ?> -->
<!-- </table>
            </body>
            </html>   -->


    <?php
      
      $data =[
                ["Jyoti",01,"12th","ARTS","pb@gmial.com",9312123123,"pass"],
                ["Dimpal",02,"12th","Sci","da@gmial.com",9322123123,"pass"],
                ["Rohit",03,"12th","Comm","da@gmial.com",9333123123,"pass"],
                ["Ayush",04,"12th","Sci","aa@gmial.com",9311123123,"pass"],
                ["Annu",05,"12th","Sci","aa@gmial.com",9317123123,"pass"],
                ["Rahul",06,"12th","Comm","da@gmial.com",9388123123,"pass"],
                ["Rohan",07,"12th","Comm","da@gmial.com",9388123123,"pass"],
      ];

                echo "<table border='5px' cellpadding='10px' cellspacing='10' bgcolor='thistle' bordercolor='black'>;
                    <tr bgcolor='lightblue'>
                    <th bgcolor='sandybrown'>Name</th>
                    <th bgcolor='sandybrown'>NO.</th>
                    <th bgcolor='sandybrown'>Class</th>
                    <th bgcolor='sandybrown'>Stream</th>
                    <th bgcolor='sandybrown'>Email Add</th>
                    <th bgcolor='sandybrown'>Phoneno</th>
                    <th bgcolor='sandybrown'>Result</th>
                    </tr>";
                foreach ($data as list($name,$rollno,$class,$stream,$email,$Phoneno,$result)){
                        echo "<tr><td>$name</td>.<td>$rollno</td>.<td>$class</td>.<td>$stream</td>.<td>$email</td>.<td>$Phoneno</td>.<td>$result</td>";
                         } 

                echo "</table>"




    ?>
    
