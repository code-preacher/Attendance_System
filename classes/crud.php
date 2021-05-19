<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return "No found records";
		}
	}



	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayAllSpecific($table,$value,$item)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


		public function displayAllSpecific2($table,$value,$item)
	{
		$date=date('d-m-Y');
		$query = "SELECT * FROM {$table} WHERE $value='$item' and date='$date'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


			public function displayAllSpecific3($table,$value,$item)
	{
		$date=date('d-m-Y');
		$query = "SELECT distinct matno,name FROM {$table} WHERE $value='$item'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



		public function displayAllSpecificCourse($table,$value)
	{
		$query = "SELECT * FROM {$table} WHERE c1='$value' or c2='$value' or c3='$value' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayCheckedUser($table,$matno,$value)
	{
		$query = "SELECT * FROM {$table} WHERE matno='$matno' and (c1='$value' or c2='$value' or c3='$value') ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return true;
		}else{
			return false;
		}
	}




	
	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return "No found records";
		}
	}




	//Display Specific

	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where matno='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


		public function displayById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


			public function displayByCourse($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




			public function displayByName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM course where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'].'('.$row['code'].')';
		}else{
			return 0;
		}
	}


	public function displayByName2($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM $table where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}


			public function displayInfo($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where matno='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


				public function displayByEmail($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




		public function displayLogin($table,$value)
	{
		$email = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$email' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function state_one($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT id,name FROM state where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	public function lga_one($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT id,name FROM lga where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}





	public function checkOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where matno='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function checkTwo($table,$matno,$date,$code)
	{
		$matno= $this->cleanse($matno);
		$date= $this->cleanse($date);
		$code= $this->cleanse($code);
		$query = "SELECT * FROM {$table} where matno={$matno} and date='$date' and course_code='$code' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			return true;
		}else{
			return false;
		}
	}



//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM {$table}");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}


	public function countAllWithTwo($table,$matno)
	{
		$q=$this->con->query("SELECT matno FROM {$table} where matno='$matno' ");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}



	public function countAllWithThree($table,$matno,$code)
	{
		$q=$this->con->query("SELECT matno,course_code FROM {$table} where matno='$matno' and course_code='$code'");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}


//Counting Specific
	
	
// Inserting

	public function insertAttendance($post)
	{
		$n=$this->cleanse(strtoupper($_POST['name']));
		$mt=$this->cleanse(strtoupper($_POST['matno']));
		$code=$this->cleanse(strtoupper($_POST['code']));
		$t=date("h:i:s A",strtotime("+0 HOURS"));
		$dt=date("d-m-Y");
		$query="INSERT into attendance(name,matno,course_code,timein,date) values('$n','$mt','$code','$t','$dt') ";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:dashboard.php?msg=Attendance was successfully taken!&type=success");
		}else{
			header("Location:dashboard.php?msg=Error taking Attendance try again!&type=error");
		}
	}


		public function insertCourse($post)
	{
		$name=$this->cleanse(strtoupper($_POST['name']));
		$code=$this->cleanse(strtoupper($_POST['code']));
		$lecturer_id=$this->cleanse(strtoupper($_POST['lecturer']));
		$query="INSERT into course(lecturer_id,name,code) values('$lecturer_id','$name','$code') ";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-course.php?msg=Course was successfully taken!&type=success");
		}else{
			header("Location:view-course.php?msg=Error adding Course try again!&type=error");
		}
	}


			public function insertAllocate($post)
	{
		$matno=$this->cleanse($_POST['matno']);
		$c1=$this->cleanse($_POST['c1']);
		$c2=$this->cleanse($_POST['c2']);
		$c3=$this->cleanse($_POST['c3']);
		$query="INSERT into course_allocation(matno,c1,c2,c3) values('$matno','$c1','$c2','$c3') ";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-allocation.php?msg=Course Allocation was successfully taken!&type=success");
		}else{
			header("Location:view-allocation.php?msg=Error adding Course try again!&type=error");
		}
	}


	public function insertStudent($post,$file)
	{
		$date=date("d-m-y @ g:i A");
		$pix=$_FILES['pic']['name'];
		$temp=$_FILES['pic']['tmp_name'];
		$folder="../studentimages/" ;  
		$pd=uniqid().'_'.$pix;  
		move_uploaded_file($temp,$folder.$pd)  ;

		$name = $this->cleanse($_POST['name']);
		$matno = $this->cleanse($_POST['matno']);
		$dob = $this->cleanse($_POST['dob']);
		$gender = $this->cleanse($_POST['gender']);
		$marital_status = $this->cleanse($_POST['marital_status']);
		$nationality= $this->cleanse($_POST['nationality']);
		$state = $this->cleanse($_POST['state']);
		$lga = $this->cleanse($_POST['lga']);
	    $address = $this->cleanse($_POST['address']);
		$g_name = $this->cleanse($_POST['g_name']);
		$g_no = $this->cleanse($_POST['g_no']);
		$g_address = $this->cleanse($_POST['g_address']);
		$level = $this->cleanse($_POST['level']);
		$email = $this->cleanse($_POST['email']);
		$password= $this->cleanse($_POST['password']);

		$query="INSERT into student(name,matno,dob,gender,marital_status,nationality,state,lga,address,g_name,g_no,g_address,level,email,password,image) values('$name','$matno','$dob','$gender','$marital_status','$nationality','$state','$lga','$address','$g_name','$g_no','$g_address','$level','$email','$password','$pd')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-student.php?msg=Student was successfully inserted&type=success");
		}else{
			header("Location:view-student.php?msg=Error adding data try again!&type=error");
		}
	}


		public function insertLecturer($post,$file)
	{
		$pix=$_FILES['pic']['name'];
		$temp=$_FILES['pic']['tmp_name'];
		$folder="../lecturerimages/" ;  
		$pd=uniqid().'_'.$pix;  
		move_uploaded_file($temp,$folder.$pd)  ;

		$name = $this->cleanse($_POST['name']);
		$email = $this->cleanse($_POST['email']);
		$password = $this->cleanse($_POST['password']);
		$address = $this->cleanse($_POST['address']);

		$query="INSERT into lecturer(name,email,password,address,image) values('$name','$email','$password','$address','$pd')";
		$query2="insert into login(name,email,password,role) values('$name','$email','$password',2)";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-lecturer.php?msg=Lecturer was successfully inserted&type=success");
			$this->con->query($query2);
		}else{
			header("Location:view-lecturer.php?msg=Error adding data try again!&type=error");
		}
	}





//Empty Table
	public function emptyTable($table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "TRUNCATE {$table}";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM {$table} WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}
	

	public function deleteTwoTable($matno,$table,$table2,$url) 
	{ 
		$matno = $this->cleanse($matno);
		$query = "DELETE FROM {$table} WHERE matno= $matno";
		$query2 = "DELETE FROM {$table2} WHERE matno= $matno";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Student was successfully deleted&type=success");
			$this->con->query($query2);
		} else {
			header("Location:$url?msg=Error deleting Student&type=error");
		}
	}


//Search
	public function displaySearch($value)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM product WHERE pid LIKE '%$Name%'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}




	public function sendMessage($parentName,$parentNumber,$studentName)
	{

/*
    Sending messages using our API
    Requirements - PHP, file_get_contents (enabled) function
*/

// Initialize variables ( set your variables here )
    $username = 'petersammy7070@gmail.com';

    $password = 'ochepeter';

    $sender   = 'BSU';

    $message  = $this->greeting()." Mr/Mrs ".$parentName." ,This message is to inform you that your child ".$studentName." have not been consistent in school.Kind regards BSU Admin!";

// Separate multiple numbers by comma
    $mobiles  = $parentNumber;

// Set your domain's API URL
    $api_url  = 'https://portal.bulksmsnigeria.net/api/';

//Create the message data
    $data = array('username'=>$username, 'password'=>$password, 'sender'=>$sender, 'message'=>$message, 'mobiles'=>$mobiles);

//URL encode the message data
    $data = http_build_query($data);

//Send the message
    $request = $api_url.'?'.$data;
    $result  = file_get_contents($request);
    $result  = json_decode($result);

    if(isset($result->status) && strtoupper($result->status) == 'OK')
{ // Message sent successfully, do anything here
	echo "(Message has been sent to guardian...)";
}
else if(isset($result->error))
{    // Message failed, check reason.
	echo "Message Sending filed...".$result->error;
}
else
{// Could not determine the message response.
	echo "Unable to process request...";
}



}



public function greeting()
{
      //Here we define out main variables 
	$welcome_string="Welcome!"; 
	$numeric_date=date("G"); 

 //Start conditionals based on military time 
	if($numeric_date>=0&&$numeric_date<=11) 
		$welcome_string="Good Morning!,"; 
	else if($numeric_date>=12&&$numeric_date<=17) 
		$welcome_string="Good Afternoon!,"; 
	else if($numeric_date>=18&&$numeric_date<=23) 
		$welcome_string="Good Evening!,"; 

	return $welcome_string;

}



}

?>

