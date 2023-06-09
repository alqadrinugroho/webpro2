<!doctype html>
<html lang="en">
  <head>
    <title>Form Mata Kuliah</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>
    <center>
     <form action="<?=base_url('matakuliah/cetak/');?> " method="post">
        <table>
          <tr>
            <th colspan="3">Form Input Data Mata Kuliah</th>
          </tr>
          <tr>
            <td colspan="3"><hr></td>
          </tr>
          <tr>
            <th>Kode MTK</th>
            <th>:</th>
            <td>
              <input type="text" name="kode" id="kode">
            </td>
          </tr>
          <tr>
            <th>Nama MTK</th>
            <td>:</td>
            <td>
              <input type="text" name="nama" id="nama">
            </td>
          </tr>
          <tr>
            <th>SKS</th>
            <td>:</td>
            <td>
              <select name="sks" id="sks">
                <option value="">Pilih SKS</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="3" align="center">
              <input type="submit" value="Submit">
            </td>
          </tr>
        </table>
      </form>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
