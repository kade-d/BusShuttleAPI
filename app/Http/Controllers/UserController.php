<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $id = "id";
    private $firstName = "firstname";
    private $lastName = "lastname";
    private $email = "email";
    private $isDeleted = "is_deleted";


    private function select(){
        return DB::table('users')->select($this->id, $this->firstName, $this->lastName, $this->email, $this->isDeleted);
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
//            return response(array("error" => "Could not delete user because of database references"), 400);
//        }
    }

}
