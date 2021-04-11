<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Praktikum Form PHP</title>
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Nilai Siswa</h2>
                    <table class="table table-bordered table-hover mt-2">
                    <thead bgcolor="#bbcdf2">
                        <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Nim</th>
                              <th scope="col">Mata kuliah</th>
                              <th scope="col">UTS</th>
                              <th scope="col">UAS</th>
                              <th scope="col">Tugas</th>
                              <th scope="col">Nilai Akhir</th>
                              <th scope="col">Grade</th> 
                              <th scope="col">Keterangan</th>                           
                          </tr>
                      </thead>
                      <tbody>
                          <?php 
                              $proses = $_POST['proses'];
                              $nama = $_POST['nama'];
                              $nim = $_POST['nim'];
                              $matkul = $_POST['matkul'];
                              $nilai_uts = $_POST['uts'];
                              $nilai_uas = $_POST['uas'];
                              $nilai_tugas = $_POST['nilai_tugas'];

                              $total_nilai = (0.25*(int)$_POST['uts'])+(0.5*(int)$_POST['uas'])+(0.25*(int)$_POST['nilai_tugas']);
                                  if ($total_nilai >= 6.0) {
                                    $keterangan = 'Lulus';
                                  } else {
                                    $keterangan = 'Tidak Lulus';
                                  }                        

                                  if($total_nilai >= 8.5){
                                  $grade = "A";
                                  }
                                  elseif($total_nilai >= 8.0 && $total_nilai <= 8.4){
                                  $grade = "B";
                                  }
                                  elseif($total_nilai >= 6.0 && $total_nilai < 8.0){
                                      $grade = "C";
                                  }
                                  elseif($total_nilai >= 4.0 && $total_nilai < 6.0){
                                      $grade = "D";
                                  }
                                  else{
                                      $grade = "E";
                                  }                            
                                  
                              $nomor = 1;
                              if(!empty($proses)) {
                                  // echo '<td>'.'Proses : '.$proses.'</td>';                          
                                  echo '<tr><td>'.$nomor.'</td>';
                                  echo '<td>'.' '.$nama.'</td>';
                                  echo '<td>'.' '.$nim.'</td>';                            
                                  echo '<td>'.' '.$matkul.'</td>';
                                  echo '<td>'.' '.$nilai_uts.'</td>';
                                  echo '<td>'.' '.$nilai_uas.'</td>';
                                  echo '<td>'.' '.$nilai_tugas.'</td>';
                                  echo '<td>'.' '.$total_nilai.'</td>';
                                  echo '<td>'.' '.$grade.'</td>';
                                  echo '<td>'.' '.$keterangan.'</td>';                                                        
                                }
                          ?>
                      </tbody>
                    </table> 
                </div>
            </div>
            <div>© 2021 Seli Mulyani</div>
        </div>
    </div>
    
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/global.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
