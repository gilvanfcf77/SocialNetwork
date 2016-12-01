<?php
class Message
{
	private $text;
	private $image;
	private $dateTime;
	private $is_visualized;

	public function __constructor($text,$image,$dateTime,$is_visualized)
	{
	 	$this->text = $text;
		$this->image = $image;
		$this->dateTime = $dateTime;
		$this->is_visualized = $is_visualized;
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
	public function getIsVisualized()
	{
	 	return $this->$s_visualized;
	}
	public function setIsVisualized($$is_visualized)
	{
	 	$this->is_visualized = $is_visualized;
	}
}
?>
