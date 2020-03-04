<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<thead>
<tr>
    <th></th>
    <?php 
    for($tr = 0; $tr <=12; $tr++) {
        ?>
        <th><?= $tr ?></th>
        <?php 
    }
    ?>
</tr>
</thead>
<tbody>
<?php
for ($i = 0; $i <= 12; $i++)
{ 
    ?>
    <tr><td><?=$i?></td>
    <?php 
    for ($j=0; $j<=12; $j++)
    {
        ?>
        <td><?= $i*$j;?></td>
    <?php
    } 
    ?>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
</body>
</html>