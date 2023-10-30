<!DOCTYPE html>
<html>
<body>
<h2>Form Input</h2>
<form action="input.php" onsubmit="return validateForm()" method="post">
 <label for="Kecamatan">Kecamatan:</label><br>
 <input type="text" id="Kecamatan" name="Kecamatan" value=""><br>
 <label for="Longitude">Luas:</label><br>
 <input type="text" id="Longitude" name="Longitude" value=""><br>
 <label for="Latitude">Latitude:</label><br>
 <input type="text" id="Latitude" name="Latitude" value=""><br>
 <label for="Luas">Luas:</label><br>
 <input type="text" id="Luas" name="Luas" value=""><br>
 <label for="Jumlah Penduduk">Jumlah Penduduk:</label><br>
 <input type="text" id="jumlah_penduduk" name="Jumlah Penduduk" value=""><br><br>
 <input type="submit" value="Submit">
</form>
<p id="informasi"></p>
<script>
function validateForm() {

 let luas = document.getElementById("luas").value;
 let text="";
 if (isNaN(luas) || luas < 1) {
text = "Data luas harus angka dan tidak boleh bernilai negatif";
// stop the form submission
event.preventDefault();
 }
 document.getElementById("informasi").innerHTML = text;
}
</script>
</body>
</html>