<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Solutions Company - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <section id="about" class="container py-5">
        <h2 class="section-title">About Us</h2>
        <p class="text-center">
            We are a leading IT solutions provider, offering software development, cloud solutions, web design, and IT consultancy.
            Our expert team ensures that every client receives the best technology services tailored to their needs.
        </p>
    </section>

    <!-- Services Section -->
    <section id="services" class="container py-5">
        <h2 class="section-title">Our Services</h2>
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
        </div>
    </section>

    <!-- Customer Section -->
    <section id="customers" class="container py-5 text-center">
        <h2 class="section-title">Customer Management</h2>
        <p>Manage your customers effectively with our integrated system.</p>
        <a href="{{ route('customers.create') }}" class="btn btn-primary btn-lg">➕ Add Customer</a>
    </section>

    <!-- Company History Section -->
<section class="py-5" id="history">
    <div class="hero-section">
    <div class="container">
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
    </div>
</section>

<!-- Owners Section -->
<section class="py-5 bg-light" id="owners">
    <div class="container">
        <h2 class="text-center mb-4">Meet Our Leadership</h2>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <img src="https://tse1.explicit.bing.net/th/id/OIP.DZ66-HVJ2HSKhOKAKi3RuQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" class="rounded-circle mb-3" alt="Owner 1">
                <h5>John Smith</h5>
                <p>Founder & CEO</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://th.bing.com/th/id/OIP.ZajNaIrT8TN-OhGLoKzZFwHaKE?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" class="rounded-circle mb-3" alt="Owner 2">
                <h5>Sarah Johnson</h5>
                <p>Co-Founder & CTO</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://i5.walmartimages.com/seo/KingSize-Men-s-Big-Tall-Easy-Movement-Two-Button-Jacket_87fb61b0-6d02-4c14-b7bd-ebf4d9552a41_1.0d95cfe3b976bd433247f2cf3e9634b2.jpeg?odnHeight=573&odnWidth=573&odnBg=FFFFFF" class="rounded-circle mb-3" alt="Owner 3">
                <h5>David Brown</h5>
                <p>COO</p>
            </div>
        </div>
    </div>
</section>


    <!-- Contact Section -->
<section class="py-5 bg-light" id="contact">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form class="w-50 mx-auto">
            <input type="text" class="form-control mb-3" placeholder="Your Name">
            <input type="email" class="form-control mb-3" placeholder="Your Email">
            <textarea class="form-control mb-3" rows="4" placeholder="Message"></textarea>
            <button class="btn btn-primary w-100">Send Message</button>
        </form>
    </div>
</section>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} IT Solutions Company | Designed with ❤️ by Our Team
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
