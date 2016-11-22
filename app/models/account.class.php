<?php
include "ActiveRecord.class.php"

class Account extends ActiveRecord
{
	private $name;
	private $lastName;
	private $email;
	private $birthdate;
	private $joinDate;
	private $friendships[];
	private $phoneNumber;
	private $gender;
	private $color;



	function __construct(argument)
	{
		parent::Account($arguments);
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

	public function getFriendships[](){
		return $this->friendships[];
	}

	public function setFriendships[]($friendships[]){
		$this->friendships[] = $friendships[];
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
}




?>