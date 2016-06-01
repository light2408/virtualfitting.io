<?php
session_start();
$espalda_1 = $_POST['e1'];
if (!isset($_SESSION['valor_e1'])) {
    $_SESSION['valor_e1']=$espalda_1;
}

?>
</br>
<p align="center"><span style="font-family: helvetica"><strong>¿Qué edad tienes?</span></p>
<form id="form4" name="form4" method="post" action="VIRTUALFITTING6.php">
<table style="width: 695px; height: 363px;" border="0">
<tbody>
<tr>
</br>
 <span style="font-family: helvetica">
<td height="100" colspan="2" align="center"> 
    
    <p align="center"> <label for="edad">
        <input name="edad" type="text" id="edad" />
      </label>
    </p>
</br>
  <p align="center">La edad nos permite conocer la anatomia de tu cuerpo y la </p><p>forma en la que el peso se distribuye.</p></td>
</tr>
</tr>

<tr>
<td colspan="2"align="center"></span>
<a href="Final.html" target="_self" >
<input type="submit" name="siguiente4" id="siguiente4" value="Siguiente &gt;">
  </td> 
</tbody>
</table>
<p align="right"><img src="VIRTUALFITTING.jpg" width="170" height="20"></p>
</form>