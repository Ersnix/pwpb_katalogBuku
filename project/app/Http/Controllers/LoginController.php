<?php 
	namespace App\Http\Controllers;
 
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class LoginController extends Controller
	{
		public function index()
		{
			return view('login');
		}
		public function prosesLogin(Request $request)
		{
			$nama = $request->input('username');
			$password = $request->input('password');
			$admin = DB::table('admin')->select('*')->where('username',$nama)
					->where('password',$password)->first();
			$pemilik = DB::table('pemilik_toko')->select('*')->where('username',$nama)
					->where('password',$password)->first();
			$konsumen = DB::table('konsumen')->select('*')->where('username',$nama)
					->where('password',$password)->first();
			if ($admin != null) {
				if ($request->input('remember') != null)  {
					setcookie('username', $request->input('username'), time()+ 3600);
    				setcookie('password', $request->input('password'),time()+ 3600);
				}
				session()->put('login','admin');
				return redirect('/admin');
			}elseif ($pemilik != null) {
				if ($request->input('remember') != null)  {
					setcookie('username', $request->input('username'), time()+ 3600);
    				setcookie('password', $request->input('password'),time()+ 3600);
				}
				$id_pemilik = DB::table('pemilik_toko')->where('username',$nama)->value('id_pemilikToko');
				session()->put('id_pemilik',$id_pemilik);
				session()->put('login','pemilik');
				return redirect('/pemilik');	
			}elseif ($konsumen != null) {
				if ($request->input('remember') != null)  {
					setcookie('username', $request->input('username'), time()+ 3600 ,'/');
    				setcookie('password', $request->input('password'),time()+ 3600, '/');
				}
				session()->put('login','konsumen');
				return redirect('/konsumen');	
			}else{
				return redirect('login')->with(['status' => 'gagal']);
			}
		}

		public function logOut()
		{
			setcookie('username', '', time() - 3600 ,'/login');
    		setcookie('password', '',time() - 3600,'/login');
    		session()->forget('login');
    		session()->forget('id_pemilik');
    		return redirect('/login');
		}
	}
