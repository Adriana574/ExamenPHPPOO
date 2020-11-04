<?php 

	class clasePadre
	{
		public function metodoPadre()
		{
			return "hola desde el padre";
		}
		public function metodo1()
		{
			return "este es metodo padre";
		}
	}

	class claseHijo extends clasePadre
	{
		public function metodoHijo()
		{
			return parent::metodo1();
		}
		public function metodo1()
		{
			return "este es metodo hijo";
		}
	}

	echo claseHijo::metodoHijo();
 ?>