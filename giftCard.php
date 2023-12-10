<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital@1&family=Dosis&family=Lobster&family=Playpen+Sans:wght@800&family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="max-w-screen-xl mx-auto  md:px-8 lg:px-12">
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

    <section>
        <div class="hero h-64" style="background-image: url(foodgiftcard.jpg);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
              <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold font-rubik-bubbles">Gift Card</h1>
                
              </div>
            </div>
        </div>

        <div class="p-10 bg-yellow-100">

<!-- Digital Gift Cards Section -->
<div class="container mx-auto mt-20">
    <div class="flex gap-20 items-center">
        <div>
            <img src="digital gift card.webp" class="h-1/2" alt="">
          </div>
      <div class="w-1/2">
        <p class="text-2xl font-semibold mb-8">Digital Gift Cards</p>
        <p class="text-2xl mb-8"><span class="font-bold">Buy now, send later!</span> Select the date you would like your gift card to arrive. Digital gift cards will be sent directly to your loved one's email inbox. Include a gift note for that personal touch.</p>
        <button id="digitalBuyNowBtn" class="btn btn-warning rounded-l-full rounded-r-full text-white font-semibold">Buy Now</button>
      </div>
      
    </div>
  </div>
  
  <!-- Physical Gift Cards Section -->
  <div class="container mx-auto mt-20">
    <div class="flex gap-20 items-center">
      <div class="w-1/2">
        <p class="text-2xl font-semibold mb-8">Physical Gift Cards</p>
        <p class="text-2xl mb-8">Want to gift Farm to People in person? Shop physical gift cards to be added to your next delivery. Please note you must have an account with us to purchase physical gift cards.</p>
        <button id="physicalBuyNowBtn" class="btn btn-warning rounded-l-full rounded-r-full text-white font-semibold">Buy Now</button>
      </div>
      <div>
        <img src="hand gift card.gif" class="h-1/2" alt="">
      </div>
    </div>
  </div>
  
  <!-- Payment Drawer -->
  <div id="paymentDrawer" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden">
    <div class="flex justify-end p-4">
      <button id="closeDrawerBtn" class="text-white">&times;</button>
    </div>
    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg">
      <h2 class="text-2xl font-semibold mb-4">Payment Options</h2>
     
      <div class="mb-4">
        <label class="block text-gray-700">Select Payment Method:</label>
        <select id="drawerPaymentMethod" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
          <option value="" disabled selected>Select an option</option>
          <option value="cash">Cash</option>
          <option value="digital">Digital</option>
        </select>
      </div>
    
      <div id="digitalOptions" class="hidden">
        <div class="mb-4">
          <label class="block text-gray-700">Select Digital Option:</label>
          <select id="digitalPaymentOption" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            <option value="" disabled selected>Select an option</option>
            <option value="bkash">Bkash</option>
            <option value="nagad">Nagad</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Enter Phone Number:</label>
          <input id="phoneNumber" type="tel" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter your phone number">
        </div>
      </div>
      <button id="makePaymentDrawerBtn" class="w-full bg-blue-500 text-white py-3 px-6 rounded-full focus:outline-none focus:ring focus:border-blue-300" disabled>Make Payment</button>
    </div>
  </div>
  
  <script>
    // Open the payment drawer when Buy Now button is clicked for Digital Gift Cards
    document.getElementById('digitalBuyNowBtn').addEventListener('click', () => {
      document.getElementById('paymentDrawer').classList.remove('hidden');
    });
  
    // Open the payment drawer when Buy Now button is clicked for Physical Gift Cards
    document.getElementById('physicalBuyNowBtn').addEventListener('click', () => {
      document.getElementById('paymentDrawer').classList.remove('hidden');
    });
  
    // Close the payment drawer when the close button is clicked
    document.getElementById('closeDrawerBtn').addEventListener('click', () => {
      document.getElementById('paymentDrawer').classList.add('hidden');
    });
  
    // Handle changes in the payment method selection for the drawer
    document.getElementById('drawerPaymentMethod').addEventListener('change', () => {
      const makePaymentBtn = document.getElementById('makePaymentDrawerBtn');
      const digitalOptions = document.getElementById('digitalOptions');
      const selectedOption = document.getElementById('drawerPaymentMethod').value;
  
      // Show/hide digital options based on the selected payment method
      if (selectedOption === 'digital') {
        digitalOptions.classList.remove('hidden');
      } else {
        digitalOptions.classList.add('hidden');
      }
  
      // Enable the Make Payment button for Cash option
      makePaymentBtn.disabled = selectedOption !== 'cash';
    });
  
    // Enable the Make Payment button when a digital option is selected
    document.getElementById('digitalPaymentOption').addEventListener('change', () => {
      const makePaymentBtn = document.getElementById('makePaymentDrawerBtn');
      makePaymentBtn.disabled = false;
    });
  
    // Handle Make Payment button click for the drawer
    document.getElementById('makePaymentDrawerBtn').addEventListener('click', () => {
      const paymentMethod = document.getElementById('drawerPaymentMethod').value;
  
      if (paymentMethod === 'cash') {
        alert('Thank you! Payment will be taken soon.');
      } else if (paymentMethod === 'digital') {
        const digitalOption = document.getElementById('digitalPaymentOption').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
  
        if (digitalOption && phoneNumber) {
          alert('Thank you! Your payment is collected.');
          // Clear the input fields after payment is processed
          document.getElementById('phoneNumber').value = '';
        } else {
          alert('Please select a digital payment option and enter your phone number.');
        }
      } else {
        alert('Please select a payment method.');
      }
  
      // Close the drawer after payment is processed
      document.getElementById('paymentDrawer').classList.add('hidden');
    });
  </script>
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