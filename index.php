<?php

// 定数とself:: 
// 初乗り料金のを追加

class Car
{
	public $gasoline = 30; 

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
	public $fare = self::STARTING_FARE;
	
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

$myTaxi = new Taxi;

$myTaxi->go();
$myTaxi->go();
$myTaxi->go();

$myTaxi->checkout();


$myTaxi->go();
$myTaxi->go();
$myTaxi->go();
$myTaxi->go();
$myTaxi->go();

$myTaxi->checkout();
