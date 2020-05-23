<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntryController
{
    private $id = "id";
    private $boarded = "boarded";
    private $stopId = "stop_id";
    private $timestamp = "t_stamp";
    private $dateAdded = "date_added";
    private $loopId = "loop_id";
    private $driverId = "driver_id";
    private $leftBehind = "left_behind";
    private $busId = "bus_id";

    private function select(){
        return DB::table('entries')->select('*');
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
