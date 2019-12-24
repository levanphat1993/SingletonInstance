<?php


class singleton
{

	private static $instance = null;

	/**
	 * singleton constructor.
	 */
	private function __construct(){}

	/**
	 * getInstance
	 *
	 * @return singleton|null
	 */
	public static function getInstance()
	{
		if (self::$instance == null)
		{
			self::$instance = new Singleton();
		}
		return self::$instance;
	}


}