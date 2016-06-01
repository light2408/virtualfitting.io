<?php
session_start();
$peso = $_POST['peso'];
$estatura = $_POST['estatura'];
$holgura = $_POST['holgura'];
if (!isset($_SESSION['valor_peso'])) {
    $_SESSION['valor_peso']=$peso;
}
if (!isset($_SESSION['valor_estatura'])) {
    $_SESSION['valor_estatura']=$estatura;
}
if (!isset($_SESSION['valor_holgura'])) {
    $_SESSION['valor_holgura']=$holgura;
}
?>
</br>
<p align="center"><span style="font-family: helvetica;"><strong>¿Comó es tu barriga?</span></p>
<form id="form4" name="form4" method="post" action="VIRTUALFITTING3.php">		
<table style="width: 795px; height: 363px;" border="0">
<tbody>
 
<tr>
<span style="font-family: helvetica;">
<td rowspan="2">
  <button type="submit" name="b1" value="b1"><img src="b1.png" width="160" height="230"></br>PAREJA</button>
  </td>
<td rowspan="2">
  <button type="submit" name="b1" value="b2"><img src="b2.png" width="140" height="230"></br>MEDIANAMENTE ABULTADA</button>
  </td>
<td rowspan="2">
  <button type="submit" name="b1" value="b3"><img src="b3.png" width="160" height="230"></br>ABULTADA</button>
 
 </span>   
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="3"align="center"><br />

   </td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<p align="right"><img src="VIRTUALFITTING.jpg" width="170" height="20"></p>

</form>