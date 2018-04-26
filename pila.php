<?php
	class Pila
	{
	    private $tope;
		private $elemntos=array();
		public function __construct()
  		{
		$this->tope=0;
		}
	   	
		public function insertar($Elemento)
		{
		$this->tope++;
		$this->elementos[$this->tope]=$Elemento;
		}
		public function eliminar()
		{
           if ($this->tope==0)
		   { echo "la pila esta vacia";
		   }
		   else 
		   {$this->tope--;
			return $this->elementos[$this->tope];
	       }
		}
		function listar()
		{
		?><p align="center"><strong>ELEMENTOS DE LA PILA </p>
        <table width="118" border="1" >
        <tr>
        <td><div align="center"><strong>ELEMENTO</strong></td>
        </tr>
  		<?php 
		   for ($i=1;$i<=$this->tope;$i++)
		   {
			?> 
  		<tr>
    	<td><?php echo  $this->elementos[$i]?></td>
  		</tr>
		<?php } ?>
	</table><?php
		}
	}
?>
