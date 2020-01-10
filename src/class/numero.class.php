<?php 

namespace Numero;

final Class Numero{
 
	private $etiqueta;
	private $multiplos = array(); 

	public function __construct($numero, $etiqueta, $cantidad)
	{
		$this->etiqueta = $etiqueta;
		$this->get_multiplos_numero( $numero, $cantidad, $this->multiplos );
		$this->array_multiplos[$etiqueta] = $this->multiplos;
	}

	public function get_multiplos_numero($numero, $cantidad, &$multiplos_array )
	{
		$i = 1;
		
		while ( ( $numero * $i ) <=  $cantidad )
		{
			array_push( $multiplos_array, ($numero * $i) );
			$i++;

		}
	}

	public function get_etiqueta()
	{
		
		return $this->etiqueta;
	}

	public function get_multiplos()
	{

		return $this->multiplos;
	}

}

?>