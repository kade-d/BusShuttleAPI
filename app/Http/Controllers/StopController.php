<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StopController
{
    private $id = "id";
    private $name = "stops";
    private $isDeleted = "is_deleted";

    private function select(){
        return DB::table('stops')->select($this->id, $this->name, $this->isDeleted, $this->isDeleted);
    }

    public function get()
    {
        return response(array("data" => $this->select()->get()), 200);
    }

    public function find($id)
    {
        return $this->select()->where($this->id, $id)->get();
    }

    public function create(Request $request){
        return $this->select()->insert($request->toArray());
    }

    public function update(Request $request, $id)
    {
        return $this->select()->where($this->id, $id)->update($request->toArray());
    }

    public function delete($id)
    {
        return $this->select()->where($this->id, $id)->update(array($this->isDeleted => 1));
    }
}