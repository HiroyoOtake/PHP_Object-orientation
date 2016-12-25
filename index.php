<?php

// アクセス権について
// public:    どこからでもアクセスできる
// private:   そのクラス自身からのみアクセスできる
// protected: そのクラス自身と継承したクラス、親クラスからのみアクセスできる

class Car
{
	protected $gasoline = 30; 

	public function __construct($gasoline)
	{
		$this->gasoline = $gasoline;
	}

	public function go()
	{
		if ($this->gasoline > 0)
		{
		echo '車が走りました!!';
		$this->gasoline--;
		echo '残りのガソリンは' . $this->gasoline . 'Lです<br>';
		} else {
			echo '給油して下さい!<br>';
		}
	}

	public function supply($litter)
	{
		$this->gasoline += $litter;
		echo $litter . 'L給油しました。残りのガソリンは' . $this->gasoline . 'Lです!<br>';
	}
}

class Taxi extends Car
{
	const STARTING_FARE = 730;
       private	$fare = self::STARTING_FARE;
	
	public function go()
	{
		parent::go();
		$this->fare += 90;
	}

	public function checkout()
	{
		echo 'お会計は' . $this->fare . '円です<br>';
		$this->fare = self::STARTING_FARE;
	}

}

$myTaxi = new Taxi(50);

$myTaxi->go();
// $myTaxi->gasoline = 0;

$myTaxi->go();
$myTaxi->go();

// $myTaxi->fare = 0;

$myTaxi->checkout();

