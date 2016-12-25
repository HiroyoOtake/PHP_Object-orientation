<?php

// クラスの継承 

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

}

$myTaxi = new Taxi;

// echo $myTaxi->gasoline;
$myTaxi->go();
$myTaxi->supply(5);
