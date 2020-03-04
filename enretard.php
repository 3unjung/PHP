<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta id="="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>En retard</title>
</head>
<body>
<div>
    <h3>Fonction calculatrice : </h3>

    <form name="calculatrice" method="POST" action="./maispastrop.php">

    <p>Tapez la valeur de x : <input name ="x" id="x" type="text" ></p>
    <p>Tapez la valeur de y : <input name="y" id="y" type="text"></p>


    <select name="choix" id="choix">
        <option value="addition"> + </option>
        <option value="soustration"> - </option>
        <option value="multiplication"> * </option>
        <option value="division"> / </option>
    </select>

    <input type="submit" value="calculer">
    <input type="reset" value="annuler"><br>
    </form>
</div>

    
</body>
</html>