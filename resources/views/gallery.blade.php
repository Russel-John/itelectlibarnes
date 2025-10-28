<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/gallery.css')
    @vite('resources/js/app.js')
    <title>Gallery</title>
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
                <li><a href="cv">CV</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <section class="hero-section">
            <div class="title-container">
                <div class="title-glow"></div>
                <div class="title-placeholder">Gallery</div>
            </div>
        </section>

        <div class="content-section">
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
    </div>

</body>
</html>