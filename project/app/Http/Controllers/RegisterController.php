<?php 
	namespace App\Http\Controllers;
 
	use Illuminate \ Http \ Request;
	use Illuminate\Support\Facades\DB;
	

	class RegisterController extends Controller
	{
		public function index()
		{
			return view('register');
		}

		public function prosesRegister(Request $request)
		{
			DB::table('konsumen')->insert(
    			['username' => $request->input('username'),
    			 'password' => $request->input('password') , 
    			 'alamat' => $request->input('alamat'),
    			 'nama' => $request->input('namaLengkap'),
    			 'no_telepon' => $request->input('noTelepon')]
			);
			return redirect('login')->with(['register' => 'berhasil']);
		}
	}