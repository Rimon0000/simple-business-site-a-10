<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <header>
    <!-- navbar  -->
  <section>
    <nav class="navbar header navbar-expand-md navbar-light bg-light">
        <!-- Logo -->
        <a class="nav-logo navbar-brand" href="#">Technologent</a>
        <!-- Hamburger menu button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <!-- Menu items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
  </section>
	</header>
    
  
    <section>
        <h1 class="text-center m-4">Blogs</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
             <div class="col">
               <div class="card h-100">
                 <img src="images/img-1.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h5 class="card-title">How to Build a Successful Career in Tech: Insider Tips from Industry Experts</h5>
                   <p class="card-text">Interested in pursuing a career in tech? Our experts share their insider tips
                     on everything from landing your first job to advancing your career in the 
                     industry. Don't miss out on this valuable advice!.</p>
                     <a href="single_post.php"><button type="button" class="btn btn-dark">Read More</button></a>
                 </div>
               </div>
             </div>
             <div class="col">
               <div class="card h-100">
                 <img src="images/img-2.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h5 class="card-title">10 Must-Try Recipes for Delicious and Healthy Weeknight Dinners</h5>
                   <p class="card-text">Looking for new dinner ideas? Check out our collection of 10 healthy and delicious recipes that are perfect for busy weeknights. 
                    From vegetarian options to family-friendly favorites, there's something here for everyone!</p>
                    <a href="single_post.php"><button type="button" class="btn btn-dark">Read More</button></a>
                 </div>
               </div>
             </div>
             <div class="col">
               <div class="card h-100">
                 <img src="images/img-3.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h5 class="card-title">The Ultimate Guide to Solo Travel: Tips, Destinations, and Safety Advice</h5>
                   <p class="card-text">Thinking about embarking on a solo adventure? Our ultimate guide to solo travel
                     has got you covered. We share our top tips for staying safe, finding the best destinations, 
                    and making the most out of your trip.</p>
				   <a href="single_post.php"><button type="button" class="btn btn-dark">Read More</button></a>
                 </div>
               </div>
             </div>
  </div>
    </section>

     <!-- footer  -->
<footer>
  <section class="footer">
        <div class="footer-container">
            <p>All rights reserved copyright@2023 </p>
        </div>
    </section>

</footer>
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>