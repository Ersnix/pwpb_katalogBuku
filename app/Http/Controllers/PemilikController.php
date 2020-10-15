<?php 
	namespace App\Http\Controllers;
 
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	

	class PemilikController extends Controller
	{
		public function index()
		{
			$userpemilik = session()->get('id_pemilik');
			$buku = DB::table('buku')->select('*')->where('id_pemilikToko',$userpemilik)->get();
			return view('pemilik',['buku' => $buku]);
		}

		public function delete($id){
			DB::table('buku')->where('kode_buku',$id)->delete();
			return redirect('/pemilik');
		}
		public function tambah(){
			return view('tambahBuku');
		}
		public function prosesTambahBuku(request $Request){
			$userpemilik = session()->get('id_pemilik');
			$kodeLast =DB::table('buku')->max('kode_buku');
			if ($kodeLast == null) {
				$kodeLast = "000";
			}else{
				$kodeLast =DB::table('buku')->max('kode_buku');				
			}
			$urutan =(int) substr($kodeLast, -3);
			$urutan++;
			$huruf = DB::table('pemilik_toko')->where('id_pemilikToko',$userpemilik)->value('username');
			$huruffull = $huruf."book";
			$kodeakhir = $huruffull.sprintf("%03s", $urutan);
			$file = $Request->file('sampulBuku');
			$extention = $file->getClientOriginalExtension();

			DB::table('buku')->insert([
				'kode_buku' => $kodeakhir,
				'gambar_sampul' => $kodeakhir.".".$extention,
				'nama_buku' => $Request->namaBuku,
				'harga_buku' => $Request->hargaBuku,
				'jumlah_stok' => $Request->jumlahBuku,
				'id_pemilikToko' => $userpemilik
			]);
			$tujuan_upload = 'sampul_buku';
			$file->move($tujuan_upload,$huruffull.sprintf("%03s", $urutan).".".$extention);
			return redirect('/pemilik');
		}
		public function edit($id){
			$buku = DB::table('buku')->select('*')->where('kode_buku',$id)->first();
			return view('editBuku',['buku' => $buku]);
		}
		public function prosesEditBuku(Request $request){
			$file = $request->file('sampulBuku');
			$extention = $file->getClientOriginalExtension();
			$tujuan_upload = 'sampul_buku';
			$file->move($tujuan_upload,$request->kodeBuku.".".$extention);

			DB::table('buku')->where('kode_buku',$request->kodeBuku)->update([
				'nama_buku' => $request->namaBuku,
				'harga_buku' => $request->hargaBuku,
				'jumlah_stok' => $request->jumlahBuku,
				'gambar_sampul' => $request->kodeBuku.".".$extention
			]);
			return redirect('/pemilik');
		}
	}
