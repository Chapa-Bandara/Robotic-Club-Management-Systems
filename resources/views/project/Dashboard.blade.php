<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard | Robotics Society</title>

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- jQuery & FullCalendar -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .sidebar-link {
      @apply flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg transition;
    }
    .sidebar-link.active {
      @apply bg-blue-600 text-white font-medium;
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen">

  <div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white h-screen fixed left-0 top-0 shadow-lg">
      <div class="p-6 text-center border-b">
        <h1 class="text-2xl font-bold text-blue-700">RoboticsSoc</h1>
        <p class="text-sm text-gray-600">🤖</p>
      </div>
      <nav class="mt-6 space-y-1 px-2" id="sidebarMenu">
        <!-- Links dynamically inserted by JS based on role -->
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 flex-1 p-6">

      <!-- Header -->
      <header class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-semibold text-gray-800">Dashboard</h2>
        <div class="flex items-center space-x-3">
          <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-semibold">
            JS
          </div>
          <span class="text-sm font-medium text-gray-700" id="greeting">John Silva</span>
        </div>
      </header>

      <!-- Stats Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-medium text-gray-800">Events This Month</h3>
          <p class="text-3xl font-bold text-blue-600 mt-2">3</p>
          <p class="text-sm text-gray-500">Workshop, Seminar, Competition</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-medium text-gray-800">Courses Enrolled</h3>
          <p class="text-3xl font-bold text-blue-600 mt-2">2</p>
          <p class="text-sm text-gray-500">Python, Robotics Fundamentals</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-medium text-gray-800">Shop Orders</h3>
          <p class="text-3xl font-bold text-blue-600 mt-2">1</p>
          <p class="text-sm text-gray-500">Arduino UNO R3</p>
        </div>
      </div>

      <!-- Announcements -->
      <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Announcements</h3>
        <ul class="space-y-3">
          <li class="border-l-4 border-blue-500 pl-4">
            <strong>Annual Robotics Competition</strong><br>
            <span class="text-gray-600 text-sm">Registration opens on June 1st. Prizes up to LKR 50,000!</span>
          </li>
          <li class="border-l-4 border-yellow-500 pl-4">
            <strong>AI & Robotics Seminar Series</strong><br>
            <span class="text-gray-600 text-sm">Next session: June 5th, 3:00 PM, Engineering Block A.</span>
          </li>
          <li class="border-l-4 border-green-500 pl-4">
            <strong>New Components in Shop</strong><br>
            <span class="text-gray-600 text-sm">ESP32, Motor Shields now available!</span>
          </li>
        </ul>
      </div>

      <!-- Calendar -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Upcoming Events</h3>
        <div id="calendar"></div>
      </div>

    </main>

  </div>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 py-6 mt-10">
    &copy; 2025 Robotics Society, University of Peradeniya. All rights reserved.
  </footer>

  <!-- Script -->
  <script>
    // Simulated user (in real app, this comes from backend)
    const currentUser = {
      name: "John Silva",
      role: "executive" // 'member', 'executive', 'admin'
    };

    // Update greeting
    document.getElementById('greeting').textContent = currentUser.name;

    // Define menu items by role
    const menuItems = {
      member: [
        { text: "Dashboard", href: "{{ route('project.dashboard') }}", icon: "M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6", active: true },
        { text: "My Profile", href: "profile.html", icon: "M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" },
        { text: "Courses", href: "course.html", icon: "M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" },
        { text: "Shop", href: "shop.html", icon: "M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" },
        { text: "Logout", href: "login.html", icon: "M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" }
      ],
      executive: [
        { text: "Dashboard", href: "{{ route('project.dashboard') }}", icon: "M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6", active: true },
        { text: "My Profile", href: "profile.html", icon: "M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" },
        { text: "Courses", href: "course.html", icon: "M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" },
        { text: "Shop", href: "shop.html", icon: "M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" },
        { text: "Manage Events", href: "#", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z", id: "admin-events-link" },
        { text: "Logout", href: "login.html", icon: "M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" }
      ],
      admin: [
        { text: "Dashboard", href: "{{ route('project.dashboard') }}", icon: "M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6", active: true },
        { text: "My Profile", href: "profile.html", icon: "M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" },
        { text: "Manage Users", href: "#", icon: "M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" },
        { text: "Manage Events", href: "#", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z", id: "admin-events-link" },
        { text: "System Logs", href: "#", icon: "M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" },
        { text: "Logout", href: "login.html", icon: "M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" }
      ]
    };

    // Build sidebar menu
    const menu = document.getElementById('sidebarMenu');
    const items = menuItems[currentUser.role] || menuItems.member;

    items.forEach(item => {
      const link = document.createElement('a');
      link.href = item.href;
      link.className = item.active ? 'sidebar-link active' : 'sidebar-link';
      if (item.id) link.id = item.id;
      link.innerHTML = `
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="${item.icon}"></path>
        </svg>
        ${item.text}
      `;
      menu.appendChild(link);
    });

    // Initialize Calendar
    document.addEventListener('DOMContentLoaded', function() {
      const calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [
          {
            title: 'Robotics Workshop',
            start: '2025-06-03',
            end: '2025-06-03',
            color: '#3B82F6'
          },
          {
            title: 'AI Seminar',
            start: '2025-06-05T15:00:00',
            end: '2025-06-05T17:00:00',
            color: '#10B981'
          },
          {
            title: 'Competition Practice',
            start: '2025-06-10',
            color: '#F59E0B'
          },
          {
            title: 'Annual Robotics Challenge',
            start: '2025-06-20',
            end: '2025-06-22',
            color: '#EF4444'
          }
        ],
        editable: currentUser.role === 'admin' || currentUser.role === 'executive',
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true
      });
      calendar.render();
    });
  </script>
</body>
</html>
