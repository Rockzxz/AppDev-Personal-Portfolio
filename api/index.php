<?php
// --- PERSONAL DETAILS ---
$name = "Rocky Arañez";
$role = "Creative & Disciplined IT Student";
$description = "I combine technical expertise with a disciplined approach to create secure, efficient, and visually compelling digital solutions.";
$email = "rockyaranez@gmail.com";
$phone = "0953 281 0118";
$location = "Cugman, CDOC";
$linkedin = "Rocky Arañez";
$github = "Rockzxz";
$behance = "Rocky Arañez";

// --- STATS DATA ---
$stats = [
    ["icon" => "fas fa-graduation-cap", "value" => "BSIT", "label" => "Current Course"],
    ["icon" => "fas fa-university", "value" => "3rd Year", "label" => "Section 3R11"],
    ["icon" => "fas fa-map-marker-alt", "value" => "Cugman, CDOC", "label" => "Location"],
    ["icon" => "fas fa-birthday-cake", "value" => "21 Years Old", "label" => "Age"]
];

// --- CONTACT DATA ---
$contacts = [
    ["icon" => "fas fa-phone-alt", "label" => "Phone Number", "value" => $phone, "link" => "tel:" . str_replace(' ', '', $phone)],
    ["icon" => "fas fa-envelope", "label" => "Email", "value" => $email, "link" => "mailto:" . $email],
    ["icon" => "fas fa-map-marker-alt", "label" => "Address", "value" => $location, "link" => "#"],
    ["icon" => "fab fa-linkedin-in", "label" => "LinkedIn", "value" => $linkedin, "link" => "#"]
];

// --- EDUCATION DATA ---
$education = [
    [
        "date" => "Current",
        "title" => "Bachelor of Science in Information Technology",
        "place" => "University of Science and Technology of Southern Philippines"
    ],
    [
        "date" => "Previous",
        "title" => "Senior High School",
        "place" => "Liceo De Cagayan University"
    ],
    [
        "date" => "Previous",
        "title" => "Junior High School",
        "place" => "Cugman National High School"
    ],
    [
        "date" => "Previous",
        "title" => "Elementary",
        "place" => "Macabalan Elementary School"
    ]
];

// --- SKILLS DATA ---
$design_skills = [
    ["name" => "Adobe Photoshop", "percent" => 70],
    ["name" => "Canva", "percent" => 70],
    ["name" => "Figma", "percent" => 50]
];

$dev_skills = [
    ["name" => "Visual Studio Code", "percent" => 50],
    ["name" => "SQL / Database", "percent" => 50]
];

// --- HOBBIES DATA ---
$hobbies = [
    ["icon" => "fas fa-dumbbell", "title" => "Bodybuilding", "desc" => "Building discipline and consistency through rigorous physical training."],
    ["icon" => "fas fa-gamepad", "title" => "Interactive Media", "desc" => "Analyzing narrative structures and visual fidelity in AAA titles."],
    ["icon" => "fas fa-pen-nib", "title" => "Graphic Design", "desc" => "Translating conceptual ideas into structured visual communication."],
    ["icon" => "fas fa-layer-group", "title" => "UI/UX Design", "desc" => "Designing logical, user-centric interfaces for complex systems."],
    ["icon" => "fas fa-code", "title" => "Coding", "desc" => "Applying logical reasoning to solve technical problems."],
    ["icon" => "fas fa-film", "title" => "Cinematography", "desc" => "Studying visual storytelling, perspective, and composition."]
];

// --- PROJECTS DATA ---
$projects = [
    [
        "img" => "1.png",
        "cat" => "Esports Graphic Design",
        "title" => "MLBB Tournament Design"
    ],
    [
        "img" => "2.png",
        "cat" => "Web Design",
        "title" => "PetShop Landing Page"
    ],
    [
        "img" => "3.png",
        "cat" => "Cover art",
        "title" => "Music Cover Art Design"
    ],
    [
        "img" => "6.png",
        "cat" => "Graphic Design",
        "title" => "Esports Team"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo strtoupper($name); ?> - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* COLOR PALETTE */
            --bg-dark: #0f0f11;       
            --bg-card: #1b1b1f;       
            --primary: #6C5DD3;       /* Electric Purple */
            --primary-hover: #5a4cb5;
            --accent: #a0f44b;        
            
            --text-white: #ffffff;
            --text-gray: #a0a0a0;
            
            --radius: 24px;
            --transition: all 0.3s ease;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body { 
            background-color: var(--bg-dark); 
            color: var(--text-white); 
            font-family: 'Poppins', sans-serif; 
            line-height: 1.6; 
            overflow-x: hidden;
        }

        .container { max-width: 1140px; margin: 0 auto; padding: 0 24px; }

        /* HEADER */
        header { padding: 30px 0; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.5rem; font-weight: 700; color: var(--text-white); text-transform: uppercase; }
        .logo span { color: var(--primary); }

        /* BUTTONS */
        .btn {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 32px; border-radius: 12px;
            font-weight: 600; text-decoration: none; transition: var(--transition);
            border: none; cursor: pointer; font-size: 1rem;
        }
        .btn-primary { 
            background-color: var(--primary); 
            color: white; 
            box-shadow: 0 4px 15px rgba(108, 93, 211, 0.4);
        }
        .btn-primary:hover { background-color: var(--primary-hover); transform: translateY(-2px); }
        
        .btn-outline { 
            border: 1px solid rgba(255,255,255,0.15); 
            color: white; 
            background: transparent; 
        }
        .btn-outline:hover { border-color: var(--primary); background: rgba(255,255,255,0.05); }

        /* HERO SECTION */
        .hero { 
            padding: 80px 0; 
            display: flex; 
            align-items: center; 
            justify-content: space-between; 
            gap: 60px; 
            min-height: 80vh;
        }
        
        .hero-content { flex: 1; z-index: 2; }
        
        .hero-label { 
            color: var(--text-gray); 
            font-size: 1.1rem; 
            margin-bottom: 5px; 
            display: block; 
            font-weight: 400;
        }
        
        h1 { 
            font-size: 4rem; 
            line-height: 1.1; 
            margin-bottom: 25px; 
            font-weight: 700; 
        }
        h1 span { color: var(--primary); display: block; }
        
        .hero-role { 
            color: var(--text-gray); 
            font-size: 1.2rem; 
            margin-bottom: 30px; 
            padding-left: 20px; 
            border-left: 3px solid white; 
            display: inline-block;
            line-height: 1.2;
        }
        
        .hero-desc { 
            color: var(--text-gray); 
            margin-bottom: 45px; 
            max-width: 550px; 
            font-weight: 300; 
            font-size: 1rem;
            line-height: 1.8;
        }
        
        /* IMAGE BOX STYLING */
        .hero-img-box { 
            position: relative; 
            flex: 1; 
            display: flex; 
            justify-content: center;
            align-items: center;
        }
        
        .hero-frame {
            position: absolute;
            width: 420px;
            height: 500px;
            border: 2px solid var(--primary);
            border-radius: 60px 60px 60px 60px;
            z-index: 1;
            right: 0.25;
        }
        
        .hero-glow {
            position: absolute;
            top: 20px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(88, 101, 242, 0.6) 0%, rgba(0,0,0,0) 70%);
            z-index: 0;
            filter: blur(40px);
        }

        .hero-img { 
            width: auto; 
            height: 550px;
            object-fit: cover; 
            position: relative; 
            z-index: 2;
            margin-bottom: -50px;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.5));
        }

        /* SECTION TITLES */
        .section-header { text-align: center; margin-bottom: 60px; margin-top: 100px; }
        .section-header h2 { font-size: 2.5rem; margin-bottom: 15px; }
        .highlight-bar { width: 60px; height: 4px; background: var(--primary); margin: 20px auto 0; border-radius: 2px; }

        /* STATS GRID & CONTACT GRID (Shared Style) */
        .stats-wrapper, .contact-wrapper { margin-top: 80px; }
        .contact-wrapper { margin-top: 30px; } 
        
        .stats-grid { 
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; 
            background: #151518; padding: 50px; border-radius: 30px;
            border: 1px solid #2a2a2e;
        }
        .stat-card { text-align: center; }
        .stat-icon { font-size: 2rem; color: var(--primary); margin-bottom: 15px; background: rgba(108, 93, 211, 0.1); width: 70px; height: 70px; line-height: 70px; border-radius: 50%; display: inline-block; }
        .stat-val { font-size: 1.4rem; font-weight: 700; margin-bottom: 5px; }
        
        .contact-val { font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: var(--text-white); word-break: break-all; }
        .contact-val a { color: var(--text-white); text-decoration: none; transition: 0.3s; }
        .contact-val a:hover { color: var(--primary); }
        
        .stat-label { color: var(--text-gray); font-size: 0.9rem; }

        /* CONTACT SECTION (UPDATED TO CENTER ALIGN) */
        .contact-container {
            display: flex;
            justify-content: center; 
            align-items: flex-start;
            flex-wrap: wrap; 
            gap: 50px; 
            background: #151518; 
            padding: 50px; 
            border-radius: 30px;
            border: 1px solid #2a2a2e;
        }

        .contact-item { 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            text-align: center; 
            gap: 15px; 
        }
        
        .contact-icon { 
            width: 60px; height: 60px; 
            background: rgba(108, 93, 211, 0.1); 
            color: var(--primary); 
            border-radius: 50%; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.5rem; 
            flex-shrink: 0; 
        }
        
        .contact-info h5 { font-size: 0.9rem; color: var(--text-gray); margin-bottom: 5px; font-weight: 400; }
        .contact-info p { font-size: 1.1rem; font-weight: 600; color: var(--text-white); margin: 0; }
        .contact-info a { color: var(--text-white); text-decoration: none; transition: 0.3s; }
        .contact-info a:hover { color: var(--primary); }

        /* EDUCATION TIMELINE */
        .edu-section { padding: 50px 0; }
        .edu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .edu-column h3 { margin-bottom: 30px; font-size: 1.8rem; display: flex; align-items: center; gap: 15px; }
        .edu-column h3 i { color: var(--primary); }
        
        .timeline-card {
            background: var(--bg-card); padding: 30px; border-radius: 20px;
            margin-bottom: 25px; border-left: 4px solid var(--primary);
            transition: var(--transition);
        }
        .timeline-card:hover { transform: translateX(10px); background: #222226; }
        .timeline-date { font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 8px; display: block; text-transform: uppercase; letter-spacing: 1px; }
        .timeline-title { font-size: 1.2rem; margin-bottom: 8px; font-weight: 600; }
        .timeline-place { font-size: 0.95rem; color: var(--text-gray); }

        /* SKILLS */
        .skill-group h4 { color: var(--text-gray); margin-bottom: 20px; font-size: 1rem; text-transform: uppercase; letter-spacing: 1px; }
        .skill-item { margin-bottom: 25px; }
        .skill-info { display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 1rem; font-weight: 500; }
        .progress-bg { height: 10px; background: #2a2a2e; border-radius: 5px; overflow: hidden; }
        .progress-fill { height: 100%; background: linear-gradient(90deg, var(--primary), #8e7ffb); border-radius: 5px; }

        /* HOBBIES */
        .hobbies-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .hobby-card {
            background: var(--bg-card); padding: 40px 30px; border-radius: 24px;
            text-align: center; transition: var(--transition); border: 1px solid transparent;
        }
        .hobby-card:hover { border-color: var(--primary); background: #202025; transform: translateY(-10px); }
        .hobby-icon { font-size: 3rem; color: var(--primary); margin-bottom: 25px; }
        .hobby-title { font-size: 1.3rem; margin-bottom: 15px; }
        .hobby-desc { color: var(--text-gray); font-size: 0.95rem; font-weight: 300; }

        /* PROJECTS LIST */
        .project-list { display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; }
        .project-card {
            display: flex; align-items: center; 
            background: var(--bg-card); padding: 30px; border-radius: 24px;
            border: 1px solid #2a2a2e; transition: var(--transition);
        }
        .project-card:hover { border-color: var(--primary); background: #222226; transform: translateY(-5px); box-shadow: 0 10px 30px -10px rgba(0,0,0,0.5); }
        
        .project-info { display: flex;