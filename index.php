<?php

$name = "ROCKY ARAÑEZ";
$section = "3R11"; 
$year_level = "3rd Year";
$course = "BS Information Technology";
$location = "Cugman, CDOC";

$hero_text = "I’m passionate about design and driven by a constant desire to learn new things every day, pushing myself to improve and explore creative possibilities.";
$profile_image = "profile1.png"; 


$quick_info = [
    ["icon" => "🎓", "label" => "Course", "value" => $course],
    ["icon" => "🏫", "label" => "Year & Section", "value" => "$year_level - $section"],
    ["icon" => "📍", "label" => "Location", "value" => $location],
    ["icon" => "🎂", "label" => "Age", "value" => "21 Years Old"]
];


$skills = [
    "Adobe Photoshop" => 70,
    "Figma" => 50,
    "SQL" => 50,
    "Visual Studio Code" => 50,
    "Canva" => 70
];


$hobbies = [
    ["title" => "Bodybuilding", "desc" => "Building discipline, confidence, and a healthy lifestyle through fitness.", "icon" => "💪"],
    ["title" => "Gaming", "desc" => "Exploring immersive narratives and inspiring visuals in AAA games.", "icon" => "🎮"],
    ["title" => "Graphic Design", "desc" => "Expressing creativity and turning ideas into visual reality.", "icon" => "🖌️"],
    ["title" => "UI/UX Design", "desc" => "Creating clean, user-friendly, and meaningful digital experiences.", "icon" => "📐"],
    ["title" => "Coding", "desc" => "Crafting solutions through logical thinking and creativity.", "icon" => "💻"],
    ["title" => "Movies", "desc" => "Finding inspiration in storytelling and cinematography.", "icon" => "🎬"]
];


$projects = [
    ["title" => "Mobile Legends Tournament", "img" => "1.png"],
    ["title" => "Landing Page", "img" => "2.png"],
    ["title" => "Music Cover Art", "img" => "3.png"],
    ["title" => "Artist Poster", "img" => "4.png"],
    ["title" => "Sports Design","img" => "5.png"],
    ["title" => "Esports Design","img" => "6.png"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Portfolio</title>
    <style>
        
        :root {
            --primary: #4A90E2;
            --primary-dark: #357ABD;
            --dark: #333333;
            --text: #666666;
            --light-bg: #f8fbfe;
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: var(--white); color: var(--text); line-height: 1.6; overflow-x: hidden; }
        
        
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        
        h1, h2, h3, h4 { color: var(--dark); font-weight: 700; }
        h1 { line-height: 1.2; }
        .section-title { font-size: 2.5rem; text-align: center; margin-bottom: 50px; position: relative; }
        .section-title::after {
            content: ''; display: block; width: 60px; height: 4px; background: var(--primary);
            margin: 15px auto 0; border-radius: 2px;
        }

        
        header { padding: 20px 0; background: var(--white); box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 100; }
        .nav-content { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.5rem; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: 1px; }

        
        .hero { 
            display: flex; align-items: center; justify-content: space-between; 
            min-height: 80vh; padding: 60px 0; 
        }
        .hero-text { flex: 1; padding-right: 50px; }
        .hero-label { color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; margin-bottom: 15px; display: block; }
        .hero-text h1 { font-size: 3.5rem; margin-bottom: 20px; color: var(--dark); }
        .hero-text p { font-size: 1.1rem; margin-bottom: 30px; max-width: 500px; color: var(--text); }
        
        .btn {
            display: inline-block; background: var(--primary); color: white; padding: 12px 30px;
            text-decoration: none; border-radius: 6px; font-weight: 600; transition: 0.3s;
            box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
        }
        .btn:hover { background: var(--primary-dark); transform: translateY(-2px); }

        .hero-img { flex: 1; display: flex; justify-content: flex-end; }
        .hero-img img { 
            width: 100%; max-width: 450px; border-radius: 20px; 
            
            box-shadow: 20px 20px 0px rgba(74, 144, 226, 0.1); 
        }

        
        .info-bar { background: var(--light-bg); padding: 40px 0; border-top: 1px solid #eee; border-bottom: 1px solid #eee; }
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
        .info-item { text-align: center; padding: 20px; background: white; border-radius: 10px; box-shadow: var(--shadow); transition: 0.3s; }
        .info-item:hover { transform: translateY(-5px); }
        .info-icon { font-size: 2rem; margin-bottom: 10px; display: block; }
        .info-label { font-size: 0.85rem; color: #888; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; display: block; }
        .info-value { font-size: 1.1rem; font-weight: 700; color: var(--dark); }

        
        .skills-section { padding: 80px 0; }
        .skill-container { max-width: 800px; margin: 0 auto; }
        .skill-item { margin-bottom: 25px; }
        .skill-header { display: flex; justify-content: space-between; margin-bottom: 8px; font-weight: 600; color: var(--dark); }
        .progress-track { width: 100%; height: 10px; background: #eee; border-radius: 5px; overflow: hidden; }
        .progress-bar { height: 100%; background: var(--primary); border-radius: 5px; }

        
        .hobbies-section { padding: 80px 0; background: var(--light-bg); }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .hobby-card { 
            background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow); 
            text-align: center; transition: 0.3s; border: 1px solid transparent;
        }
        .hobby-card:hover { border-color: var(--primary); transform: translateY(-5px); }
        .hobby-icon { font-size: 3rem; margin-bottom: 20px; display: block; }
        .hobby-card h3 { font-size: 1.25rem; margin-bottom: 10px; }
        .hobby-card p { font-size: 0.95rem; }

        
        .projects-section { padding: 80px 0; }
        .project-card { 
            position: relative; border-radius: 15px; overflow: hidden; 
            box-shadow: var(--shadow); aspect-ratio: 4/3; 
        }
        .project-card img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
        .project-card:hover img { transform: scale(1.1); }
        .project-overlay {
            position: absolute; bottom: 0; left: 0; width: 100%; padding: 20px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white; transform: translateY(100%); transition: 0.3s;
        }
        .project-card:hover .project-overlay { transform: translateY(0); }

        
        footer { background: var(--dark); color: #888; padding: 40px 0; text-align: center; font-size: 0.9rem; }

        
        
        
        @media (max-width: 992px) {
            .hero { flex-direction: column-reverse; text-align: center; justify-content: center; padding-top: 40px; }
            .hero-text { padding-right: 0; margin-top: 40px; }
            .hero-img { justify-content: center; }
            .grid-3 { grid-template-columns: repeat(2, 1fr); }
        }

        /* Mobile (Max 768px) */
        @media (max-width: 768px) {
            .section-title { font-size: 2rem; }
            
           
            .logo { font-size: 1.2rem; }

            
            .hero-text h1 { font-size: 2.5rem; }
            .hero-img img { max-width: 80%; box-shadow: none; } 
            
            
            .grid-3 { grid-template-columns: 1fr; } 
            .info-grid { grid-template-columns: 1fr; } 
            
            .project-card .project-overlay { transform: translateY(0); } 
        }
    </style>
</head>
<body>

    <header>
        <div class="container nav-content">
            <div class="logo">MyPortfolio</div>
            </div>
    </header>

    <section class="hero container">
        <div class="hero-text">
            <span class="hero-label">Hello, I am</span>
            <h1><?php echo $name; ?></h1>
            <p><?php echo $hero_text; ?></p>
            <a href="#projects" class="btn">View My Work</a>
        </div>
        <div class="hero-img">
            <img src="<?php echo $profile_image; ?>" alt="Profile of <?php echo $name; ?>">
        </div>
    </section>

    <section class="info-bar">
        <div class="container">
            <div class="info-grid">
                <?php foreach($quick_info as $info): ?>
                <div class="info-item">
                    <span class="info-icon"><?php echo $info['icon']; ?></span>
                    <span class="info-label"><?php echo $info['label']; ?></span>
                    <div class="info-value"><?php echo $info['value']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="skills-section container">
        <h2 class="section-title">My Expertise</h2>
        <div class="skill-container">
            <?php foreach($skills as $tool => $percent): ?>
            <div class="skill-item">
                <div class="skill-header">
                    <span><?php echo $tool; ?></span>
                    <span><?php echo $percent; ?>%</span>
                </div>
                <div class="progress-track">
                    <div class="progress-bar" style="width: <?php echo $percent; ?>%;"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="hobbies-section">
        <div class="container">
            <h2 class="section-title">Hobbies & Interests</h2>
            <div class="grid-3">
                <?php foreach($hobbies as $hobby): ?>
                <div class="hobby-card">
                    <span class="hobby-icon"><?php echo $hobby['icon']; ?></span>
                    <h3><?php echo $hobby['title']; ?></h3>
                    <p><?php echo $hobby['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="projects-section container" id="projects">
        <h2 class="section-title">Recent Projects</h2>
        <div class="grid-3">
            <?php foreach($projects as $proj): ?>
            <div class="project-card">
                <img src="<?php echo $proj['img']; ?>" alt="<?php echo $proj['title']; ?>">
                <div class="project-overlay">
                    <h3><?php echo $proj['title']; ?></h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>