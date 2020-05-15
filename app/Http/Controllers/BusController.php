<?php


namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController
{
    private $id = "id";
    private $name = "busIdentifier";
    private $isDeleted = "is_deleted";

    private function select(){
        return DB::table('buses')->select($this->id, $this->name, $this->isDeleted);
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

//        try{
//            return $this->select()->where($this->id, $id)->delete();
//        } catch (QueryException $e){
//            return response(array("error" => "Could not delete bus because of database references"), 400);
//        }
    }
}
