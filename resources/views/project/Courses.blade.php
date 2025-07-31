<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Courses | Robotics Society</title>

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- D3.js -->
  <script src="https://d3js.org/d3.v7.min.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .graph-container {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .node:hover {
      cursor: pointer;
      stroke: #2563eb;
      stroke-width: 2px;
    }
    .link {
      stroke: #64748b;
    }
    .form-input {
      @apply w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500;
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

  <!-- Hero -->
  <section class="bg-blue-700 text-white text-center py-16">
    <h1 class="text-4xl font-bold">Learning Network</h1>
    <p class="text-xl mt-4 max-w-3xl mx-auto">
      Explore interconnected Robotics and Computer Science courses with direct access to official learning resources.
    </p>
  </section>

  <!-- Course Management Table -->
  <section class="py-12 px-6 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Live Zoom Classes</h2>
      <button onclick="openAddClassModal()" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg shadow transition">
        ➕ Add Class
      </button>
    </div>

    <div class="bg-white rounded-lg shadow overflow-x-auto">
      <table id="zoomClassesTable" class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Join</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Resources</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <!-- Filled by JavaScript -->
        </tbody>
      </table>
    </div>
  </section>

  <!-- Add Class Modal -->
  <div id="addClassModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full">
      <h3 class="text-xl font-bold text-gray-800 mb-6">Add New Class</h3>
      <form id="newClassForm" class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Course Name</label>
          <input type="text" id="courseName" required class="form-input" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
          <textarea id="courseDesc" rows="3" required class="form-input"></textarea>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
          <select id="courseType" class="form-input">
            <option value="robotics">Robotics</option>
            <option value="cs">Computer Science</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Zoom Link</label>
          <input type="url" id="zoomLink" required class="form-input" placeholder="https://zoom.us/j/..." />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Resource Link</label>
          <input type="url" id="resourceLink" class="form-input" placeholder="https://example.com" />
        </div>
        <div class="flex justify-end space-x-4">
          <button type="button" onclick="closeAddClassModal()" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</button>
          <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">Add</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Course Network Graph -->
  <section class="py-12 px-6 max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Complete Course Network</h2>
    <div class="graph-container">
      <svg id="mergedGraph" class="w-full bg-white"></svg>
    </div>

    <!-- Legend -->
    <div class="flex justify-center mt-6 space-x-6 text-sm text-gray-600">
      <div class="flex items-center">
        <div class="w-3 h-3 rounded-full bg-blue-500 mr-2"></div>
        <span>Robotics</span>
      </div>
      <div class="flex items-center">
        <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
        <span>Computer Science</span>
      </div>
      <div class="flex items-center">
        <div class="w-3 h-3 rounded-full bg-blue-700 mr-2"></div>
        <span>ROBO.NET</span>
      </div>
      <div class="flex items-center">
        <div class="w-3 h-3 rounded-full bg-purple-500 mr-2"></div>
        <span>CS.NET</span>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="text-2xl font-bold mb-4">Robotics Society</h3>
      <p class="text-gray-300">Faculty of Engineering, Sri Lanka</p>
      <p class="text-gray-400 mt-2">📧 contact@robotics.@edu.lk</p>
      <p class="text-gray-500 text-sm mt-6">
        &copy; 2025 Robotics Society, All rights reserved.
      </p>
    </div>
  </footer>

  <!-- Data & Script -->
  <script>
    // Course Data
    const nodes = [
      { id: "ROBO.NET", group: "club", desc: "Robotics Club Hub" },
      { id: "CS.NET", group: "club", desc: "Computer Science Club Hub" },
      // Robotics Subjects
      { id: "Robotics Fundamentals", group: "robotics", desc: "Introduction to robotics principles" },
      { id: "Python for Robotics", group: "robotics", desc: "Python programming for robotics applications" },
      { id: "ROS (Robot OS)", group: "robotics", desc: "Robot Operating System framework" },
      { id: "Arduino Programming", group: "robotics", desc: "Microcontroller programming with Arduino" },
      { id: "Raspberry Pi", group: "robotics", desc: "Single-board computers for robotics" },
      { id: "Embedded Systems", group: "robotics", desc: "Hardware-software integration" },
      { id: "Control Systems", group: "robotics", desc: "Feedback control theory" },
      { id: "Computer Vision", group: "robotics", desc: "Image processing for robotics" },
      { id: "SLAM", group: "robotics", desc: "Simultaneous Localization and Mapping" },
      { id: "Robot Kinematics", group: "robotics", desc: "Motion geometry and mechanics" },
      { id: "Sensor Fusion", group: "robotics", desc: "Combining data from multiple sensors" },
      { id: "Autonomous Vehicles", group: "robotics", desc: "Self-driving car technologies" },
      { id: "Drone Programming", group: "robotics", desc: "Autonomous drone systems" },
      { id: "Industrial Robotics", group: "robotics", desc: "Manufacturing automation" },
      { id: "Humanoid Robotics", group: "robotics", desc: "Bipedal and human-like robots" },
      { id: "Swarm Robotics", group: "robotics", desc: "Collective robot behavior" },
      { id: "Robotic Manipulation", group: "robotics", desc: "Arms and grippers control" },
      { id: "AI in Robotics", group: "robotics", desc: "Artificial intelligence applications" },
      { id: "Robot Ethics", group: "robotics", desc: "Ethical considerations in robotics" },
      // Computer Science Subjects
      { id: "Data Structures", group: "cs", desc: "Organizing and storing data" },
      { id: "Algorithms", group: "cs", desc: "Problem-solving procedures" },
      { id: "Operating Systems", group: "cs", desc: "System software management" },
      { id: "Computer Networks", group: "cs", desc: "Communication between computers" },
      { id: "Database Systems", group: "cs", desc: "Data storage and retrieval" },
      { id: "Software Engineering", group: "cs", desc: "Systematic software development" },
      { id: "Computer Architecture", group: "cs", desc: "Hardware and software interface" },
      { id: "Distributed Systems", group: "cs", desc: "Multiple computer coordination" },
      { id: "Compiler Design", group: "cs", desc: "Language translation systems" },
      { id: "AI & Machine Learning", group: "cs", desc: "Intelligent systems creation" },
      { id: "Computer Graphics", group: "cs", desc: "Visual content generation" },
      { id: "Cybersecurity", group: "cs", desc: "Information protection" },
      { id: "Cloud Computing", group: "cs", desc: "Internet-based computing" },
      { id: "Blockchain", group: "cs", desc: "Decentralized digital ledgers" },
      { id: "Quantum Computing", group: "cs", desc: "Quantum-mechanical phenomena" },
      { id: "IoT Systems", group: "cs", desc: "Internet of Things networks" },
      { id: "Big Data", group: "cs", desc: "Large dataset analysis" },
      { id: "Natural Language Processing", group: "cs", desc: "Human-computer language interaction" },
      { id: "Computer Vision (CS)", group: "cs", desc: "Image understanding by computers" },
      { id: "Human-Computer Interaction", group: "cs", desc: "User interface design" }
    ];

    const links = [
      // ROBO.NET connections
      { source: "ROBO.NET", target: "Robotics Fundamentals" },
      { source: "ROBO.NET", target: "Python for Robotics" },
      { source: "ROBO.NET", target: "ROS (Robot OS)" },
      { source: "ROBO.NET", target: "Arduino Programming" },
      { source: "ROBO.NET", target: "Raspberry Pi" },
      { source: "ROBO.NET", target: "Embedded Systems" },
      { source: "ROBO.NET", target: "Control Systems" },
      { source: "ROBO.NET", target: "Computer Vision" },
      { source: "ROBO.NET", target: "SLAM" },
      { source: "ROBO.NET", target: "Robot Kinematics" },
      { source: "ROBO.NET", target: "Sensor Fusion" },
      { source: "ROBO.NET", target: "Autonomous Vehicles" },
      { source: "ROBO.NET", target: "Drone Programming" },
      { source: "ROBO.NET", target: "Industrial Robotics" },
      { source: "ROBO.NET", target: "Humanoid Robotics" },
      { source: "ROBO.NET", target: "Swarm Robotics" },
      { source: "ROBO.NET", target: "Robotic Manipulation" },
      { source: "ROBO.NET", target: "AI in Robotics" },
      { source: "ROBO.NET", target: "Robot Ethics" },
      // CS.NET connections
      { source: "CS.NET", target: "Data Structures" },
      { source: "CS.NET", target: "Algorithms" },
      { source: "CS.NET", target: "Operating Systems" },
      { source: "CS.NET", target: "Computer Networks" },
      { source: "CS.NET", target: "Database Systems" },
      { source: "CS.NET", target: "Software Engineering" },
      { source: "CS.NET", target: "Computer Architecture" },
      { source: "CS.NET", target: "Distributed Systems" },
      { source: "CS.NET", target: "Compiler Design" },
      { source: "CS.NET", target: "AI & Machine Learning" },
      { source: "CS.NET", target: "Computer Graphics" },
      { source: "CS.NET", target: "Cybersecurity" },
      { source: "CS.NET", target: "Cloud Computing" },
      { source: "CS.NET", target: "Blockchain" },
      { source: "CS.NET", target: "Quantum Computing" },
      { source: "CS.NET", target: "IoT Systems" },
      { source: "CS.NET", target: "Big Data" },
      { source: "CS.NET", target: "Natural Language Processing" },
      { source: "CS.NET", target: "Computer Vision (CS)" },
      { source: "CS.NET", target: "Human-Computer Interaction" },
      // Interdisciplinary connections
      { source: "Computer Vision", target: "Computer Vision (CS)" },
      { source: "AI in Robotics", target: "AI & Machine Learning" },
      { source: "Embedded Systems", target: "Computer Architecture" },
      { source: "IoT Systems", target: "Embedded Systems" },
      { source: "Python for Robotics", target: "Data Structures" }
    ];

    // Official resource links
    const resourceLinks = {
      // Robotics Resources
      "Robotics Fundamentals": "https://robotics.nasa.gov",
      "Python for Robotics": "https://wiki.python.org/moin/Robotics",
      "ROS (Robot OS)": "https://www.ros.org",
      "Arduino Programming": "https://www.arduino.cc",
      "Raspberry Pi": "https://www.raspberrypi.org",
      "Embedded Systems": "https://www.embedded.com",
      "Control Systems": "https://www.ieeecss.org",
      "Computer Vision": "https://opencv.org",
      "SLAM": "https://www.robots.ox.ac.uk/~tutorial/slam.html",
      "Robot Kinematics": "https://robotacademy.net.au",
      "Sensor Fusion": "https://www.mathworks.com/sensor-fusion-and-tracking.html",
      "Autonomous Vehicles": "https://www.sae.org/standards/content/j3016_202104",
      "Drone Programming": "https://developer.dji.com",
      "Industrial Robotics": "https://ifr.org",
      "Humanoid Robotics": "https://www.humanoids2023.org",
      "Swarm Robotics": "https://www.swarmrobotics.org",
      "Robotic Manipulation": "https://manipulation.cs.cmu.edu",
      "AI in Robotics": "https://ai.google",
      "Robot Ethics": "https://www.robotics.org",
      // Computer Science Resources
      "Data Structures": "https://opendsa-server.cs.vt.edu",
      "Algorithms": "https://algs4.cs.princeton.edu",
      "Operating Systems": "https://pages.cs.wisc.edu/~remzi/OSTEP",
      "Computer Networks": "https://gaia.cs.umass.edu/kurose_ross/index.php",
      "Database Systems": "https://db-book.com",
      "Software Engineering": "https://www.sei.cmu.edu",
      "Computer Architecture": "https://csapp.cs.cmu.edu",
      "Distributed Systems": "https://pdos.csail.mit.edu/6.824",
      "Compiler Design": "https://www.compiler-principles.org",
      "AI & Machine Learning": "https://ai.google/education",
      "Computer Graphics": "https://www.khronos.org/opengl",
      "Cybersecurity": "https://www.sans.org",
      "Cloud Computing": "https://aws.amazon.com/architecture",
      "Blockchain": "https://ethereum.org/en/developers/docs",
      "Quantum Computing": "https://quantum-computing.ibm.com",
      "IoT Systems": "https://iot.ieee.org",
      "Big Data": "https://hadoop.apache.org",
      "Natural Language Processing": "https://nlp.stanford.edu",
      "Computer Vision (CS)": "https://www.cv-foundation.org",
      "Human-Computer Interaction": "https://www.sigchi.org"
    };

    const colorMap = {
      club: "#1d4ed8",     // Dark Blue
      robotics: "#2563eb", // Blue
      cs: "#ca8a04"        // Yellow
    };

    // Initialize Graph
    const svg = d3.select("#mergedGraph");
    const width = svg.node().getBoundingClientRect().width;
    const height = 700;

    svg.attr("width", width).attr("height", height);

    const g = svg.append("g");

    const simulation = d3.forceSimulation(nodes)
      .force("link", d3.forceLink(links).id(d => d.id).distance(120))
      .force("charge", d3.forceManyBody().strength(-500))
      .force("center", d3.forceCenter(width / 2, height / 2))
      .force("collision", d3.forceCollide().radius(30));

    const link = g.append("g")
      .selectAll("line")
      .data(links)
      .enter()
      .append("line")
      .attr("class", "link")
      .attr("stroke-width", 1.5);

    const node = g.append("g")
      .selectAll(".node")
      .data(nodes)
      .enter()
      .append("g")
      .attr("class", "node")
      .call(d3.drag()
        .on("start", dragstarted)
        .on("drag", dragged)
        .on("end", dragended))
      .on("click", function(event, d) {
        if (resourceLinks[d.id]) {
          window.open(resourceLinks[d.id], "_blank");
        }
      });

    node.append("circle")
      .attr("r", 18)
      .attr("fill", d => colorMap[d.group])
      .attr("stroke", "#fff")
      .attr("stroke-width", 1.5);

    node.append("text")
      .text(d => d.id.split(" ").map(word => word[0]).join("") + d.id.split(" ").slice(1).map(word => word.substring(0, 3)).join(""))
      .attr("text-anchor", "middle")
      .attr("dy", 4)
      .attr("fill", "white")
      .style("font-size", "8px");

    node.append("title")
      .text(d => `${d.id}\n${d.desc}`);

    simulation.on("tick", () => {
      link
        .attr("x1", d => d.source.x)
        .attr("y1", d => d.source.y)
        .attr("x2", d => d.target.x)
        .attr("y2", d => d.target.y);

      node
        .attr("transform", d => `translate(${d.x},${d.y})`);
    });

    function dragstarted(event, d) {
      if (!event.active) simulation.alphaTarget(0.3).restart();
      d.fx = d.x;
      d.fy = d.y;
    }

    function dragged(event, d) {
      d.fx = event.x;
      d.fy = event.y;
    }

    function dragended(event, d) {
      if (!event.active) simulation.alphaTarget(0);
      d.fx = null;
      d.fy = null;
    }

    // Zoom Class Management
    const zoomClassesTable = document.getElementById('zoomClassesTable').getElementsByTagName('tbody')[0];
    const newClassForm = document.getElementById('newClassForm');

    const initialClasses = [
      { name: "Python for Robotics", desc: "Learn robotics with Python basics", type: "robotics", zoom: "https://zoom.us/j/1234000004", resource: "https://wiki.python.org/moin/Robotics" },
      { name: "AI & Machine Learning", desc: "Intro to Artificial Intelligence", type: "cs", zoom: "https://zoom.us/j/1234000107", resource: "https://ai.google/education" },
      { name: "Arduino Programming", desc: "Basics of embedded C", type: "robotics", zoom: "https://zoom.us/j/1234000003", resource: "https://www.arduino.cc" }
    ];

    function addClassToTable(cls) {
      const newRow = zoomClassesTable.insertRow();
      newRow.innerHTML = `
        <td class="px-6 py-4 font-medium text-gray-800">${cls.name}</td>
        <td class="px-6 py-4 text-gray-600">${cls.desc}</td>
        <td class="px-6 py-4">
          <span class="px-2 py-1 rounded-full text-xs ${cls.type === 'robotics' ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800'}">
            ${cls.type === 'robotics' ? 'Robotics' : 'CS'}
          </span>
        </td>
        <td class="px-6 py-4">
          <a href="${cls.zoom}" target="_blank" class="text-blue-600 hover:underline">Join</a>
        </td>
        <td class="px-6 py-4">
          <a href="${cls.resource}" target="_blank" class="text-blue-600 hover:underline">Resources</a>
        </td>
        <td class="px-6 py-4">
          <button class="text-red-600 hover:text-red-800 delete-btn">Delete</button>
        </td>
      `;
    }

    initialClasses.forEach(cls => addClassToTable(cls));

    function openAddClassModal() {
      document.getElementById('addClassModal').classList.remove('hidden');
      document.getElementById('addClassModal').classList.add('flex');
    }

    function closeAddClassModal() {
      document.getElementById('addClassModal').classList.add('hidden');
      document.getElementById('addClassModal').classList.remove('flex');
      newClassForm.reset();
    }

    newClassForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const newClass = {
        name: document.getElementById('courseName').value,
        desc: document.getElementById('courseDesc').value,
        type: document.getElementById('courseType').value,
        zoom: document.getElementById('zoomLink').value,
        resource: document.getElementById('resourceLink').value || "#"
      };

      addClassToTable(newClass);

      if (!nodes.some(node => node.id === newClass.name)) {
        nodes.push({ id: newClass.name, group: newClass.type, desc: newClass.desc });
        links.push({
          source: newClass.type === 'robotics' ? "ROBO.NET" : "CS.NET",
          target: newClass.name
        });
        if (newClass.resource !== "#") resourceLinks[newClass.name] = newClass.resource;
        updateGraph();
      }

      closeAddClassModal();
    });

    zoomClassesTable.addEventListener('click', function(e) {
      if (e.target.classList.contains('delete-btn')) {
        const row = e.target.closest('tr');
        const courseName = row.cells[0].textContent;
        row.remove();

        const nodeIndex = nodes.findIndex(node => node.id === courseName);
        if (nodeIndex !== -1) {
          nodes.splice(nodeIndex, 1);
          const newLinks = links.filter(link => link.source !== courseName && link.target !== courseName);
          links.length = 0;
          links.push(...newLinks);
          delete resourceLinks[courseName];
          updateGraph();
        }
      }
    });

    function updateGraph() {
      simulation.nodes(nodes);
      simulation.force("link").links(links);
      simulation.alpha(0.3).restart();
    }
  </script>
</body>
</html>
