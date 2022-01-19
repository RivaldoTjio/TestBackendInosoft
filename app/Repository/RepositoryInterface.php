<?php

namespace App\Repository;

interface RepositoryInterface
{
    public function insert(T $model);
    public function read($id);
    public function readAll();
    public function update(T $model);
    public function delete($id);
}
