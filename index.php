<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="CSS/main.css">        
    <?php
        include_once 'Database/database.php';
    ?>
    <title>Tools</title>
</head>
<body>
    <header id = "header">
        <h1>HardWare Store</h1>
        <p>Being able to provide tools of any kind since 1992</p>
    </header>        
    
    <nav id = "navigation-list">
            <ul >
                <li><a href="">Home</a></li>
                <li><a href="" class = "active">Tools</a></li>
                <li><a href="">stuff</a></li>
            </ul>
        </nav>

    <main id = "content">
        <h2>Tools for sale</h2>
        <p>All the tools that we have are both affordable and reliable</p>
        <?php
        $sql = "SELECT * from tools;";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        echo '<th>ID</th> <th>Tool Name</th> <th> Brand</th> <th> Price</th> <th>IN Stock</th>';

        if($resultCheck > 0 ){
            while ($row = mysqli_fetch_assoc($result)) {
                $ID = $row['ID'];
                $TOOLNAME = $row['TOOLNAME'];
                $BRAND = $row['BRAND'];
                $price = $row['price'];
                $INSTOCK = $row['INSTOCK'];

                echo '<tr>
                <td>'.$ID.'</td>
                <td>'.$TOOLNAME.'</td>
                <td>'.$BRAND.'</td>
                <td>'.$price.'</td>
                <td>'.$INSTOCK.'</td>
                </tr>
                <br>
                ';

            }
        }
        ?>

    </main>
    <footer id = "footer">
        <p id = "copyright"></p>
    </footer>
</body>
</html>

