<?php 

	class miClase
	{
		public $resultado=0;

		public function miMetodo($v1, $v2)
		{
			$this->resultado=$v1+$v2;
			return $this->resultado;
		}
	}

	//instanciar o declarar un objeto
	$miObjeto= new miClase();
	echo $miObjeto->miMetodo(5,10);
 ?>