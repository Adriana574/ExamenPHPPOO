<?php 

	class clase1
	{
		private function saludar()
		{
			return "saludando";
		}

		public function mandaSaludo()
		{
			return self::saludar();
		}
	}

	echo clase1::mandaSaludo();
 ?>