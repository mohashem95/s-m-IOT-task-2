<?php require 'db.php' ?>
<?php include 'insert.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 30px;
  height: 17px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 13px;
  width: 13px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(13px);
  -ms-transform: translateX(13px);
  transform: translateX(13px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 17px;
}

.slider.round:before {
  border-radius: 50%;
}

.button3 {border-radius: 8px;
  background-color: #2196F3;
  width: 80px;
}

.button4 {border-radius: 8px;
  background-color: red;
  width: 70px;
}

.button2 {border-radius: 8px;
  background-color: #2196F3;
  width: 100px;
}

.button {
  
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
  
  
}
</style>
</head>


<body style="background-color:darkgrey;">
    
<form action="insert.php" method="post" style="margin-right: 70px; margin-top: 40px">
    <div style= "display: flex; justify-content: space-between; width:40%;">
    
    <label style="padding-top: 15px;" for="motor1">المحرك 1</label><br>
    <input type="range" id="motor1" name="motor1" min="0" max="180" oninput="updateV('v1',this.value)" style="width: 300px;"><br>
    <p id="v1">90</p>

    </div>

    <div style= "display: flex; justify-content: space-between; width:40%;">

    <label style="padding-top: 15px;" for="motor2">المحرك 2</label><br>
    <input type="range" id="motor2" name="motor2" min="0" max="180" oninput="updateV('v2',this.value)" style="width: 300px;"><br>
    <p id="v2">90</p>

    </div>

    <div style= "display: flex; justify-content: space-between; width:40%;">

    <label style="padding-top: 15px;" for="motor3">المحرك 3</label><br>
    <input type="range" id="motor3" name="motor3" min="0" max="180" oninput="updateV('v3',this.value)" style="width: 300px;"><br>
    <p id="v3">90</p>

    </div>

    <div style= "display: flex; justify-content: space-between; width:40%;">

    <label style="padding-top: 15px;" for="motor4">المحرك 4</label><br>
    <input type="range" id="motor4" name="motor4" min="0" max="180" oninput="updateV('v4',this.value)" style="width: 300px;"><br>
    <p id="v4">90</p>

    </div>

    <div style= "display: flex; justify-content: space-between; width:40%;">

    <label style="padding-top: 15px;" for="motor5">المحرك 5</label><br>
    <input type="range" id="motor5" name="motor5" min="0" max="180" oninput="updateV('v5',this.value)" style="width: 300px;"><br>
    <p id="v5">90</p>

    </div>

    <div style= "display: flex; justify-content: space-between; width:40%;">

    <label style="padding-top: 15px;" for="motor6">المحرك 6</label><br>
    <input type="range" id="motor6" name="motor6" min="0" max="180" oninput="updateV('v6',this.value)" style="width: 300px;"><br>
   <p id="v6">90</p>

    </div>

  

    <div style="padding-right: 50%; display: flex; justify-content: space-between; width:10%;">
    <p  >تشغيل</p>
    
    
    <div style="padding-top: 15px; padding-left:50%;">
    <label class="switch">
    <input name="checkbox" type="checkbox">
    <span class="slider round"></span>
    </label>
    </div>
    </div>

    

    <div style="padding-right: 50%;">
    <input type="submit" class="btn btn-primary" name="submit" value="حفظ" style="padding-left: 30px; padding-right: 30px;">
    </div>

    </form>

<form action="insert_dir.php" method="post" style="margin-top: 40px; ">
  <div style="padding-right: 13.5%;">
  <input type="submit" class="button button2" name="Forward" value="forward" onclick="dir_insert(this.name)">
  </div>
  <div style="padding-right: 8.2%;">
  <input type="submit" class="button button3" name="Rit" value="right" onclick="dir_insert(this.name)">
  <input type="submit" class="button button4" name="Stop" value="stop" onclick="dir_insert(this.name)">
  <input type="submit" class="button button3" name="Lft" value="left" onclick="dir_insert(this.name)">
  </div>

  <div style="padding-right:  13.5%;">
  <input type="submit" class="button button2" name="Backward" value="backward" onclick="dir_insert(this.name)">
  </div>

  <input type="hidden" name="selected" value=" " id="slc">

  </form>
  
</body>
</html>


<script>
function updateV(v,i){
    document.getElementById(v).innerHTML = i;
}

function dir_insert(selected) {
  document.getElementById("slc").value = selected;
}

</script>