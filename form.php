
<h2>Form Biodata Diri</h2>

        <form action="" method="POST">
            <table>

                <tr>
                    <td>Nama</td>
                     <td>:</td>
                        <td> <input type="text" name="Nama" id=""> </td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                     <td>:</td>
                        <td> <input type="text" name="TempatLahir" id=""> </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                     <td>:</td>
                        <td> <input type="date" name="TanggalLahir" id=""> </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                     <td>:</td>
                        <td><input type="text" name="jk[]" id=""></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                     <td>:</td>
                        <td> <textarea name="Alamat"> </textarea>
                         </td>
                </tr>

                <tr>
                    <td>Agama</td>
                     <td>:</td>
                        <td> <select name ="agama">
                        <OPtion>Islam</OPtion>
                        <Option>Kristen</Option>
                        <Option>Budha</Option>
                        <Option>Hindu</Option>
                        <Option>Katolik</Option>
                        
                         
                        
                        
                        
                        </select></td>
                </tr>

                <tr>
                    <td>Pendidikan</td>
                     <td>:</td>
                        <td> <select name ="Pendidikan"> 
                        <option ></option>
                        <Option> SD</Option>
                        <Option> SMP</Option>
                        <Option> SMK</Option> 
                        <Option> SMA</Option>
                        <Option> MTS</Option>
                        </select>
                </tr>

                <tr>
                    <td>Status</td>
                     <td>:</td>
                        <td> <select name ="Status"> 
                        <option > </option>
                        <Option>  Pelajar</Option>
                        <Option>Cerai</Option>
                        <Option>Janda</Option>
                        <Option>Duda</Option>
                      
                        
                        
                        
                        </select> </td>
                </tr>

                <tr>
                       <td>Hobi</td>
                       <td>:</td>
                       <td><input type="checkbox" name="Hobi" value="Basket">Basket
                       <input type="checkbox" name="Hobi" value="Basket">Basket
                       </td>
                       
                </tr>
        
                <tr>
                    <td>Cita-Cita</td>
                     <td>:</td>
                     <td><select name ="Cita-Cita"> 
                     <option ></option>
                     <Option>Pilot</Option>
                     <Option>Polisi</Option>
                     <Option>Tentara</Option>
                     <Option>Nakoda</Option>
                        
                        </select></td>
                </tr>

                <tr>
                    <td>Motivasi</td>
                     <td>:</td>
                     <td><textarea name="motivasi"> </textarea></td>
                </tr>

                

        <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="Simpan" value="Kirim"></td>
        </tr>

        </table>
        </form>
</body>
</html>

<?php
 if (isset($_POST['Simpan'])) {
     $nama = $_POST ['Nama'];
     $tempat_lahir =$_POST['TempatLahir'];
     $tanggal_lahir= $_POST['TanggalLahir'];
     $jeniskelamin = $_POST['JenisKelamin'];
     $alamat = $_POST ['Alamat'];
     $agama =$_POST['agama'];
     $pendidikan =$_POST['Pendidikan'];
     $status =$_POST['Status'];
     $hobi =$_POST['Hobi'];
     $cita_cita =$_POST['Cita-Cita'];
     $motivasi =$_POST['motivasi'];

     echo "Nama : $nama <br>";
     echo "Tempat Lahir : $tempat_lahir<br>";
     echo "Tanggal Lahir : $tanggal_lahir<br>";
     echo "Jenis Kelamin : $jeniskelamin<br>";
     echo "Alamat : $alamat<br>";
     echo "Agama : $agama<br>";
     echo "Pendidikan : $pendidikan<br>";
     echo "Status : $status<br>";
     echo "Hobi : $hobi<br>";
     echo "Cita-Cita : $cita_cita<br>";
     echo "Motivasi : $motivasi";
 }
?>