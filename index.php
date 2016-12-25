<?php

// クラスを宣言 → インスタンス化

class Car
{
	public $gasoline = 30; // プロパティ(メンバ変数)
}

$myCar = new Car;
// Car というクラス(設計図)をもとにして
// myCarというインスタンス(実体)をつくった

echo $myCar->gasoline;
