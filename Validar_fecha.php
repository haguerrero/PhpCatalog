/************************************** funcion Finalizada **************************************/
	
	
	/* Validacion del Campo de fecha de caducidad. Hugo Guerrero. */
	$datecadu = GETPOST("eatby");
	
	if ($datecadu == 'null') {
	 $algo = 1;
	}
	
	$valores = explode('/', $datecadu); // Captura de campo para realizar la validacion
	
	if (count($valores) != 3 || !checkdate($valores[1], $valores[0], ($valores[2] != 'null')) || $valores[2]<2019 ) {
	 $algo = 2;
	}
	
	/*Fin de validacion del campo de fecha de caducidad.*/
		
		
/************************************** funcion Finalizada **************************************/
	
	
	/* Validacion del Campo de fecha de caducidad. Hugo Guerrero. */
	$datecadu = GETPOST("eatby");
	
	if ($datecadu == 'null') {
	 setEventMessages($langs->trans("ErrorFieldRequired",
	  $langs->transnoentitiesnoconv("Fecha de Caducidad")), null, 'errors');
	 $error++;
	 $action='correction';
	 
	}
	
	$valores = explode('/', $datecadu);
	
	
	
	if (count($valores) != 3 || !checkdate($valores[1], $valores[0], ($valores[2] != 'null')) || $valores[2]<2019 ) {
	 setEventMessages($langs->trans("ErrorFieldRequired",
	  $langs->transnoentitiesnoconv("Fecha de Caducidad")), null, 'errors');
	 $error++;
	 $action='correction';
	}
	
	/*Fin de validacion del campo de fecha de caducidad.*/
