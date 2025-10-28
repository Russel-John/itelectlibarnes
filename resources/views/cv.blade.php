<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Curriculum Vitae</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div class="particles" id="particles"></div>

    <nav>
        <div class="nav-container">
            <a href="#" class="logo-link">
                <span class="logo-text">John Russel</span>
            </a>
            <ul class="nav-links">
                <li><a href="home">Home</a></li>
                <li><a href="gallery">Gallery</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <section class="hero-section">
            <div class="title-container">
                <div class="title-glow"></div>
                <div class="title-placeholder">What is Laravel?</div>
            </div>
        </section>

        <div class="content-section">
            <h2 class="section-title">🚀 Introduction to Laravel</h2>
            <p class="section-content">
                Laravel is a powerful, elegant PHP web application framework with expressive, beautiful syntax. 
                Created by Taylor Otwell in 2011, Laravel has become one of the most popular PHP frameworks in the world, 
                designed to make the development process enjoyable and creative for developers without sacrificing application functionality.
            </p>
            <p class="section-content">
                Laravel follows the MVC (Model-View-Controller) architectural pattern and provides a robust set of tools 
                and resources to build modern, full-featured web applications with ease.
            </p>
        </div>

        <div class="content-section">
            <h2 class="section-title">✨ Key Features</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <h3>Elegant Syntax</h3>
                    <p>Clean, expressive code that's easy to read and maintain</p>
                </div>
                <div class="feature-item">
                    <h3>Blade Templates</h3>
                    <p>Powerful templating engine for dynamic content</p>
                </div>
                <div class="feature-item">
                    <h3>Eloquent ORM</h3>
                    <p>Beautiful ActiveRecord implementation for database operations</p>
                </div>
                <div class="feature-item">
                    <h3>Routing</h3>
                    <p>Simple, expressive routing system</p>
                </div>
                <div class="feature-item">
                    <h3>Authentication</h3>
                    <p>Built-in authentication and authorization</p>
                </div>
                <div class="feature-item">
                    <h3>Artisan CLI</h3>
                    <p>Command-line tool for common tasks</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">🔧 How to Setup Laravel using Composer</h2>
            <div class="setup-steps">
                <!-- ...existing code... -->
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">🎓 Next Steps</h2>
            <p class="section-content">
                Now that you have Laravel installed, you can start building your application! Here are some recommended next steps:
            </p>
            <div class="features-grid" style="margin-top: 2rem;">
                <div class="feature-item">
                    <h3>Learn Routing</h3>
                    <p>Understand how to define routes in routes/web.php</p>
                </div>
                <div class="feature-item">
                    <h3>Create Controllers</h3>
                    <p>Use Artisan to generate controllers for your application logic</p>
                </div>
                <div class="feature-item">
                    <h3>Build Models</h3>
                    <p>Create Eloquent models to interact with your database</p>
                </div>
                <div class="feature-item">
                    <h3>Design Views</h3>
                    <p>Create beautiful interfaces using Blade templates</p>
                </div>
            </div>
        </div>
    </div>

    <script></script>
</body>
</html>