<?php
class registro{
	
	private $control = 'numeroDefault';
	private $name = 'DefaultName';
	private $pass = 'DefaultPass';
	private $tel = 'DefaultTel';
	private $cel = 'DefaultCel';
	private $email = 'DefaultEmail';
	private $sex = 'DefaultSex';
	private $user = 'DefaultUser';
	
	function __contruct(){
		//Empty construct
	}
	
	public function __getControl(){
		return "{$this->control}";
	}
	
	public function __getName(){
		return "{$this->name}";
	}
	
	public function __getPass(){
		return "{$this->pass}";
	}
	
	public function __getTel(){
		return "{$this->tel}";
	}
	
	public function __getCel(){
		return "{$this->cel}";
	}
	
	public function __getEmail(){
		return "{$this->email}";
	}
	
	public function __getSex(){
		return "{$this->sex}";
	}
	
	public function __getUser(){
		return "{$this->user}";
	}
	
	//--------------------------------------------------------------------------------------------------------
	//--------------------------------------------------------------------------------------------------------
	
	public function __setcontrol($control){
		$this->control = $control;
	}
	
	public function __setName($name){
		$this->name = $name;
	}
	
	public function __setPass($pass){
		$this->pass = $pass;
	}
	
	public function __setTel($tel){
		$this->tel = $tel;
	}
	
	public function __setCel($cel){
		$this->cel = $cel;
	}
	
	public function __setEmail($email){
		$this->email = $email;
	}
	
	public function __setSex($sex){
		$this->sex = $sex;
	}
	
	public function __setUser($user){
		$this->user = $user;
	}
}
?>