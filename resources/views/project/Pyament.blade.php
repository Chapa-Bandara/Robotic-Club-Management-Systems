<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Payment | Robotics Society</title>

  <!-- Tailwind CSS via CDN -->
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
  </style>
</head>
<body class="bg-gray-50 min-h-screen">

  <!-- Hero Section -->
  <section class="bg-blue-700 text-white text-center py-16">
    <h1 class="text-3xl font-bold">Complete Your Purchase</h1>
    <p class="text-lg mt-2">Please fill in your details to confirm your order.</p>
  </section>

  <!-- Product Info -->
      <div class=" text-center mb-8 p-4 bg-blue-50 rounded-lg border border-blue-200">
        <h2 class="text-xl font-semibold text-blue-800 mb-2">🤖</h2>
      </div>

  <!-- Payment Form -->
  <div class="max-w-3xl mx-auto px-6 py-12">
    <div class="bg-white p-8 rounded-lg shadow-lg">

      <form id="paymentForm">

        <!-- Full Name -->
        <div class="mb-5">
          <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
          <input
            type="text"
            id="fullName"
            name="fullName"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Enter your full name"
            required
          />
        </div>

        <!-- Email -->
        <div class="mb-5">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
          <input
            type="email"
            id="email"
            name="email"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="your-email@pdn.ac.lk"
            required
          />
        </div>

        <!-- Index Number -->
        <div class="mb-5">
          <label for="indexNumber" class="block text-sm font-medium text-gray-700 mb-1">Index Number (Optional)</label>
          <input
            type="text"
            id="indexNumber"
            name="indexNumber"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="e.g., 2021/CS/123"
          />
        </div>

        <!-- Card Number -->
        <div class="mb-5">
          <label for="cardNumber" class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
          <input
            type="text"
            id="cardNumber"
            name="cardNumber"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="1234 5678 9012 3456"
            required
          />
        </div>

        <!-- Expiry and CVV -->
        <div class="mb-6 flex gap-4">
          <div class="w-1/2">
            <label for="expiry" class="block text-sm font-medium text-gray-700 mb-1">Expiry (MM/YY)</label>
            <input
              type="text"
              id="expiry"
              name="expiry"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="MM/YY"
              required
            />
          </div>
          <div class="w-1/2">
            <label for="cvv" class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
            <input
              type="password"
              id="cvv"
              name="cvv"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="123"
              required
            />
          </div>
        </div>

        <!-- Submit Button -->
        <button
          type="submit"
          class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition"
        >
          Confirm & Pay
        </button>
      </form>

      <!-- Return Link -->
      <div class="mt-6 text-center">
        <a href="shop.html" class="text-sm text-gray-600 hover:text-blue-600">&larr; Back to Shop</a>
      </div>
    </div>

    <!-- Success Message -->
    <div id="successMessage" class="hidden mt-8 p-6 bg-green-50 border border-green-200 rounded-lg text-center">
      <h3 class="text-xl font-semibold text-green-800">✅ Payment Successful!</h3>
      <p class="text-green-700 mt-2">
        Thank you for your purchase. We've sent a confirmation email.
      </p>
      <button onclick="location.href='shop.html'" class="mt-4 px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700">
        Back to Shop
      </button>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="text-2xl font-bold mb-4">Robotics Society</h3>
      <p class="text-gray-300">Sri Lanka</p>
      <p class="text-gray-400 mt-2">📧 contact@robotics.soc.pdn.ac.lk</p>
      <p class="text-gray-500 text-sm mt-6">
        &copy; 2025 Robotics Society, All rights reserved.
      </p>
    </div>
  </footer>

  <!-- EmailJS Initialization -->
  <script>
    (function() {
      emailjs.init("YOUR_EMAILJS_PUBLIC_KEY"); // Replace with your key
    })();
  </script>

  <!-- Main Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const urlParams = new URLSearchParams(window.location.search);
      const product = urlParams.get('product') || 'Unknown Product';
      const price = urlParams.get('price') || '0';

      document.getElementById('product-name').textContent = product;
      document.getElementById('product-price').textContent = parseInt(price).toLocaleString();

      document.getElementById('paymentForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const data = {
          to_name: formData.get('fullName'),
          to_email: formData.get('email'),
          product_name: product,
          product_price: price,
          index_number: formData.get('indexNumber'),
          card_last4: formData.get('cardNumber').slice(-4),
          reply_to: formData.get('email')
        };

        emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', data)
          .then(function() {
            document.getElementById('paymentForm').parentElement.classList.add('hidden');
            document.getElementById('successMessage').classList.remove('hidden');
          }, function(error) {
            alert('❌ Payment failed: ' + JSON.stringify(error));
          });
      });
    });
  </script>
</body>
</html>
