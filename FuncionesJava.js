
function AutosEstacionados()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "AutosEstacionados"},
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{ 	//alert(respuesta + ".php");
                    $("#container").load(respuesta + ".php"); 
    		}, 
  		function(respuesta) { alert( "No tiene permisos para ver lo facturado" ); }
		);

}

function TodosAutosEstacionados()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "TodosAutosEstacionados"},
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta + ".php");
                 $("#container").load(respuesta + ".php"); 
            }, 
        function(respuesta) { alert( "No tiene permisos para ver lo facturado" ); }
        );

}



function ImportesFacturados()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ImportesFacturados"},
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{ 	//alert(respuesta);
                //if(respuesta != "")
    		    $("#container").load(respuesta + ".php"); 
    		}, 
        function(respuesta) { alert( "No tiene permisos para ver lo facturado" ); }
		);

}

function Usuarios()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "Usuarios"},
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{ 	//alert(respuesta + ".php");
    			$("#container").load(respuesta + ".php"); 
    		}, 
  		function(respuesta) { alert( respuesta ); }
		);

}

function LogIn()
{

  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "LogIn"},
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{ 	//alert(respuesta + ".php");
    			$("#container").load(respuesta + ".php"); 
    		}, 
  		function(respuesta) { alert( respuesta ); }
		);

}

function LogOut()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "LogOut"},
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{ 	alert("Bye!");
    			$("#container").load("frmLogIn.php"); 
    		}, 
  		function(respuesta) { alert( respuesta ); }
		);

}

function IngresarAuto()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "IngresarAuto"},
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{ 	//alert(respuesta + ".php");
    			$("#container").load(respuesta + ".php"); 
    		}, 
  		function(respuesta) { alert( respuesta ); }
		);

}

function Despachar(patente)
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "DespacharAuto" , patente: patente},
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta + ".php");
                alert(respuesta);
                $("#container").load("frmAutosEstacionados.php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );

}


// function DespacharAuto()
// {
//   var pagina = "nexo.php";

//     $.ajax({
//         type: 'POST',
//         url: pagina,
//         dataType: "text",
//         data: {queHago: "DespacharAuto"},
//         async: true
//         })
//     	.then( 
//     		function(respuesta) 
//     		{ 	alert(respuesta + ".php");
//     			//$("#container").load(respuesta + ".php"); 
//     		}, 
//   		function(respuesta) { alert( respuesta ); }
// 		);

// }
function AgregarAuto()
{
  var pagina = "nexo.php";
  var patente = $("#patente").val();
  var marca = $("#marca").val();
  var color = $("#color").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "CargarAuto" , patente: patente, marca:marca, color: color },
        async: true
        })
        .then(
            function(respuesta) 
            {   //alert(respuesta);
                //$("#container").load(respuesta + ".php");
                $("#container").load("frmAutosEstacionados.php"); 
                //$("#container").load("frmIngresarAuto.php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );
}

function DescargarFacturación( facturas )
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "DownloadFacturas" , facturas : facturas },
        async: true
        })
        .then(
            function(respuesta) 
            {   
                //alert(respuesta);
            }, 
        function(respuesta) { alert( respuesta ); }
        );

}

function Ingresar()
{
  var pagina = "nexo.php";
  var user = $("#user").val();
  var pass = $("#pass").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "Ingresar" , user: user, pass:pass },
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{ 	//alert("Bienvenido!!");
    			alert(respuesta + "pr");
                //(respuesta + ".php").load; 
    		}, 
  		function(respuesta) { alert( "Error de logueo" ); }
		);
}

function IngresarAd()
{
  var pagina = "nexo.php";
  var user = $("#user").val();
  var pass = $("#pass").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "IngresarAd" , user: user, pass:pass },
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta + ".php");
                //$("#container").load(respuesta + ".php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );
}


function IngresarUs()
{
  var pagina = "nexo.php";
  var user = $("#user").val();
  var pass = $("#pass").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "IngresarUs" , user: user, pass:pass },
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta + ".php");
                //$("#container").load(respuesta + ".php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );
}

function ListarUsuarios()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ListarUsuarios"  },
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta);
                $("#container").load(respuesta + ".php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );    
}

function BorrarUsuario(user)
{//alert("borrar usuario");
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "BorrarUsuario" , user:user },
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta);
                $("#container").load(respuesta + ".php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );    

}

function CambiarContraseña(user)
{
  var pagina = "nexo.php";

    // $.ajax({
    //     type: 'POST',
    //     url: pagina,
    //     dataType: "text",
    //     data: {queHago: "ModificarUsuario" ,user:user },
    //     async: true
    //     })
    //     .then(
    //         function(respuesta) 
    //         {   //alert(respuesta);
    //             $("#container").load(respuesta + ".php"); 
    //         }, 
    //     function(respuesta) { alert( respuesta ); }
    //     );    
    $("#container").load("frmModificarUSuario");

    //Traigo los datos del usuario
    

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ModificarUsuario" ,user:user },
        async: true
        })
        .then(
            function(respuesta) 
            {   alert(respuesta);
                //$("#container").load(respuesta + ".php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );    



}

function AgregarUsuarioSQL()
{
  var pagina = "nexo.php";
  var user = $("#user").val();
  var pass = $("#pass").val();
  var tipo = $("#tipo").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "AgregarUsuarioSQL" , user:user , pass:pass , tipo:tipo},
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta);
                $("#container").load("frmUsuarios.php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );    

}

function ModificarUsuarioSQL(user)
{

  var pagina = "nexo.php";
  var pass = $("#pass").val();
  var tipo = $("#tipo").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ModificarUsuarioSQL" , user:user , pass:pass , tipo:tipo},
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta);
                $("#container").load("frmUsuarios.php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );    

}

function AgregarUsuario()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "AgregarUsuario"  },
        async: true
        })
        .then( 
            function(respuesta) 
            {   //alert(respuesta);
                $("#container").load(respuesta + ".php"); 
            }, 
        function(respuesta) { alert( respuesta ); }
        );        
}

function myFunction() {
    //var x = document.getElementById("patente").value;
    //document.getElementById("marca").value = x;
   
  var pagina = "nexo.php";
  var patente = $("#patente").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ChequearPatenteMarca" , patente:patente },
        async: true
        })
      .then( 
        function(respuesta) 
        {   //alert(
            document.getElementById("marca").value = respuesta;
            
        }, 
        function(respuesta) {  }
    );

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ChequearPatenteColor" , patente:patente },
        async: true
        })
      .then( 
        function(respuesta) 
        {   //alert(
            document.getElementById("color").value = respuesta;
            
        }, 
        function(respuesta) {  }
    );

}