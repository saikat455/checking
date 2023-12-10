<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Pre-Monsoon Fruits</title>
</head>
<body class="bg-gray-100 max-w-screen-xl mx-auto  md:px-8 lg:px-12">
  <header>
    <section>
      <p class="sticky fixed top-0 bg-lime-600 p-4 text-center text-white text-lg">
        150 TK Delivery charge / Or FREE pick up ~> FREE delivery for orders with a value of 999 TK or more!
    </p>
        
        <p class="mt-6 text-center text-lg text-red-700">Delivery and/or Pick up is for the first available Wednesday/Saturday after placing your order!</p>
    </section>
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
        <li><a href="home.php" class="text-xl font-bold text-green-700">HOME</a></li>
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
          <li><a href="register_form.php" class="text-xl font-bold text-green-700">LOGIN</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        
      </div>
    </div>
  </section>
</header>
    <h1 class="text-4xl font-bold mt-3 text-center text-green-800">Pre-Monsoon Season Products</h1>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-8">

    <!-- Card 1: Lychee -->
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="lichi.jpeg" alt="Lychee" class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-bold text-xl">Lychee</h2>
        <p class="p-3">Lychee is a tropical fruit that is abundantly grown in Bangladesh during the pre-monsoon season. The sweet and fragrant lychee fruits are a popular choice among locals.</p>
        <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
      </div>
    </div>

    <!-- Card 2: Pineapple -->
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="pinapple.jpeg" alt="Pineapple" class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-bold text-xl">Pineapple</h2>
        <p class="p-3">Pineapples are cultivated in the pre-monsoon season, and their juicy and tangy flavor makes them a refreshing fruit choice.</p>
        <p class="text-lg font-semibold mt-2">Price: 80 BDT/kg</p>
        <div class="card-actions mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
      </div>
    </div>

    <!-- Card 3: Watermelon -->
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="watermelon.jpg" alt="Watermelon" class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-bold text-xl">Watermelon</h2>
        <p class="p-3">Watermelons thrive in the warm climate of the pre-monsoon season, and their hydrating and sweet taste is enjoyed by many.</p>
        <p class="text-lg font-semibold mt-2">Price: 40 BDT/kg</p>
        <div class="card-actions mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
      </div>
    </div>
<!-- Card 4: Jute -->
<div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="jutee.jpeg" alt="Jute" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title font-bold text-xl">Jute</h2>
      <p class="p-3">Jute is a fiber crop that is commonly grown during the pre-monsoon season. It is an important cash crop for Bangladesh.</p>
      <p class="text-lg font-semibold mt-2">Price: 60 BDT/kg</p>
      <div class="card-actions mt-3">
        <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
        <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 5: Sugarcane -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="sugercane.jpeg" alt="Sugarcane" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title font-bold text-xl">Sugarcane</h2>
      <p class="p-3">Sugarcane is cultivated for its sweet juice, which is used to produce sugar and other products. It is a significant crop during the pre-monsoon season.</p>
      <p class="text-lg font-semibold mt-2">Price: 30 BDT/kg</p>
      <div class="card-actions mt-3">
        <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
        <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 6: Ginger -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="aadaa.jpg" alt="Ginger" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title font-bold text-xl">Ginger</h2>
      <p class="p-3">Ginger is a spice crop that is planted during the pre-monsoon season. It is known for its distinct flavor and medicinal properties.</p>
      <p class="text-lg font-semibold mt-2">Price: 90 BDT/kg</p>
      <div class="card-actions mt-3">
        <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
        <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
      </div>
    </div>
  </div>
<!-- Card 7: Turmeric -->
<div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="tumeric.jpg" alt="Turmeric" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title font-bold text-xl">Turmeric</h2>
      <p class="p-3">Turmeric, another spice crop, is cultivated during the pre-monsoon season. It is widely used in Bangladeshi cuisine and has medicinal benefits.</p>
      <p class="text-lg font-semibold mt-2">Price: 50 BDT/kg</p>
      <div class="card-actions mt-3">
        <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
        <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 8: Banana -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="banana.jpg" alt="Banana" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title font-bold text-xl">Banana</h2>
      <p class="p-3">Bananas are a year-round fruit in Bangladesh, and their cultivation continues during the pre-monsoon season. They are a versatile and nutritious fruit.</p>
      <p class="text-lg font-semibold mt-2">Price: 35 BDT/kg</p>
      <div class="card-actions mt-3">
        <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
        <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 9: Guava -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="guaba.jpg" alt="Guava" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-xl font-bold">Guava</h2>
      <p class="p-3">Guava is a tropical fruit that is available in Bangladesh throughout the year, including the pre-monsoon season. It is known for its sweet and aromatic flavor.</p>
      <p class="text-lg font-semibold mt-2">Price: 25 BDT/kg</p>
      <div class="card-actions mt-3 justify-between">
        <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
        <button class=" bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
      </div>
    </div>
  </div>
    
  

  </div>
  <footer class="max-w-screen-xl mx-auto  md:px-8 lg:px-12">
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
