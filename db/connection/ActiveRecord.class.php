<?php 
		
	class ActiveRecord
	{
		
		private $id;

		public function __construct($arguments)
		{
		$number_args = func_num_args();
		$class_name = strtolower(get_class());
		echo $class_name;
		}
	}

	$ActiveRecord = new ActiveRecord(0);

 ?>