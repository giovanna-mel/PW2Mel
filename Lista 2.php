<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex 1</title>
    </head>
    <body>
        <?php
            $numinicial= 20;
            echo $numinicial. "  ";
            function primos($primo){
                $cont=0;
                for ($i=1; $i<= $primo; $i++){
                    if ($primo % $i ==0){
                        $cont++;
                    }
                }
                if ($cont==2){
                    echo "Número primo";
                }else{
                    echo "Número Composto";
                }
            }
            primos($numinicial);
        ?>
    </body>
</html>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex 2</title>
    </head>
    <body>
        <?php
			echo "<h1>Exercício - 1</h1>";
			$numero_inicial = 17;
			echo $numero_inicial."<br>";
			function numero_primo ($primo) :bool{
				$cont =0;
				for ($i=1 ; $i <= $primo ; $i++) { 
					if ($primo % $i == 0) {
							$cont++;
						}	
				}
				if ($cont == 2){
					return true;
				}else{
					return false;
				}
			}
			if (numero_primo($numero_inicial)) {
				echo "Número primo";
			}else{
				echo "Número composto";
			}
			echo "<br><br><br><h1>Exercício - 2</h1>";
			for ($j=1; $j <= 100 ; $j++) { 
				if (numero_primo($j)) {
					echo $j." ";
				}
			}
			echo "<br><br><br><h1>Exercício - 3</h1>";
		?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex 3</title>
    </head>
    <body>
        
            <?php
            $color = array(
                "Rosa",
                "Preto",
                "Branco",
            );
            
            function lista_de_cores ($vetor){ 
                for ($i=0; $i < count($vetor) ; $i++){
                 
            ?>

            <li>
                <?php 
                    echo $vetor[$i]; 
                ?>
            </li>
            <?php 
                }
                }
                
                lista_de_cores($color);
            ?>            
    </body>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

