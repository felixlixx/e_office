<?php
namespace App\Controllers;

use App\Models\tiffanylovejulio;
use CodeIgniter\Controller;


class Home extends BaseController
{
	public function login()
	{
		// echo view('header');
		echo view('login');
		// echo view('footer');
	}
	public function aksi_login()
	{
	$u = $this->request->getPost('username');
    $p = $this->request->getPost('password');

    $morgen = array(
        'username' => $u,
        'password' => $p
    );

    $tiffany = new tiffanylovejulio();
    $yuro = $tiffany->julio("user", $morgen);
    return redirect()->to('home/user');
}
	public function logout()
	{

		session()->destroy();
		return redirect()->to('home/login');
	}













     public function buku()
     {
		$tiffany = new tiffanylovejulio();
		$data['felix']= $tiffany->julio('buku');

		echo view('header');
		echo view('buku',$data);
		echo view('footer');
	}
	public function t_buku()
     {
		$tiffany = new tiffanylovejulio();
		$data['felix']= $tiffany->julio('buku');

		echo view('header');
		echo view('t_buku',$data);
		echo view('footer');
	}
	public function aksi_t_buku()
     {
		$a = $this->request->getPost('buku');
		$b = $this->request->getPost('pengarang');

		$data=array(

			'nama_buku' => $a,
			'pengarang' => $b
		);

		$lambalabu = new tiffanylovejulio();
		$lambalabu->tambah('buku', $data);
		return redirect()->to('home/buku');

	}

	public function e_buku($id)
{
    $tiffany = new tiffanylovejulio();
    $where = array('id_buku' => $id);
    $data['felix'] = $tiffany->ambalabu('buku', $where);

    echo view('header');
    echo view('e_buku', $data);
    echo view('footer');
}


	public function aksi_e_buku()
{
    $a = $this->request->getPost('nama_buku');
    $b = $this->request->getPost('pengarang');
    $id = $this->request->getPost('id');

    $data = array(
        'nama_buku' => $a,
        'pengarang' => $b
    );

    $where = array('id_buku' => $id);

    $lambalabu = new tiffanylovejulio();
    $lambalabu->edit('buku', $data, $where);
    return redirect()->to('home/buku');
} // Hapus spasi tambahan dan pastikan kurung penutup
public function hapus_buku($id)
{
    $tiffany = new tiffanylovejulio();
    $data = array('id_buku' => $id);
    $tiffany->hapus('buku', $data);
    return redirect()->to('home/buku');
}










//user

	public function user()
	{
		$tiffany = new tiffanylovejulio();
		$data['vira']= $tiffany->julio('user');

		echo view('header');
		echo view('user',$data);
		echo view('footer');
	}
	public function t_user()
     {
		$tiffany = new tiffanylovejulio();
		$data['amba']= $tiffany->julio('user');

		echo view('header');
		echo view('t_user',$data);
		echo view('footer');
		return redirect()->to('home/user');
	}
	public function aksi_t_user()
     {
		$a = $this->request->getPost('username');
		$b = $this->request->getPost('password');
		$b = $this->request->getPost('level');

		$data=array(

			'username' => $a,
			'password' => $b,
			'level' => $c
		);

		$lambalabu = new tiffanylovejulio();
		$lambalabu->tambah('user', $data);
		return redirect()->to('home/user');

	}
	public function reset($id)
	{
		$tiffany = new tiffanylovejulio();
		$where = array('id_user' => $id, );
		$data = array('password' =>"123");

		$tiffany->edit('user',$data,$where);
		return redirect()->to('home/user');

	}












	public function petugas()
	{
		$tiffany = new tiffanylovejulio();
		$data['bryan']= $tiffany->julio('petugas');

		echo view('header');
		echo view('petugas',$data);
		echo view('footer');
	}
	public function t_petugas()
	{
		$tiffany = new tiffanylovejulio();
		$data['gak']= $tiffany->julio('petugas');

		echo view('header');
		echo view('t_petugas',$data);
		echo view('footer');
	}
	public function aksi_t_petugas()
     {
		$a = $this->request->getPost('namalengkap');
		$b = $this->request->getPost('jk');
		$c = $this->request->getPost('umr');
		$d = $this->request->getPost('nomortlp');

		$data=array(

			'nama_lengkap' => $a,
			'jk' => $b,
			'umur' => $c,
			'No_tlp' => $d
		);

		$lambalabu = new tiffanylovejulio();
		$lambalabu->tambah('petugas', $data);
		return redirect()->to('home/petugas');

	}
	public function e_petugas($id)
{
    $tiffany = new tiffanylovejulio();
    $where = array('id_ptgs' => $id);
    $data['felix'] = $tiffany->ambalabu('petugas', $where);

    echo view('header');
    echo view('e_petugas', $data);
    echo view('footer');
}


	public function aksi_e_petugas()
{
    $a = $this->request->getPost('nama_lengkap');
	$b = $this->request->getPost('jk');
	$c = $this->request->getPost('umr');
	$d = $this->request->getPost('nomortlp');
    $id = $this->request->getPost('id');

    $data = array(
        'nama_lengkap'=> $a,
		'jk' => $b,
		'umur' => $c,
		'No_tlp' => $d
    );

    $where = array('id_ptgs' => $id);

    $lambalabu = new tiffanylovejulio();
    $lambalabu->edit('petugas', $data, $where);
    return redirect()->to('home/petugas');
}
public function hapus_petugas($id)
{
    $tiffany = new tiffanylovejulio();
    $data = array('id_ptgs' => $id);
    $tiffany->hapus('petugas', $data);
    return redirect()->to('home/petugas');
}









	public function peminjam()
	{
		$tiffany = new tiffanylovejulio();
		$data['mor']= $tiffany->julio('peminjam');

		echo view('header');
		echo view('peminjam',$data);
		echo view('footer');
	}
	public function t_peminjam()
	{
		$tiffany = new tiffanylovejulio();
		$data['gawk']= $tiffany->julio('peminjam');

		echo view('header');
		echo view('t_peminjam',$data);
		echo view('footer');
	}
	public function aksi_t_peminjam()
     {
		$a = $this->request->getPost('nm');
		$b = $this->request->getPost('almt');
		$c = $this->request->getPost('nomortlp');

		$data=array(

			'nama' => $a,
			'alamat' => $b,
			'no_tlp' => $c
		);

		$lambalabu = new tiffanylovejulio();
		$lambalabu->tambah('peminjam', $data);
		return redirect()->to('home/peminjam');


	}
	public function e_peminjam($id)
{
    $tiffany = new tiffanylovejulio();
    $where = array('id_peminjam' => $id);
    $data['felix'] = $tiffany->ambalabu('peminjam', $where);

    echo view('header');
    echo view('e_peminjam', $data);
    echo view('footer');
}


	public function aksi_e_peminjam()
{
   $a = $this->request->getPost('nm');
		$b = $this->request->getPost('almt');
		$c = $this->request->getPost('nomortlp');
		$id = $this->request->getPost('id');

		$data=array(

			'nama' => $a,
			'alamat' => $b,
			'no_tlp' => $c
		);


    $where = array('id_peminjam' => $id);

    $lambalabu = new tiffanylovejulio();
    $lambalabu->edit('peminjam', $data, $where);
    return redirect()->to('home/peminjam');
}
public function hapus_peminjam($id)
{
    $tiffany = new tiffanylovejulio();
    $data = array('id_peminjam' => $id);
    $tiffany->hapus('peminjam', $data);
    return redirect()->to('home/peminjam');
}












	
	public function peminjaman()
	{
		$tiffany = new tiffanylovejulio();
		$data['vira']= $tiffany->julio('peminjaman');

		echo view('header');
		echo view('peminjaman',$data);
		echo view('footer');
	}
	public function t_peminjaman()
	{
		$tiffany = new tiffanylovejulio();
		$data['buf']= $tiffany->julio('peminjaman');

		echo view('header');
		echo view('t_peminjaman',$data);
		echo view('footer');
	}
	public function aksi_t_peminjaman()
     {
		$a = $this->request->getPost('peminjam');
		$b = $this->request->getPost('tanggal');

		$data=array(

			'nama_peminjam' => $a,
			'tanggal_peminjaman' => $b
		);

		$lambalabu = new tiffanylovejulio();
		$lambalabu->tambah('peminjaman', $data);
		return redirect()->to('home/peminjaman');


	}
	public function e_peminjaman($id)
{
    $tiffany = new tiffanylovejulio();
    $where = array('id_peminjaman' => $id);
    $data['felix'] = $tiffany->ambalabu('peminjaman', $where);

    echo view('header');
    echo view('e_peminjaman', $data);
    echo view('footer');
}


	public function aksi_e_peminjaman()
{
  		$a = $this->request->getPost('peminjam');
		$b = $this->request->getPost('tanggal');

		$data=array(

			'nama_peminjam' => $a,
			'tanggal_peminjaman' => $b
		);


    $where = array('id_peminjaman' => $id);

    $lambalabu = new tiffanylovejulio();
    $lambalabu->edit('peminjaman', $data, $where);
    return redirect()->to('home/peminjaman');
}
public function hapus_peminjaman($id)
{
    $tiffany = new tiffanylovejulio();
    $data = array('id_peminjaman' => $id);
    $tiffany->hapus('peminjaman', $data);
    return redirect()->to('home/peminjaman');
}












	public function pengembalian()
	{
		$tiffany = new tiffanylovejulio();
		$data['tukam']= $tiffany->julio('pengembalian');

		echo view('header');
		echo view('pengembalian',$data);
		echo view('footer');
	}
	public function t_pengembalian()
	{
		$tiffany = new tiffanylovejulio();
		$data['bu']= $tiffany->julio('pengembalian');

		echo view('header');
		echo view('t_pengembalian',$data);
		echo view('footer');
	}
	
	public function aksi_t_pengembalian()
     {
		$a = $this->request->getPost('namabuk');
		$b = $this->request->getPost('tgldikem');
		$c = $this->request->getPost('stat');

		$data=array(

			'nama_buku' => $a,
			'tanggal_dikembalikan' => $b,
			'status' => $c
		);

		$lambalabu = new tiffanylovejulio();
		$lambalabu->tambah('pengembalian', $data);
		return redirect()->to('home/pengembalian');


	}
	public function e_pengembalian($id)
{
    $tiffany = new tiffanylovejulio();
    $where = array('id_pengembalian' => $id);
    $data['felix'] = $tiffany->ambalabu('pengembalian', $where);

    echo view('header');
    echo view('e_pengembalian', $data);
    echo view('footer');
}


	public function aksi_e_pengembalian()
{
        $a = $this->request->getPost('namabuk');
		$b = $this->request->getPost('tgldikem');
		$c = $this->request->getPost('stat');
$id = $this->request->getPost('id');

		$data=array(

			'nama_buku' => $a,
			'tanggal_dikembalikan' => $b,
			'status' => $c
		);


    $where = array('id_pengembalian' => $id);

    $lambalabu = new tiffanylovejulio();
    $lambalabu->edit('pengembalian', $data, $where);
    return redirect()->to('home/pengembalian');
}
public function hapus_pengembalian($id)
{
    $tiffany = new tiffanylovejulio();
    $data = array('id_pengembalian' => $id);
    $tiffany->hapus('pengembalian', $data);
    return redirect()->to('home/pengembalian');
}

}