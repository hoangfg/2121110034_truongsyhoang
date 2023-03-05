<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tất cả đề tài';
        $list_topic = Topic::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.topic.index", compact('list_topic', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::find($id);
        if ($topic == null) {
            return redirect()->route('topic.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $topic->delete();
            return redirect()->route('topic.trash')->with('message', ['type' => 'success', 'msg' => 'Hủy sản phẩm thành công']);
        }
    }
    #delete
    public function delete($id, Request $request)
    {
        $topic = Topic::find($id);
        if ($topic == null) {
            return redirect()->route('topic.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $topic->status = 0;
            $topic->updated_at = date('Y-m-d H:i:s');
            $topic->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $topic->save();
            return redirect()->route('topic.index')->with('message', ['type' => 'success', 'msg' => 'Chuyển vào thùng rác thành công']);
        }
    }
    #restore
    public function restore($id, Request $request)
    {
        $topic = Topic::find($id);
        if ($topic == null) {
            return redirect()->route('topic.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $topic->status = 2;
            $topic->updated_at = date('Y-m-d H:i:s');
            $topic->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $topic->save();
            return redirect()->route('topic.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
    // trash
    public function trash()
    {
        $title = 'Thùng rác đề tài';
        $list_topic = Topic::where('status', '=', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.topic.trash", compact('list_topic', 'title'));
    }
    // status
    public function status($id, Request $request)
    {
        $topic = Topic::find($id);
        if ($topic == null) {
            return redirect()->route('topic.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $topic->status = ($topic->status == 1) ? 2 : 1;
            $topic->updated_at = date('Y-m-d H:i:s');
            $topic->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $topic->save();
            return redirect()->route('topic.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
}
