<html>
    <head>
        <title>Login authentication</title>
    </head>
    <body>
        <center>
            <h1>login</h1> <br><br>
            <form method="post">
                Username:
                <input type="text" name="uname">
                <br><br>
                Password:
                <input type="password" name="pwd">
                <br><br>
                <input type="submit" value="submit">
                <input type="reset" value="reset">
            </form>
        </center>
        <?php
            if(isset($_POST['uname'])){
                $uname = $_POST['uname'];
                $pwd = $_POST['pwd'];

                $file = fopen("user.txt","r");
                $flag = 0;

                while(($line = fgets($file)) != false){
                    $data = explode(',',trim($line));
                    if($data[0] == $uname && $data[1] == $pwd){
                        $flag = 1;
                        break;
                    }
                }
                fclose($file);
                if($flag == 0){
                    echo "<script>alert('Login failed!')</script>";
                }
                else{
                    echo "<script>alert('Login Successfull!')</script>";
                }
            }
        ?>
    </body>
</html>