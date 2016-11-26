<?php

	include "../../db/db_functions.php";
	abstract class ActiveRecord
	{

		private $id;
		public function __construct($arguments)
		{
			$number_args = func_num_args();
			$this->class_name = strtolower(get_class());
		}
		protected function insertClass($args)
		{
				$number_args = func_get_args();
				echo $number_args;
				insert($link,strtolower(get_class())."s",$args);
		}
	}

 ?>
