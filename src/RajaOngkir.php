<?php

namespace Dulabs\RajaOngkir;

use Dulabs\RajaOngkir\App\Provinsi;
use Dulabs\RajaOngkir\App\Kota;
use Dulabs\RajaOngkir\App\Cost;

class RajaOngkir {

	/* Singleton */
	protected static function GetInstance(){
		if( self::$obj == null ){
			self::$obj = new RajaOngkir;
		}

		return self::$obj;
	}
	protected static $obj = null;
	/* End Singleton */

	public static function __callStatic($name, $arguments){
		self::GetInstance()->__call($name, $arguments);
	}

	/**
	 * Raja Ongkir API Key
	 * @var string
	 */
	protected static $key;

	public function setKey($key)
	{
		self::$key = $key;
	}

	/**
	 * Raja Ongkir API Endpoint
	 * @var string
	 */
	protected static $endpoint;

	public function setEndpoint($endpoint)
	{
		self::$endpoint = $endpoint;
	}

	public function Provinsi(){
		$state = new Provinsi();

		$state->setKey(self::$key);
		$state->setEndpoint(self::$endpoint);

		return $state;
	}

	public function Kota(){
		$city = new Kota;

		$city->setKey(self::$key);
		$city->setEndpoint(self::$endpoint);

		return $city;
	}

	public function Cost($attributes){
		$cost = new Cost($attributes);

		$cost->setKey(self::$key);
		$cost->setEndpoint(self::$endpoint);

		return $cost->getServices();
	}

}
