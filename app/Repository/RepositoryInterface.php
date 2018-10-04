<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kayode
 * Date: 9/27/2018
 * Time: 6:29 PM
 */

namespace App\Repository;


interface RepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);
}
