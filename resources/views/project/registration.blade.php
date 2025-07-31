<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register | Robotics Society</title>
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
    .hidden {
      display: none;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center py-12 px-4">
  <!-- Registration Container -->
  <div class="max-w-lg w-full mx-auto bg-white p-8 rounded-lg shadow-lg">

    <!-- Club Header -->
    <div class="text-center mb-8">
      <h1 class="text-3xl font-bold text-blue-700">Robotics Society</h1>
      <p class="text-gray-600">Sri Lanka</p>
    </div>

    <h2 class="text-2xl font-semibold text-gray-800 mb-2 text-center">Create Account</h2>
    <p class="text-sm text-gray-600 text-center mb-6">
      Join our community of innovators and help shape the future of robotics.
    </p>

    <!-- Registration Form -->
    <form id="registrationForm" action="/dashboard" method="POST">

      <!-- Full Name -->
      <div class="mb-5">
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
        <input
          type="text"
          id="name"
          name="name"
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

      <!-- Password -->
      <div class="mb-5">
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Create a strong password"
          required
        />
      </div>

      <!-- Confirm Password -->
      <div class="mb-5">
        <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
        <input
          type="password"
          id="confirmPassword"
          name="confirmPassword"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Re-enter your password"
          required
        />
      </div>

      <!-- Role Selection -->
      <div class="mb-5">
        <label class="block text-sm font-medium text-gray-700 mb-1">Register As</label>
        <select
          id="role"
          name="role"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          required
        >
          <option value="" disabled selected>Select your role</option>
          <option value="student">Student Member</option>
          <option value="lecturer">Lecturer / Faculty Advisor</option>
          <option value="management">Management / Executive</option>
        </select>
      </div>

      <!-- Student-Specific Fields -->
      <div id="studentFields" class="mb-5 hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="indexNumber" class="block text-sm font-medium text-gray-700 mb-1">Index Number</label>
            <input
              type="text"
              id="indexNumber"
              name="indexNumber"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="e.g., 2021/CS/123"
            />
          </div>
          <div>
            <label for="faculty" class="block text-sm font-medium text-gray-700 mb-1">Faculty</label>
            <select
              id="faculty"
              name="faculty"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option value="">Select Faculty</option>
              <option value="engineering">Engineering</option>
              <option value="science">Science</option>
              <option value="it">IT</option>
              <option value="medicine">Medicine</option>
              <option value="agriculture">Agriculture</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Lecturer-Specific Fields -->
      <div id="lecturerFields" class="mb-5 hidden">
        <div>
          <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
          <input
            type="text"
            id="department"
            name="department"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="e.g., Computer Engineering"
          />
        </div>
      </div>

      <!-- Management/Executive-Specific Fields -->
      <div id="managementFields" class="mb-5 hidden">
        <div>
          <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Position</label>
          <input
            type="text"
            id="position"
            name="position"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="e.g., President, Treasurer"
          />
        </div>
      </div>

      <!-- Submit Button -->
      <button
        type="submit"
        class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition mt-4"
      >
        Register Now
      </button>
    </form>

    <!-- Login Link -->
    <div class="mt-6 text-center">
      <p class="text-sm text-gray-600">
        Already have an account?
        <a href="{{ route('project.login') }}" class="text-blue-600 font-medium hover:underline">Log In</a>
      </p>
    </div>

    <!-- Back to Home -->
    <div class="mt-4 text-center">
      <a href="{{ route('project.home') }}" class="text-xs text-gray-500 hover:underline">&larr; Back to Homepage</a>
    </div>

  </div>

  <!-- Footer -->
  <p class="text-center text-gray-500 text-xs mt-6 absolute bottom-4">
    &copy; 2025 Robotics Society, University of Peradeniya. All rights reserved.
  </p>

  <!-- Dynamic Field Logic with jQuery -->
  <script>
    $(document).ready(function () {
      const $role = $('#role');
      const $studentFields = $('#studentFields');
      const $lecturerFields = $('#lecturerFields');
      const $managementFields = $('#managementFields');

      $role.on('change', function () {
        // Hide all
        $studentFields.addClass('hidden');
        $lecturerFields.addClass('hidden');
        $managementFields.addClass('hidden');

        // Show relevant
        if (this.value === 'student') {
          $studentFields.removeClass('hidden');
        } else if (this.value === 'lecturer') {
          $lecturerFields.removeClass('hidden');
        } else if (this.value === 'management') {
          $managementFields.removeClass('hidden');
        }
      });

      // Optional: Password Match Validation
      $('#registrationForm').on('submit', function (e) {
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();
        if (password !== confirmPassword) {
          e.preventDefault();
          alert('Passwords do not match!');
        }
      });
    });
  </script>
</body>
</html>
