<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Robotics Society</title>

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .bg-gradient {
      background: linear-gradient(to right, #1e3a8a, #1e40af);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

  <!-- Login Container -->
  <div class="max-w-md w-full mx-4">

    <!-- Club Header -->
    <div class="text-center mb-8">
      <h1 class="text-3xl font-bold text-blue-700">Robotics Society</h1>
      <p class="text-gray-600">Sri Lanka<br/>🤖</p>
    </div>

    <!-- Login Card -->
    <div class="bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Member Login</h2>

      <!-- Login Form -->
      <form action="/dashboard" method="GET">
        <div class="mb-5">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            placeholder="your-email@pdn.ac.lk"
            required
          />
        </div>

        <div class="mb-5">
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Enter your password"
            required
          />
        </div>

        <div class="flex items-center justify-between mb-6">
          <div>
            <input type="checkbox" id="remember" name="remember" class="mr-2" />
            <label for="remember" class="text-sm text-gray-600">Remember me</label>
          </div>
          <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
        </div>

        <button
          type="submit"
          class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition"
        >
          Log In
        </button>
      </form>

      <!-- Register Link -->
      <div class="mt-6 text-center">
        <p class="text-sm text-gray-600">
          Not a member yet?
          <a href="{{ route('project.register') }}" class="text-blue-600 font-medium hover:underline">Register here</a>
        </p>
      </div>

      <!-- Back to Home -->
      <div class="mt-4 text-center">
        <a href="{{ route('project.home') }}" class="text-xs text-gray-500 hover:underline">&larr; Back to Homepage</a>
      </div>
    </div>

    <!-- Footer -->
    <p class="text-center text-gray-500 text-xs mt-6">
      &copy; 2025 Robotics Society, All rights reserved.
    </p>
  </div>

</body>
</html>
