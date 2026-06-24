<html>
    <head>
        <title>Prime number checker</title>
    </head>
    <body>
        <center>
            <h1>Prime Number Checker</h1><br><br>
            <form method="post">
                Enter a number:
                <input type="text" name = "num"><br><br>
                <input type="submit" value="check">
            </form>
            <?php
                if(isset($_POST['num'])){
                    $n = $_POST['num'];
                    if ($n < 2){
                        echo "the number must be greater than 2";
                    }
                    else{
                        $flag = 1;
                        for($i = 2;$i <= $n/2; $i++){
                            if($n % $i == 0){
                                $flag = 0;
                                break;
                            }
                        }
                        if($flag == 0){
                            echo "The given number is not Prime number";
                        }
                        else{
                            echo "The Given number is a Prime number";
                        }
                    }
                }
            ?>
        </center>
    </body>
</html>