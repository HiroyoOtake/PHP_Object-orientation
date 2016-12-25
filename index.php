<?php

// メソッド = クラス内で宣言された関数 

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

$myCar = new Car;

for ($i = 0; $i < 50; $i++)
{
	$myCar->go();
}

$myCar->supply(10);
