<?php
class Role extends Eloquent {
	public static $timestamps = true;

	public function users()
	{
		return $this->has_many_and_belongs_to('User','role_user');
	}
	public function get_created_at(){
		return date('j-M-y H:i',strtotime($this->get_attribute('created_at')));
	}
	public function get_updated_at(){
		return date('j-M-y H:i',strtotime($this->get_attribute('updated_at')));
	}
}