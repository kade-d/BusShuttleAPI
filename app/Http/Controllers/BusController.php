<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class BusController extends BaseController
{
    private $id = "id";
    private $name = "busIdentifier";
    private $isDeleted = "is_deleted";

    private function select()
    {
        return DB::table('buses')->select($this->id, $this->name, $this->isDeleted);
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

    public function create(Request $request){
        $content = $this->select()->insert($request->toArray());
        return response(array("data" => $content), 200);
    }

    public function update(Request $request, $id)
    {
        $content = $this->select()->where($this->id, $id)->update($request->toArray());
        return response(array("data" => $content), 200);
    }

    public function delete($id)
    {
        $content = $this->select()->where($this->id, $id)->update(array($this->isDeleted => 1));
        return response(array("data" => $content), 200);
    }
}
