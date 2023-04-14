<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <form method="post" action="proses.php">
        Nilai pertama <input type ="text" name = "nilai1"><br><br>
        Nilai kedua   <input type ="text" name = "nilai2"><br><br>
        <select name="attributes[]" multiple>
            <!-- attributes[] pakai array jadi bisa menampung pil1 pil2 pil3 / lebih dari 1 opsi -->
            <option value="pil1">Pilihan 1</option>
            <option value="pil2">Pilihan 2</option>
            <option value="pil3">Pilihan 3</option>
            <option value="pil4">Pilihan 4</option>
        </select><br><br>

        <input type ="Submit" value = "Kirim">
        <input type ="reset" value = "Kosongkan">
    <hr>
    </form>
</body>
</html>