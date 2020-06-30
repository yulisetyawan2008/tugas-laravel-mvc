<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
      @csrf
      <label for="first_name"> First Name </label><br><br>
      <input type="text" id="first_name" name="nama_awal"><br>
      <br>
      <label for="last_name"> Last Name</label><br><br>
      <input type="text" id="last_name" name="nama_akhir"> <br>
      <br>
      <label>Gender</label><br><br>
      <input type="radio" name="gender" value="0"> Male <br>
      <input type="radio" name="gender" value="1"> Female <br>
      <br>
      <label>Nationality</label> <br>
      <br>
      <select>
        <option value="0">Indonesian</option>
        <option value="1">Singaporean</option>
        <option value="2">Australian</option>
        <option value="3">Malaysian</option>
      </select>
      <br>
      <br>
      <label>Language Spoken</label> <br>
      <br>
      <input type="checkbox" name="language" value="0"> Bahasa Indonesia <br>
      <input type="checkbox" name="language" value="1"> English <br>
      <input type="checkbox" name="language" value="2"> Other <br>
      <br>
      <label>Bio</label><br>
      <textarea cols="30" rows="10"></textarea><br>
      <br>
      <input type="submit" value="Sign Up">
    </form>
</body>
</html>