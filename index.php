<?php

// コンストラクタ
// インスタンス化した際に最初に呼び出される関数
class Car
{
	public $gasoline = 30; 

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

$myTaxi = new Taxi(50);

$myTaxi->go();

$myTaxi2 = new Taxi(20);

echo $myTaxi2->gasoline;
