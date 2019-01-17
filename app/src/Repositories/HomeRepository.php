<?php

namespace App\Repositories;

class HomeRepository extends BaseRepository
{
	
	/**
	 * The User instance.
	 *
	 * @var \App\Models\User
	 */
	protected $user;

	/**
	 * Create a new HomeRepository instance.
	 *
	 * @param  \App\Models\User $user
	 * @return void
	 */
	public function __construct($user)
	{
		$this->model = $user;
	}

	/**
	 * Create a query for Post.
	 *
	 * @param $skip
	 * @param $take
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
  	private function query($skip, $take)
	{	
		return $this->model
		->select('id', 'created_at', 'updated_at', 'email', 'first_name', 'last_name')
		->take($take)->skip($skip)
		->get();
	}

	/**
	 * Get post collection.
	 *
	 * @param $skip
	 * @param $take
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function index($skip, $take)
	{
		$query = $this->query($skip, $take);

		return $query;
	}
	
}