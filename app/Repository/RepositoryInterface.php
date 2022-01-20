<?php

namespace App\Repository;

interface RepositoryInterface
{
    public function insert($model);
    public function read($id);
    public function readAll();
    public function update($model);
    public function delete($id);
}
