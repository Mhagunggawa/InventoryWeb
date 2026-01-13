<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBarang;
use App\Models\ModelBarangKeluar;

class BarangKeluarController extends BaseController
{
    protected $barang;
    protected $barangKeluar;

    public function __construct()
    {
        $this->barang = new ModelBarang();
        $this->barangKeluar = new ModelBarangKeluar();
    }

    public function index()
    {
        $data['keluar'] = $this->barangKeluar
            ->select('barang_keluar.*, barang.nama_barang')
            ->join('barang', 'barang.id_barang = barang_keluar.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view('admin/barang_keluar/index', $data);
    }

    public function create()
    {
        $data['barang'] = $this->barang->findAll();
        return view('admin/barang_keluar/create', $data);
    }

    public function store()
    {
        try {
            $idUser = session()->get('id_user'); 

            $this->barangKeluar->insert([
                'id_barang' => $this->request->getPost('id_barang'),
                'id_user'   => $idUser,
                'jumlah'    => $this->request->getPost('jumlah'),
                'tanggal'   => date('Y-m-d H:i:s'),
            ]);
            session()->setFlashdata('success', 'Barang keluar berhasil dicatat');
        } 
        catch (\Exception $e) {
            session()->setFlashdata('error', $e->getMessage());
        }

        return redirect()->to('/barang-keluar');
    }

public function delete($id)
{
    $model = $this->barangKeluar;
    $barangModel = $this->barang;
    $data = $model->find($id);

    if (!$data) {
        session()->setFlashdata('error', 'Data tidak ditemukan!');
        return redirect()->back();
    }

    $idBarang = $data['id_barang'];
    $jumlahKeluar = $data['jumlah'];

    $barang = $barangModel->find($idBarang);
    $stokBaru = $barang['stok'] + $jumlahKeluar;

    $barangModel->update($idBarang, ['stok' => $stokBaru]);

    $model->delete($id);

    session()->setFlashdata('success', 'Data barang keluar berhasil dihapus & stok dikembalikan');
    return redirect()->to('/barang-keluar');
}


    public function stafIndex()
    {
        $data['keluar'] = $this->barangKeluar
            ->select('barang_keluar.*, barang.nama_barang')
            ->join('barang', 'barang.id_barang = barang_keluar.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view('staf/barang_keluar/index', $data);
    }

    public function stafCreate()
    {
        $data['barang'] = $this->barang->findAll();
        return view('staf/barang_keluar/create', $data);
    }
}
