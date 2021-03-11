<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="Nama">Name</label>
                    <input id ="Nama" type="text" name="nama" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="NIM">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="Mata_Kuliah">Lesson</label>
                <select class="form-select form-control" name ="mata_kuliah" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Pemrograman Web">Web Programming</option>
                    <option value="Basis Data">Database</option>
                    <option value="Statistik">Statiska</option>
                    <option value="PPKN">PKN</option>
                    <option value="UI UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for="Nilai_UTS"> UTS Value</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Nilai_UAS">UAS Value</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Nilai_Tugas">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>
            </div>
            
            <?php
            if ($_GET)
            {

                @$nama = $_GET['nama'];
                @$nim = $_GET['nim'];
                @$matakuliah = $_GET['mata_kuliah'];
                @$nilaiuts = $_GET['nilai_uts'];
                @$nilaiuas = $_GET['nilai_uas'];
                @$nilaitugas = $_GET['nilai_tugas'];
                @$totalnilai = $nilaiuts + $nilaiuas + $nilaitugas;
                @$alphabet= $totalnilai / 3;
                if ($alphabet >= 85){
                    $grade = "A";
                }elseif ($alphabet >= 70)
                {   $grade = "B";
                }elseif ($alphabet >= 60)
                {   $grade = "C";
                }elseif ($alphabet >= 40)
                {   $grade = "D";
                }else{
                    $grade = "E";
                }
                if ( isset ($_GET["nama"]) 
                AND ($_GET["nim"]) 
                AND ($_GET["mata_kuliah"])
                AND ($_GET["nilai_uts"]) 
                AND ($_GET["nilai_uas"])  
                AND ($_GET["nilai_tugas"])){

                }else{
                    echo "Tolong lengkapi Form ini terlebih dahulu ";
                }
            }
            ?>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?php echo @$nama ?> </li>
                    <li class="list-group-item">Nim : <?php echo @$nim ?> </li>
                    <li class="list-group-item">Lesson: <?php echo @$matakuliah ?> </li>
                    <li class="list-group-item"> UTS Value : <?php echo @$nilaiuts?> </li>
                    <li class="list-group-item">UAS Value: <?php echo @$nilaiuas ?> </li>
                    <li class="list-group-item">Assignment Value : <?php echo @$nilaitugas ?> </li>
                    <li class="list-group-item">Value Total: <?php echo @$alphabet ?>  </li>
                    <li class="list-group-item">Value in Alphabet: <?php echo @$grade ?> </li>
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C : 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>   
                </ul>
                </div>
        </div>
        
    </div>
</body>
</html>