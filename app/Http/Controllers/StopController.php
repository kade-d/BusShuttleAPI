<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class StopController extends BaseController
{
    private $id = "id";
    private $name = "name";
    private $isDeleted = "is_deleted";

    private function select()
    {
        return DB::table('stops')->select($this->id, $this->name, $this->isDeleted, $this->isDeleted);
    }

    public function get()
    {
        $content = $this->select()->get();
        return response(array("data" => $content), 200);
    }

    public function getByLoop($loopId)
    {
        $content = DB::table('stop_loop')
            ->join('stops', 'stops.id', '=', 'stop_loop.stop_id')
            ->join('loops', 'loops.id', '=', 'stop_loop.loop_id')
            ->where('stop_loop.loop_id', $loopId)
            ->select('stops.*')
            ->get();
        return response(array("data" => $content), 200);
    }

    public function find($id)
    {
        $content = $this->select()->where($this->id, $id)->get();
        return response(array("data" => $content), 200);
    }

    public function createByLoop(Request $request, $loopId)
    {
        $stop = array('name' => $request->toArray()['name']);
        $stopId = $this->select()->insertGetId($stop);

        DB::table('stop_loop')->insert(array('loop_id' => $loopId, 'stop_id' => $stopId));

        return response(array("data" => array('stop_id' => $stopId)), 200);
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
