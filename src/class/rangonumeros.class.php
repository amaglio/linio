<?php 

namespace RangoNumeros;

final Class RangoNumeros{
 
	private $numeros = array(); 

	public function __construct( $numero_tres, $numero_cinco )
	{		
			$numero['etiqueta'] =  $numero_tres->get_etiqueta();
			$numero['array'] =  $numero_tres->get_multiplos();
		 	array_push($this->numeros, $numero);

		 	$numero['etiqueta'] =  $numero_cinco->get_etiqueta();
			$numero['array'] =  $numero_cinco->get_multiplos();
		 	array_push($this->numeros, $numero);
		
			$numero['etiqueta']= 'Linianos';
		 	$numero['array'] = array_intersect( $numero_tres->get_multiplos(), $numero_cinco->get_multiplos() );
		 	array_push($this->numeros, $numero);
	}

	public function imprimir_rango_numeros($cantidad)
	{	
		$output = ''; 
		
		for( $i=1; $i <= $cantidad; $i++ )
		{
			$imprimir = $i;

			foreach ($this->numeros as $key => $value)
			{
				
				if(in_array($i, $value['array']))
					$imprimir = $value['etiqueta'];
			}

			//
			// Se imprime separado por espacio para facilitar el string de testeo
			// En caso de querer verlo en columnas, modificar la siguiente linea (genera error en la clase que teste la impresion final ) 
			// echo  "$i: ".$imprimir."<br>";
			$output .= "$imprimir ";
		}
		print($output);
	} 

}

?>