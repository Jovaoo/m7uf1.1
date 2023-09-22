<?php
     $n = 10;
     $m = 10;
     $stack = array("naranja", "plátano");
     $barcos = array(
        array("tipo" => "fragata", "longitud" => 1),
        array("tipo" => "submarino", "longitud" => 2),
        array("tipo" => "destructor", "longitud" => 3),
        array("tipo" => "portaaviones", "longitud" => 4)
     ); 
    //echo 'Hola como estas <br> 2';
    //echo '<input type="text" name="nombre"><br> <input type="button" >';
    ?>
    <div style='display:flex;justify-content:center;align-items:center;'>
    <table style='border-collapse: collapse'>
            <?php
            /*
                for ($i=1; $i<=$n; $i++){
                    echo "\t\t
                        <td style='border: 1px solid #000;width:20px;text-align:center;'>$i</td>";
                }
                echo '<tr>';
                for ($i=1,$a='A'; $i<=$n; $i++,$a++){
                    echo "\t\t
                        <td style='border: 1px solid #000;width:20px;text-align:center;'>$a</td>";                 
                }
            */
            
            /*for ($i=0; $i<$n; $i++){
                echo '<tr>';
                // echo "\t\t<td style='border: 1px solid #000;width:20px;text-align:center;'>$i</td>";
                for ($a=0; $a<$m; $a++){
                    $s = $i+$a;
                    echo "\t\t<td style='border: 1px solid #000;width:50px;height:50px;text-align:center;'>$s</td>\n";
                }
                
                echo '</tr>';
            }           */
            $numero_aleatorio = rand(1, 2); /* 1 = horizontal || 2 = vertical */

            for ($a="A",$b=0; $b<$m; $b++){
                echo $numero_aleatorio;

                echo '<tr>';
                for ($i=0; $i<$n; $i++){
                    $var = "$i";
                    
                    if ($i == 0 && $b == 0) {   
                        echo "\t\t<td style='border: 3px solid #000;width:50px;height:50px;text-align:center;'> </td>\n";
                    } elseif ($i == 0) {
                        echo "\t\t<td style='border: 3px solid blue;width:50px;height:50px;text-align:center;'>$a</td>\n";
                        $a++;
                    } elseif ($b == 0) {
                        echo "\t\t<td style='border: 3px solid red;width:50px;height:50px;text-align:center;'>$var</td>\n";
                    } else {
                        if ($numero_aleatorio==1) { # Horizontal
                            if ($b== 1 && $i == 1 || $b == 1 && $i == 2){
                                echo "\t\t<td style='border: 1px solid #4f4f4f;width:50px;height:50px;text-align:center;'>X</td>\n";
                        } else {
                            echo "\t\t<td style='border: 1px solid #4f4f4f;width:50px;height:50px;text-align:center;'></td>\n";
                        }} elseif ($numero_aleatorio ==2 ) { # Vertical
                            if ($b== 1 && $i == 1 || $b == 2 && $i == 1) {
                                echo "\t\t<td style='border: 1px solid #4f4f4f;width:50px;height:50px;text-align:center;'>X</td>\n";
                            }else {
                                echo "\t\t<td style='border: 1px solid #4f4f4f;width:50px;height:50px;text-align:center;'></td>\n";
                        }}

                    }
                    


                }
                echo '</tr>';
            }

            ?>
           
    </table>
    </div>  
    <br>
    <br>

