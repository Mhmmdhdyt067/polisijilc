<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tes Polri JILC Kendari</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('landing/assets/img/logo.png')}}" rel="icon">
    <link href="{{ asset('landing/assets/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('landing/assets/css/main.css')}}" rel="stylesheet">

    <style>
        /* Additional styles for the memory game */
        .game-container {
            background-color: #170c4cff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 800px;
            width: 100%;
            margin: 20px auto;
            text-align: center;
        }

        .symbol-set {
            margin: 4rem 0 0 0;
        }

        .symbol-set table {
            border: 5px solid white;
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .symbol-set td {
            border: 5px solid white;
            width: 2%;
            height: 80px;
            vertical-align: middle;
            text-align: center;
            background-color: #170c4cff;
            color: #ffffff;
        }

        .option-set {
            margin: 1rem 0 0 0;
        }

        .option-set table {
            border: 5rem 0 white;
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .option-set td {
            border: 5rem 0 white;
            width: 10%;
            height: 100px;
            vertical-align: middle;
            text-align: center;
            background-color: #170c4cff;
            color: #ffffff;
        }

        .symbol .symbol {
            font-size: 100px;
            font-weight: bold;
        }

        .label {
            font-weight: bold;
            color: #ffffff;
            text-align: center;
        }


        .test-symbols {
            margin: 1rem 0 0 0;
            border: 5rem 0 white;
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .test-symbol td {
            border: 5rem 0 white;
            width: 100%;
            height: 100px;
            vertical-align: middle;
            text-align: center;
            background-color: #170c4cff;
            color: #ffffff;
        }

        .test-symbol {
            width: 100%;
            height: 100px;
            vertical-align: middle;
            text-align: center;
            background-color: #170c4cff;
            color: #ffffff;
        }

        .options {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 30px 0;
        }

        .option {
            background-color: #4338ca;
            color: white;
            border: none;
            border-radius: 8px;
            margin: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.2s;
        }

        .option:hover {
            background-color: #3730a3;
            transform: translateY(-2px);
        }

        .feedback {
            font-size: 20px;
            margin: 20px 0;
            min-height: 30px;
        }

        .correct {
            color: #10b981;
        }

        .incorrect {
            color: #ef4444;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 30px;
            padding: 15px;
            background-color: #f9fafb;
            border-radius: 10px;
        }

        .stat {
            text-align: center;
        }

        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #4338ca;
        }

        .stat-label {
            font-size: 14px;
            color: #6b7280;
            margin-top: 5px;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('landing/assets/img/logo.png') }}" alt="" style="width:3rem">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#trial-test">Trial Test</a></li>
                    <li><a href="#pricing">Paket</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="index.html">Daftar</a>
        </div>
    </header>

    <main class="main">
        <div class="game-container">

            <div class="symbol-set">
                <table>
                    <tr>
                        <td id="symbol-A"></td>
                        <td id="symbol-B"></td>
                        <td id="symbol-C"></td>
                        <td id="symbol-D"></td>
                        <td id="symbol-E"></td>
                    </tr>
                    <tr>
                        <td class="label">A</td>
                        <td class="label">B</td>
                        <td class="label">C</td>
                        <td class="label">D</td>
                        <td class="label">E</td>
                    </tr>
                </table>
            </div>

            <div class="test-symbols">
                <table border="5" style="border-color:white; padding:30px;">
                    <tr id="test-symbol-row"></tr>
                </table>
            </div>

            <div class="option-set">
                <table border="5" style="border-color:white; padding:30px;">
                    <tr>
                        <td style="border: 5px solid white;"><button class="option" data-value="a" style="background-color: #170c4cff;">A</button></td>
                        <td style="border: 5px solid white;"><button class="option" data-value="b" style="background-color: #170c4cff;">B</button></td>
                        <td style="border: 5px solid white;"><button class="option" data-value="c" style="background-color: #170c4cff;">C</button></td>
                        <td style="border: 5px solid white;"><button class="option" data-value="d" style="background-color: #170c4cff;">D</button></td>
                        <td style="border: 5px solid white;"><button class="option" data-value="e" style="background-color: #170c4cff;">E</button></td>
                    </tr>
                </table>

            </div>

            <div class="feedback" id="feedback"></div>

            <div class="stats">
                <div class="stat">
                    <div class="stat-value" id="score">0</div>
                    <div class="stat-label">Score</div>
                </div>
                <div class="stat">
                    <div class="stat-value" id="streak">0</div>
                    <div class="stat-label">Streak</div>
                </div>
                <div class="stat">
                    <div class="stat-value" id="accuracy">100%</div>
                    <div class="stat-label">Accuracy</div>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-trial-test">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">JILC KENDARI</span>
                    </a>
                    <div class="pt-3 footer-contact">
                        <p>Jl. Bunggasi, Poros Anduonohu</p>
                        <p>Jl. M.T. Haryono No.109 Wua-wua</p>
                        <p>Kendari, Indonesia</p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>+628 2291 2579 74</span></p>
                        <p><strong>Email:</strong> <span>jilckendari@gmail.com</span></p>
                    </div>
                    <div class="mt-4 social-links d-flex">
                        <a href="https://www.instagram.com/bimbel_jilc_kendari/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/bimbel_jilc_kendari/"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#trial-test">Trial Test</a></li>
                        <li><a href="#pricing">Paket</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Program Kami</h4>
                    <ul>
                        <li><a href="#">Kelas Reguler (SD, SMP, SMA)</a></li>
                        <li><a href="#">Kelas UTBK</a></li>
                        <li><a href="#">Kelas Kedinasan</a></li>
                        <li><a href="#">Kelas TNI/Polri</a></li>
                        <li><a href="#">Kelas CPNS</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container mt-4 text-center copyright">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">JILC KENDARI</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://www.instagram.com/m.yatt_/">Muhammad Hidayat</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landing/assets/js/main.js')}}"></script>

    <script>
        // Symbol sets - using geometric shapes for clarity
        const symbols = {
            a: '▲', // Triangle
            b: '◼', // Square
            c: '●', // Circle
            d: '◆', // Diamond
            e: '★' // Star
        };

        // Game state
        let gameState = {
            currentMissingSymbol: null,
            score: 0,
            streak: 0,
            correctAnswers: 0,
            totalAnswers: 0
        };

        // DOM elements
        const symbolSetEl = document.querySelector('.symbol-set');
        const testSymbolsEl = document.querySelector('.test-symbols');
        const optionsEl = document.querySelectorAll('.option');
        const feedbackEl = document.getElementById('feedback');
        const scoreEl = document.getElementById('score');
        const streakEl = document.getElementById('streak');
        const accuracyEl = document.getElementById('accuracy');


        function initGame() {
            // Create original symbol display in a table
            for (const [key, value] of Object.entries(symbols)) {
                const symbolCell = document.getElementById(`symbol-${key.toUpperCase()}`);
                if (symbolCell) {
                    symbolCell.innerHTML = `<div class="symbol">${value}</div>`;
                }
            }
            optionsEl.forEach(option => {
                option.addEventListener('click', () => handleAnswer(option.dataset.value));
            });

            // Start first round
            startNewRound();
            // ... (rest of your code remains unchanged)
        }

        // Start a new round
        // Start a new round
        function startNewRound() {
            // Reset feedback
            feedbackEl.textContent = '';
            feedbackEl.className = 'feedback';

            // Select a random symbol to remove
            const symbolKeys = Object.keys(symbols);
            const missingIndex = Math.floor(Math.random() * symbolKeys.length);
            gameState.currentMissingSymbol = symbolKeys[missingIndex];

            // Create a shuffled array of the remaining symbols
            const remainingSymbols = symbolKeys.filter(key => key !== gameState.currentMissingSymbol);
            shuffleArray(remainingSymbols);

            // Display the test symbols in a table
            const testSymbolRow = document.getElementById('test-symbol-row');
            testSymbolRow.innerHTML = ''; // Clear previous row content

            remainingSymbols.forEach(key => {
                const symbolCell = document.createElement('td');
                symbolCell.className = 'test-symbol';
                symbolCell.textContent = symbols[key];
                testSymbolRow.appendChild(symbolCell);
            });
        }


        // Handle user's answer
        function handleAnswer(selectedOption) {
            gameState.totalAnswers++;

            if (selectedOption === gameState.currentMissingSymbol) {
                // Correct answer
                gameState.score += 10;
                gameState.streak += 1;
                gameState.correctAnswers++;
                feedbackEl.textContent = 'Benar! Mantap!';
                feedbackEl.className = 'feedback correct';
            } else {
                // Incorrect answer
                gameState.streak = 0;
                feedbackEl.textContent = `Salah. Simbol yang hilang adalah ${gameState.currentMissingSymbol.toUpperCase()}.`;
                feedbackEl.className = 'feedback incorrect';
            }

            // Update stats
            updateStats();

            // Start new round after a short delay
            setTimeout(startNewRound, 10);
        }

        // Update statistics display
        function updateStats() {
            scoreEl.textContent = gameState.score;
            streakEl.textContent = gameState.streak;

            const accuracy = gameState.totalAnswers > 0 ?
                Math.round((gameState.correctAnswers / gameState.totalAnswers) * 100) :
                100;
            accuracyEl.textContent = `${accuracy}%`;
        }

        // Utility function to shuffle an array
        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        // Start the game when the page loads
        window.addEventListener('load', initGame);
    </script>
</body>

</html>