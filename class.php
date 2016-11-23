<?php

	abstract class Peoples{
		public $name;
		public $lastName;
		public $birthDay;
	}
	//
	class Company extends Peoples{
		public $companyName;
		//public $workers;
		function __construct($name, $lastname, $birthDay, $job, $department, $company){
			$this->name=$name;
			$this->lastName=$lastname;
			$this->birthDay=$birthDay;
			$this->job=$job;
			$this->department=$department;
			$this->companyName=$company;

		 }
	}
	class WorkersOfCompany extends Peoples{
		public $job;
		public $department;
	}
	class OtherPeoples extends Peoples{
	}
	$workers= new Company (
				$_POST['name'], 
				$_POST['lastName'], 
				$_POST['birthDay'], 
				$_POST['job'], 
				$_POST['department'], 
				$_POST['company']
				);
	var_dump($workers);
?>