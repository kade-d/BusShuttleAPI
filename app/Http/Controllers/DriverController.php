<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class DriverController extends BaseController
{

    private $id = "id";
    private $firstName = "firstname";
    private $lastName = "lastname";
    private $email = "email";
    private $password = "password";
    private $isDeleted = "is_deleted";

    private function select()
    {
        return DB::table('drivers')->select($this->id, $this->firstName, $this->lastName, $this->email, $this->isDeleted);
    }

    public function get()
    {
        $content = $this->select()->get();
        return response(array("data" => $content), 200);

    }

    public function find($id)
    {
        $content = $this->select()->where($this->id, $id)->get();
        return response(array("data" => $content), 200);
    }

    public function create(Request $request)
    {
        $content = $this->select()->insert($request->toArray());
        return response(array("data" => $content), 200);
    }

    public function delete($id)
    {
        $content = $this->select()->where($this->id, $id)->update(array($this->isDeleted => 1));
        return response(array("data" => $content), 200);
    }

}
