<?php
// home.php — Single-file Professional Employee Management System Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EMS — Employee Management System</title>

<!-- Font Awesome for social icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  *{margin:0;padding:0;box-sizing:border-box;font-family:Segoe UI,Roboto,sans-serif;}
  body{background:#f4f4f4;}

  /* Hero Section */
  .hero{
    min-height:100vh;
    background-image:linear-gradient(180deg,rgba(0,0,0,0.45),rgba(0,0,0,0.55)),url('https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1920');
    background-size:cover;background-position:center;
    color:white;display:flex;flex-direction:column;
  }
  nav{display:flex;justify-content:space-between;align-items:center;padding:20px 60px;}
  .logo img{height:50px;} /* EMS Logo size */
  ul{display:flex;gap:30px;list-style:none;}
  ul li a{text-decoration:none;color:white;font-size:18px;transition:0.3s;}
  ul li a:hover{color:#00eaff;}
  .hero-content{margin:auto;text-align:center;}
  .hero-content img.hero-img{width:120px;height:120px;margin-bottom:20px;} /* EMS hero image */
  .hero-content h1{font-size:60px;margin-bottom:20px;}
  .hero-content p{font-size:22px;margin-bottom:30px;}
  .btn{padding:12px 28px;background:#00eaff;color:black;border-radius:6px;text-decoration:none;font-weight:bold;}

  /* Sections with blue background */
  .section{
    padding:80px 60px;
    background:#007bff; /* Blue background */
    color:white;
  }
  .section:nth-of-type(even){ /* Slightly darker blue for even sections for contrast */
    background:#0056b3;
  }
  .title{text-align:center;font-size:36px;margin-bottom:40px;}
  .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:40px;}
  .card{background:rgba(255,255,255,0.1);padding:25px;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.1);}
  .card h3, .card p{color:white;}

  /* Contact Section Icons */
  .social-icons a {
    font-size: 42px;
    transition: 0.3s ease;
  }
  .social-icons a:hover {
    transform: scale(1.25);
    filter: drop-shadow(0px 0px 10px rgba(0, 238, 255, 0.9));
  }

  /* Footer */
  footer{text-align:center;padding:25px;background:#222;color:white;margin-top:40px;}
</style>
</head>
<body>

<!-- Hero Section -->
<div class="hero">
  <nav>
    <div class="logo">
      <!-- Replace with your EMS logo image -->
      <img src="5879.jpg" alt="EMS ">
    </div>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#login">Login</a></li>
    </ul>
  </nav>

  <div class="hero-content" id="home">
    <!-- EMS Hero Image -->
    
    <h1> Wellcome <br>Employee Management System</h1>
    <p>Manage, Track & Organize Employees Professionally</p>
    <a href="#login" class="btn">Get Started</a>
  </div>
</div>

<!-- About Section -->
<div class="section" id="about">
  <h2 class="title">About Us</h2>
  <p style="max-width:900px;margin:auto;font-size:20px;text-align:center;">
    Our Employee Management System helps organizations manage employee records, attendance, payroll and communication using a modern secured platform.
  </p>
</div>

<!-- Services Section -->
<div class="section" id="services">
  <h2 class="title">Our Services</h2>
  <div class="grid">
    <div class="card"><h3>Employee Records</h3><p>Store and manage complete employee details securely.</p></div>
    <div class="card"><h3>Attendance Tracking</h3><p>Daily, monthly & yearly attendance monitoring system.</p></div>
    <div class="card"><h3>Payroll Management</h3><p>Automated salary calculations with accuracy.</p></div>
    <div class="card"><h3>Secure Login</h3><p>User roles: Admin & Employee with full session security.</p></div>
  </div>
</div>

<!-- Contact Section with Professional Social Links -->
<div class="section" id="contact">
  <h2 class="title">Contact Us</h2>

  <p style="text-align:center;font-size:20px;margin-bottom:30px;">
    Phone: +251 900 000 000<br>
    Email: info@ems.com
  </p>

  <div class="social-icons" style="text-align:center; display:flex; justify-content:center; gap:35px;">
    <a href="https://facebook.com" target="_blank" style="color:#1877f2;">
      <i class="fab fa-facebook"></i>
    </a>
    <a href="https://t.me" target="_blank" style="color:#0088cc;">
      <i class="fab fa-telegram"></i>
    </a>
    <a href="https://linkedin.com" target="_blank" style="color:#0a66c2;">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="https://tiktok.com" target="_blank" style="color:black;">
      <i class="fab fa-tiktok"></i>
    </a>
  </div>
</div>

<!-- Login Section -->
<div class="section" id="login">
  <h2 class="title">Login</h2>
  <form method="POST" action="login.php" style="max-width:400px;margin:auto;display:flex;flex-direction:column;gap:20px;">
    <input type="text" name="username" placeholder="Username" required style="padding:15px;border-radius:8px;border:1px solid #ccc;">
    <input type="password" name="password" placeholder="Password" required style="padding:15px;border-radius:8px;border:1px solid #ccc;">
    <button class="btn" style="border:none;cursor:pointer;">Login</button>
  </form>
</div>

<!-- Footer -->
<footer>
  © 2025 Employee Management System — All Rights Reserved
</footer>

</body>
</html>
