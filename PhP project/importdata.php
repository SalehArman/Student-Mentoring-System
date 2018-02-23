

<?php

class csv extends mysqli
{
	private $state_csv = false;
	private $connection = false;
	public function _contruct()
	{
		$this->connection = new mysqli("localhost","root","", "projectfinal");
		//parent::_construct("localhost","root","", "projectfinal");
		if($this->connection->connect_errno){
			echo "Fail to connect to Database : ". $this->connection->connect_errno;
	
		}
	}
	
	public function import($file)
	{
		$file = fopen($file, 'r');
		
		while ($row = fgetcsv($file) ) {
			/*print "<pre> ";
			print_r($row);
			print "</pre>";
			*/


			$value = "'". implode("','", $row) ."'";
			//echo $value;
		
			//$q = "INSERT INTO basicinformation(Student_Name,Programme,Batch,Current_Semister,Credit_Complete,Current_cGPA,Contact_No,Email,Status) VALUES(". $value .")";
			if ($this->connection->query($q) ) {
				$this->state_csv = true;
			}
			else{
				$this->state_csv = false;
			print_r($this->error);
			}
		}
	
	}
}
?>

