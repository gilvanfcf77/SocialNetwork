<?php
include "super/ActiveRecord.class.php";

class Account extends ActiveRecord
{
	private $name;
	private $lastName;
	private $email;
	private $birthdate;
	private $joinDate;
	private $friendships_id;
	private $phoneNumber;
	private $gender;
	private $color;

	function __construct($id,$name,$lastName, $email, $birthdate, $joinDate,$friendships_id,$phoneNumber,$gender,$color)
	{
		if($id != NULL)
			parent::Account($id);
		$this->name = $name;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->birthdate = $birthdate;
		$this->joinDate = $joinDate;
		$this->friendships_id = $friendships_id;
		$this->phoneNumber = $phoneNumber;
		$this->gender = $gender;
		$this->color = $color;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getBirthdate(){
		return $this->birthdate;
	}

	public function setBirthdate($birthdate){
		$this->birthdate = $birthdate;
	}

	public function getJoinDate(){
		return $this->joinDate;
	}

	public function setJoinDate($joinDate){
		$this->joinDate = $joinDate;
	}

	public function getFriendshipsId(){
		return $this->friendships_id;
	}

	public function setFriendshipsId($friendships_id){
		$this->friendships_id = $friendships_id;
	}

	public function getPhoneNumber(){
		return $this->phoneNumber;
	}

	public function setPhoneNumber($phoneNumber){
		$this->phoneNumber = $phoneNumber;
	}

	public function getGender(){
		return $this->gender;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getColor(){
		return $this->color;
	}

	public function setColor($color){
		$this->color = $color;
	}

	public function saveClass($link)
	{
			insert($link,strtolower(get_class())."s","NULL","'".$this->name."'","'".$this->lastName."'","'".$this->email."'","'".$this->birthdate."'","'".$this->joinDate."'","'".$this->friendships_id."'",$this->phoneNumber,"'".$this->gender."'","'".$this->color."'");
	}

}


	$conta = new Account(NULL, "Lucas","Simao", "lucas64","18/03","18/03",10,"2351451521","Macho","preto");
	// $conta->saveClass();
	$conta->saveClass($link);



?>
