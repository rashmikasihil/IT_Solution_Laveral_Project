@extends('layouts.app')

@section('content')
<style>
    .hero {
        background: url("{{ asset('https://thumbs.dreamstime.com/b/businessman-business-sketch-image-young-standing-against-33194327.jpg') }}") no-repeat center center/cover;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    .section {
        padding: 20px 0;
    }
    .section:nth-child(even) {
        background-color: #f9f9f9;
    }
    .section img {
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
    }
    .timeline {
        position: relative;
        margin: 40px 0;
        padding: 20px 0;
    }
    .timeline::before {
        content: "";
        position: absolute;
        width: 6px;
        background: #3498db;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
    }
    .timeline-item {
        margin: 20px 0;
        padding: 20px;
        background: white;
        border-radius: 10px;
        width: 45%;
        position: relative;
    }
    .timeline-item.left {
        left: 0;
    }
    .timeline-item.right {
        left: 55%;
    }
    .timeline-item h3 {
        color: #3498db;
    }
    .badge {
    font-size: 0.85rem;
    padding: 6px 10px;
    border-radius: 6px;
    }

    .timeline-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .timeline-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }
    .timeline-item ul {
        margin-top: 10px;
        padding-left: 20px;
        list-style: none;
    }
    .timeline-item ul li {
        margin-bottom: 6px;
        font-size: 15px;
    }
    .timeline-item i {
        margin-right: 8px;
    }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="hero">
    <h1>Our Company History</h1>
</div>

<div class="container">

    <!-- Section 1 -->
    <div class="section text-center">
        <h2>Who We Are</h2>
        <p class="lead">Founded in 2005, our company has grown from a small startup into one of the leading providers of innovative solutions in Sri Lanka. Our journey has been fueled by creativity, dedication, and a passion for excellence.</p>
        <img src="{{ asset('https://tse4.mm.bing.net/th/id/OIP.ALFxtA-RetGaV806EneUHQHaEo?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3') }}" alt="Our Team" class="img-fluid mt-4" width="600">
    </div>

  <!-- Section 2 - Timeline -->
<div class="section">
    <h2 class="text-center mb-5">Our Journey & Achievements</h2>

    <div class="timeline">

        <!-- 2005 -->
        <div class="timeline-item left">
            <h3>2005 <span class="badge bg-primary">Founded</span></h3>
            <p>IT Solutions (Pvt) Ltd was founded with a vision to transform learning through technology.</p>
            <ul>
                <li><i class="fas fa-lightbulb text-warning"></i> Started with a small but passionate team.</li>
                <li><i class="fas fa-seedling text-success"></i> Launched our first digital education project.</li>
            </ul>
        </div>

        <!-- 2010 -->
        <div class="timeline-item right">
            <h3>2010 <span class="badge bg-success">Expansion</span></h3>
            <p>Marked our global presence by entering international eLearning markets.</p>
            <ul>
                <li><i class="fas fa-globe text-info"></i> Partnered with overseas educational organizations.</li>
                <li><i class="fas fa-award text-warning"></i> Received recognition for innovative content solutions.</li>
            </ul>
        </div>

        <!-- 2015 -->
        <div class="timeline-item left">
            <h3>2015 <span class="badge bg-warning text-dark">Innovation</span></h3>
            <p>Introduced the award-winning <b>IT Solutions Learning Management System (ISLMS)</b>.</p>
            <ul>
                <li><i class="fas fa-laptop-code text-primary"></i> Developed the first HSLMS platform.</li>
                <li><i class="fas fa-trophy text-danger"></i> Won the <b>NBQSA eLearning Product of the Year</b>.</li>
                <li><i class="fas fa-user-graduate text-success"></i> Reached over 200 schools nationwide.</li>
            </ul>
        </div>

        <!-- 2018 -->
        <div class="timeline-item right">
            <h3>2018 <span class="badge bg-info text-dark">Growth</span></h3>
            <p>Rapid expansion and partnerships strengthened our foundation.</p>
            <ul>
                <li><i class="fas fa-users text-success"></i> Grew to a 50+ member professional team.</li>
                <li><i class="fas fa-handshake text-primary"></i> Collaborated with universities for digital transformation.</li>
            </ul>
        </div>

        <!-- 2020 -->
        <div class="timeline-item left">
            <h3>2020 <span class="badge bg-danger">Global Shift</span></h3>
            <p>Embraced AI, analytics, and cloud technology to empower digital learning.</p>
            <ul>
                <li><i class="fas fa-cloud text-primary"></i> Integrated cloud-based learning analytics.</li>
                <li><i class="fas fa-brain text-warning"></i> Adopted AI-driven adaptive learning.</li>
                <li><i class="fas fa-medal text-success"></i> Recognized for technology innovation.</li>
            </ul>
        </div>

        <!-- 2023 -->
        <div class="timeline-item right">
            <h3>2023 <span class="badge bg-dark">Excellence</span></h3>
            <p>Marked a new era of innovation and achievement in the digital education sector.</p>
            <ul>
                <li><i class="fas fa-mobile-alt text-info"></i> Launched <b>HSLMS 3.0</b> mobile version built with Flutter.</li>
                <li><i class="fas fa-trophy text-warning"></i> Won <b>NBQSA Gold Award</b> for excellence in eLearning.</li>
                <li><i class="fas fa-award text-danger"></i> Recognized as a leading digital education provider in South Asia.</li>
            </ul>
        </div>

    </div>
</div>


    <!-- Section 3 -->
    <div class="section text-center">
        <h2>Our Vision</h2>
        <p class="lead">We aim to empower businesses and learners through innovative technology that makes education engaging, efficient, and fun. Our commitment to quality ensures that we continue to be a trusted partner for clients worldwide.</p>
        <img src="{{ asset('https://tse2.mm.bing.net/th/id/OIP.VW8mDYUhIuMoRpa07vxwcAHaE8?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3') }}" alt="Vision" class="img-fluid mt-4" width="600">
    </div>

    <!-- Section 4 -->
    <div class="section text-center">
        <h2>Our Team</h2>
        <p class="lead">Behind every success story is a team of dedicated professionals. From engineers to designers, our team works tirelessly to deliver the best to our clients.</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <img src="{{ asset('https://tse1.explicit.bing.net/th/id/OIP.DZ66-HVJ2HSKhOKAKi3RuQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3') }}" class="img-fluid mb-3" alt="Team Member">
                <h5>Jane Doe</h5>
                <p>CEO</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('https://th.bing.com/th/id/OIP.ZajNaIrT8TN-OhGLoKzZFwHaKE?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3') }}" class="img-fluid mb-3" alt="Team Member">
                <h5>John Smith</h5>
                <p>CTO</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('https://i5.walmartimages.com/seo/KingSize-Men-s-Big-Tall-Easy-Movement-Two-Button-Jacket_87fb61b0-6d02-4c14-b7bd-ebf4d9552a41_1.0d95cfe3b976bd433247f2cf3e9634b2.jpeg?odnHeight=573&odnWidth=573&odnBg=FFFFFF') }}" class="img-fluid mb-3" alt="Team Member">
                <h5>Mary Johnson</h5>
                <p>Head of Design</p>
            </div>
        </div>
    </div>

</div>
@endsection
