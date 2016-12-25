<?php

// メソッド = クラス内で宣言された関数 

class Car
{
	public $gasoline = 30; 

	public function go()
	{
		echo '車が走りました!!';
		$this->gasoline--;
		echo '残りのガソリンは' . $this->gasoline . 'Lです<br>';
	}
}

$myCar = new Car;

for ($i = 0; $i < 50; $i++)
{
	$myCar->go();
}
