<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(Request $request){
        $groups = Group::with('career')->get();
        return Collect([
            "process" => "select all groups",
            "status" => "1",
            "error" => "0",
            "data" => $groups
        ]);
    }

    public function show(Request $request){
        $group= Group::where("id","=",$request['id'])->get();
        return Collect([
            "process" => "select group",
            "status" => "1",
            "error" => "0",
            "data" => $group
        ]);

    }

    public function store(Request $request){
        $group = Group::create([
            "id" => $request['id'],
            "name" => $request['name'],
            "grade" => $request['grade'],
            "career_id" => $request['career_id']
        ]);
        return Collect([
            "process" => "select group",
            "status" => "1",
            "error" => "0",
            "data" => $group
        ]);

    }


    public function update(Request $request){
        $groupUpdated = Group::join("careers","id","=","career_id")
        ->where("id", "=",$request['id'])
        ->update(["name" => $request['name']]);

        return collect([
            "process" => "Update group",
            "status" => "1",
            "error" => "0",
            "message" => "group updated"
        ]);
        
    }

    public function destroy(Request $request){
        $result = Group::where("id","=",$request['id'])->delete();
        
        return collect([
            "process" => "Delete group",
            "status" => "1",
            "error" => "0",
            "message" => "group removed"
        ]);
    }
}
