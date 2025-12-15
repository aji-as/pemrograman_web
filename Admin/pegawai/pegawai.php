<?php

require_once "../config.php";
$keyword = $_POST['keyword'];
$category = $_POST['category'];



if (empty($keyword)) {
    $n = 0;
    $data = $koneksi->query("SELECT * FROM pegawai ORDER BY nik LIMIT 5");
} else {
    $n = 0;
    if ($category == 1) {
        $data = $koneksi->query("SELECT * FROM pegawai WHERE nik LIKE '%$keyword%'");
    } elseif ($category == 2) {
        $data = $koneksi->query("SELECT * FROM pegawai WHERE nama LIKE '%$keyword%'");
    } elseif ($category == 3) {
        $data = $koneksi->query("SELECT * FROM pegawai WHERE gender LIKE '%$keyword%'");
    } 
}



?>

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Data Pegawai</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
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
                  <!--begin::Card Header-->
                  <div class="card-header">
                    <!--begin::Card Title-->
                    <h3 class="card-title">Data Pegawai</h3>
                    <!--end::Card Title-->
                    <!--begin::Card Toolbar-->
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                    <!--end::Card Toolbar-->
                  </div>
                  <!--end::Card Header-->
                  <!--begin::Card Body-->
                  <div class="card-body p-4">
                     <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->

                      <!-- Button trigger modal -->
                    
                      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Pegawai
                      </button> -->
                     <div class="d-flex justify-content-between align-items-center mb-3">
                        <table>
                <tr>
                    <td>
                        <a href="./?p=add-pegawai" class="btn btn-success btn-sm">Tambah Pegawai</a>
                    </td>
                    <td>
                        <form method="post" action="#">
                            <input type="text" name="keyword" placeholder="Keyword"
                                class="form-control"
                                style="width:300px; display:inline;"
                                value="<?=$keyword?>" />

                            <select name="category">
                                <option value="1" <?php if ($category==1) echo "selected"; ?>>nik</option>
                                <option value="2" <?php if ($category==2) echo "selected"; ?>>Nama</option>
                                <option value="3" <?php if ($category==3) echo "selected"; ?>>Gender</option>
                            </select>
                            <input type="reset" name="reset" value="Reset" class="btn btn-secondary btn-sm" />
                            <input type="submit" value="Search" class="btn btn-primary btn-sm" />
                        </form>
                    </td>
                </tr>
                </table>

                    </div>
                    
                      <table class=" table table-striped ">
                        <tr><th>No</th><th>Nama</th><th>Gender</th><th>NIK</th><th>NO HP</th><th>Opsi</th></tr>
                        <?php
                            if ($data->num_rows == 0){
                                echo "<tr><td colspan='6' class='text-center'>Data tidak ditemukan</td></tr>";
                            }else{
                               foreach ($data as $d) { 
                                $n++;
                                 echo "<tr>
                                          <td>$n</td>
                                          <td>$d[nama]</td>
                                          <td>$d[gender]</td>
                                          <td>$d[nik]</td>
                                          <td>$d[hp]</td>
                                          <td class=' gap-2'>
                                              <a href='./?p=detail-pegawai&id=$d[id]' class='btn btn-info'>Detail</a>
                                              <a href='./?p=hapus-pegawai&id=$d[id]' class='btn btn-danger'>Hapus</a>
                                              <a href='./?p=edit-pegawai&id=$d[id]' class='btn btn-warning'>Edit</a>
                                          </td>
                                        </tr>";
                            } 
                            }
                                                  ?>
                      </table>



        
                    <!--end::Row-->
                  </div>
                  <!--end::Card Body-->
                </div>
                <!--end::Card-->
                
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>