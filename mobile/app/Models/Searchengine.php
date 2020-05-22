<?php

namespace App\Models;

class Searchengine extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'searchengine';
	public $timestamps = false;
	protected $fillable = array('date', 'searchengine', 'count');
	protected $guarded = array();

	public function getDate()
	{
		return $this->date;
	}

	public function getSearchengine()
	{
		return $this->searchengine;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setDate($value)
	{
		$this->date = $value;
		return $this;
	}

	public function setSearchengine($value)
	{
		$this->searchengine = $value;
		return $this;
	}

	public function setCount($value)
	{
		$this->count = $value;
		return $this;
	}
}

?>
