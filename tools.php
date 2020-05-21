<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="CSS/main.css">
    <title>Tools</title>
</head>
<body>

<div id = "container">
    <header id = "header">
        <h1>HardWare Store</h1>
        <p>Being able to provide tools of any kind since 1992</p>
    </header>        
    
    <nav id = "navigation-list">
            <ul >
                <li><a href="">Home</a></li>
                <li><a href="" class = "active">Tools</a></li>
            </ul>
        </nav>

    <main id = "content">
        <h2>Tools for sale</h2>
        <p>All the tools that we have are both affordable and reliable</p>
        <?php    
        //connection to the localhost phpMyAdmin
    $conn = mysqli_connect("localhost","root","","tools");

        //telling what table we want from the local host
        $sql = "SELECT * FROM `tools`";
        $result = mysqli_query($conn,$sql);
        // checks numbers rows from tools tables
        $resultCheck = mysqli_num_rows($result);

        //while loops to display all the data from the table until no data to display
        if($resultCheck > 0 ){
            echo "<table id = 'tools_data'>";
            while ($row = mysqli_fetch_assoc($result)) {
                $ID = $row['ID'];
                $TOOLNAME = $row['TOOLNAME'];
                $BRAND = $row['BRAND'];
                $price = $row['price'];
                $INSTOCK = $row['INSTOCK'];

                echo  "<tr><td>" . $ID . "</td><td>". $TOOLNAME . "</td><td>"
                 . $BRAND. "</td><td>" . $price . "</td><td>"  . $INSTOCK . "</td></tr>";
            }
            echo "</table>";
        }
        ?>

    </main>
    <footer id = "footer">
        <p id = "copyright">Copyright 	&copy; Delrio Ramirez 2020</p>
    </footer>
</div>

</body>
</html>

