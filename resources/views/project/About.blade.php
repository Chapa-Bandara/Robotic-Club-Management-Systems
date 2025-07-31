<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us | Robotics Society</title>
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Swiper.js CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .hero-bg {
      background-image: url('https://images.unsplash.com/photo-1507146161023-c1b267a29154?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
    }
    .swiper {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .swiper-slide img {
      height: 360px;
      object-fit: cover;
      width: 100%;
    }
  </style>
</head>
<body class="bg-gray-50">

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
  <section class="hero-bg text-white text-center py-20 relative">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-6">
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Empowering Innovation Through Robotics</h1>
      <p class="text-lg md:text-xl mb-8">
        We are a student-driven community at the University of Peradeniya shaping the future of automation, AI, and intelligent machines.
      </p>
      <a href="#mission" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg transition">
        Learn More
      </a>
    </div>
  </section>

  <!-- Main Content -->
  <main class="py-16">
    <div class="max-w-7xl mx-auto px-6">

      <!-- Mission -->
      <section id="mission" class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Mission</h2>
        <div class="bg-white p-10 rounded-lg shadow-lg max-w-5xl mx-auto">
          <p class="text-lg text-gray-700 leading-relaxed">
            The Robotics Society exists to foster hands-on learning, innovation, and collaboration among engineering students.
            We aim to bridge the gap between theory and practice by providing access to tools, mentorship, and real-world challenges
            in robotics, embedded systems, and artificial intelligence.
          </p>
          <p class="text-lg text-gray-700 leading-relaxed mt-6">
            By organizing workshops, competitions, and research projects, we empower students to become creators, problem-solvers,
            and leaders in the field of robotics.
          </p>
        </div>
      </section>

      <!-- Vision -->
      <section id="vision" class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Vision</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-lg shadow text-center">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Innovation</h3>
            <p class="text-gray-600">Encouraging bold ideas and creative engineering to solve real-world problems.</p>
          </div>
          <div class="bg-white p-8 rounded-lg shadow text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.879-1.13M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Education</h3>
            <p class="text-gray-600">Providing accessible training in robotics, AI, and automation for all students.</p>
          </div>
          <div class="bg-white p-8 rounded-lg shadow text-center">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Community</h3>
            <p class="text-gray-600">Building a collaborative network of students, faculty, and industry partners.</p>
          </div>
        </div>
      </section>

      <!-- History & Achievements -->
      <section id="history" class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Journey</h2>
        <div class="bg-white p-10 rounded-lg shadow-lg">
          <p class="text-lg text-gray-700 mb-6">
            Founded in 2018, the Robotics Society has grown into one of the most active technical clubs at the Faculty of engineering.
          </p>
          <ul class="space-y-4 text-gray-600">
            <li class="flex items-start">
              <span class="text-blue-500 mr-3 mt-1">•</span>
              <strong>2018:</strong> Club founded by a group of passionate undergraduates.
            </li>
            <li class="flex items-start">
              <span class="text-blue-500 mr-3 mt-1">•</span>
              <strong>2019:</strong> Hosted first Peradeniya Robotics Challenge with 12 teams.
            </li>
            <li class="flex items-start">
              <span class="text-blue-500 mr-3 mt-1">•</span>
              <strong>2022:</strong> Represented Sri Lanka at International RoboGames, Japan.
            </li>
            <li class="flex items-start">
              <span class="text-blue-500 mr-3 mt-1">•</span>
              <strong>2023:</strong> Won National Robotics Challenge with autonomous maze solver.
            </li>
            <li class="flex items-start">
              <span class="text-blue-500 mr-3 mt-1">•</span>
              <strong>2024:</strong> Launched AI & Robotics Seminar Series with industry experts.
            </li>
          </ul>
        </div>
      </section>

      <!-- Team Section Placeholder -->
      <section id="team" class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Executive Committee</h2>
        <p class="text-center text-gray-600 max-w-2xl mx-auto">
          Our leadership team drives the club’s vision, organizes events, and mentors members.
          Want to join the exec team? Stay active and get involved!
        </p>
      </section>

      <!-- Image Gallery / Slider -->
      <section id="gallery" class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">In Action</h2>
        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
          A glimpse into our world of robotics — from lab sessions and competitions to innovation and teamwork.
        </p>

        <div class="swiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" alt="Robot in Lab">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
              <img src="https://images.unsplash.com/photo-1533134486753-c833f0ed4866?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" alt="Team Working">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
              <img src="https://images.unsplash.com/photo-1629067211470-34d82737f4b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" alt="Robot Competition">
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide">
              <img src="https://images.unsplash.com/photo-1593642634367-d91a135587b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" alt="Coding Session">
            </div>
            <!-- Slide 5 -->
            <div class="swiper-slide">
              <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" alt="Robot Design">
            </div>
          </div>

          <!-- Navigation Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

          <!-- Pagination Dots -->
          <div class="swiper-pagination"></div>
        </div>
      </section>

    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="text-2xl font-bold mb-4">Robotics Society</h3>
      <p class="text-gray-300">Sri Lanka</p>
      <p class="text-gray-400 mt-2">📧 contact@robotics.@edu.lk</p>
      <div class="mt-6 flex justify-center space-x-6">
        <a href="https://www.youtube.com/redirect?event=channel_header&redir_token=QUFFLUhqbm5HTGJDYkVndC1xTXdaRDFZTTh4MGtCTWY0UXxBQ3Jtc0trc1JvM0hzNW9iZGN0Rk02aGViRkx2MVF5YUVNVDFfXzJGZjRKbmh3cnhvcEhEREZXNm15eTJSdjNGdEJpN2tMZHFkRW9rcVZkZ0E2TndvcHNkNFkwU0xaaWJIeDNTNWp3N25DX2czaGx5OHNfMG1mMA&q=https%3A%2F%2Fwww.facebook.com%2Fawesometechq" class="text-gray-300 hover:text-white">Facebook</a>
        <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
        <a href="https://www.youtube.com/@AwesomeTech" class="text-gray-300
         hover:text-white">YouTube</a>/
      </div>
      <p class="text-gray-500 text-sm mt-6">
        &copy; 2025 Robotics Society, All rights reserved.
      </p>
    </div>
  </footer>

  <!-- Swiper.js JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.swiper', {
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        effect: 'fade', // Optional: smooth fade effect
        fadeEffect: {
          crossFade: true
        },
        speed: 800
      });
    });
  </script>

</body>
</html>
