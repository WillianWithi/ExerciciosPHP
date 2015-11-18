
<?php
    
     if(isset($_POST['num'])){
        $v = array('1' => $_POST['num'],'2' => $_POST['num2'],'3' => $_POST['num3'] );
       
       
        // ordenar vetor
        $aux= 0;

        for($i=1;$i<4;$i++){
           for($j=1;$j<4;$j++){
             
             if($v[$i] < $v[$j]){
                $aux = $v[$i];
                $v[$i]= $v[$j];
                $v[$j]= $aux;
             }
           }
        }
        
        
        $menor = $v[1]; 
        $intermediario = $v[2];
        $maior = $v[3];

        echo 'Menor: '.$menor.'<br>';
        echo 'intermediario: '.$intermediario.'<br>';
        echo 'Maior: '. $maior;

     }else{



?>


<html>
     <head>
 		<title>Maior</title>
     </head>
     
     <body>
     	<form method="post" action="">
     	  NUM01 <input type="text" name="num"   /> <br>	
     	  NUM02 <input type="text" name="num2"  />	<br>
     	  NUM03 <input type="text" name="num3"  /> <br>
     	        <input type="submit" valeu="Enviar">
     	</form>	
     </body>
</html>

<?php
    }
?>