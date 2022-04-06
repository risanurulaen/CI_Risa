<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<center><h1>Edit Data</h1>
    <form action="<?= base_url('profile/action_update_data_profile') ?>" method="post">
        <table>
        <tr>
            <td>Nama depan</td>
            <td>:</td>
            <td>

            <input type="hidden" name="id" value="<?=$profile['id'] ?>">
            <input type="text" name="nama_depan" class="form-control" value="<?=
            $profile['nama_depan'] ?>">
            </td>
</tr>
<tr>
    <td>nama_belakang</td>
    <td>:</td>
    <td><input type="text" name="nama_belakang" class="form-control" value="<?=
    $profile['nama_belakang'] ?>"></td>
    </tr>
    <tr>
        <td>tempat lahir</td>
        <td>:</td>
        <td><input type="text"name="tempat_lahir"class="form-control" value="<?=
        $profile['tempat_lahir'] ?>"></td>
        </tr>
        <tr>
            <td>tanggal lahir</td>
            <td>:</td>
            <td><input type="date"name="tanggal_lahir"class="form-control" value="<?=
            $profile['tanggal_lahir'] ?>"></td>
            </tr>
            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
               <td>
                   <input type="radio" name="jenis_kelamin"  value="L" >L
                   <input type="radio" name="jenis_kelamin" value="P">P
</td>
                </tr>
                <tr>
                <td>alamat</td>
                <td>:</td>
                <td><input type="text"name="alamat"class="form-control"value="<?=
                $profile['alamat'] ?>"></td>
                </tr>
                <tr> <td>jenjang pendidikan</td>
                <td>:</td>
               <td>
                   <select name="jenjang_pendidikan" id="" class="form-control">
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK/SMA">SMK/SMA</option>
                        <option value="KULIAH">KULIAH</option>
</select>
</td>
</tr>
<tr>
    <td colspan="3"><hr></td>
</tr>
<tr>
    <td colspan="3" class="text-centre">
        <button type="submit" class="btn btn-primary">simpan</button>
        <a href="" class="btn btn-warning">kembali</a?>
</td>
</tr>
</center>
</table>
</form>
                            
</body>
</html>