<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .mockup-phone {
      position: relative;
      width: 375px;
      height: 667px;
      border: 16px solid #6b7280;
      border-radius: 36px;
      margin: 50px auto;
    }

    .camera {
      position: absolute;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: #6b7280;
    }

    .display {
      position: absolute;
      top: 40px;
      left: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      border-radius: 20px;
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }

    .chat {
      display: flex;
      align-items: flex-start;
      margin-bottom: 20px;
    }

    .chat-image {
      margin-left: 10px;
      margin-right: 10px;
    }

    .chat-bubble {
      max-width: 70%;
      padding: 15px;
      border-radius: 15px;
    }

    .chat-start .chat-bubble {
      background-color: #d1d5db;
      margin-right: auto;
    }

    .chat-end .chat-bubble {
      background-color: #60a5fa;
      color: #ffffff;
      margin-left: auto;
    }

    .chat-start .chat-image {
      margin-right: auto;
    }

    .chat-end .chat-image {
      margin-left: auto;
    }

    .chat-footer time {
      font-size: 0.8rem;
      opacity: 0.7;
    }
  </style>
  <title>Chat App</title>
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

</header>
<header>
  <!-- Navigation Bar with just the Home button -->
  <nav class="bg-base-100 p-4">
    <ul class="flex justify-center">
      <li><a href="home.php" class="text-xl font-bold text-green-700">HOME</a></li>
    </ul>
  </nav>
</header>
<p class="text-center font-bold text-2xl text-green-800 mt-3">Conversation between Farmer-Buyer</p>
<section class="flex justify-center">
    <div class="mockup-phone border-primary ">
      <div class="camera"></div> 
      <div class="display overflow-auto">
        
        <!-- Chat 1 (Buyer) -->
        <div class="chat chat-start">
          <div class="chat-image avatar">
            <div class="w-10 rounded-full">
              <img alt="Buyer Avatar" src="user_6639588.png" />
            </div>
          </div>
          <div class="chat-bubble">
            Hi, looking for fresh produce.
            <div class="chat-footer opacity-50">
              Buyer <time>12:00</time>
            </div>
          </div>
        </div>
  
        <!-- Chat 2 (Farmer) -->
        <div class="chat chat-end">
          <div class="chat-image avatar">
            <div class="w-10 rounded-full">
              <img alt="Farmer Avatar" src="farmer_7417766.png" />
            </div>
          </div>
          <div class="chat-bubble">
            Hey! What do you need?
            <div class="chat-footer opacity-50">
              Farmer <time>12:05</time>
            </div>
          </div>
        </div>
  
        <!-- Chat 3 (Buyer) -->
        <div class="chat chat-start">
          <div class="chat-image avatar">
            <div class="w-10 rounded-full">
              <img alt="Buyer Avatar" src="user_6639588.png" />
            </div>
          </div>
          <div class="chat-bubble">
            I'll take a basket of strawberries.
            <div class="chat-footer opacity-50">
              Buyer <time>12:10</time>
            </div>
          </div>
        </div>
  
        <!-- Chat 4 (Farmer) -->
        <div class="chat chat-end">
          <div class="chat-image avatar">
            <div class="w-10 rounded-full">
              <img alt="Farmer Avatar" src="farmer_7417766.png" />
            </div>
          </div>
          <div class="chat-bubble">
            Cool. That's total 350 Tk. Cash or Card?
            <div class="chat-footer opacity-50">
              Farmer <time>12:15</time>
            </div>
          </div>
        </div>
  
        <!-- Chat 5 (Buyer) -->
        <div class="chat chat-start">
          <div class="chat-image avatar">
            <div class="w-10 rounded-full">
              <img alt="Buyer Avatar" src="user_6639588.png" />
            </div>
          </div>
          <div class="chat-bubble">
            Cash
            <div class="chat-footer opacity-50">
              Buyer <time>12:20</time>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </section>


</body>
</html>
