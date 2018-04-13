<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::orderBy('username','asc')->paginate(20);
        return view('profiles.index')->with('profiles', $profiles);
                                     
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
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
            'username'=>'required',
            'email'=>'required',
        ]);

//        ==========-----FOTO UPLOAD================
        
        $old_name = auth()->user()->name;
        $file = $request->file('image');
        $filename = $request['username'] . '-' . auth()->user()->id . '.jpg';
        $update = false;
        
        if (Storage::disk('local')->has($filename)) {
            $old_file = Storage::disk('local')->get($filename);
            Storage::disk('local')->put($filename, $old_file);
            $update = true;
        }
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
            
        }
        
        //Nieuw profiel aanmaken
        
        $profile = new Profile;
        $profile->username = $request->input('username');
        $profile->email = $request->input('email');
        $profile->dateofbirth = $request->input('dateofbirth');
        $profile->position = $request->input('position');
        $profile->biography = $request->input('biography');
        if($request->input('image')){
        $profile->image = $request->input('image');
        }
        $profile->save();
        
        return redirect('/profiles')->with('success', 'Nieuw profiel succesvol aangemaakt');
                                    
    }
    
    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profiles.show',['user' => auth()->user()])->with('profile', $profile);
                                    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profiles.edit')->with('profile', $profile);
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
        $this->validate($request,[
            'username'=>'required',
            'email'=>'required',
        ]);
        
        //Profiel wijzigen
        
        $profile = Profile::find($id);
        $profile->username = $request->input('username');
        $profile->email = $request->input('email');
        $profile->dateofbirth = $request->input('dateofbirth');
        $profile->position = $request->input('position');
        $profile->biography = $request->input('biography');
        if($request->input('image')){
        $profile->image = $request->input('image');
        }
        $profile->save();
        
        return redirect('/profiles/'.$id)->with('success', 'Profiel succesvol gewijzigd');
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
}
