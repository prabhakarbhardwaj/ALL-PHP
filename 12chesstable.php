<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>

    <table width="500px" cellspacing="0px" cellpadding="0px" border="20px">

    
    
    <?php
  

for ($row=1; $row<=8; $row++){
    // echo $row;
    echo "<tr>";
    for($col=1;$col<=8; $col++){
        $total=$row+$col;
        if($total%2==0){
            echo "<td bgcolor='black' height='50px'></td>";
        }else{
            echo "<td bgcolor='white' height='50px'></td>";

        }
        


    }
    echo"</tr>";
}





?>


</table>

    
<!-- //   for($row=1;$row<=8;$row++){
          
          //     echo "<tr>";
                  
          //         for($col=1; $col<=8; $col++){
                       
          //             $total = $row+$col;
          //             if($total%2==0){
          //                 echo "<td height='30px' bgcolor='black'></td>";
          //             }else{
          //                 echo "<td height='30px' bgcolor='white'></td>";
          //             }
      
      
          //         }
      
       
          //     echo "</tr>";
      
          //   } -->
</body>
</html>