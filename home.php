<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Farm2Door</title>
</head>
<body class="max-w-screen-xl mx-auto  md:px-8 lg:px-12">
    <header>
        <section>
          <p class="sticky fixed top-0 bg-lime-600 p-4 text-center text-white text-lg">
            150 TK Delivery charge / Or FREE pick up ~> FREE delivery for orders with a value of 999 TK or more!
        </p>
            
            <p class="mt-6 text-center text-lg text-red-700">Delivery and/or Pick up is for the first available Wednesday/Saturday after placing your order!</p>
        </section>
        <div class="flex items-center justify-center">
            <img src="farm_to_door_logo.webp" class="w-88 h-44" alt="Centered Image">
          </div>
  <!-- Navigation Bar -->
  <section>
    <div class="navbar bg-base-100">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>Home</a></li>
            <li>
              <a>Seasonal Items</a>
              <ul class="p-2">
                <li><a href="winter.php">Winter</a></li>
                <li><a href="preSpring.php">Pre-Spring</a></li>
                <li><a href="spring.php">Spring</a></li>
                <li><a href="preMonson.php">Pre-Monsoon</a></li>
                <li><a href="monsoon.php">Monsoon</a></li>
                <li><a>Autumn</a></li>
              </ul>
            </li>
            <li><a href="giftCard.php">Buy a Gift Card</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a>Login</a></li>
          </ul>
        </div>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a class="text-xl font-bold text-green-700">HOME</a></li>
          <li class="relative">
            <details>
              <summary class="text-xl font-bold text-green-700">SEASONAL ITEMS</summary>
              <ul class="p-2 absolute left-0 top-full z-10">
                <li><a href="winter.php">Winter</a></li>
                <li><a href="preSpring.php">Pre-Spring</a></li>
                <li><a href="spring.php">Spring</a></li>
                <li><a href="preMonson.php">Pre-Monsoon</a></li>
                <li><a href="monsoon.php">Monsoon</a></li>
                <li><a>Autumn</a></li>
              </ul>
            </details>
          </li>
          <li><a href="giftCard.php" class="text-xl font-bold text-green-700">BUY GIFT CARD</a></li>
          <li><a href="courses.php" class="text-xl font-bold text-green-700">COURSES</a></li>
          
          <li><a href="chat.php" class="text-xl font-bold text-green-700">CHAT</a></li>
          <li><a href="register_form.php" class="text-xl font-bold text-green-700">lOGIN</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        
      </div>
    </div>
  </section>
    </header>

    <main>
      <section>
        <div class="carousel w-full relative">
            <div id="slide1" class="carousel-item relative w-full">
              <img src="carousel-1.jpg" class="w-full" />
              <div class="absolute top-1/2 right-48 left-1/3 transform -translate-x-1/2 -translate-y-1/2  text-white">
                <p class="text-3xl font-extrabold mb-4">Organic Vegetables</p>
                <p class="text-6xl font-extrabold">Organic Vegetables For Healthy Life</p>
                <div class="mt-4">
                  <button class="btn btn-success mr-4 text-white">Explore</button>
                  <a href="contact.html"><button class="btn btn-secondary bg-orange-500">Contact</button></a>
                  
              </div>
            </div>
            
            
              <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide2" class="btn btn-active">❮</a> 
                <a href="#slide2" class="btn btn-active">❯</a>
              </div>
            </div> 
            <div id="slide2" class="carousel-item relative w-full">
              <img src="carousel-2.jpg" class="w-full " />
              <div class="absolute top-1/2 right-48 left-1/3 transform -translate-x-1/2 -translate-y-1/2  text-white">
                <p class="text-3xl font-extrabold mb-4">Organic Fruits</p>
                <p class="text-6xl font-extrabold">Organic Fruits For For Better Health</p>
                <div class="mt-4">
                  <button class="btn btn-success mr-4 text-white">Explore</button>
                  <a href="contact.html"><button class="btn btn-secondary">Contact</button></a>
                  
              </div>
            </div>
              <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide1" class="btn btn-active">❮</a> 
                <a href="#slide1" class="btn btn-active">❯</a>
              </div>
            </div> 
          </div>

          <div class="flex w-2/3 mx-auto absolute -mt-24 ml-40">
            <!-- First Div with Background Image -->
            <div class="flex-1 bg-cover bg-center mr-0 w-1/2" style="background-image: url('organic_vegitables-removebg-preview.png')">
                <div class="bg-opacity-75 p-6 text-white">
                    <p class="text-2xl font-semibold">Organic Vegetables</p>
                    <p class="mt-4">Organic vegetables are cultivated without synthetic pesticides or fertilizers, offering a natural and wholesome option for health-conscious consumers.</p>
                    <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded-full">Read More</button>
                </div>
            </div>
    
            <!-- Second Div with Background Image -->
            <div class="flex-1 bg-cover bg-center ml-0 w-1/2" style="background-image: url('organic_fruits-removebg-preview.png')">
                <div class="bg-opacity-75 p-6 text-white">
                    <p class="text-2xl font-semibold">Organic Fruits</p>
                    <p class="mt-4">Organic fruits are grown without synthetic chemicals, providing a natural and environmentally conscious choice for health-conscious consumers.</p>
                    <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded-full">Read More</button>
                </div>
            </div>
        </div>
    </section>
    </main>

    <section>
        <div class="mt-52 flex gap-6">
          <div class="w-1/2">
            <img src="old man.png" class=" border-8 w-full h-2/3 border-green-500" alt="">
          </div>
          <div class="w-1/2">
            <p class="font-bold text-green-600 text-xl">
              ABOUT US
            </p>
            <p class="text-5xl font-bold mb-6 mt-3">
              We Produce Organic Food For Your Family
            </p>
            <p class="text-slate-500">
              We cultivate wholesome, organic produce, ensuring a healthy and sustainable food source for your family's well-being, fostering a connection between nature and nourishment.
            </p>
            <div class="flex  gap-6">
              <div>
                <img src="organic logo.jpg" class="h-40 w-40" alt="">
                <p class="font-bold text-2xl text-lime-600 mb-2">100% Organic</p>
                <p class="text-slate-400">Guaranteed 100% organic, our products prioritize your well-being and environmental sustainability.</p>
              </div>
              <div class="mt-4">
                <img src="award.png" class="h-36 w-36" alt="">
                <p class="font-bold text-2xl text-lime-600 mb-2">Award Winning</p>
                <p class="text-slate-400">Experience the excellence of Award-Winning quality, a testament to our commitment to exceptional standards and customer satisfaction.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

   <!-- Team Section -->
<section class="bg-gray-200 py-16">
  <div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-8 text-center text-lime-950">Meet Our Team</h2>
    <!-- Centered Team Member -->
   <div class="text-center mt-8 w-1/2 mx-auto mb-8">
    <div class="bg-white rounded-lg p-6 flex flex-col items-center inline-block">
      <img src="shikha.jpg" alt="Team Member" class="rounded-full mb-4 h-60 w-60">
      <h3 class="text-xl font-bold">MST. SHIKHA KHATUN</h3>
      <p class="text-gray-700"> Co-Founder & CEO</p>
    </div>
  </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      
      <!-- Team Member 1 -->
      <div class="bg-white rounded-lg p-6 flex flex-col items-center">
        <img src="saikat img.jpg" alt="Team Member" class="rounded-full mb-4 h-60 w-60">
        <h3 class="text-xl font-bold">ABU SAYED</h3>
        <p class="text-gray-700">Co-Founder & CTO</p>
      </div>

      <!-- Team Member 2 -->
      <div class="bg-white rounded-lg p-6 flex flex-col items-center">
        <img src="atik.jpg" alt="Team Member" class="rounded-full mb-4 h-60 w-60">
        <h3 class="text-xl font-bold">MD. ATIKUL ISLAM </h3>
        <p class="text-gray-700"> Head of Operations</p>
      </div>

      <!-- Team Member 3 -->
      <div class="bg-white rounded-lg p-6 flex flex-col items-center">
        <img src="sanzida.jpg" alt="Team Member" class="rounded-full mb-4 h-60 w-60">
        <h3 class="text-xl font-bold">Sanjida Afrin</h3>
        <p class="text-gray-700">Customer Support Manager</p>
      </div>

    </div>

   
</section>


<!-- Contact Section -->
<section class="py-12">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
    <p class="text-gray-700">Have questions or feedback? Reach out to our friendly team!</p>
    <a href="contact.html" class="text-green-500 font-bold">info@farm2door.com</a>
  </div>
</section>

    <section class="bg-green-500 p-9 text-white justify-between">
      <p class="text-center font-bold text-xl mb-2 text-amber-600">FEATURES</p>
      <p class="text-center font-bold text-5xl mb-2 text-white">Why Choose Us!!!</p>
      <div class="flex mt-8 items-stretch">
        <div class="w-1/4 flex flex-col mr-4">
          <img src="vegan_846406.png" class="h-16 w-16 rounded-full p-4 bg-orange-400" alt="">
          <p class="text-2xl font-bold mt-2 mb-2">100% Organic</p>
          <p>Purity in every bite: 100% Organic goodness.</p>
          <img src="award_3395949.png" class="mt-6 h-16 w-16 rounded-full p-4 bg-orange-400" alt="">
          <p class="text-2xl font-bold mt-2 mb-2 ">Award Winning</p>
          <p>Exceptional quality that speaks through Award-Winning recognition.</p>
        </div>
    
        <div class="w-1/2 bg-white text-gray-600 p-8 flex flex-col flex-grow items-center text-center mr-8"> 
          <p>Committed to exceptional quality and sustainability, our eco-friendly practices redefine excellence. With a customer-centric focus, we prioritize your satisfaction, creating an experience driven by quality and responsibility. Choose us for a journey where decisions align with a commitment to excellence and environmental well-being.</p>
          <img src="feature.png" class="h-64 w-64" alt="">
        </div>
    
        <div class="w-1/4 flex flex-col">
          <img src="cultivation_5264740.png" class="h-16 w-16 rounded-full p-4 bg-orange-400" alt="">
          <p class="text-2xl font-bold mb-2 mt-2">Modern Farming</p>
          <p>Innovative practices redefine agriculture: Welcome to modern farming.</p>
          <img src="telephone_3415136.png" class="mt-6 h-16 w-16 rounded-full p-4 bg-orange-400" alt="">
          <p class="text-2xl font-bold mb-2 mt-2">24/7 Support</p>
          <p>Uninterrupted assistance: 24/7 support, always by your side.</p>
        </div>
      </div>
    </section>
    


    <footer>
      <footer class="footer p-10 bg-base-200 text-base-content bg-lime-600 text-white font-bold">
        <nav>
          <header class="footer-title">Services</header> 
          <a class="link link-hover">Branding</a>
          <a class="link link-hover">Design</a>
          <a class="link link-hover">Marketing</a>
          <a class="link link-hover">Advertisement</a>
        </nav> 
        <nav>
          <header class="footer-title">Company</header> 
          <a class="link link-hover">About us</a>
          <a class="link link-hover">Contact</a>
          <a class="link link-hover">Jobs</a>
          <a class="link link-hover">Press kit</a>
        </nav> 
        <nav>
          <header class="footer-title">Legal</header> 
          <a class="link link-hover">Terms of use</a>
          <a class="link link-hover">Privacy policy</a>
          <a class="link link-hover">Cookie policy</a>
        </nav> 
        <form>
          <header class="footer-title">Newsletter</header> 
          <fieldset class="form-control w-80">
            <label class="label">
              <span class="label-text">Enter your email address</span>
            </label> 
            <div class="join">
              <input type="text" placeholder="username@site.com" class="input input-bordered join-item" /> 
              <button class="btn btn-primary join-item">Subscribe</button>
            </div>
          </fieldset>
        </form>
      </footer>
    </footer>
</body>
</html>