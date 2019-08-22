<?php

$code = new Code();
echo $code->code;

class Code
{
	//验证码个数
	protected $number;
	//验证码类型
	protected $codeType;
	//图像宽度
	protected $width;
	//图像高度
	protected $height;
	//图像资源
	protected $image;
	//验证码字符串
	protected $code;

	public function __construct($number = 4, $codeType = 2, $width = 100, $height = 50)
	{
		//初始化自己的成员属性
		$this->number = $number;
		$this->codeType = $codeType;
		$this->width = $width;
		$this->height = $height;

		//生成验证码函数
		$this->code = $this->createCode();
	}

	public function __get($name)
	{
		if ($name == 'code') {
			  return $this->code;
		}
		return false;
	}

	protected function createCode()
	{
		//通过你的验证码类型给你生成不同的验证码
		switch($this->codeType){
             case 0:   //纯数字
                 $code = $this->getNumberCode();
                 break;
             case 1:   //纯字母
                 $code = $this->getCharCode();
                 break;
             case 2:   //字母和数字混合
                 $code = $this->getNumCharCode();
                 break;
             default:
                 die('不支持这种验证码类型');
		}
		return $code;
	}

	protected  function getNumberCode()
	{
		$str = join('', range(0, 9));
		return substr(str_shuffle($str), 0, $this->number);
	}

	protected function getCharCode()
	{
		$str = join('', range('a', 'z'));
		$str = $str.strtoupper($str);
		return substr(str_shuffle($str), 0, $this->number);
	}

	protected function getNumCharCode()
	{
		$numStr = join('', range(0, 9));
		$str = join('', range('a', 'z'));
		$str = $numStr.$str.strtoupper($str);
		return substr(str_shuffle($str), 0, $this->number);
	}
}