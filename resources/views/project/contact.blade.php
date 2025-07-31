<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us | Robotics Society</title>

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
    .form-input, .form-textarea {
      @apply w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen">

  <!-- Navigation -->
  <<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
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
    <h1 class="text-4xl font-bold">Get in Touch</h1>
    <p class="text-xl mt-4 max-w-3xl mx-auto">
      Have a question, idea, or want to collaborate? Reach out to the Robotics Society team.
    </p>
  </section>

  <!-- Main Content -->
  <main class="py-16 px-6 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
        <form id="contactForm" class="space-y-5">

          <!-- Full Name -->
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" id="name" name="name" class="form-input" placeholder="Enter your full name" required />
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="your-email@pdn.ac.lk" required />
          </div>

          <!-- Subject -->
          <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
            <select id="subject" name="subject" class="form-input" required>
              <option value="" disabled selected>Select a subject</option>
              <option value="membership">Membership Inquiry</option>
              <option value="workshop">Workshop Registration</option>
              <option value="sponsorship">Sponsorship & Collaboration</option>
              <option value="project">Project Collaboration</option>
              <option value="other">Other</option>
            </select>
          </div>

          <!-- Message -->
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
            <textarea id="message" name="message" rows="5" class="form-textarea" placeholder="How can we help you?" required></textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
            Send Message
          </button>
        </form>

        <!-- Success Message -->
        <div id="successMessage" class="hidden mt-6 p-4 bg-green-50 border border-green-200 rounded-lg text-center">
          <p class="text-green-700">✅ Thank you! Your message has been sent. We'll get back to you within 24 hours.</p>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="space-y-8">

        <!-- Club Info -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-6">Contact Information</h3>
          <div class="space-y-4 text-gray-700">
            <div class="flex items-start">
              <svg class="w-5 h-5 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <div>
                <p><strong>Email</strong></p>
                <p class="text-sm"><yasasthibandara@gmail class="com"></yasasthibandara@gmail></p>
              </div>
            </div>
            <div class="flex items-start">
              <svg class="w-5 h-5 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <div>
                <p><strong>Address</strong></p>
                <p class="text-sm">Faculty of Engineering<br>Sri Lanka</p>
              </div>
            </div>
            <div class="flex items-start">
              <svg class="w-5 h-5 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                <p><strong>Office Hours</strong></p>
                <p class="text-sm">Mon-Fri: 9:00 AM – 4:00 PM<br>Robotics Lab, Engineering Block</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Social Links -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-6">Follow Us</h3>
          <div class="flex space-x-4">
            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-200 transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="#" class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 hover:bg-pink-200 transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.378 0 12.007c-.029 6.51 5.304 11.867 11.807 11.99 1.625.031 2.38-.725 2.51-1.417.113-.608.063-1.196-.021-1.766-.153-.982-.888-1.521-1.804-1.521-.82 0-1.21.579-1.511 1.074-.277.452-.57 1.026-.856 1.593-.562 1.09-.629 1.51-.629 2.766 0 1.26.066 1.68.63 2.77.562 1.09 1.473 2.084 2.834 2.084 1.362 0 2.273-.994 2.834-2.084.562-1.09.63-1.51.63-2.77 0-1.256-.067-1.676-.63-2.766-.286-.567-.579-1.141-.856-1.593-.29-.495-.682-1.074-1.502-1.074-.917 0-1.652.54-1.805 1.521-.084.57-.134 1.158-.021 1.766.13.692.885 1.448 2.51 1.417 6.503-.123 11.838-5.48 11.808-11.99-.029-6.629-5.396-12.007-12.017-12.007z"/></svg>
            </a>
            <a href="#" class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center text-red-600 hover:bg-red-200 transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 1-1.989.715 6.068 6.068 0 0 0-3.59-1.205c-3.408-.002-6.17 2.77-6.17 6.179 0 .48.055.948.162 1.397-5.114-.254-9.663-2.695-12.829-6.402-.535.92-1.049 2.507-1.049 4.067 0 2.058.934 3.87 2.349 4.962-.868-.027-1.697-.265-2.417-.652l-.001.066c0 2.87 2.04 5.25 4.758 5.813-.498.134-1.025.205-1.573.205-.383 0-.755-.038-1.115-.111.75 2.345 2.918 4.03 5.432 4.086-2.003 1.565-4.524 2.497-7.24 2.497-.472 0-.938-.027-1.397-.082 2.605 1.688 5.697 2.678 8.997 2.678 10.759 0 16.647-8.93 16.647-16.648 0-.255-.006-.507-.016-.758 1.146-.83 2.138-1.862 2.955-3.038z"/></svg>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-200 transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
          </div>
        </div>

        <!-- Map -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-6">Find Us</h3>
          <div class="rounded-lg overflow-hidden">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.173295868165!2d80.59788937483825!3d7.276858392744595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3663d4ac53943%3A0x17555596f1780941!2sFaculty%20of%20Engineering%2C%20University%20of%20Peradeniya!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
              width="100%"
              height="250"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              class="rounded-lg"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="text-2xl font-bold mb-4">Robotics Society</h3>
      <p class="text-gray-300">Faculty of Engineering, Sri Lanka</p>
      <p class="text-gray-400 mt-2">📧 contact@robotics.@edu.lk</p>
      <p class="text-gray-500 text-sm mt-6">
        &copy; 2025 Robotics Society,All rights reserved.
      </p>
    </div>
  </footer>

  <!-- Form Script -->
  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      // Simulate success
      document.getElementById('contactForm').classList.add('hidden');
      document.getElementById('successMessage').classList.remove('hidden');
    });
  </script>
</body>
</html>
