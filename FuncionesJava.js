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
  		function(respuesta) { alert( respuesta ); }
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
    		{ 	//alert(respuesta + ".php");
    			$("#container").load(respuesta + ".php"); 
    		}, 
  		function(respuesta) { alert( respuesta ); }
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
    		{ 	//alert(respuesta + ".php");
    			$("#container").load(respuesta + ".php"); 
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

function DespacharAuto()
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "DespacharAuto"},
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
            {   alert(respuesta);
                //$("#container").load(respuesta + ".php"); 
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
    		{ 	alert(respuesta + ".php");
    			//$("#container").load(respuesta + ".php"); 
    		}, 
  		function(respuesta) { alert( respuesta ); }
		);

}