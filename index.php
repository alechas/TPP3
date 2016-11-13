<!DOCTYPE html>
<html>
<head>
<title>Estacionamiento</title>
<meta charset="utf-8">
<!-- Google Fonts  -->
<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<!-- CSS Files  -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<!-- Contact Form --> 
<link href="contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href="contact-form/css/uniform.css" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="js/jquery.tools.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="FuncionesJava.js"></script>
</head>
<body>
<div class="header">
  <!-- Main Menu -->
  <ol id="menu">
    <li class="active_menu_item"><a >Gestión Autos</a>
      <!-- sub menu -->
      <ol>
        <input type="button" onclick="IngresarAuto()" name= "ingresar" id = "ingresar" value = "       Ingresar               ">
        <br>
      </ol>
    </li>
    <!-- END sub menu -->
    <li><a >Grillas</a>
      <!-- sub menu -->
      <ol>
        <input type="button" onclick="AutosEstacionados()" name= "autos_estacionados" id = "autos_estacionados" value = "   Autos        ">
        <br>
        <input type="button" onclick="ImportesFacturados()" name= "importes_facturados" id = "importes_facturados" value = "   Importes    ">
        <br>
      </ol>
    </li>
    <!-- END sub menu -->
    <li><a >Acceso</a>
        <ol>
          <input type="button" onclick="LogIn()" name= "login" id = "login" value = "   LogIn        ">
          <br>
          <input type="button" onclick="LogOut()" name= "logOut" id = "LogOut" value = "   LogOut      ">
        </ol>
</li>
    <!-- END sub menu -->
  </ol>
</div>
<!-- END header -->
<div id="container">
  <!-- tab panes -->
</div>
<!-- END footer -->
<script>
function myFunction() {
    // var x = document.getElementById("patente").value;
    // document.getElementById("marca").value = x;
// var connection = new ActiveXObject("ADODB.Connection") ;

// var connectionstring="Data Source=<server>;Initial Catalog=<catalog>;User ID=<user>;Password=<password>;Provider=SQLOLEDB";

// connection.Open(connectionstring);
// var rs = new ActiveXObject("ADODB.Recordset");

// rs.Open("SELECT * FROM table", connection);
// rs.MoveFirst
// while(!rs.eof)
// {
//    document.write(rs.fields(1));
//    rs.movenext;
// }

// rs.close;
// connection.close; 
}
</script>
</body>
</html>