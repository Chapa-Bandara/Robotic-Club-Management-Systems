<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Transaction | Robotics Society</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- EmailJS SDK -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .pulse {
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { box-shadow: 0 0 10px rgba(59, 130, 246, 0.3); }
      50% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.5); }
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen">

  <!-- Navigation -->
  <nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div>
        <a href="index.html" class="text-2xl font-bold text-blue-700">RoboticsSoc</a>
        <p class="text-sm text-gray-600">University of Peradeniya</p>
      </div>
      <div class="space-x-6">
        <a href="index.html" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="shop.html" class="text-gray-700 hover:text-blue-600">Shop</a>
        <a href="login.html" class="text-gray-700 hover:text-blue-600">Login</a>
      </div>
    </div>
  </nav>

  <!-- Success Section -->
  <section class="py-16 px-6">
    <div class="max-w-4xl mx-auto text-center">
      <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 pulse">
        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-gray-800 mb-4">Payment Successful! 🎉</h1>
      <p class="text-lg text-gray-600 mb-8">
        Thank you for your purchase. A confirmation email has been sent to your inbox.
      </p>

      <!-- Order Summary -->
      <div class="bg-white p-8 rounded-lg shadow-lg text-left mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Order Confirmation</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
          <div>
            <p><strong>Product:</strong> <span id="order-product">Loading...</span></p>
            <p><strong>Description:</strong> <span id="order-desc">—</span></p>
            <p><strong>Price:</strong> LKR <span id="order-price">0</span></p>
          </div>
          <div>
            <p><strong>Purchased By:</strong> <span id="order-name">Loading...</span></p>
            <p><strong>Email:</strong> <span id="order-email">Loading...</span></p>
            <p><strong>Index No:</strong> <span id="order-index">—</span></p>
          </div>
          <div>
            <p><strong>Order ID:</strong> <span id="order-id">ORD-2025-ROBO-XXXX</span></p>
            <p><strong>Date:</strong> <span id="order-date">May 25, 2025</span></p>
            <p><strong>Delivery:</strong> Pickup from Robotics Lab</p>
          </div>
          <div>
            <p><strong>Payment Method:</strong> <span id="order-payment">Bank Transfer</span></p>
            <p><strong>Status:</strong> <span class="text-green-600 font-semibold">Confirmed</span></p>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <button onclick="window.print()" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
          🖨️ Print Receipt
        </button>
        <a href="shop.html" class="px-6 py-3 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition">
          🛒 Back to Shop
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="text-2xl font-bold mb-4">Robotics Society</h3>
      <p class="text-gray-300">Faculty of Engineering, University of Peradeniya, Sri Lanka</p>
      <p class="text-gray-400 mt-2">📧 contact@robotics.soc.pdn.ac.lk</p>
      <p class="text-gray-500 text-sm mt-6">
        &copy; 2025 Robotics Society, University of Peradeniya. All rights reserved.
      </p>
    </div>
  </footer>

  <!-- EmailJS Initialization -->
  <script>
    // Initialize EmailJS (Replace with your public key)
    (function() {
      emailjs.init("YOUR_EMAILJS_PUBLIC_KEY"); // Get from https://dashboard.emailjs.com
    })();
  </script>

  <!-- Main Script -->
  <script>
    // Simulated product database
    const products = {
      "arduino-uno": {
        name: "Arduino UNO R3",
        price: 4900,
        desc: "Perfect for beginners and robotics prototyping."
      },
      "esp32": {
        name: "ESP32 Development Board",
        price: 3800,
        desc: "Wi-Fi & Bluetooth enabled microcontroller."
      },
      "raspberry-pi-zero": {
        name: "Raspberry Pi Zero W",
        price: 9500,
        desc: "Compact single-board computer with wireless."
      },
      "motor-shield": {
        name: "Motor Driver Shield",
        price: 2200,
        desc: "Drive DC & stepper motors with Arduino."
      }
    };

    // Load order details from URL
    document.addEventListener('DOMContentLoaded', function () {
      const urlParams = new URLSearchParams(window.location.search);
      const productId = urlParams.get('id');
      const userName = urlParams.get('name') || "Member";
      const userEmail = urlParams.get('email') || "user@pdn.ac.lk";
      const userIndex = urlParams.get('index') || "—";
      const paymentMethod = urlParams.get('payment') || "Bank Transfer";

      const product = products[productId];

      if (!product) {
        alert("Invalid product selected!");
        window.location.href = "shop.html";
        return;
      }

      // Fill order details
      document.getElementById('order-product').textContent = product.name;
      document.getElementById('order-desc').textContent = product.desc;
      document.getElementById('order-price').textContent = product.price.toLocaleString();
      document.getElementById('order-name').textContent = userName;
      document.getElementById('order-email').textContent = userEmail;
      document.getElementById('order-index').textContent = userIndex;
      document.getElementById('order-payment').textContent = paymentMethod;

      // Generate Order ID and Date
      const orderId = 'ORD-2025-ROBO-' + Math.floor(1000 + Math.random() * 9000);
      document.getElementById('order-id').textContent = orderId;
      document.getElementById('order-date').textContent = new Date().toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });

      // Send email via EmailJS
      const templateParams = {
        to_name: userName,
        to_email: userEmail,
        product_name: product.name,
        product_price: product.price.toLocaleString(),
        product_desc: product.desc,
        order_id: orderId,
        order_date: document.getElementById('order-date').textContent,
        index_number: userIndex,
        payment_method: paymentMethod,
        reply_to: 'contact@robotics.soc.pdn.ac.lk'
      };

      emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', templateParams)
        .then(function(response) {
          console.log('✅ Email sent successfully:', response.status, response.text);
        }, function(error) {
          console.error('❌ Email failed to send:', error);
          alert('⚠️ Could not send email. Please contact us manually.');
        });
    });
  </script>
</body>
</html>
