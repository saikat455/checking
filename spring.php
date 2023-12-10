<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Product Cards</title>
</head>
<body class="bg-gray-100">
    
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
          <li><a href="home.php" >HOME</a></li>
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
          <li><a href="register_form.php" class="text-xl font-bold text-green-700">lOGIN</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        
      </div>
    </div>
  </section>
  </header>
  <h1 class="text-4xl font-bold mt-3 text-center text-green-800">Spring Season Products</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-8">
    
    <!-- Card 1: Mango -->
<div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="mango.jpg" alt="Mango" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Mango</h2>
      <p>Mangoes are one of the most popular fruits in Bangladesh, and the spring season marks the beginning of the mango harvest.</p>
      <p class="text-lg font-semibold mt-2">Price: 150 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 2: Jackfruit -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="jackfruit.jpeg" alt="Jackfruit" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Jackfruit</h2>
      <p>Jackfruit trees bear fruit during the spring, and the large, green jackfruits are commonly found in markets.</p>
      <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 3: Guava -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="guaba.jpg" alt="Guava" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Guava</h2>
      <p>Guava trees thrive in the spring season, and the fruits are known for their sweet and aromatic flavor.</p>
      <p class="text-lg font-semibold mt-2">Price: 200 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
<!-- Card 4: Papaya -->
<div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="papaya.jpeg" alt="Papaya" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Papaya</h2>
      <p>Papaya plants bear fruit in the spring, providing a rich source of vitamins and nutrients.</p>
      <p class="text-lg font-semibold mt-2">Price: 180 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 5: Strawberry -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="strawbery.jpg" alt="Strawberry" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Strawberry</h2>
      <p>Strawberries are often cultivated during the spring season, offering a delicious and nutritious berry option.</p>
      <p class="text-lg font-semibold mt-2">Price: 250 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 6: Cauliflower -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="fulkopy.jpeg" alt="Cauliflower" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Cauliflower</h2>
      <p>Spring is the prime season for cauliflower cultivation in Bangladesh, and it is a staple in local cuisine.</p>
      <p class="text-lg font-semibold mt-2">Price: 80 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
<!-- Card 7: Spinach -->
<div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="palon shak.jpeg" alt="Spinach" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Spinach</h2>
      <p>Spinach is a leafy green vegetable that thrives in the spring, providing a fresh and healthy addition to meals.</p>
      <p class="text-lg font-semibold mt-2">Price: 30 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 8: Cucumber -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="cucumber.jpg" alt="Cucumber" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Cucumber</h2>
      <p>Cucumbers are commonly grown in spring, and their refreshing taste makes them a popular choice in salads and snacks.</p>
      <p class="text-lg font-semibold mt-2">Price: 40 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 9: Potato -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="potatoes.jpeg" alt="Potato" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Potato</h2>
      <p>Potatoes are a staple crop in Bangladesh, and the spring season is ideal for their cultivation.</p>
      <p class="text-lg font-semibold mt-2">Price: 25 BDT/kg</p>
      <div class="card-actions">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
      

  </div>
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
