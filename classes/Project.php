<?php
/**
class Project
*/
class Project
{
	public	$id;
	public 	$name;
	public	$language;
	public 	$thumbnail;
	public	$slides;
	public 	$description;

	public function __construct($arg=null) 
	{
		if(is_null($arg))
		{
			$id=0;
			$name="";
			$language = "";
			$thumbnail = "";
			$slides = "";
			$description = "";
		}
		elseif (is_numeric($arg))
		{
			$this->id = $arg;
			$this->load($this->id);
		}
	}
	
	public function load($pid)
	{
		$p=mysql_fetch_object($sql=mysql_query("SELECT * from projects where project_id={$pid}"));
		$this->name = $p->project_name;
		$this->language = $p->project_language;
		$this->thumbnail = $p->project_thumbnail;
		$this->slides = $p->project_slides;
		$this->description = $p->description;
	}
}
?>