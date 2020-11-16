<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
   <form action="hasil_hitung.php" method="POST">
       <table border="1">
           <tr>
               <td>Angka 1 :</td>
               <td><input type="text" name="angka_1"></td>
           </tr>
           <tr>
               <td>Angka 2:</td>
               <td><input type="text" name="angka_2"></td>
           </tr>
           <tr>
               <td>Pilih Operator :</td>
               <td>
                    <input type="radio" name="operasi" value="jumlah"> +
                    <input type="radio" name="operasi" value="kurang"> -
                    <input type="radio" name="operasi" value="bagi"> /
                    <input type="radio" name="operasi" value="kali"> *
               </td>
           </tr>
           <tr>
               <td>&nbsp;</td>
               <td><input type="submit" value="hitung"></td>
           </tr>
       </table>
   </form> 
</body>
</html>