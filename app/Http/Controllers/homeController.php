<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class homeController extends Controller
{
    public function dashboard(){
        $data = User::get();
        return view('dashboard', compact('data'));
    }
    public function index(){
    $data = User::get();
    return view('index', compact('data'));
    }

    public function create(){
        $data = User::get();
        return view('create', compact('data'));
    }
    public function store(Request $request) {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email sudah terpakai'])->withInput();
        }else{
            $data['email'] = $request->email;
        }
    
        if (User::where('name', $request->name)->exists()) {
            return redirect()->back()->withErrors(['name' => 'username sudah terpakai'])->withInput();
        }else{
            $data['name'] = $request->name;
        }
    
        // Create the new user
        
        
        $data['password'] = bcrypt($request->password);
        User::create($data);
    
        return redirect()->route('login');
    }
    public function edit(Request $request, $id){
        $data = User::find($id);
       return view('edit', compact('data'));
    }


    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        if ($request->password){
            $data['password'] = bcrypt($request->password);
        }
        User::whereid($id)->update($data);
        return redirect()->route('admin.dashboard');
    }

    public function destroy($id){
        User::destroy($id);
        return redirect()->route('admin.user.index');
    }

    //Frontend
        public function home(){
        return view('frontend/home');
    }
    public function about(){
        return view('frontend/about');
    }
    public function blog(){
        return view('frontend/blog');
    }
    public function contact(){
        return view('frontend/contact');
    }
    public function createtour(){
        return view('frontend/Create_Tournament');
    }
    public function tournament(){
        return view('frontend/tournament');
    }
    public function mainblog(){
        return view('frontend/mainblog');
    }
    public function login(){
        return view('frontend/login');
    }
    public function authadmin(){
        return view('frontend/authadmin');
    }
    public function register(){
        return view('frontend/register');   
    }
    public function detaildonation(){
        return view('frontend/detail_donation');
    }
    public function detailtour(){
        return view('frontend/detail_tour');
    }
    public function detailtourvalo(){
        return view('frontend/detail_tour_valo');
    }
}
