<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Teste de Fundunesp</title>
    <style>
        
        .retangulo-second{margin-top:-7px;width: 30px;height: 35px;border:solid 1px #000;}
        .retangulo-first{padding:7px;margin-top:-7px;border:solid 1px #000;width: 30px;height: 35px;}
        /*.retangulo-first:first-child{background: #000 !important;}*/
       
    </style>
</head>
<body>
    <?php 
        if(!empty($_POST)){
            $number = $_POST['quant-triangulo'];
            
        }

    ?>
    <div class="container">
        <form action="" method="POST">
            <label for="quant-triangulo">Insira a quantidade de linha para o triângulo</label><br>
            <input type="text" name="quant-triangulo">
            <input type="submit" name="btn-triangulo" value="Criar Triângulo"> 
        </form>
            <br><br>
        <?php
         echo "<input type='submit' name='btn-triangulo' value='1' style='padding:7px;border:none;background: #000;color:#FFF;margin-bottom:7px;width:30px;height:35px;'><br> ";
        
         
        
        $i = 2;
        while($i <= $number){
                    $x = 01;
                    while($x < $i -1){
                        echo"<input type='submit' class='retangulo-first' style='width: 30px;height: 35px'; name='btn-triangulo' value=''>";
                        ++$x; 
                       
                    } 
                  
                    echo"<input type='submit' class='retangulo-first' name='btn-triangulo' style='width: 30px;height: 35px;background:#000;display:inline-block'; value=''>";    
                
            echo "<input type='submit' class='retangulo-second' name='btn-triangulo' value='$i' style='padding-bottom:5px;float:left;background:#FFF;color:#000;'><br>";
          ++$i;
        }
       

        ?>
    </div>
</body>
</html>