<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tất cả liên hệ';
        $list_contact = Contact::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.contact.index", compact('list_contact', 'title'));
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
        $contact = Contact::find($id);
        if ($contact == null) {
            return redirect()->route('contact.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $contact->delete();
            return redirect()->route('contact.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa tin nhắn thành công']);
        }
    }
    // delete
    public function delete($id, Request $request)
    {
        $contact = Contact::find($id);
        if ($contact == null) {
            return redirect()->route('contact.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $contact->status = 0;
            $contact->updated_at = date('Y-m-d H:i:s');
            $contact->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $contact->save();
            return redirect()->route('contact.index')->with('message', ['type' => 'success', 'msg' => 'Xóa tin nhắn thành công']);
        }
    }
    // restore
    public function restore($id, Request $request)
    {
        $contact = Contact::find($id);
        if($contact == null) {
            return redirect()->route('contact.index')->with('message', ['type'=>'danger', 'msg'=> 'Mẫu tin không tồn tại']);
        } else {
            $contact->status = 2;
            $contact->updated_at = date('Y-m-d H:i:s');
            $contact->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $contact->save();
            return redirect()->route('contact.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);

        }
    }
    // trash
    public function trash()
    {
        $title = 'Thùng rác liên hệ';
        $list_contact = Contact::where('status', '=', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.contact.trash", compact('list_contact', 'title'));
    }
}
