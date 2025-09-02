<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Solutions Company - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #0d6efd;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .hero-section {
            background: linear-gradient(to right, #0d6efd, #0056b3);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            color: #333;
        }
        .card {
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .card-img, .card-img-bottom, .card-img-top {
            width: 100%;
            height: 174px;
        }
        .section-title {
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .award-box {
            background-color: #f8f9fa;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
        }
        .award-box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
        }
        #awards{
            background-color: #d8e0ed;
            border-radius: 10px;
        }
        .btns{
            background-color: #ffc107;
            border-color: #ffc107;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">IT Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#customers">Customers</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to Our IT Solutions Company</h1>
        <p>Innovative software solutions for your business growth.</p>
        <a href="#services" class="btn btn-warning btn-lg mt-3">Explore Services</a>
    </div>

    <!-- About Section -->
<section id="about" class="container py-5 text-center">
    <!-- Company Logo -->
     <div class="mb-4">
        <img src="https://www.pngmart.com/files/About-Us-PNG-Isolated-File.png" 
             alt="Company Logo" 
             style="width: 500px; height: 200px;">
    </div>

    <!-- <h2 class="section-title">
        <i class="fas fa-building me-2"></i>
        About Us
    </h2> -->

    <p class="text-center">
        We are a forward-thinking IT solutions company dedicated to delivering innovative, reliable, and scalable technology services. Our mission is to empower businesses with cutting-edge digital solutions that drive growth,
        efficiency, and long-term success. With a passionate team of skilled professionals, we specialize in software development, web and mobile applications, cloud integration, 
        and IT consultancy. We believe in building strong relationships with our clients through transparency, quality, and commitment. From startups to large enterprises, we help organizations embrace digital transformation and stay ahead in today’s fast-changing technological landscape.
        Your success is our priority, and innovation is at our core.
    </p>
</section>

<!-- Feature Bar -->
<section class="feature-bar py-4 bg-light text-center">
    <div class="container">
        <div class="row">
            <!-- Delivery -->
            <div class="col-6 col-md-2">
                <i class="fas fa-truck fa-2x mb-2"></i>
                <p>Delivery</p>
            </div>
            <!-- Packaging -->
            <div class="col-6 col-md-2">
                <i class="fas fa-box-open fa-2x mb-2"></i>
                <p>Packaging</p>
            </div>
            <!-- Sales -->
            <div class="col-6 col-md-2">
                <i class="fas fa-tags fa-2x mb-2"></i>
                <p>Sales</p>
            </div>
            <!-- Support -->
            <div class="col-6 col-md-2">
                <i class="fas fa-headset fa-2x mb-2"></i>
                <p>Support</p>
            </div>
            <!-- Secure Payment -->
            <div class="col-6 col-md-2">
                <i class="fas fa-lock fa-2x mb-2"></i>
                <p>Secure Payment</p>
            </div>
            <!-- Store -->
            <div class="col-6 col-md-2">
                <i class="fas fa-store fa-2x mb-2"></i>
                <p>Store</p>
            </div>
        </div>
    </div>
</section>

   <!-- Services Section -->
<section id="services" class="container py-5">
    <h2 class="section-title text-center">
         <div class="mb-4">
        <img src="https://williamsperformance.net/images/header-our-services.jpg" 
             alt="Company Logo" 
             style="width: 500px; height: 100px;">
    </div>
    <!-- <i class="fas fa-cogs me-2"></i>Our Services -->
</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card p-3">
                <img src="https://th.bing.com/th/id/R.914496ca2dd667c6d0a6e44ce7bc3657?rik=xW0trgwt%2f3CKrQ&riu=http%3a%2f%2falignminds.com%2fwp-content%2fuploads%2f2023%2f03%2fAlignminds-Blog-Banner-24.jpg&ehk=BD%2fwBHqPPr1JBrVP0b2gRcy%2flmB1%2b9hYtvbJM2eaWYM%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Web Development">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">Building modern and responsive websites for all devices using latest technologies.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <img src="https://tse1.mm.bing.net/th/id/OIP.eMbcAAcqJxicjsqOg1FZygHaE8?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="Cloud Solutions">
                <div class="card-body">
                    <h5 class="card-title">Cloud Solutions</h5>
                    <p class="card-text">Scalable cloud-based infrastructure and hosting services for your business growth.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <img src="https://tse3.mm.bing.net/th/id/OIP.8JT_vfpu9aVBG2C3LslKoAHaEo?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="IT Consultancy">
                <div class="card-body">
                    <h5 class="card-title">IT Consultancy</h5>
                    <p class="card-text">Expert guidance on technology adoption, project planning, and software implementation.</p>
                </div>
            </div>
        </div>
    </div><br><br>
<p>
We provide innovative IT solutions tailored to your business needs. Our services include web development,
 mobile applications, cloud solutions, and IT consultancy. With skilled professionals and modern technologies, 
 we ensure reliable, scalable, and efficient solutions that help businesses grow, optimize processes, and achieve long-term success.
</p>

    <!-- More Services Button -->
    <div class="text-center mt-4">
        <a href="{{ route('services.more') }}" class="btn btns btn-success btn-lg">
            <i class="fas fa-plus-circle me-2"></i> More Services
        </a>
    </div>
</section>

    <!-- Awards Section -->
<section id="awards" class="container py-5">
    <h2 class="section-title text-center">Our Achievements & Awards</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="award-box p-4 shadow-sm rounded">
                <i class="fas fa-trophy fa-3x text-warning mb-3"></i>
                <h4>Best Innovation Award</h4>
                <p>Recognized for delivering cutting-edge solutions in the tech industry.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="award-box p-4 shadow-sm rounded">
                <i class="fas fa-medal fa-3x text-primary mb-3"></i>
                <h4>Excellence in Software Development</h4>
                <p>Awarded for outstanding performance in software development projects.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="award-box p-4 shadow-sm rounded">
                <i class="fas fa-award fa-3x text-success mb-3"></i>
                <h4>Customer Choice Award</h4>
                <p>Voted by clients for exceptional customer service and support.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Customer Section -->
<section id="customers" class="container py-5 text-center">
    <div class="mb-4">
        <img src="https://th.bing.com/th/id/R.997f6a5f7582f4cb5920b3cb385b7435?rik=LgMflO%2b4a1f%2fbA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2011%2f11%2fcustomer-icons-people_357588.png&ehk=1hQ3x7D2CpRZOBNYzS5m7F%2fTXzOnWm5cRnszwvNwCTk%3d&risl=&pid=ImgRaw&r=0" 
             alt="Company Logo" 
             style="width: 150px; height: 150px;">
    </div>
    <h2 class="section-title">
        <i class="fas fa-users me-2"></i> <!-- Customer icon added -->
        Customer Management
    </h2>
    <p>Manage your customers effectively with our integrated system.</p>
    <a href="{{ route('customers.create') }}" class="btn btn-primary btn-lg">
        <i class="fas fa-user-plus me-1"></i> Add Customer
    </a>
   <a href="{{ route('customers.index') }}" class="btn btn-primary btn-lg">
    <i class="fas fa-eye me-1"></i> View Customer
    </a>
</section>

    <!-- Company History Section -->
<section class="py-5" id="history">
    <div class="hero-section">
    <div class="container">
        <h2 class="section-title">
        <i class="fas fa-history me-2"></i> <!-- History icon added --></h2>
        <h2 class="text-center mb-4">Our Company History</h2>
        <p class="text-center">
            Founded in 2010, our IT company started with a small team of passionate developers 
            who wanted to create world-class digital solutions.  
            Over the years, we have served hundreds of clients across the globe, 
            helping them grow through innovative software and technology.
        </p>
        <p class="text-center">
            Today, we continue to push the boundaries of what technology can achieve,
            staying ahead of industry trends and delivering solutions that matter.
        </p>
    </div>
    <!-- More Services Button -->
    <div class="text-center mt-4">
        <a href="{{ route('services.more') }}" class="btn btns btn-success btn-lg">
            <i class="fas fa-plus-circle me-2"></i> More Details
        </a>
    </div>
    </div>
</section>

<!-- Owners Section -->
<section class="py-5" id="owners" style="background: linear-gradient(to right, #f8f9fa, #ffffff);">
    <div class="container">
        <h2 class="text-center mb-5" style="font-weight: bold; color: #333;">Meet Our Leadership</h2>
        <div class="row g-4 text-center justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 p-3 h-100">
                    <img src="https://tse1.explicit.bing.net/th/id/OIP.DZ66-HVJ2HSKhOKAKi3RuQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" 
                         class="rounded-circle mx-auto" alt="Owner 1" style="width: 180px; height: 180px; object-fit: cover; border: 5px solid #fff; box-shadow: 0px 4px 15px rgba(0,0,0,0.1);">
                    <h5 class="mt-3 mb-1" style="color: #2c3e50;">John Smith</h5>
                    <p style="color: #777;">Founder & CEO</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 p-3 h-100">
                    <img src="https://th.bing.com/th/id/OIP.ZajNaIrT8TN-OhGLoKzZFwHaKE?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" 
                         class="rounded-circle mx-auto" alt="Owner 2" style="width: 180px; height: 180px; object-fit: cover; border: 5px solid #fff; box-shadow: 0px 4px 15px rgba(0,0,0,0.1);">
                    <h5 class="mt-3 mb-1" style="color: #2c3e50;">Sarah Johnson</h5>
                    <p style="color: #777;">Co-Founder & CTO</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 p-3 h-100">
                    <img src="https://i5.walmartimages.com/seo/KingSize-Men-s-Big-Tall-Easy-Movement-Two-Button-Jacket_87fb61b0-6d02-4c14-b7bd-ebf4d9552a41_1.0d95cfe3b976bd433247f2cf3e9634b2.jpeg?odnHeight=573&odnWidth=573&odnBg=FFFFFF" 
                         class="rounded-circle mx-auto" alt="Owner 3" style="width: 180px; height: 180px; object-fit: cover; border: 5px solid #fff; box-shadow: 0px 4px 15px rgba(0,0,0,0.1);">
                    <h5 class="mt-3 mb-1" style="color: #2c3e50;">David Brown</h5>
                    <p style="color: #777;">COO</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 p-3 h-100">
                    <img src="https://tse3.mm.bing.net/th/id/OIP.MGISaMcCLwWgHrHHxt4Q7AHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" 
                         class="rounded-circle mx-auto" alt="Owner 4" style="width: 180px; height: 180px; object-fit: cover; border: 5px solid #fff; box-shadow: 0px 4px 15px rgba(0,0,0,0.1);">
                    <h5 class="mt-3 mb-1" style="color: #2c3e50;">Elina Samuel</h5>
                    <p style="color: #777;">Owner</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Contact Section -->
<section class="py-5 bg-light" id="contact">
    <div class="container">
         <div class="mb-4">
        <img src="https://cdn.shopify.com/s/files/1/0263/3957/3865/files/contact-us-buttons-clipart-design-illustration-free-png_1_480x480.webp?v=1721852008" 
             alt="Company Logo" 
             style="width: 450px; height: 100px; position: relative; left: 35%;">
    </div>
        <!-- <h2 class="text-center mb-4">Contact Us</h2> -->
        <form class="w-50 mx-auto" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>
            <textarea name="message" class="form-control mb-3" rows="4" placeholder="Message" required></textarea>
            <button class="btn btn-primary w-100">Send Message</button>
        </form>
    </div>
</section>

<!-- Chatbot Button -->
<div id="chatbot-container" style="position: fixed; bottom: 20px; right: 20px;">
    <button id="chatbot-btn" style="padding: 12px 20px; background:#007bff; color:#fff; border:none; border-radius:50%;">
        💬
    </button>
</div>

<!-- Chatbot Box -->
<div id="chatbot-box" style="display:none; position:fixed; bottom:80px; right:20px; width:300px; height:400px; background:#fff; border:1px solid #ccc; border-radius:10px; overflow:hidden;">
    <div style="background:#007bff; color:#fff; padding:10px;">Chat with Us</div>
    <div id="chatbot-messages" style="height:300px; overflow-y:auto; padding:10px;"></div>
    <input id="chatbot-input" type="text" placeholder="Type a message..." style="width:100%; border:none; padding:10px;">
</div>

<script>
    const btn = document.getElementById('chatbot-btn');
    const box = document.getElementById('chatbot-box');
    const input = document.getElementById('chatbot-input');
    const messages = document.getElementById('chatbot-messages');

    btn.onclick = () => box.style.display = (box.style.display === "none" ? "block" : "none");

    input.addEventListener("keypress", function(e) {
        if (e.key === "Enter") {
            let userMsg = input.value;
            messages.innerHTML += `<div><b>You:</b> ${userMsg}</div>`;
            
            // Simple FAQ bot
            let reply = "Sorry, I don’t understand.";
            if (userMsg.toLowerCase().includes("hi") || userMsg.toLowerCase().includes("hello"))  reply = "Hi 👋! Welcome to IT Solution. How can I help you today?";
            if (userMsg.toLowerCase().includes("help"))  reply = "Sure! You can ask me about our services, contact details, or company info.";
            if (userMsg.toLowerCase().includes("service")) reply = "We provide software development, eLearning, and digital consultancy.";
            if (userMsg.toLowerCase().includes("contact")) reply = "You can contact us via email: info@itsolution.com or call +94 77 123 4567.";
            if (userMsg.toLowerCase().includes("about")) reply = "IT Solution (Pvt) Ltd makes learning engaging, efficient, and fun.";

            messages.innerHTML += `<div><b>Bot:</b> ${reply}</div>`;
            input.value = "";
            messages.scrollTop = messages.scrollHeight;
        }
    });
</script>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} IT Solutions Company | Designed with ❤️ by Our Team
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
