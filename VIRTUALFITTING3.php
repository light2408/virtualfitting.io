<?php
session_start();
$barriga_1 = $_POST['b1'];
if (!isset($_SESSION['valor_b1'])) {
    $_SESSION['valor_b1']=$barriga_1;
}
?>
</br>
<p align="center"><span style="font-family: helvetica"><strong>¿Comó es tu pecho?</span></p>
<form id="form4" name="form4" method="post" action="VIRTUALFITTING4.php">
<table style="width: 795px; height: 363px;" border="0">
<tbody>
<span style="font-family: helvetica">
<td rowspan="2">
  <button type="submit" name="p1" value="p1" ><img src ="p1.png" width="160" height="220"/></br>DELGADO</button>
  </td>
<td rowspan="2">
  <button type="submit" name="p1" value="p2" ><img src="p2.png" width="160" height="220" /></br>PROMEDIO</button>
  </td>
<td rowspan="2">
  <button type="submit" name="p1" value="p3" ><img src="P3.png" width="160" height="220" /></br>AMPLIO</button>
</td>
<td>&nbsp;</td>
<tr>
<td colspan="3"align="center"><br />
  </span>
 </td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<p align="right"><img src="VIRTUALFITTING.jpg" width="170" height="20"></p>
 </form>