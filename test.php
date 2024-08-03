<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test7.css">
    <title>WORK OUT</title>
</head>
<body>
    <script src="test7.js"></script>
    <div class="Main_Header">
        <div class="H_Left">
            <a href="Main.php" class="circle-link">
                <img src="Images/WLogo.png" alt="Clickable Image" class="circle-image">
            </a>
            <div class="toggle-button" onclick="toggleSidebar()">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                </svg>
            </div>
        </div>
        <div class="H_Mid">
            <h1>!Work-Out!</h1>
        </div>
        <div class="H_Right">
            <a href="Music.php" class="circle-link">
                <img src="Images/MLogo.png" alt="Clickable Image" class="circle-image">
            </a>
            <div class="toggle-button2" onclick="toggleSidebar2()">
                <button id="caretButton">
                    <svg class="caret-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.729 5.575c1.304-1.074 3.27-.146 3.27 1.544v9.762c0 1.69-1.966 2.618-3.27 1.544l-5.927-4.881a2 2 0 0 1 0-3.088l5.927-4.88Z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay" onclick="closeSidebar()"></div>
    <div class="L_sidebar" id="mySidebar">
        <div class="back-icon" onclick="closeSidebar()">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M13.729 5.575c1.304-1.074 3.27-.146 3.27 1.544v9.762c0 1.69-1.966 2.618-3.27 1.544l-5.927-4.881a2 2 0 0 1 0-3.088l5.927-4.88Z" clip-rule="evenodd"/>
            </svg>
        </div>
        <ul>
            <li>//Name//</li>
            <li><a href="login.php">Log out</a></li>
        </ul>
    </div>
    <div class="body">
        <div class="Main_page">
            <section id="section1">
                <h1>Section 1</h1>
                <p>This is the content of section 1.</p>
            </section>
            <section id="section2">
                <h1>Section 2</h1>
                <p>This is the content of section 2.</p>
            </section>
            <section id="section3">
                <h1>Section 3</h1>
                <p>This is the content of section 3.</p>
            </section>
        </div>
        <div class="sidebar">
            <header></header>
            <main>
                <div class="input-group">
                    <div class="gatherer">
                        <label>Age: <output id="demo3">20</output></label>
                    </div>
                    <div class="slidecontainer">
                        <input class="slider" type="range" min="10" max="80" value="20" id="myRange3">
                    </div>
                    <div class="gatherer">
                        <label>Weight: <output id="demo1">70</output> kg</label>
                    </div>
                    <div class="slidecontainer">
                        <input class="slider" type="range" min="20" max="120" value="70" id="myRange1">
                    </div>
                    <div class="gatherer">
                        <label>Height: <output id="demo2">170</output> cm</label>
                    </div>
                    <div class="slidecontainer">
                        <input class="slider" type="range" min="100" max="240" value="170" id="myRange2">
                    </div>
                </div>
            </main>
            <footer></footer>
        </div>
    </div>
    <div class="footer">
        call 911
    </div>
</body>
</html>
