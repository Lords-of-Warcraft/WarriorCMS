<?php

namespace Modules\News\Http\Controllers;

use Modules\News\Entities\News;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Modules\News\Entities\Newsimage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = [
            'news' => News::getAllNews(),
        ];
        return view('news::index', $data);
    }

    public function create_news()
    {
        return view('admin::news.create');
    }

    public function insert_news(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'     => 'required',
            'content'   => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('img/news'), $imageName);

        DB::table('news')->insert([
            'title'         => $request->title,
            'content'       => $request->content,
            'created_at'    => now()->format('Y-m-d H:i:s'),
            'updated_at'    => now()->format('Y-m-d H:i:s'),
            'author'        => session('session_id'),
            'images'        => $imageName,
        ]);

        return redirect('admin/modules/News')->with('toast_success', 'News created');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('news::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('news::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
