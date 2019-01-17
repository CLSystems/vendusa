<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository {

	/**
	 * Create a new UserRepository instance.
	 *
   	 * @param  \App\Models\User $user
	 * @return void
	 */
	public function __construct($user)
	{
		$this->model = $user;
	}

	/**
	 * Get user collection.
	 *
	 * @return \App\Models\User|\Illuminate\Database\Eloquent\Collection
	 */
	public function show()
	{
		$user = $this->model->all();

		return $user;
	}

}