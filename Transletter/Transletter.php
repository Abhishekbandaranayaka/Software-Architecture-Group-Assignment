<!DOCTYPE html>
<html>
<head>
 <title>Braille Converter</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
 <style>
    .container {
   margin-top: 20px;
   color:  rgb(71, 59, 45);;
  }
  .form-group {
   margin-bottom: 20px;
   color:  rgb(71, 59, 45);
   font-size: 14px;
   

  }
  .btn-custom {
  background-color: rgb(71, 58, 42);
  color: white;
  text-align: center;

}
.para{
    text-align: center;
}
 </style>
</head>
<body>
<?php include('../navbar.php')?>
<br>
<br>
<br>
<br>
 <div class="container">
  <h1>Text</h1>
  <form>
   <div class="form-group">
    <label for="text-input">Enter English text to convert:</label>
    <input type="text" class="form-control" id="text-input">
   </div>

   <div class="para"><button type="button" class="btn btn-custom " onclick="convertText()">Convert</button></div><br><br>
   <div class="form-group">
    <label for="braille-output">Braille output:</label>
    <textarea class="form-control" rows="5" id="braille-output"></textarea><br><br>
   <div class="para"><p>To obtain a printed copy of the converted result from Tactile Translate, you can click on the designated<br>
        "Print" button provided on the screen. This will initiate the printing process and generate a braille 
       <br> printout of the converted result.</p><br>
       <button type="button" class="btn btn-custom" onclick="convertText()">Print</button></div>
    </div>
   
  </form>
 </div>
 <script>
  function convertText() {
   var inputText = document.getElementById("text-input").value;
   var outputText = "";
   var brailleMap = {
    a: "⠁", b: "⠃", c: "⠉", d: "⠙", e: "⠑",
    f: "⠋", g: "⠛", h: "⠓", i: "⠊", j: "⠚",
    k: "⠅", l: "⠇", m: "⠍", n: "⠝", o: "⠕",
    p: "⠏", q: "⠟", r: "⠗", s: "⠎", t: "⠞",
    u: "⠥", v: "⠧", w: "⠺", x: "⠭", y: "⠽", z: "⠵"
   };
   inputText = inputText.toLowerCase();
   for (var i = 0; i < inputText.length; i++) {
    var char = inputText.charAt(i);
    if (brailleMap.hasOwnProperty(char)) {
     outputText += brailleMap[char];
    } else {
     outputText += char;
    }
   }
   document.getElementById("braille-output").value = outputText;
  }
 </script>
<?php include('../footerHTML.php')?>
</body>
</html>