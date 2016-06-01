<?php
session_start();
$pecho_1 = $_POST['p1'];
if (!isset($_SESSION['valor_p1'])) {
    $_SESSION['valor_p1']=$pecho_1;
}

?>
</br>
<p align="center"><span style="font-family: helvetica"><strong>¿Comó es tu espalda?</span></p>
<form id="form4" name="form4" method="post" action="VIRTUALFITTING5.php">
<table style="width: 795px; height: 363px;" border="0">
<tbody>
<tr>
<span style="font-family: helvetica">
<td rowspan="2">
  <button type="submit" name="e1" value="e1"><img src="e1.png" width="160" height="250"/></br>DELGADA</button>
  </td>
<td rowspan="2">
  <button type="submit" name="e1" value="e2"><img src="e2.png" widht="180" height="250" /></br>PROMEDIO</button>
  </td>
<td rowspan="2">
  <button type="submit" name="e1" value="e3"><img src="e3.png" widht="180" height="250"/></br>AMPLIA</button>
  
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
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