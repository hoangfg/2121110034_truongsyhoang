<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Link;
use Illuminate\Support\Str;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
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
        $title = 'Thêm chủ đề bài viết';
        $list_topic = Topic::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $html_parent_id = "";
        $html_sort_order = "";
        foreach ($list_topic as $topic) {
            $html_parent_id .= "<option value='" . $topic->id . "'>" . $topic->name . "</option>";
            $html_sort_order .= "<option value='" . ($topic->sort_order + 1) . "'>Sau: " . $topic->name . "</option>";
        }
        return view('backend.topic.create', compact('html_parent_id', 'html_sort_order', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic();
        $topic->name = $_POST['name'];
        $topic->slug = Str::slug($request->name, '-');
        $topic->metakey = $_POST['metakey'];
        $topic->metadesc = $_POST['metadesc'];
        $topic->parent_id = $_POST['parent_id'];
        $topic->sort_order = $_POST['sort_order'];
        $topic->status = $_POST['status'];
        $topic->created_at = date('Y-m-d H:i:s');
        $topic->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
        if ($topic->save()) {
            $link = new Link();
            $link->link = $topic->slug;
            $link->table_id = $topic->id;
            $link->type = 'topic';
            $link->save();
            return redirect()->route('topic.index')->with('message', ['type' => 'success', 'msg' => 'Thêm sản phẩm thành công']);
        } else {
            return redirect()->route('topic.index')->with('message', ['type' => 'danger', 'msg' => 'Thêm sản phẩm không thành công']);
        }
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
        $topic = Topic::find($id);
        $title = 'Sửa chủ đề';
        $list_topic = Topic::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $html_parent_id = "";
        $html_sort_order = "";
        foreach ($list_topic as $item) {
            $html_parent_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            $html_sort_order .= "<option value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
        }
        return view('backend.topic.edit', compact('topic', 'html_parent_id', 'html_sort_order', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopicRequest $request, $id)
    {
        $topic = Topic::find($id);
        $topic->name = $_POST['name'];
        $topic->slug = Str::slug($request->name, '-');
        $topic->metakey = $_POST['metakey'];
        $topic->metadesc = $_POST['metadesc'];
        $topic->parent_id = $_POST['parent_id'];
        $topic->sort_order = $_POST['sort_order'];
        $topic->status = $_POST['status'];
        $topic->updated_at = date('Y-m-d H:i:s');

        $topic->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
        if ($topic->save()) {
            $link = Link::where([['type', '=', 'topic'], ['table_id', '=', $id]])->first();
            $link->link = $topic->slug;
            $link->save();
            return redirect()->route('topic.index')->with('message', ['type' => 'success', 'msg' => 'Thêm sản phẩm thành công']);
        } else {
            return redirect()->route('topic.index')->with('message', ['type' => 'danger', 'msg' => 'Thêm sản phẩm không thành công']);
        }
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
