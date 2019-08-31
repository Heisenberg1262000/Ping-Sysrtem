
<style>
.div1{
    border-radius: 20px;
    border: 2px solid black;
    padding-left: 200px;
    background-color: D3D3D3;
}
</style>

<!DOCTYPE html>
<html>
<head>
 <title>SurveyForm</title>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<center><h1>Survey Form</h1></center>
<div class="div1">
<form action="SurveyBack.php" class= "w3-padding" method="POST">
 <label for="field">1) Select your Interests from the given Fields<label>
 <ul style="list-style: none; LINE-HEIGHT:30px;" >
 <li class="w3-text-indigo"><input type="radio" name="field" value="Cricket" id="field">Cricket</li>
 <li class="w3-text-indigo"><input type="radio" name="field" value="Movies" id="field">Movies</li>
 <li class="w3-text-indigo"><input type="radio" name="field" value="Music" id="field">Music</li>
 </ul>
<hr>
 <label for="field1">2) Who among the  following would you give the highest preference to meet</label>
 <ul style="list-style: none; LINE-HEIGHT:30px;">
 <li class="w3-text-indigo"><input type="radio" name="field1" value="Cricket" id="field1">Kapil Dev</li>
 <li class="w3-text-indigo"><input type="radio" name="field1" value="Movies" id="field1">Vijay</li>
 <li class="w3-text-indigo"><input type="radio" name="field1" value="Music" id="field1">Devi Sri Prasad</li>
 </ul>
 <hr>
 <label for="field2">3) Who among the following you would die to meet</label>
 <ul style="list-style: none; LINE-HEIGHT:30px;">
 <li class="w3-text-indigo"><input type="radio" name="field2" value="Cricket" id="field2">Sachin Tendulkar</li>
 <li class="w3-text-indigo"><input type="radio" name="field2" value="Movies" id="field2">Atharva</li>
 <li class="w3-text-indigo"><input type="radio" name="field2" value="Music" id="field2">Hip Hop Thamizha</li>
 </ul>
 <hr>
 <label for="field3">4) Who among the  following you would die to meet</label>
 <ul style="list-style: none; LINE-HEIGHT:30px;">
 <li class="w3-text-indigo"><input type="radio" name="field3" value="Cricket" id="field3">Sreesanth</li>
 <li class="w3-text-indigo"><input type="radio" name="field3" value="Movies" id="field3">Soori</li>
 <li class="w3-text-indigo"><input type="radio" name="field3" value="Music" id="field3">AR Rahman</li>
 </ul>
 <hr>
 <button type="submit" name="submit" value="submit">SUBMIT</button> 
</form>
</div>
</body>
</html>
