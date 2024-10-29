<?php
require_once 'App/Models/User.php';

class UserController
{
    private $userModel;

    public function __construct($dbConnection)
    {
        $this->userModel = new Users($dbConnection);
    }



    public function show($id)
    {
        // Mengambil data pengguna dari model
        $user = $this->userModel->getUserById($id);

        // Meneruskan data pengguna ke view
        require_once 'App/Views/userDetailView.php'; //perubahan di sebelah sini userView.php
    }

    public function index()
    {
        // Memanggil semua data pengguna dari model
        $users = $this->userModel->getAllUsers();

        // Meneruskan data pengguna ke view daftar
        require_once 'App/Views/userListView.php';
    }

    public function store()
    {
        // Ambil data dari form
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        // Simpan data ke database
        $this->userModel->createUser($nama, $email);

        // Redirect ke halaman daftar pengguna
        header('Location: index.php');
    }


    // sampai sini
    public function edit($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $user = $this->userModel->getUserById($id);

        // Meneruskan data pengguna ke form edit
        require_once 'App/Views/editUserView.php';
    }

    public function update($id)
    {
        // Ambil data yang diperbarui dari form
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        // Panggil fungsi update di model untuk memperbarui data
        $this->userModel->updateUser($id, $nama, $email);

        // Redirect ke halaman daftar pengguna
        header('Location: index.php');
    }


    public function delete($id)
    {
        // Panggil fungsi deleteUser di model untuk menghapus data
        $this->userModel->deleteUser($id);

        // Redirect kembali ke halaman daftar pengguna
        header('Location: index.php');
        exit();
    }
}
