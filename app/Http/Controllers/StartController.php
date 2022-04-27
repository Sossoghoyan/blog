<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Start;
class StartController extends Controller
{
    public function index()
    {
        return view('add-blog-start-form');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3|string',
            'email'=>'required|min:10|max:30',
            'password'=>'required|min:6|max:8'
        ]);
    // [
    //     'name.required' => 'Անունը գրելը պարտադիր է',
    //     'email.required' => 'պետք է լինի 6 տառից ավել',
    //     'password.required' => 'պետք է լինի 3-ից ավել նիշ'
    // ]);
        
        $start = new Start;
        $start->name = $request->name;
        $start->email = $request->email;
        $start->address = $request->address;
        $start->password = $request->password;
        $start->save();
        return redirect('add-blog-start-form')->with('status', 'Blog Start Form Data Has Been inserted');
      
    } 
    
  

    
}  