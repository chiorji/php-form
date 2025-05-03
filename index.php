<?php
include_once __DIR__ . '/components/header.php';
?>
<section class="hero">
    <div class="hero-content">
        <h1>COS471 Assignment</h1>
        <p>A minimal Student Management System built with PHP</p>

        <div class="hero-buttons">
            <a href="#" class="btn btn-primary">Source Code</a>
            <a href="#" class="btn btn-outline">Demo</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <h2>Key Features</h2>
            <p>Discover the powerful capabilities that make our project stand out</p>
        </div>

        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">1</div>
                <h3>Register</h3>
                <p>Some text here.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">2</div>
                <h3>Login</h3>
                <p>Some text here.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">3</div>
                <h3>Update User Information</h3>
                <p>Some text here.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">4</div>
                <h3>Admin delete user information</h3>
                <p>Some text here.</p>
            </div>
        </div>
    </div>
</section>

<section class="section about">
    <div class="circle-decoration circle-1"></div>
    <div class="circle-decoration circle-2"></div>
    <div class="container">
        <div class="about-content">
                <h2>About The Project</h2>
                <p>This project aims to address [specific problem or challenge] by implementing [your solution approach]. Through careful research and development, we've created a comprehensive solution that demonstrates [key achievements or learning outcomes].</p>
                <p>Our methodology involved several phases including research, planning, development, testing, and refinement to ensure the highest quality results.</p>
        </div>
    </div>
</section>

<section class="section team">
    <div class="container">
        <div class="section-heading">
            <h2>Our Team</h2>
            <p>Meet the talented individuals behind this project</p>
        </div>

        <div class="team-members">
            <div class="team-member">
                <h3>Name A</h3>
                <p class="role">Project Lead</p>
                <p>Responsible for overall project management, coordination, and ensuring project objectives were met on time.</p>
            </div>

            <div class="team-member">
                <h3>Name B</h3>
                <p class="role">Lead Developer</p>
                <p>Primary developer responsible for code architecture, implementation of core features, and technical problem-solving.</p>
            </div>

            <div class="team-member">
                <h3>Name C</h3>
                <p class="role">Lead Developer</p>
                <p>Primary developer responsible for code architecture, implementation of core features, and technical problem-solving.</p>
            </div>

            <div class="team-member">
                <h3>Name D</h3>
                <p class="role">UI/UX Designer</p>
                <p>Created the visual design, user interface, and ensured a seamless user experience throughout the application.</p>
            </div>
        </div>
    </div>
</section>

<section class="section testimonials">
    <div class="container">
        <div class="section-heading">
            <h2>Challenges & Solutions</h2>
            <p>How we overcame key obstacles during development</p>
        </div>

        <div class="testimonials-container">
            <div class="testimonial">
                <div class="testimonial-text">
                    <p>During the development phase, we encountered significant challenges with [specific issue]. This required us to rethink our approach and implement a creative solution using [technology/method].</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-info">
                        <h4>Challenge 1</h4>
                        <p>Development Phase</p>
                    </div>
                </div>
            </div>

            <div class="testimonial">
                <div class="testimonial-text">
                    <p>Integration between different components proved difficult due to [specific reason]. We resolved this by implementing a middleware layer that effectively bridged the communication gap.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-info">
                        <h4>Challenge 2</h4>
                        <p>Integration Phase</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-about">
            <div class="footer-logo">
                <h3>SchoolProject</h3>
            </div>
            <p>A comprehensive school project showcasing our skills, knowledge, and innovative approach to problem-solving.</p>
        </div>

        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Team</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <h4>Resources</h4>
            <ul>
                <li><a href="#">Source Code</a></li>
                <li><a href="#">Demo</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2025 SchoolProject. All rights reserved. Created for [Course Name].</p>
    </div>
</footer>

<script>
    // Mobile menu toggle
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        document.querySelector('.nav-menu').classList.toggle('active');
    });
</script>
