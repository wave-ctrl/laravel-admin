<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Use App\Models\GuruModel;



class GuruController extends Controller
{

    public function __construct()
    {
        $this->GuruModel = new GuruModel;
    }
    
    public function index()
    {
        $data =[
          'showData' =>DB::table('tbl_guru')->get()  

        ];
    return view('pages/guru',$data,    
     [
        
       'title' => 'Guru',
       'titlenav' => 'Guru',
       
    ]) ;
    }
    
    public function store(Request $req)
    {
        $req->validate([
            'nama'=>'required',
        ]);

        $query = DB::table('tbl_guru')->insert([
            'nama'=>$req->input('nama')
        ]);
       if($query){
           return redirect('/guru')->with('berhasil','Data berhasil disimpan !');
       }else{
           return redirect('/guru')->with('gagal','Data gagal disimpan !');

       }

    }

    public function edit($id_guru )
    {
        $data = [
            'guru' =>$this->GuruModel->detailData($id_guru),

        ];
       
        return 'edit';

    }

    public function update($id_guru){
        $post = Post::finderorFail($id_guru);
        return response()->json($post, 200);
    }
}
