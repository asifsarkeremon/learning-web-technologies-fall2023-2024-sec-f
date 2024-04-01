<html>
    <head></head>
    <body>
        <table border="1" cellspacing="0">

            <tr>
                <table>
                    <tr>
                        <td>
                        <?php
                        echo "<br>";
                        
                        for($i=4; $i>0; $i--){
                            for($j=1; $j<$i; $j++){
                                echo $j;
                            }
                            echo "<br>";
                        }
                        ?>
                        </td>

                        <td>
                        <?php
                        $a='A';
                        for($i=0; $i<4; $i++){
                            for($j=0; $j<$i; $j++){
                                echo $a;
                                $a++;
                            }
                            echo "<br>";
                        }
                        ?>

                        </td>
                    </tr>
                </table
            
        </table>
    </body>
</html>