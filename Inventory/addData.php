<?php


?>

<html>
<head>
    <link rel="stylesheet" href="style2.css">
</head>
    <body>

    <div class="header">
        <h1>Adding Invetory</h1>
        <p>Estampealo</p>
    </div>

        <form action="insert.php" method="post">
            <label for="size" class="sizeLabel">Choose a Size</label>
            <select id="sizes" name="sizes[]">
                <option label="XSmall">XSmall</option>
                <option label="Small">Small</option>
                <option label="Medium">Medium</option>
                <option label="Large">Large</option>
                <option label="Xlarge">XLarge</option>
                <option label="XXlarge">XXLarge</option>
                <option label="XXXlarge">XXXLarge</option>
            </select>


            <label for="color" class="colorLabel">Choose a color</label>
            <select id="colors" name="colors[]">
                <option label="White">White</option>
                <option label="Black">Black</option>
                <option label="Red">Red</option>
                <option label="Yellow">Yellow</option>
                <option label="Green">Green</option>
                <option label="Orange">Orange</option>
            </select>

            <label for="cantidad">Quantatiy(1-50):</label>
            <input
                type="number"
                id="cantidad"
                name="cantidad"
                min="1"
                max="50"
                placeholder="Enter Amount"
                required
            />

            <input
                type="submit"
                name="submit"
                id="submit"
                onclick="insert.php"
                value="Add Item"
            />
        </form>
    </body>
</html>
