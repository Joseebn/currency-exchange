<?php

namespace App\Repositories;

use App\Repositories\Contracts\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    public function errors()
    {
    	//
    }

    public function all(array $related = null)
    {
    	var_dump('llega al base repository');
    }

    public function get($id, array $related = null)
    {
    	//
    }

    public function getWhere($column, $value, array $related = null)
    {
    	dd('aaaa');
    }

    public function getRecent($limit, array $related = null)
    {
    	//
    }

    public function create(array $data)
    {
    	//
    }

    public function update(array $data)
    {
    	//
    }

    public function delete($id)
    {
    	//
    }

    public function deleteWhere($column, $value)
    {
    	//
    }
}
