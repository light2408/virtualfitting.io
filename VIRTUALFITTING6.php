<?php
session_start();
$edad = $_POST['edad'];
if (!isset($_SESSION['valor_edad']))
   $_SESSION['valor_edad']=$edad;
?>
</br>
  <form id="form2" name="form2" method="POST" action="VIRTUALFITTING.php">
<table style="width: 660px; height: 304px;" border="0">
<tbody>
<tr>
<td colspan="2" align="center"><p><span style="font-family: helvetica">¡Listo!</span></p>
  <p align="center"><span style="font-family: helvetica">La talla recomendada para ti es:</span></p></td>
</tr>
<tr>

<td colspan="2" align="center">
  <label for="resultado"></label>
</h1>
  <?php





if ($_SESSION['valor_peso'] >= 40 && $_SESSION['valor_peso'] <= 69 ){
    if ($_SESSION['valor_estatura'] >= 158 && $_SESSION['valor_estatura'] <= 168){
     if ($_SESSION['valor_holgura'] == "0"){
      if ($_SESSION['valor_b1'] == "b1"){
      if ($_SESSION['valor_p1'] == "p1"){
      if ($_SESSION['valor_e1'] == "e1"){      
      echo "<h1> CH </h1> ";
         }
        }
      }
    }
  }
}
if ($_SESSION['valor_peso'] >= 51 && $_SESSION['valor_peso'] <= 73 ){
    if ($_SESSION['valor_estatura'] >= 169 && $_SESSION['valor_estatura'] <= 177){
        if ($_SESSION['valor_holgura'] == "1"){
        if ($_SESSION['valor_b1'] == "b2"){
        if ($_SESSION['valor_p1'] == "p2"){
        if ($_SESSION['valor_e1'] == "e2"){
         echo "<h1> M </h1> ";
          }
        }
       }
     }
   }
 }
if ($_SESSION['valor_peso'] >= 73 && $_SESSION['valor_peso'] <= 104 ){
    if ($_SESSION['valor_estatura'] >= 169 && $_SESSION['valor_estatura'] <= 188){
       if ($_SESSION['valor_holgura'] == "2"){
       if ($_SESSION['valor_b1'] == "b3"){
       if ($_SESSION['valor_p1'] == "p3"){
       if ($_SESSION['valor_e1'] == "e3"){     
        echo "<h1> L </h1> ";
    
         }
        }
      }
    }
  }
}
if ($_SESSION['valor_peso'] >= 89 && $_SESSION['valor_peso'] <= 120 ){
    if ($_SESSION['valor_estatura'] >= 178 && $_SESSION['valor_estatura'] <= 198){
       if ($_SESSION['valor_holgura'] == "2"){
       if ($_SESSION['valor_b1'] == "b3"){
       if ($_SESSION['valor_p1'] == "p3"){
       if ($_SESSION['valor_e1'] == "e3"){     
        echo "<h1> XL </h1> ";
    
         }
        }
      }
    }
  }
}
?>
</span></span>
</td>
</tr>

<td width="243" align="center">
  <input type="submit" name="volver a comenzar" id="volver a comenzar" value="     volver a intentar     ">
</td>

</tbody>
</table>
<p align="right"><img src="VIRTUALFITTING.jpg" width="170" height="20"></p>

</form>
<?php
unset($_SESSION['valor_estatura']);
unset($_SESSION['valor_peso']);
unset($_SESSION['valor_holgura']);
unset($_SESSION['valor_b1']);
unset($_SESSION['valor_p1']);
unset($_SESSION['valor_e1']);
unset($_SESSION['valor_edad']);
?>