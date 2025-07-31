<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Embedded Shop | Robotics Society</title>
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .glow {
      box-shadow: 0 0 10px rgba(59, 130, 246, 0.3);
    }
    .glow:hover {
      box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen">

  <!-- Navigation -->
  <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <!-- Logo -->
      <div class="flex items-center">
        <span class="text-xl font-bold text-blue-600">🤖 RoboticsSoc</span>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-8 items-center">
        <a href="{{ route('project.home') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
        <a href="{{ route('project.course') }}" class="text-gray-700 hover:text-blue-600 transition">Course</a>
        <a href="{{ route('project.category') }}" class="text-gray-700 hover:text-blue-600 transition">Category</a>
        <a href="{{ route('project.contact') }}" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
        <a href="{{ route('project.about') }}" class="text-gray-700 hover:text-blue-600 transition">About</a>
        <a href="{{ route('project.login') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Join Us</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 p-2 rounded">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
    <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t shadow-lg">
    <a href="{{ route('project.home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
    <a href="{{ route('project.course') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Course</a>
    <a href="{{ route('project.category') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Category</a>
    <a href="{{ route('project.contact') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
    <a href="{{ route('project.about') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
    <a href="{{ route('project.login') }}" class="block px-4 py-3 text-center bg-blue-600 text-white rounded mx-4 mt-2 font-medium">Join Us</a>
  </div>
</nav>
  <!-- Hero Section -->
  <section class="bg-blue-700 text-white text-center py-16">
    <h1 class="text-4xl font-bold">Embedded Components Shop</h1>
    <p class="text-xl mt-4 max-w-3xl mx-auto">
      Support our club by purchasing development boards, sensors, and kits.
      All proceeds fund student robotics projects and competitions.
    </p>
  </section>

  <!-- Admin: Add Product Button -->
  <div class="max-w-7xl mx-auto px-6 mt-8 text-right">
    <button onclick="openAddProductModal()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">
      ➕ Add Product
    </button>
  </div>

  <!-- Add Product Modal -->
  <div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Product</h2>

      <label class="block text-gray-700 mb-2">Image URL</label>
      <input type="text" id="productImg" class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com/board.jpg" />

      <label class="block text-gray-700 mb-2">Product Name</label>
      <input type="text" id="productName" class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Arduino UNO, ESP32, etc." />

      <label class="block text-gray-700 mb-2">Description</label>
      <textarea id="productDesc" class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Short description..."></textarea>

      <label class="block text-gray-700 mb-2">Price (LKR)</label>
      <input type="number" id="productPrice" class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., 4500" />

      <div class="flex justify-end space-x-4">
        <button onclick="closeAddProductModal()" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</button>
        <button onclick="addProduct()" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">Add Product</button>
      </div>
    </div>
  </div>

  <!-- Product Grid -->
  <section class="py-12 px-6 max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Available Components</h2>
    <div id="productGrid" class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

      <!-- Default Product -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition glow">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Arduino_Uno_-_R3.jpg" alt="Arduino UNO" class="h-40 mx-auto mb-4 object-contain" />
        <h3 class="text-xl font-semibold text-blue-700">Arduino UNO R3</h3>
        <p class="text-gray-600 mt-2">Perfect for beginners and prototyping robotics.</p>
        <p class="text-blue-600 font-bold mt-2">LKR 4,900</p>
        <button onclick="buyProduct('Arduino UNO R3', 4900)" class="w-full mt-4 bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition">
          Buy Now
        </button>
      </div>

    </div>
  </section>

  <!-- Buy Modal -->
  <div id="buyModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-sm w-full text-center">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Confirm Purchase</h2>
      <p class="text-gray-700 mb-2"><strong id="buyProductName">Product Name</strong></p>
      <p class="text-gray-600 mb-6">Price: <strong>LKR <span id="buyProductPrice">0</span></strong></p>
      <div class="flex justify-center space-x-4">
        <button onclick="closeBuyModal()" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</button>
        <button onclick="confirmPurchase()" class="px-4 py-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700">Confirm</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="text-2xl font-bold mb-4">Robotics Society</h3>
      <p class="text-gray-300">Sri Lanka</p>
      <p class="text-gray-400 mt-2">📧 contact@robotics.@edu.lk</p>
      <p class="text-gray-500 text-sm mt-6">
        &copy; 2025 Robotics Society, All rights reserved.
      </p>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
    function openAddProductModal() {
      document.getElementById('addProductModal').classList.remove('hidden');
      document.getElementById('addProductModal').classList.add('flex');
    }

    function closeAddProductModal() {
      document.getElementById('addProductModal').classList.add('hidden');
      document.getElementById('addProductModal').classList.remove('flex');
    }

    function addProduct() {
      const name = document.getElementById('productName').value.trim();
      const desc = document.getElementById('productDesc').value.trim();
      const img = document.getElementById('productImg').value.trim();
      const price = document.getElementById('productPrice').value.trim();

      if (!name || !desc || !img || !price) {
        alert('⚠️ Please fill all fields!');
        return;
      }

      const id = 'product-' + Date.now();

      const card = `
        <div id="${id}" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition relative">
          <button onclick="document.getElementById('${id}').remove()" class="absolute top-2 right-2 bg-red-600 hover:bg-red-700 text-white text-xs px-2 py-1 rounded">✕</button>
          <img src="${img}" alt="${name}" class="h-40 mx-auto mb-4 object-contain" />
          <h3 class="text-xl font-semibold text-blue-700">${name}</h3>
          <p class="text-gray-600 mt-2">${desc}</p>
          <p class="text-blue-600 font-bold mt-2">LKR ${parseInt(price).toLocaleString()}</p>
          <button onclick="buyProduct('${name}', ${price})" class="w-full mt-4 bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition">
            Buy Now
          </button>
        </div>
      `;

      document.getElementById('productGrid').insertAdjacentHTML('beforeend', card);

      // Clear form
      document.getElementById('productName').value = '';
      document.getElementById('productDesc').value = '';
      document.getElementById('productImg').value = '';
      document.getElementById('productPrice').value = '';

      closeAddProductModal();
    }

    function buyProduct(name, price) {
      document.getElementById('buyProductName').textContent = name;
      document.getElementById('buyProductPrice').textContent = price.toLocaleString();
      document.getElementById('buyModal').classList.remove('hidden');
      document.getElementById('buyModal').classList.add('flex');
    }

    function closeBuyModal() {
      document.getElementById('buyModal').classList.add('hidden');
      document.getElementById('buyModal').classList.remove('flex');
    }

    function confirmPurchase() {
      alert('✅ Thank you for your purchase! We will contact you shortly.');
      closeBuyModal();
    }
  </script>
</body>
</html>
