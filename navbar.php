<!DOCTYPE html>
<html lang="en">
  <head>

    
    <!--Icons-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- Own Stylesheet link
    <link rel="stylesheet" href="../CSS/Comment_CSS.css" /> -->
<style>
  /* nav bar background clour edit */
.bg{
	background-color: rgba(95, 71, 24, 0.48);

    
  }
  .navbar-brand{
	margin: 0;
  }
	/* point viwe edit */
  #navbarSupportedContent li a:hover{
	padding: 20px 15px;
	  background: white;
	  transition: 0.5s;
	  text-transform: uppercase;
	  text-decoration: none;
	  border-radius: 15px;
	  border: white;
	  border-radius: 9px;
    color: #3A2000;

	
  }
 
  
.logotext{
    font-size: 50px;;
    font-family: Caladea;;
    font-weight: Regular;
    color: #3A2000;

}

  .nav-item{
	font-size: 18px;;
    color: #3A2000;
    padding-right: 35px;
   
    
  }
 
  ul li a
  {
     text-decoration:none;
     font-size:16px;
     display:block;
     text-align:center;
     padding:10px;
     border-radius:20px;
     color:#3A2000;
   

  }

  ul :hover li{
    color: #3A2000;
  }


  ul li ul :hover li
  {
     
    display:block;
    color: #3A2000;
  }


  ul li ul li :hover a
  {
     
    color: #3A2000;
  }

  ul li:hover ul
  {
    display:block;
    opacity: 1;
    visibility:visible;
  }

  ul ul ul li
  {
    display:none;

  }


  ul ul ul
  {
    left:100%
  }


.navbuttons{
  padding-right: 50px;
}
 
</style>

    
  </head>
  <body>

  <!-- start of navigation bar -->
  <!-- navigatin background design -->
  <div id="nav"></div>
  <nav class="navbar navbar-expand-sm navbar-dark bg fixed-top">
   
    <div class="container-fluid">
     
      <!-- company logo -->
        
          <div class="logotext">
            | Tactile translator |
          </div>
       
        
          <!-- navigation bar icon list and buttons -->
         
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       
          <!-- toggler button bootstrap -->
             
          <span class="navbar-toggler-icon"></span>
        
        </button>
           <div class="navbuttons">
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                
              <ul class="navbar-nav me-auto mb-2 mb-lg-0" >

                    <li class="nav-item">

                        <a class="nav-link" aria-current="page" href="../Home Page/Home.php" >&nbsp&nbsp&nbsp&nbspHOME&nbsp&nbsp&nbsp</a>

                    </li>


              
                    <!-- dropdown icon -->
               
               <li class="nav-item dropdown">
                
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">DASHBOARD</a>        
                
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgba(141, 128, 102, 0.48)">
                          
                        <li><a href="../Shapes/index.php">SHAPES</a></li>
                        <li><a href="../Transletter/Transletter.php">TEXT</a></li>
                  
                
                      </ul>


                </li>
                <li class="nav-item">

                    <a class="nav-link" href="../Contact Us/Untitled-1.php" tabindex="-1" aria-disabled="true">&nbspCONTACT&nbsp</a>

              </li>

                </div>
              
              </div>    
   </nav>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   -->
    <!-- end of navigation bar -->


  </div>
  </body>
</html>