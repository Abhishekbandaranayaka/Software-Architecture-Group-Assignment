<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" href="styles.css" />

  <title>App</title>
</head>

<body>
<?php include('../navbar.php')?>
<br>
<br>
<br>
<br>
  <!----------------------------------------------------Start App Body----------------------------------------------------------------->

  <div class="app-body">
    <h2>Shapes</h2>
    <p>Click on the shapes you want and enter the required details</p>

    <div class="boxes">
      <!-- Button to show circle popup -->
      <button class="shape-btn box" data-shape="circle">Circle</button>

      <!-- Button to show triangle popup -->
      <button class="shape-btn box" data-shape="triangle">Triangle</button>

      <!-- Button to show rectangle popup -->
      <button class="shape-btn box" data-shape="rectangle">Rectangle</button>

      </button>

      <div class="button-back"><button class="btn-brown">Back</button></div>
    </div>

    <div class="bottom__text">
      To obtain a printed copy of the converted result from Tactile Translate,
      you can click on the designated "Print' button provided on the screen.
      This will initiate the printing process and generate a braille printout
      of the converted result. If you want to go to the previous page, you can
      click the "Back" button. Then a shape related to any information you
      enter. will not be printed.
    </div>
    <!----------------------------------------------------End App Body----------------------------------------------------------------->

    <!----------------------------------------------------Start Popups----------------------------------------------------------------->


    <!-- Calcuation type popup -->
    <div class="modal fade" id="calc-type" tabindex="-1" role="dialog" aria-labelledby="calc-type">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

          <div class="modal-body">
            <button class="calc-btn" data-calc="area">Area</button>
            <button class="calc-btn" data-calc="perimeter">Perimeter</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-brown" data-dismiss="modal">Close</button>


          </div>
          
        </div>
      </div>
    </div>


    <!-- Circle popup -->
    <div class="modal fade" id="circle-modal" tabindex="-1" role="dialog" aria-labelledby="circle-modal-label">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p class="shape-message">Enter the Radius in the below space to get the value</p>
            <div class="input-fields">

              <table>
                <tr>
                  <td>
                    <label for="circle-radius">Radius</label>
                  </td>
                  <td> : <input type="number" id="circle-radius"></td>
                </tr>
              </table>



            </div>
          </div>
          <div class="modal-footer">

            <button class="btn-brown backtotype">Back</button>
            <button class="btn-brown" id="circle-calc">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Triangle popup -->
    <div class="modal fade" id="triangle-modal" tabindex="-1" role="dialog" aria-labelledby="triangle-modal-label">

      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p class="shape-message">Enter the Base and Height in the below space to get the value</p>
            <div class="input-fields">
              <table>
                <tr>
                  <td> <label for="triangle-base">Base</label></td>
                  <td> : <input type="number" id="triangle-base"><br></td>
                </tr>
                <tr>
                  <td> <label for="triangle-height">Height</label></td>
                  <td> : <input type="number" id="triangle-height"></td>
                </tr>
              </table>



            </div>

          </div>
          <div class="modal-footer">

            <button class="btn-brown backtotype">Back</button>
            <button class="btn-brown" id="triangle-calc">Ok</button>
          </div>
        </div>
      </div>

    </div>

    <!-- Rectangle popup -->
    <div class="modal fade" id="rectangle-modal" tabindex="-1" role="dialog" aria-labelledby="rectangle-modal-label">

      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p class="shape-message">Enter the Base and Height in the below space to get the value</p>
            <div class="input-fields">
              <table>
                <tr>
                  <td><label for="rectangle-length">Length</label></td>
                  <td> : <input type="number" id="rectangle-length"></td>
                </tr>
                <tr>
                  <td> <label for="rectangle-width">Width</label></td>
                  <td> : <input type="number" id="rectangle-width"></td>
                </tr>
              </table>



            </div>
          </div>
          <div class="modal-footer">

            <button class="btn-brown backtotype">Back</button>
            <button class="btn-brown" id="rectangle-calc">Ok</button>
          </div>
        </div>
      </div>

    </div>

    <!-- Result popup -->
    <div class="modal fade" id="result-modal" tabindex="-1" role="dialog" aria-labelledby="result-modal-label">
      <div class="modal-dialog modal-dialog-centered result-model" role="document">
        <div class="modal-content">
          <div class="modal-body result-page">
            <div class="diagram-container">
              <canvas class="diagram"></canvas>
            </div>

            <div class="result">

            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn-brown" data-dismiss="modal">Close</button>
            <button type="button" class="btn-brown" onclick="window.print()">Print</button>

          </div>
        </div>

      </div>
    </div>
    <!----------------------------------------------------End Popups----------------------------------------------------------------->

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="scripts.js"></script>
  <?php include('../footerHTML.php')?>
</body>

</html>