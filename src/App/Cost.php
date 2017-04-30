<?php

namespace Dulabs\RajaOngkir\App;

class Cost extends Api {

	public function __construct($attributes){

		parent::__construct();

		$this->setAttributes($attributes);
	}

	/**
	 * Request attribute paramters
	 * @var array
	 */
	protected $attributes;

	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
	}

	public function getServices()
	{

		$this->overWriteOptions = [
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => http_build_query($this->attributes),
			CURLOPT_HTTPHEADER => [
				"content-type: application/x-www-form-urlencoded",
	    		"key: ".$this->apiKey
			]
		];

		$this->GetData();

		return $this;
	}

	protected $method = "cost";
}
