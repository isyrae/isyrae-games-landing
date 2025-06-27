<?php
$game_title = "Isyrae Games";
$game_description = "Experience next-generation warfare in a hyper-realistic battlefield environment. Master advanced combat mechanics, customize your arsenal, and dominate multiplayer arenas in this cutting-edge tactical shooter.";
$game_features = [
    "Advanced Combat System",
    "Real-time Ray Tracing", 
    "Dynamic Weather System",
    "Competitive Multiplayer",
    "Cross-platform Gaming"
];
$poster_image = "https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $game_title; ?> - Download Now</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #0f0f0f;
            --secondary-bg: #1a1a1a;
            --accent-color: #ff6b35;
            --secondary-accent: #4ecdc4;
            --text-primary: #ffffff;
            --text-secondary: #a0a0a0;
            --border-color: rgba(255, 255, 255, 0.1);
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glow-color: rgba(255, 107, 53, 0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto Condensed', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--primary-bg);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Modern Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 107, 53, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(78, 205, 196, 0.1) 0%, transparent 50%),
                linear-gradient(135deg, var(--primary-bg) 0%, #151515 100%);
        }

        .grid-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: grid-move 20s linear infinite;
        }

        @keyframes grid-move {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        /* Header */
        .header {
            position: relative;
            text-align: center;
            padding: 80px 20px 60px;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, var(--glow-color) 0%, transparent 70%);
            opacity: 0;
            animation: pulse-glow 8s infinite;
            z-index: -1;
        }

        @keyframes pulse-glow {
            0% { opacity: 0; transform: scale(0.8); }
            50% { opacity: 0.15; transform: scale(1); }
            100% { opacity: 0; transform: scale(0.8); }
        }

        .nav-dots {
            position: absolute;
            top: 30px;
            right: 40px;
            display: flex;
            gap: 8px;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent-color);
            opacity: 0.3;
            animation: pulse-dot 2s ease-in-out infinite;
        }

        .dot:nth-child(2) { animation-delay: 0.5s; }
        .dot:nth-child(3) { animation-delay: 1s; }

        @keyframes pulse-dot {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        .game-logo {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 900;
            letter-spacing: -0.02em;
            background: linear-gradient(135deg, var(--text-primary) 0%, var(--accent-color) 50%, var(--secondary-accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 16px;
            position: relative;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            text-shadow: 0 0 10px rgba(255, 107, 53, 0.3);
        }

        .game-logo::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-color), transparent);
        }

        .subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            font-weight: 400;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        /* Main Content */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .game-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            margin: 80px 0;
            align-items: center;
        }

        .game-image {
            position: relative;
            perspective: 1000px;
        }

        .game-poster {
            width: 100%;
            height: 500px;
            border-radius: 20px;
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.320, 1);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .game-poster img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .game-poster::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 107, 53, 0.1), transparent);
            transition: left 0.8s ease;
            z-index: 2;
        }

        .game-poster::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(15, 15, 15, 0.2), rgba(15, 15, 15, 0.8));
            z-index: 1;
        }

        .game-poster:hover::before {
            left: 100%;
        }

        .game-poster:hover {
            transform: rotateY(5deg) rotateX(5deg) scale(1.02);
        }

        .game-poster:hover img {
            transform: scale(1.05);
        }

        .game-info {
            padding: 20px 0;
        }

        .game-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            margin-bottom: 24px;
            color: var(--text-primary);
            letter-spacing: -0.01em;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
        }

        .game-description {
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--text-secondary);
            margin-bottom: 40px;
        }

        .features {
            margin-bottom: 40px;
        }

        .features-title {
            color: var(--accent-color);
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: 'Orbitron', sans-serif;
        }

        .features-title::before {
            content: '';
            width: 4px;
            height: 20px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        .feature-list {
            list-style: none;
            display: grid;
            gap: 12px;
        }

        .feature-item {
            padding: 16px 20px;
            background: var(--glass-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            color: var(--text-primary);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .feature-item::before {
            content: '';
            width: 6px;
            height: 6px;
            background: var(--secondary-accent);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .feature-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 107, 53, 0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.4s ease;
        }

        .feature-item:hover::after {
            transform: translateX(0);
        }

        .feature-item:hover {
            transform: translateX(8px);
            border-color: var(--accent-color);
            background: rgba(255, 107, 53, 0.05);
        }

        /* Download Section */
        .download-section {
            background: var(--glass-bg);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 60px 40px;
            text-align: center;
            backdrop-filter: blur(20px);
            margin: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .download-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent-color), transparent);
        }

        .download-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--secondary-accent), transparent);
        }

        .download-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            margin-bottom: 16px;
            color: var(--text-primary);
            letter-spacing: -0.01em;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
        }

        .download-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 48px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .download-buttons {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
        }

        .download-btn {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px 32px;
            background: var(--secondary-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            color: var(--text-primary);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
            position: relative;
            overflow: hidden;
            min-width: 180px;
            backdrop-filter: blur(10px);
            z-index: 1;
        }

        .download-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s ease;
            z-index: -1;
        }

        .download-btn:hover::before {
            left: 100%;
        }

        .download-btn:hover {
            transform: translateY(-4px) scale(1.02);
            border-color: var(--accent-color);
            box-shadow: 0 20px 40px rgba(255, 107, 53, 0.2);
        }

        .download-btn i {
            font-size: 1.4rem;
        }

        .btn-android:hover {
            border-color: var(--secondary-accent);
            box-shadow: 0 20px 40px rgba(78, 205, 196, 0.2);
        }

        .btn-ios:hover {
            border-color: #ffffff;
            box-shadow: 0 20px 40px rgba(255, 255, 255, 0.1);
        }

        .btn-windows:hover {
            border-color: #0078d4;
            box-shadow: 0 20px 40px rgba(0, 120, 212, 0.2);
        }

        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin: 80px 0;
        }

        .stat-card {
            background: var(--glass-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 32px 24px;
            text-align: center;
            backdrop-filter: blur(20px);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-color), var(--secondary-accent));
            transform: scaleX(0);
            transition: transform 0.6s ease;
        }

        .stat-card:hover::before {
            transform: scaleX(1);
        }

        .stat-card:hover {
            transform: translateY(-8px);
            border-color: var(--accent-color);
            box-shadow: 0 20px 40px rgba(255, 107, 53, 0.1);
        }

        .stat-number {
            font-size: 2.4rem;
            font-weight: 800;
            color: var(--accent-color);
            margin-bottom: 8px;
            letter-spacing: -0.02em;
            font-family: 'Orbitron', sans-serif;
        }

        .stat-label {
            color: var(--text-secondary);
            font-size: 0.95rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 40px 20px;
            border-top: 1px solid var(--border-color);
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent-color), transparent);
        }

        .footer-text {
            color: var(--text-secondary);
            font-size: 0.9rem;
            font-weight: 400;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .game-section {
                gap: 60px;
            }
        }

        @media (max-width: 768px) {
            .game-section {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .download-buttons {
                flex-direction: column;
                align-items: center;
            }

            .download-btn {
                width: 100%;
                max-width: 280px;
            }

            .download-section {
                padding: 40px 24px;
                margin: 60px 0;
            }

            .nav-dots {
                right: 20px;
            }

            .header {
                padding: 60px 20px 40px;
            }

            .feature-item {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .game-poster {
                height: 300px;
            }

            .stats-section {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* Loading Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .fade-in:nth-child(1) { animation-delay: 0.1s; }
        .fade-in:nth-child(2) { animation-delay: 0.2s; }
        .fade-in:nth-child(3) { animation-delay: 0.3s; }
        .fade-in:nth-child(4) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Click Effect */
        .ripple-effect {
            position: relative;
            overflow: hidden;
        }

        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            pointer-events: none;
            transform: scale(0);
            animation: ripple-animation 0.6s ease-out;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* Floating particles */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: var(--accent-color);
            border-radius: 50%;
            opacity: 0.3;
            animation: float-particle linear infinite;
        }

        @keyframes float-particle {
            0% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-100px) translateX(50px); }
            100% { transform: translateY(0) translateX(0); }
        }

        /* Glitch effect */
        .glitch {
            position: relative;
        }

        .glitch::before, .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.8;
        }

        .glitch::before {
            color: var(--secondary-accent);
            animation: glitch-effect 3s infinite;
            z-index: -1;
        }

        .glitch::after {
            color: var(--accent-color);
            animation: glitch-effect 2s infinite reverse;
            z-index: -2;
        }

        @keyframes glitch-effect {
            0% { transform: translate(0); }
            20% { transform: translate(-3px, 3px); }
            40% { transform: translate(-3px, -3px); }
            60% { transform: translate(3px, 3px); }
            80% { transform: translate(3px, -3px); }
            100% { transform: translate(0); }
        }

        /* Scanlines effect */
        .scanlines {
            position: relative;
            overflow: hidden;
        }

        .scanlines::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                to bottom,
                transparent 0%,
                rgba(255, 255, 255, 0.05) 50%,
                transparent 100%
            );
            background-size: 100% 4px;
            pointer-events: none;
            animation: scanline 8s linear infinite;
            z-index: 1;
        }

        @keyframes scanline {
            0% { transform: translateY(0); }
            100% { transform: translateY(100vh); }
        }
    </style>
</head>
<body>
    <div class="bg-animation">
        <div class="grid-overlay"></div>
        <div class="particles" id="particles"></div>
    </div>

    <header class="header scanlines">
        <div class="nav-dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
        <h1 class="game-logo glitch" data-text="<?php echo $game_title; ?>"><?php echo $game_title; ?></h1>
        <p class="subtitle">Next Generation Gaming</p>
    </header>

    <div class="container">
        <section class="game-section">
            <div class="game-image">
                <div class="game-poster">
                    <img src="<?php echo $poster_image; ?>" alt="<?php echo $game_title; ?> Game Poster">
                </div>
            </div>
            
            <div class="game-info">
                <h2 class="game-title"><?php echo $game_title; ?></h2>
                <p class="game-description"><?php echo $game_description; ?></p>
                
                <div class="features">
                    <h3 class="features-title">Key Features</h3>
                    <ul class="feature-list">
                        <?php foreach($game_features as $index => $feature): ?>
                            <li class="feature-item fade-in" style="animation-delay: <?php echo ($index + 1) * 0.1; ?>s"><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <section class="stats-section">
            <div class="stat-card fade-in">
                <div class="stat-number">15M+</div>
                <div class="stat-label">Active Players</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-number">4.9</div>
                <div class="stat-label">User Rating</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-number">120+</div>
                <div class="stat-label">Game Modes</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Live Support</div>
            </div>
        </section>

        <section class="download-section scanlines">
            <h2 class="download-title">Download Now</h2>
            <p class="download-subtitle">Experience cutting-edge gaming across all your devices. Choose your platform and start playing instantly.</p>
            
            <div class="download-buttons">
                <a href="#" class="download-btn btn-android ripple-effect" onclick="downloadGame('android')">
                    <i class="fab fa-android"></i>
                    <span>Android</span>
                </a>
                
                <a href="#" class="download-btn btn-ios ripple-effect" onclick="downloadGame('ios')">
                    <i class="fab fa-apple"></i>
                    <span>iOS</span>
                </a>
                
                <a href="#" class="download-btn btn-windows ripple-effect" onclick="downloadGame('windows')">
                    <i class="fab fa-windows"></i>
                    <span>Windows</span>
                </a>
            </div>
        </section>
    </div>

    <footer class="footer">
        <p class="footer-text">© 2025 <?php echo $game_title; ?>. All rights reserved. Built for the next generation of gamers.</p>
    </footer>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 1px and 3px
                const size = Math.random() * 2 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random animation duration and delay
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;
                particle.style.animationDuration = `${duration}s`;
                particle.style.animationDelay = `${delay}s`;
                
                particlesContainer.appendChild(particle);
            }
        }
        
        // Initialize particles on load
        window.addEventListener('load', createParticles);

        function downloadGame(platform) {
            const btn = event.currentTarget;
            
            // Add ripple effect
            const rect = btn.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = event.clientX - rect.left - size / 2;
            const y = event.clientY - rect.top - size / 2;
            
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            
            btn.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);

            // Download simulation
            btn.style.transform = 'scale(0.98)';
            
            setTimeout(() => {
                btn.style.transform = '';
                
                // Show modern download notification
                const notification = document.createElement('div');
                notification.innerHTML = `
                    <div style="
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        background: var(--secondary-bg);
                        border: 1px solid var(--border-color);
                        border-radius: 12px;
                        padding: 16px 20px;
                        color: var(--text-primary);
                        font-weight: 500;
                        backdrop-filter: blur(20px);
                        z-index: 1000;
                        animation: slideInRight 0.3s ease;
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
                        display: flex;
                        align-items: center;
                    ">
                        <i class="fas fa-download" style="color: var(--accent-color); margin-right: 12px; font-size: 1.2rem;"></i>
                        <div>
                            <div style="font-weight: 700; margin-bottom: 4px;">Download Started</div>
                            <div style="font-size: 0.9rem; color: var(--text-secondary);">${platform.toUpperCase()} version</div>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(notification);
                
                // Add progress bar after a delay
                setTimeout(() => {
                    const progressBar = document.createElement('div');
                    progressBar.style.position = 'absolute';
                    progressBar.style.bottom = '0';
                    progressBar.style.left = '0';
                    progressBar.style.width = '0%';
                    progressBar.style.height = '3px';
                    progressBar.style.background = 'linear-gradient(90deg, var(--accent-color), var(--secondary-accent))';
                    progressBar.style.borderRadius = '0 0 12px 12px';
                    progressBar.style.transition = 'width 2s linear';
                    
                    notification.firstChild.appendChild(progressBar);
                    
                    setTimeout(() => {
                        progressBar.style.width = '100%';
                    }, 50);
                }, 300);
                
                setTimeout(() => {
                    notification.style.animation = 'fadeOutUp 0.5s ease forwards';
                    setTimeout(() => notification.remove(), 500);
                }, 3000);
                
                // In production, redirect to actual download URLs:
                // window.location.href = 'your-download-link-here';
                
            }, 150);
        }

        // Enhanced animations on load
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.6s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Parallax effect for background grid
        let ticking = false;
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const grid = document.querySelector('.grid-overlay');
            
            if (grid) {
                grid.style.transform = `translate(${scrolled * 0.1}px, ${scrolled * 0.1}px)`;
            }
            
            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        });

        // Add animations for notifications
        const notificationStyle = document.createElement('style');
        notificationStyle.textContent = `
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            @keyframes fadeOutUp {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(notificationStyle);

        // Add hover effect to game poster
        const gamePoster = document.querySelector('.game-poster');
        if (gamePoster) {
            gamePoster.addEventListener('mousemove', (e) => {
                const x = e.clientX - gamePoster.getBoundingClientRect().left;
                const y = e.clientY - gamePoster.getBoundingClientRect().top;
                
                const centerX = gamePoster.offsetWidth / 2;
                const centerY = gamePoster.offsetHeight / 2;
                
                const angleX = (y - centerY) / 20;
                const angleY = (centerX - x) / 20;
                
                gamePoster.style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.02)`;
            });
            
            gamePoster.addEventListener('mouseleave', () => {
                gamePoster.style.transform = 'rotateX(0) rotateY(0) scale(1)';
            });
        }
    </script>
</body>
</html>
