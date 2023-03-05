<script>
    $(document).ready(function() {
        $('#idNamaMK').on('click', function() {
            alert("Halloo ... ");
        
    }); 

         $('.cUniv').on('click', function() {
            alert("Hollaa ... ");

    });

    $('#form-data').on("submit", function(e) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>index.php/sekolah/SaveData",
            data: $(e.target).serialize(),
            dataType: "json",
            beforeSend: function() {
               
              },
              error: functon(jqXHR, textStatus, errorThrown) {
                alert(errorThrow);
              },
              success: function(dt) {
                if(dt.status=='ERROR'){

                    alert(dt.pesan);
                }else{
                    alert("Data berhasil disimpan");
                    $('#form_data').trigger("reset");       
                }
              }
            });
            return false;
        });
    });
</script>

<h1 id='idNamaMK'>Webdim</h1>
<h1 class= 'cUniv'>UAI</h1>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Sekolah</h1>
                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                                    <div class="dropdown no-arrow">
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                

<form class='user' name="form-kirim" method="POST">
    <div class="form-group">
        NPSN <input type="text" class="form-control form-control-user" name="npsn">
    </div>
    <div class="form-group">
        Nama Sekolah <input type="text" class="form-control form-control-user" name="nama_sekolah">
    </div>
    <div class="form-group">
        Status <input type="text" name="status" class="form-control form-control-user">
    </div>
    <div class="form-group">
        Alamat <input type="text" name="alamat" class="form-control form-control-user">
    </div>

<input type="submit" class="btn btn-primary btn-user btn-block" name="kirim" value="Simpan Data" >
</form>
                                </div>
                            </div>

                             <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">List Data Sekolah</h6>
                                    <div class="dropdown no-arrow">
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <table class='table'>
                                    <thead>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Sekolah</th>
                                        <th>Status</th>
                                        <th>Alamat</th>
                                        <th>Proses</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $getSekolah = $this->msekolah->loadData();
                                        if($getSekolah->num_rows() ==0){
                                            echo"<tr><td colspan=7>Belum ada data</td></tr>";
                                        }else{
                                            $i=1;
                                            foreach($getSekolah->result() as $r){
                                            $btnProses = '<span class="btn btn-primary btn-icon-split btn-sm">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                    </span>
                                                    <span class="text">Edit</span>
                                                    </span>

                                                    <span class="btn btn-danger btn-icon-split btn-sm">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Delete</span>
                                                    </span>

                                                    ';

                                            echo"<tr>
                                                <td>$i</td>
                                                <td>$r->NPSN</td>
                                                <td>$r->Nama Sekolah</td>
                                                <td>$r->Status</td>
                                                <td>$r->Alamat</td>
                                                <td>$btnProses</td>
                                        </tr>";
                                        $i++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>



                                </div>
                            </div>
                        </div>

                      
                    </div>