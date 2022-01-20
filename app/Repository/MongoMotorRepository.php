<?php

namespace App\Repository;


use App\Models\MotorModel;

class MongoMotorRepository implements RepositoryInterface
{
    protected $motorModel;

    /**
     * @param $motorModel
     */
    public function __construct()
    {
        $this->motorModel = new MotorModel();
    }

    public function insert($model)
    {
        // TODO: Implement insert() method.
    }

    public function read($id)
    {
        // TODO: Implement read() method.
    }

    public function readAll()
    {
        return $this->motorModel->get();
    }

    public function update($model)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
