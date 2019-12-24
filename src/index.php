<?php

require_once '../singleton.php';


class user extends singleton
{
	protected $name;
	protected $old;
	protected $phone;
	protected $address;

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getOld()
	{
		return $this->old;
	}

	/**
	 * @param mixed $old
	 */
	public function setOld($old)
	{
		$this->old = $old;
	}

	/**
	 * @return mixed
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param mixed $phone
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	/**
	 * @return mixed
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param mixed $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function information()
	{
		echo "=======> Information <============" . "\n";
		echo "name : " . $this->getName() . "\n";
		echo "old : " . $this->getOld() . "\n";
		echo "phone : " . $this->getPhone() . "\n";
		echo "address : " . $this->getAddress() . "\n";
		echo "================================>" . "\n";
	}

}

/** @var  user  $user1 */
$user1 = user::getInstance();
/** @var  user  $user2 */
$user2 = user::getInstance();
/** @var  user  $user3 */
$user3 = user::getInstance();