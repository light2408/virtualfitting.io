<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
</head>
<body>
  <div class="std"><table style="width: 537px; height: 331px;" border="0">
  <tbody>
  <tr>
  <td rowspan="2"><img src="chest.png" width="300" height="500" /></td>
  <td rowspan="2">
  
  <form id="form2" name="form2" method="POST" action="VIRTUALFITTING2.php">
  &nbsp;
  <p><span style="font-family: helvetica;">¿Cuánto mides?</span></div>
  &nbsp;&nbsp;&nbsp;</p>
    <input type="text" name="estatura" id="estatura" />
    <span style="font-family: helvetica;">cm.</span>  <p><span style="font-family: helvetica;">¿Cuál es tu peso?</span></div>
  &nbsp;&nbsp;&nbsp;</p>
  
    <input type="text" name="peso" id="peso" />
   <span style="font-family: helvetica;">Kg.</span>  
   <p><span style="font-family: helvetica;">Prefieres que la prenda te quede...</span></div>
  &nbsp;&nbsp;&nbsp;</p>
  <p><span style="font-family: helvetica;">

    <label>
      <input type="radio" name="holgura" value="0" />
      Justa </label>
    <br />
    <label>
      <input type="radio" name="holgura" value="1" />
      Normal </label>
    <br />
    <label>
      <input type="radio" name="holgura" value="2" />
      Holgada </label>
  </span></div></p>
   
  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<a href="VIRTUALFITTING3.html" target="_self"> <input name="seguiente" type="submit" id="seguiente" value="siguiente" />
 

  
  </form>
 

</td>
  </tr>
  </tbody>

</table>

</div>  
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
                             </script>
                             </body>
<p align="right"><img src="VIRTUALFITTING.jpg" width="170" height="20"></p>

</html>
