<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/curriculum.css')
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
                <img src="{{ asset('Images/mecv.png') }}" alt="Profile Picture" class="hero-image">
                <div class="title-placeholder">John Russel Libarnes</div>
            </div>
        </section>

        <section id="about" class="content-section">
            <h2 class="section-title">About Me</h2>
            <p class="section-content">
                I am a motivated and responsible college student with a strong interest in technology and computer networking. 
                I have hands-on experience in system setup, troubleshooting, and network configuration using tools like Cisco Packet Tracer.
                I am eager to apply my technical skills and continue learning in a professional environment that values growth and innovation.
            </p>
        </section>

        <section id="personal" class="content-section">
            <h2 class="section-title">Personal Information</h2>
            <div class="section-content">
                <p>Email: johnrussellibarnes2@gmail.com</p>
                <p>Phone: +63 995 101 8280</p>
                <p>Facebook: <a href="https://www.facebook.com/JRlibarnes/" target="_blank" rel="noopener" style="color:#ff0080;">facebook.com/JRlibarnes/</a></p>
                <p>GitHub: <a href="https://github.com/yourusername" target="_blank" rel="noopener" style="color:#ff0080;">github.com/yourusername</a></p>
                <p>Location: Cebu, Philippines</p>
            </div>
        </section>

        <section id="experience" class="content-section">
            <h2 class="section-title">Work Experience</h2>
            <div class="feature-item">
                <h3>Encoder/Technician</h3>
                <p>• BBKB corp. 2023 - Present</p>
                <p>• Maintained Smooth Functionalities of each device in the company</p>
                <p>• Collaborated with cross-functional teams</p>
            </div>
        </section>

        <section id="education" class="content-section">
            <h2 class="section-title">Education</h2>
            <div class="feature-item">
                <h3>Bachelor of Science in Information Technology</h3>
                <p>University Name • 2023-PRESENT</p>
            </div>
            <div class="feature-item">
                <h3>Senior High School</h3>
                <p>Tayud National Highschool • 2021-2022</p>
            </div>
            <div class="feature-item">
                <h3>High School</h3>
                <p>Tayud National Highschool • 2017-2020</p>
            </div>
            <div class="feature-item">
                <h3>Elementary School</h3>
                <p>St. Claire Learning Center • 2011-2016</p>
            </div>
        </section>

        <section id="skills" class="content-section">
            <h2 class="section-title">Skills</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <h3>Frontend</h3>
                    <p>HTML, CSS, JavaScript</p>
                </div>
                <div class="feature-item">
                    <h3>Backend</h3>
                    <p>PHP</p>
                </div>
                <div class="feature-item">
                    <h3>Database</h3>
                    <p>MySQL, SSMS</p>
                </div>
                <div class="feature-item">
                    <h3>Tools</h3>
                    <p>Git, Docker, VS Code</p>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Particle animation code can be added here
    </script>
</body>
</html>