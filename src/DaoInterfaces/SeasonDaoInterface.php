<?php
require_once('../Models/Season.php');

Interface SeasonDaoInterface 
{
    public function store(Season $season);
    public function find(int $id);
    public function findAll();
    public function update(Season $season);
    public function delete(int $id);
}