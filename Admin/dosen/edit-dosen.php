

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Edit data mahasiswa</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit data mahasiswa</li>
                </ol>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-12">
                <!--begin::Card-->
                    <div class="card">
                    <!--begin::Card Body-->
                    <div class="card-body p-4">
                        <!--begin::Row-->
                        <div class="row">
                        <!--begin::Col-->
            <form action="#" method="post">
                <?php
                    require_once "../config.php";
                    $xid = $_GET['id'];

                    $sql = "SELECT * FROM dosen  WHERE id='$xid'";
                    $data = $koneksi->query($sql);
                    foreach($data as $d){
                        if($d['gender'] == 'L'){
                                $vjkL = "checked";
                            } else {
                                $vjkP = "checked";
                            }

                    if(isset($_POST['simpan'])){
                            $nidn = $_POST['nidn'];
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $jk = $_POST['jk'];
                            $hp = $_POST['hp'];

                            $sql = "UPDATE dosen SET nidn='$nidn', nama='$nama', gender='$jk',  alamat='$alamat', hp='$hp' WHERE id='$xid'";
                            $a = $koneksi->query($sql);

                            if($a){
                                echo "
                                <div class='alert alert-success'>
                                    Berhasil diedit! <a href='./?p=dosen'>Lihat Data!</a>
                                </div>
                                ";
                            }
                        }
                        echo "
                            <table class='table table-bordered table-hover table-striped'>
                                    <tr>
                                        <td>nidn</td>
                                        <td><input type='number' name='nidn' class='form-control' value='$d[nidn]'></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td><input type='text' name='nama' class='form-control' value='$d[nama]'</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <input type='radio' name='jk' value='L' $vjkL>
                                            Laki-laki
                                            <input type='radio' name='jk' value='P' $vjkP >
                                            Perempuan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign='top'>Alamat</td>
                                        <td>
                                            <textarea name='alamat' class='form-control' style='width:300px'>$d[alamat]</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type='text' name='hp' class='form-control' value='$d[hp]'</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type='submit' name='simpan' value='Simpan' class='btn btn-primary'></td>
                                    </tr>
                                </table>
                            ";}
                    ?>

                </form>
                    
                        <!--end::Row-->
                    </div>
                    <!--end::Card Body-->
                    </div>
                </form>
                <!--end::Card-->
              </div>
              <!--end::Col-->
               <div class="col">
                    <a href="./?p=mahasiswa" class="btn btn-info m-10"><< Kembali</a>
                </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>