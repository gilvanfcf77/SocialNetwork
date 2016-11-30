<?php
class Message
{
	private $text;
	private $image;
	private $dateTime;
	private $view;

	public function __constructor($text,$image,$dateTime,$view)
	{
	 	$this->text = $text;
		$this->image = $image;
		$this->dateTime = $dateTime;
		$this->view = $view;
	}

	public function getText()
	{
	 	return $this->text;
	}
	public function setText($text)
	{
	 	$this->text = $text;
	}
	public function getImage()
	{
	 	return $this->image;
	}
	public function setImage($image)
	{
	 	$this->image = $image;
	}
	public function getDateTime()
	{
	 	return $this->dateTime;
	}
	public function setDateTime($dateTime)
	{
	 	$this->dateTime = $dateTime;
	}
	public function getView()
	{
	 	return $this->view;
	}
	public function setView($view)
	{
	 	$this->view = $view;
	}
}
?>
