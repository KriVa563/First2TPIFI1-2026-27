<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>

        <tr>
            <th>N°</th>
            <th>Name</th>
            <th>Height</th>
        </tr>
        <?php
        $height=["Valerii"=>180,
        "Anastasia"=>177,
        "Thomas"=>175,
        "Violetta"=>165];
        $N°=1;
        if(isset($height["Valerii"]));
        print($height["Valerii"]);
       foreach($height as $key=>$value){

       
        
  ?>
        <tr>
        <td><?= $N°?></td>
        <td><?= $key?></td>
        <td><?= $value?></tb>
        </tr>
       <?php
$N°++;
}

       ?>
    </table>
</body>

</html>