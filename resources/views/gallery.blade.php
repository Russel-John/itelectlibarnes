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
                    <img src="{{ asset('Images/img1.jpg') }}" alt="Gallery Image 1" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img2.jpg') }}" alt="Gallery Image 2" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img3.jpg') }}" alt="Gallery Image 3" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img4.jpg') }}" alt="Gallery Image 4" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img5.jpg') }}" alt="Gallery Image 5" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img6.jpg') }}" alt="Gallery Image 6" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img7.jfif') }}" alt="Gallery Image 7" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img8.jfif') }}" alt="Gallery Image 8" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img9.jfif') }}" alt="Gallery Image 9" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img10.jfif') }}" alt="Gallery Image 10" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img11.jfif') }}" alt="Gallery Image 11" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img12.jfif') }}" alt="Gallery Image 12" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img13.jpg') }}" alt="Gallery Image 13" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img14.jpg') }}" alt="Gallery Image 14" class="gallery-img">
                </div>
                <div class="feature-item">
                    <img src="{{ asset('Images/img15.png') }}" alt="Gallery Image 15" class="gallery-img">
                </div>
            </div>
        </div>
    </div>
</body>
</html>