<html>
    <head>
        <title>Storing the information</title>
    </head>
    <body>
        <center>
            <h1>display and store information</h1>
            <form method="post">
                Enter your information: <br><br>
                    <textarea name="info" rows=8 cols=50 placeholder="Enter your information"></textarea>
                <br><br>
                <input type="submit" value="submit">
            </form>
        </center>
        <?php
            if(isset($_POST["info"])){
                $info = $_POST["info"];
                echo "<h3>Entered Information:</h3>";
                echo $info;
                $file = fopen("info.txt","w");
                fwrite($file,$info."\n");
                fclose($file);
            }
        ?>
    </body>
</html>