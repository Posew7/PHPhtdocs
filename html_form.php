<form action="get.php" method="get" enctype="multipart/form-data">

    Ad: <br>
    <input type="text" name="ad">
    <hr>
    Nick: <br>
    <input type="text" readonly value="posew7" name="nick">
    <hr>
    Hakkımda: <br>
    <textarea name="hakkimda" required placeholder="neler yaparsın?" cols="50" rows="5"></textarea>
    <hr>
    Meslek: <br>
    <select name="" id="">
        <option>--seç--</option>
        <option value="öğrenci">öğrenci</option>
        <option value="doktor">doktor</option>
        <option value="avukat">avukat</option>
    </select>
    <hr>
    Cinsiyet: <br>
    <label>
        <input type="radio" value="erkek" name="cinsiyet">
        erkek
    </label>
    <label>
        <input type="radio" value="kadın" name="cinsiyet">
        kadın
    </label>
    <hr>
    İlgi Alanları: <br>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="php">php
    </label>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="html">html
    </label>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="css">css
    </label>
    <hr>
    Fotoğraf: <br>
    <input type="file" name="fotoğraf">
    <hr>
    <button type="submit">SUBMIT</button>
</form>