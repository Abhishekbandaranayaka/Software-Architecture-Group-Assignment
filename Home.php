<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500&family=Satisfy&display=swap');
      </style>
    <link rel="stylesheet" href="Home.css">
   
    </style>
    
  </head>
  <body>
    <?php include('../navbar.php')?>
<br>
<br>
<br>
<br>
<center>
    <section id="top">
        <img class="img_deg" src="img/circle.png" />

        <div class="cards">
          <div class="para">
            <h5>
              The only thing worse than being blind is having sight but no vision.
            </h5>
          </div>
          <div class="des">
            <h3>-Helen Keller-</h3>
          </div>
        </div>
    </section>
    </center>


    <div class="card">
      <div class="text">
        <button type="button" id="read" onclick="read()">SHAPE</button>
        <h12><br />CREATE YOUR OWN SHAPE USING BRAILLE</h12>
        <br />
        <h12>Input requirements & get the shape in braille </h12>
      </div>

      <hr />
      <div class="text">
        <button type="button" id="read" onclick="read()">TEXT</button>
        <h12>CREATE YOUR OWN BRAILLE SENTENCE</h12>
        <br />
        <h12>Type a word or sentences to see it written in braille </h12>
      </div>
    </div>

   
  </body>
</html>
