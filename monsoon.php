<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Monsoon Fruits and Crops</title>
</head>
<body class="bg-gray-100 max-w-screen-xl mx-auto  md:px-8 lg:px-12">
  <header>
    <section>
      <div class="bg-lime-600">
        <p class="sticky fixed top-0 bg-lime-600 p-4 text-center text-white text-lg">
          150 TK Delivery charge / Or FREE pick up ~> FREE delivery for orders with a value of 999 TK or more!
      </p>
      </div>
      
        
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
          <li><a href="register_form.php" class="text-xl font-bold text-green-700">LOGIN</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        
      </div>
    </div>
  </section>
</header>
    <h1 class="text-4xl font-bold mt-3 text-center text-green-800">Monsoon Season Products</h1>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-8">

    <!-- Card 1: Rice -->
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="rice.jpg" alt="Rice" class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Rice</h2>
        <p>Monsoon is crucial for rice cultivation, and it is the primary staple food in Bangladesh.</p>
        <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
      </div>
    </div>

    <!-- Card 2: Jute -->
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="jutee.jpeg" alt="Jute" class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Jute</h2>
        <p>Jute, known as the "golden fiber," is a major cash crop in Bangladesh, and its growth is facilitated by the monsoon rains.</p>
        <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
      </div>
    </div>

    <!-- Card 3: Banana -->
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="banana.jpg" alt="Banana" class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Banana</h2>
        <p>Bananas are widely cultivated during the monsoon season, and their growth benefits from the increased humidity.</p>
        <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
      </div>
    </div>
<!-- Card 4: Pineapple -->
<div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="pinapple.jpeg" alt="Pineapple" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Pineapple</h2>
      <p>Pineapples thrive in the monsoon season, and the rainfall contributes to their growth and sweetness.</p>
      <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
    </div>
  </div>
  
  <!-- Card 5: Papaya -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="papaya.jpeg" alt="Papaya" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Papaya</h2>
      <p>Papaya plants continue to bear fruit during the monsoon, providing a fresh and nutritious option.</p>
      <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
    </div>
  </div>
  
  <!-- Card 6: Gourd -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="gourd.jpg" alt="Gourd" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Gourd</h2>
      <p>Different types of gourds, such as bottle gourd (লাউ), are grown during the monsoon season.</p>
      <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
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
      <h2 class="card-title">Turmeric</h2>
      <p>Monsoon is an ideal time for cultivating turmeric, a spice widely used in Bangladeshi cuisine.</p>
      <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
    </div>
  </div>
  
  <!-- Card 8: Litchi -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="lichi.jpeg" alt="Litchi" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Litchi</h2>
      <p>Litchis are a popular fruit in Bangladesh, and the monsoon season contributes to their growth and sweetness.</p>
      <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
    </div>
  </div>
  
  <!-- Card 9: Watermelon -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="watermelon.jpg" alt="Watermelon" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Watermelon</h2>
      <p>The monsoon season provides ample water for the cultivation of watermelons, making them a refreshing fruit during this time.</p>
      <p class="text-lg font-semibold mt-2">Price: 120 BDT/kg</p>
        <div class="justify-between mt-3">
          <button class="bg-yellow-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Add to Cart</button>
          <button class="bg-blue-500 rounded-l-full rounded-r-full p-2 mb-4 text-white">Buy Now</button>
        </div>
    </div>
  </div>

  </div>

</body>
</html>
