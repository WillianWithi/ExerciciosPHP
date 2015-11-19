/*
  @utor: willian withi
*/
<?php
   if(isset($_POST['num0'])){
   	  echo 'Resultado <br>';
      for ($i=0; $i < 10; $i++) { 
        $vt[$i]= $_POST['num'.$i] ;
        $vt2[$i]= $_POST['num2'.$i];
        $vt3[$i]= $_POST['operacao'.$i];
        if($vt3[$i]==1){
        	$resul= $vt[$i]+$vt2[$i];
        	 
        }elseif($vt3[$i]==2){
        	$resul= $vt[$i]-$vt2[$i];
        	
        }elseif ($vt3[$i]==3) {
            $resul= ($vt[$i] * $vt2[$i]);
             
        }elseif ($vt3[$i]==4) {
            $resul= $vt[$i]/$vt2[$i];
           
        }

         $vt4[$i]= $resul; 
         echo '<input type="text" value='.$vt4[$i].'><br>';
      }
      
      
     
       
      
   }else{

?>
<html>
<head>
	<title>vetores</title>
</head>
<body>
    <div>
       Somando  Vetores
    </div><br>
    <form method="POST" action="">
	    <table>
	    	<tr>
		       <td>
					<?php
						for($i =0;$i<10;$i++){
						$rando = rand(1,100);
					?>
	  					<input type="text" name="num<?php echo $i;?>" placeholder="Numero 1" value="<?php echo $rando;?>"><br>
      				<?php	
						}
					?>
		       	</td>
                
                <td>
                	<?php
						for($i =0;$i<10;$i++){
							
					?>
	  						<select name="operacao<?php echo $i;?>" >
								<option value="1">+</option>
								<option value="2">-</option>
								<option value="3">x</option>
								<option value="4">/</option>
							</select><br> 
      				<?php	
						}
					?>
                </td>

                <td>
					<?php
						for($i =0;$i<10;$i++){
							$rando = rand(1,100);
					?>
	  					<input type="text" name="num2<?php echo $i;?>" placeholder="Numero 2" value="<?php echo $rando;?>"><br>
      				<?php	
						}
					?>
                </td>
              </tr>

        </table>		
		<input type="submit" value="Calcular" />
		
      
    </form>
</body>
</html>
<?php
	}
?>