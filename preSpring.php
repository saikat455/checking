<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
  <title>Pre-Spring Page</title>
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
          <li><a href="home.php">HOME</a></li>
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
    <h1 class="text-4xl font-bold text-center mt-3 text-green-800">Pre-Spring Season Products</h1>

  <div class="container mx-auto mt-10 grid grid-cols-3 gap-10">
    
    <!-- Card 1 -->
    <div class="card w-96 bg-white shadow-xl">
      <figure class="px-10 pt-10">
        <img src="strawbery.jpg" alt="Strawberries" class="rounded-xl">
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title text-2xl font-semibold">Strawberries</h2>
        <p class="text-gray-700">Delightful pre-spring fruit with a sweet and juicy taste.</p>
        <p class="text-gray-500 mt-2">Price: Tk 150/kg</p>
        <div class="card-actions mt-4">
          <button class="btn btn-primary">Add to Cart</button>
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
<div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="mango.jpg" alt="Mangoes" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Mangoes</h2>
      <p class="text-gray-700">Juicy and flavorful mangoes herald the pre-spring season.</p>
      <p class="text-gray-500 mt-2">Price: Tk 200/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 3 -->
  <div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="pinapple.jpeg" alt="Pineapples" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Pineapples</h2>
      <p class="text-gray-700">Tropical sweetness in every bite, pre-spring delight.</p>
      <p class="text-gray-500 mt-2">Price: Tk 180/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 4 -->
  <div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="tomato.jpeg" alt="Tomatoes" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Tomatoes</h2>
      <p class="text-gray-700">Fresh tomatoes to add color and flavor to your dishes.</p>
      <p class="text-gray-500 mt-2">Price: Tk 120/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
<div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="carrots.jpg" alt="Carrots" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Carrots</h2>
      <p class="text-gray-700">Fresh and crisp carrots, a staple in pre-spring salads.</p>
      <p class="text-gray-500 mt-2">Price: Tk 80/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 6 -->
  <div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="shaak.webp" alt="Spinach" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Spinach</h2>
      <p class="text-gray-700">Nutrient-rich spinach, perfect for healthy pre-spring meals.</p>
      <p class="text-gray-500 mt-2">Price: Tk 100/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 7 -->
  <div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="raddish.jpeg" alt="Radishes" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Radishes</h2>
      <p class="text-gray-700">Crunchy radishes, a delightful addition to pre-spring salads.</p>
      <p class="text-gray-500 mt-2">Price: Tk 60/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 8 -->
<div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="potatoes.jpeg" alt="Potatoes" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Potatoes</h2>
      <p class="text-gray-700">Staple winter crop, versatile for various dishes in pre-spring.</p>
      <p class="text-gray-500 mt-2">Price: Tk 40/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  <!-- Card 9 -->
  <div class="card w-96 bg-white shadow-xl">
    <figure class="px-10 pt-10">
      <img src="fulkopy.jpeg" alt="Cauliflower" class="rounded-xl">
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title text-2xl font-semibold">Cauliflower</h2>
      <p class="text-gray-700">Popular winter vegetable, great for curries and stir-fries.</p>
      <p class="text-gray-500 mt-2">Price: Tk 90/kg</p>
      <div class="card-actions mt-4">
        <button class="btn btn-primary">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  
  
    <!-- Repeat the above card structure for the remaining 8 cards -->

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
