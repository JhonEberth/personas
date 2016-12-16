<html>
	<head>
	</head>
	<body>
		<?
			$conexion = new mysqli("mysql.hostinger.co","u570417991_cuti","123456",'u570417991_cuti');
			if($conexion->conect_errno){
				echo "Error al connectar a la BBDD".
					$conexion->connect_errno.",".
					$conexion->connect_error;
				exit();
			}else{
				$conexion->set_charset("utf8");
			}
		?>
	</body>
</html>