<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <
    
        
   
    <table>

        <tr>
            <th>FirstName</th>
            <th>FamilyName</th>
        </tr>
        <?php
        $FirstName = ["John", "Harry", "Donald", "Cristiano", "Adolf", "Michael"];
         $FamilyName = ["Doe", "Poter", "Trump", "Ronaldo", "Hitler", "Olise"];
        for($i=0;$i<count($FirstName);$i++)
            {

            
        ?>
  
        <tr>
            <td><?= $FirstName[$i]?></td>
            <td><?= $FamilyName[$i]?></td>
        </tr>
       <?php





       }
       ?>
    </table>
</body>

</html>