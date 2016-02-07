<?php

namespace paaetsystem\Event;
use Illuminate\Database\Eloquent\Model as Eloquent;
class Event extends Eloquent {
	protected $table = 'events';
	protected $fillable = [
	'id',
	'title',
	'url',
	'datetime',
	'datetime_end',
	'created_at',
	'updated_at',
	'issuedate',
	];
}
