

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Detail mahasiswa</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail mahasiswa</li>
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
                  <div class="">
                  </div>
                  <!--end::Card Header-->
                  <!--begin::Card Body-->
                  <div class="card-body p-4">
                     <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                       <?php
                       require_once "../config.php";
                       $xid = $_GET['id'];
                       $sql = "SELECT * FROM `mhs` WHERE id =' $xid'";
                       $data = $koneksi->query($sql);
                       foreach ($data as $d){
                        switch ($d['prodi']){
                            case 1 :
                                $d['prodi'] = "INF";
                                break;
                            case 2 :
                                $d['prodi'] = "ARS";
                                break;
                            case 3 :
                                $d['prodi'] = "MTK";
                                break;
                            default:
                                "tidak diketahui";
                                break;
                          
                        }
                       echo " <table class='table table-striped'>
                                <tr><td>NIM</td><td>$d[nim]</td></tr>
                                <tr><td>NAMA</td><td>$d[nama]</td></tr>
                                <tr><td>GENDER</td><td>$d[gender]</td></tr>
                                <tr><td>ALAMAT</td><td>$d[address]</td></tr>
                                <tr><td>PRODI</td><td>$d[prodi]</td></tr>
                                
                            </table>";
                       }
                       ?>
                   

                    

                     
                    <!--end::Row-->
                  </div>
                  <!--end::Card Body-->
                </div>
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