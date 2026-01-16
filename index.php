<?php

$name = "ROCKY ARAÑEZ";
$hero_text = "I’m passionate about design and driven by a constant desire to learn new things every day, pushing myself to improve and explore creative possibilities.";

$profile_image = "profile.png"; 

// Contact Details
$contacts = [
    ["icon" => "📅", "label" => "Age", "value" => "21 Years Old"],
    ["icon" => "🎓", "label" => "Course", "value" => "BS Information Technology"],
    ["icon" => "📍", "label" => "Location", "value" => "Cugman, CDOC"]
];

// Tools & Proficiency
$skills = [
    "Adobe Photoshop" => 70,
    "Figma" => 50,
    "SQL" => 50,
    "Visual Studio Code" => 50,
    "Canva" => 70
];

// Hobbies
$hobbies = [
    ["title" => "Bodybuilding", "desc" => "Aside from improving my skills and knowledge, I also enjoy improving my body through 
    bodybuilding, as it helps me build discipline, confidence, and a healthy lifestyle.", "icon" => "💪"],

    ["title" => "Gaming", "desc" => "I love playing video games, especially AAA and story-driven games, 
    because they offer immersive experiences, strong narratives, and inspiring visuals.", "icon" => "🎮"],

    ["title" => "Graphic Design", "desc" => "Since I was in Elementary, I have loved designing graphics because 
    it allows me to express creativity and turn ideas into visually appealing designs", "icon" => "🖌️"],

    ["title" => "UI/UX Design", "desc" => "Aside from graphic design, I also enjoy designing user 
    interfaces because I like creating clean, user-friendly, and meaningful digital experiences.", "icon" => "📐"],

    ["title" => "Coding", "desc" => "I also enjoy coding because I love crafting solutions and solving problems through logical thinking and creativity.", "icon" => "💻"],

    ["title" => "Movies", "desc" => "I love watching movies because they inspire me through storytelling, visuals, and different perspectives.", "icon" => "🎬"]
];

// Projects
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
    <title><?php echo $name; ?> - Personal Profile</title>
    <style>
        /* INTERNAL CSS*/
        :root {
            --primary: #4A90E2;
            --dark: #333333;
            --light: #f9f9f9;
            --text: #666666;
            --white: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

        body { background-color: var(--white); color: var(--text); line-height: 1.6; overflow-x: hidden; }

        h1, h2, h3 { color: var(--dark); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; }
        
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        
       
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 0 100px 0;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -10%;
            width: 50%;
            height: 80%;
            background: radial-gradient(circle, rgba(74, 144, 226, 0.05) 0%, rgba(255,255,255,0) 70%);
            z-index: -1;
        }

        .hero-text { flex: 1; padding-right: 50px; z-index: 2; }
        .hero-text h4 { color: var(--primary); font-weight: 700; margin-bottom: 15px; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 2px; }
        .hero-text h1 { font-size: 4rem; margin-bottom: 25px; line-height: 1.1; }
        .hero-text p { margin-bottom: 35px; max-width: 500px; font-size: 1.1rem; }
        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            box-shadow: 0 10px 20px rgba(74, 144, 226, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(74, 144, 226, 0.3); }

        .hero-img { 
            flex: 2; 
            text-align: right; 
            z-index: 1;
        }
        .hero-img img { 
            width: 110%; 
            max-width: 1000px; 
            height: auto;
            
        }

        /* ABOUT & SKILLS SECTION */
        .about-section { padding: 100px 0; display: flex; gap: 60px; align-items: flex-start; }
        .about-left { flex: 1; }
        .about-right { flex: 1; background: var(--white); padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 15px; }

        .section-title { font-size: 2.2rem; margin-bottom: 30px; position: relative; display: inline-block; }
        
        /* Contact Cards */
        .contact-grid { display: flex; gap: 20px; margin-top: 40px; }
        .contact-card {
            flex: 1;
            padding: 25px 20px;
            border: 1px solid #eee;
            border-radius: 12px;
            text-align: center;
            transition: 0.3s;
            background: var(--white);
        }
        .contact-card:hover { box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-color: transparent; transform: translateY(-5px); }
        .contact-card .icon { font-size: 2.5rem; display: block; margin-bottom: 15px; }
        .contact-card h4 { font-size: 20px; color: var(--dark); margin-bottom: 10px; }
        .contact-card span { font-size: 17px; color: var(--text); word-break: break-all; }

        /* Progress Bars */
        .skill-item { margin-bottom: 25px; }
        .skill-info { display: flex; justify-content: space-between; margin-bottom: 10px; font-weight: 600; color: var(--dark); font-size: 0.9rem; }
        .progress-bg { width: 100%; height: 8px; background: #edf2f7; border-radius: 4px; overflow: hidden; }
        .progress-fill { height: 100%; background: linear-gradient(90deg, var(--primary), #64b5f6); border-radius: 4px; width: 0; transition: width 1.5s ease-in-out; }

        /* HOBBIES GRID */
        .hobbies-section { padding: 100px 0; background: #f8fbfe; text-align: center; }
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 60px; }
        .hobby-card {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            transition: 0.3s;
            text-align: left;
            border-bottom: 3px solid transparent;
        }
        .hobby-card:hover { transform: translateY(-7px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); border-bottom-color: var(--primary); }
        .hobby-icon { font-size: 3.5rem; margin-bottom: 25px; color: var(--primary); display: block; }
        .hobby-card h3 { font-size: 1.3rem; margin-bottom: 15px; }
        
        /* PROJECTS SECTION */
        .projects-section { padding: 100px 0; text-align: center; }
        .project-card { position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .project-card img { width: 100%; height: 350px; object-fit: cover; transition: 0.5s; }
        .project-card:hover img { transform: scale(1.1); }
        .project-info {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 10%, transparent);
            color: white;
            padding: 30px;
            text-align: left;
            transform: translateY(10px);
            transition: 0.3s;
            opacity: 0.9;
        }
        .project-card:hover .project-info { transform: translateY(0); opacity: 1; }
        .project-info h3 { color: white; margin-bottom: 5px; }
        .project-info span { font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); font-weight: 700; }

        /* FOOTER */
        footer { padding: 50px 0; text-align: center; font-size: 0.9rem; background: var(--dark); color: #888; margin-top: 50px; }

        /* Responsive */
        @media (max-width: 992px) {
            .hero { flex-direction: column-reverse; text-align: center; padding-top: 60px; }
            .hero-text { padding-right: 0; margin-top: 50px; }
            .hero-text h1 { font-size: 3rem; }
            .hero-img { text-align: center; flex: auto; }
            
            .hero-img img { max-width: 100%; max-height: 500px; } 
            .about-section { flex-direction: column; gap: 40px; }
            .contact-grid { flex-direction: column; }
        }
    </style>
</head>
<body>

    <section class="hero container">
        <div class="hero-text">
            <h4>Hello, I am</h4>
            <h1><?php echo $name; ?></h1>
            <p><?php echo $hero_text; ?></p>
            <a href="#contact" class="btn">About Me</a>
        </div>
        <div class="hero-img">
            <img src="<?php echo $profile_image; ?>" alt="Profile Picture">
        </div>
    </section>

    <section class="container about-section" id="about">
        <div class="about-left">
            <h2 class="section-title">About Myself</h2>
            <p style="margin-bottom: 30px; font-size: 1.05rem;">
                I am a 21-year-old third-year BS Information Technology student from Cugman, Cagayan de Oro City, currently studying at the University of 
                Science and Technology of Southern Philippines (USTP), where I continue to develop my skills and passion for technology.
            </p>

            <div class="contact-grid" id="contact">
                <?php foreach($contacts as $contact): ?>
                <div class="contact-card">
                    <span class="icon"><?php echo $contact['icon']; ?></span>
                    <h4><?php echo $contact['label']; ?></h4>
                    <span><?php echo $contact['value']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="about-right">
            <h3 style="margin-bottom: 30px;">Tools & Proficiency</h3>
            <?php foreach($skills as $tool => $percent): ?>
            <div class="skill-item">
                <div class="skill-info">
                    <span><?php echo $tool; ?></span>
                    <span><?php echo $percent; ?>%</span>
                </div>
                <div class="progress-bg">
                    <div class="progress-fill" style="width: <?php echo $percent; ?>%;"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="hobbies-section">
        <div class="container">
            <h2 class="section-title">My Hobbies & Interests</h2>
            <p>Things that fuel my creativity and discipline.</p>
            
            <div class="grid-3">
                <?php foreach($hobbies as $hobby): ?>
                <div class="hobby-card">
                    <span class="hobby-icon"><?php echo $hobby['icon']; ?></span>
                    <h3><?php echo $hobby['title']; ?></h3>
                    <p style="margin-top: 15px; font-size: 0.95rem; color: var(--text);"><?php echo $hobby['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="projects-section container">
        <h2 class="section-title">My Projects</h2>
        <p style="margin-bottom: 50px;">A selection of my recent work in development and design.</p>

        <div class="grid-3">
            <?php foreach($projects as $proj): ?>
            <div class="project-card">
                <img src="<?php echo $proj['img']; ?>" alt="<?php echo $proj['title']; ?>">
                <div class="project-info">
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