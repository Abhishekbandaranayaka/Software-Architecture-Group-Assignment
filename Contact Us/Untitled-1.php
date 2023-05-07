<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="Untitled-1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  </head>
  <body>
  <?php include('../navbar.php')?>
<br>
<br>
<br>

    <br>
    <header>
      <h1>Contact Us</h1>
    </header>
    <main>
      <section class="contact">
        <div class="container">
          <div class="row">
            <div class="col">
              <h2>Get in Touch</h2>
              <p>Fill out the form below to send us a message:</p>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" required />
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" required />
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <div class="col">
              <h2>Contact Info</h2>
              <hr>
              <br>
              <br>
              <address>
                Tell : +94112345678
                <br>
                <br>
                Mail : tectrans@gmail.com
              </address>
              <br>
              <hr>
              <br>
              
              <ul class="social-icons">
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <?php include('../footerHTML.php')?>
  </body>
</html>
