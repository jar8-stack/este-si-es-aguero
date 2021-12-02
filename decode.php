
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

sv ='{"metodo":"getUser","usuario": {"idUsuario":"1"}}';
		$.ajax({
					type: "POST",
					url: "http://3.320.0.33/webservices.php",
					data: "solicitud="+ sv, 
					success: function(datos){
					console.log(datos);
				
				  }
			});

</script>
</head>
    
</html>
