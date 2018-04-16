<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Nieuwspost;
use App\Http\Requests;
use Illuminate\Pagination\PaginationServiceProvider;

class NieuwsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $post = Nieuwspost::paginate(6);
        return view('nieuwspage/nieuws',['nieuws'=>$post]);
                                        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nieuwspage.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titel' => 'required',
            'content' =>  'required',
        ]);
        $post = new Nieuwspost;
        $post->title = $request->input('titel');
        $post->content = $request->input('content');
        $post->save();
        
        return redirect('/nieuwsposts');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
            $post = Nieuwspost::find($id);
            return view('nieuwspage/show')->with('post', $post);                       
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
        //
    }
    
    public function searching(Request $request){
        $query = $request;
        $posts = $query ? Nieuwspost::find($query)->orderBy('id', 'desc')->paginate(6) : Nieuwspost::all();
        return view ('nieuwspage/show')->with('post', $posts);
        
    }
}
