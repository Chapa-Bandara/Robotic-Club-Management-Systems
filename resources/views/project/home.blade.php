<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Robotics Society</title>

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Google Fonts (Optional) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- jQuery from CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

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
  <header class="pt-24 pb-16 bg-gradient-to-r from-blue-500 to-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Robotics Society</h1>
      <p class="text-xl mb-6">Sri Lanka</p>
      <p class="text-lg max-w-3xl mx-auto mb-8 opacity-90">
        A vibrant community of students passionate about robotics, automation, and innovation.
        We design, build, and compete — transforming ideas into intelligent machines.
      </p>
      <a href="#about" class="bg-white text-blue-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition inline-block">
        Learn More
      </a>
    </div>
  </header>

  <!-- Main Content -->
  <main class="pt-20">


    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Who We Are</h2>
        <p class="text-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">
          The Robotics Society is a student-driven club dedicated to advancing robotic literacy and hands-on engineering.
          We bring together undergraduates from various disciplines to learn, design, and build robots that solve real-world challenges.
        </p>
        <p class="text-lg text-gray-600 max-w-4xl mx-auto mt-4">
          From autonomous navigation to robotic arms and AI-powered systems, our members gain practical experience through workshops, competitions, and collaborative projects.
        </p>
      </div>
    </section>

     <!-- YouTube Video Section -->
    <section id="video" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center">

        <!-- Section Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Watch Our Journey</h2>
            <p class="text-lg text-gray-600 mb-10">
                Experience the excitement of our robotics projects, competition highlights, and behind-the-scenes innovation.
            </p>
        </div>
        <div class="flex justify-center items-center min-h-screen bg-gray-50">
                    <iframe width="600" height="350"
            src="https://www.youtube.com/watch?v=5uUiAkyY408"
            title="YouTube video player"
            frameborder="0">
            </iframe>
        </div>



    <!-- Caption -->
    <p class="text-sm text-gray-500 mt-6">
      Featured: Our robot in action at the National Robotics Challenge
    </p>
  </div>
</section>

    <!-- Activities Section -->
    <section id="activities" class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">What We Do</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-lg shadow hover:shadow-xl transition text-center">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Workshops & Training</h3>
            <p class="text-gray-600">Learn Arduino, Raspberry Pi, ROS, Computer Vision, and Embedded Systems through hands-on sessions led by experienced members.</p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow hover:shadow-xl transition text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Annual Competitions</h3>
            <p class="text-gray-600">Design and build robots to compete in local and international events, including maze solvers, sumo bots, and autonomous challenges.</p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow hover:shadow-xl transition text-center">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.879-1.13M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Community & Outreach</h3>
            <p class="text-gray-600">We promote STEM education by organizing school visits, demo days, and open labs to inspire the next generation of engineers.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Achievements</h2>
        <p class="text-lg text-gray-600 mb-10">Proudly representing the University of Peradeniya on national and international stages.</p>
        <ul class="space-y-4 max-w-2xl mx-auto text-left bg-gray-50 p-6 rounded-lg">
          <li class="flex items-start">
            <span class="text-green-500 mr-3 mt-1">✓</span>
            <span><strong>2023:</strong> Champion – National Robotics Challenge (Sri Lanka)</span>
          </li>
          <li class="flex items-start">
            <span class="text-green-500 mr-3 mt-1">✓</span>
            <span><strong>2022:</strong> Represented Sri Lanka at International RoboGames, Japan</span>
          </li>
          <li class="flex items-start">
            <span class="text-green-500 mr-3 mt-1">✓</span>
            <span><strong>2021:</strong> Best Design Award – SLIIT TechFest Robotics Battle</span>
          </li>
          <li class="flex items-start">
            <span class="text-green-500 mr-3 mt-1">✓</span>
            <span><strong>2020:</strong> Finalist – IEEE Sri Lanka Robotics Symposium</span>
          </li>
          <li class="flex items-start">
            <span class="text-green-500 mr-3 mt-1">✓</span>
            <span><strong>Ongoing:</strong> Annual Peradeniya Robotics Challenge Organizer</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- Social Media Section -->
    <section id="social" class="py-16 bg-blue-600 text-white">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Follow Us</h2>
        <p class="text-xl mb-8 opacity-90">Stay updated with our latest projects, events, and robot builds!</p>
        <div class="flex justify-center space-x-6">
          <a href="#" class="bg-white text-blue-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.983h-1.51c-1.489 0-1.953.925-1.953 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="#" class="bg-white text-blue-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.146-3.233 1.658-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.163c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="#" class="bg-white text-blue-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
          </a>
          <a href="#" class="bg-white text-blue-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Contact / Join Us -->
    <section id="contact" class="py-16 bg-gray-100">
      <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Join the Robotics Society</h2>
        <p class="text-lg text-gray-600 mb-8">
          Are you a student, Join with us to explore the exciting world of robotics! Whether you're a beginner or an experienced builder, we have a place for you.
          Our community is open to all students from any discipline who are interested in robotics, programming, and engineering.
        </p>
        <p class="text-lg text-gray-600 mb-6">
          Participate in workshops, competitions, and collaborative projects. Gain hands-on experience and enhance your skills in robotics and automation.
          Whether you're interested in mechanical design, electronics, programming, or AI,
          there's something for everyone in our society.
          <br>
          <br>
          We welcome all levels of experience!
        </p>
        <a href="{{ route('project.register') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
          Register Now
        </a>
        <p class="mt-6 text-sm text-gray-500">
          Follow us on social media for updates.
        </p>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <p>&copy; 2025 Robotics Society. All rights reserved.</p>
      <p class="mt-2 text-gray-400">Developed by Robotics Society Web Team</p>
    </div>
  </footer>

  <!-- jQuery Script for Mobile Menu Toggle -->
  <script>
    $(document).ready(function () {
      $("#menu-toggle").click(function () {
        $("#mobile-menu").toggleClass("hidden");
      });
    });
  </script>

</body>
</html>
