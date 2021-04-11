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
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Tugas Form - Praktikum 2</h2>
                    <form action="nilai_siswa.php" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nama">Nama :</label>
                                    <input class="input--style-4" type="text" name="nama" id="nama" placeholder="Masukan Nama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nama">Nim : </label>
                                    <input class="input--style-4" type="text" name="nim" id="nim" placeholder="Masukan NIM">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label">Mata Kuliah : </label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="matkul" id="matkul">
                                          <option value="Pemrograman Web">Pemrograman Web</option>
                                          <option value="Jaringan Komputer">Jaringan Komputer</option>
                                          <option value="Basis Data">Basis Data</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nilai_tugas">Nilai Tugas : </label>
                                    <input class="input--style-4" name="nilai_tugas" id="nilai_tugas" type="text" placeholder="Masukan Nilai Tugas">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nilai_uts">Nilai UTS :</label>
                                    <input class="input--style-4" type="text" name="uts" id="uts" placeholder="Masukan Nilai UTS">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nilai_uas">Nilas UAS :</label>
                                    <input class="input--style-4" type="text" name="uas" id="uas" placeholder="Masukan Nilai UAS">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <input type="submit" class="btn btn--radius-2 btn--blue" value="SIMPAN" name="proses">
                        </div>
                    </form>
                </div>
            </div>
            <div>© 2021 Seli Mulyani</div>
        </div>
    </div>
    
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/global.js"></script>
</body>
</html>
