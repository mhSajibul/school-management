<?php

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart School</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/form-style.css">

</head>

<body>
    <header>
        <section>

            <nav>
                <h2 class="logo-title">SmartSchool</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">Notice</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="profile">Profile</li>

                </ul>
            </nav>
        </section>
    </header>
    <main>
        <div class="container">
            <h3>Number Submit form by get method</h3>
            <form action="main.php" method="post">
                <div class="subject">
                    <label for="sutdentID">Student's ID </label>
                    <input type="number" name="sutdentID" placeholder="Student's ID">
                </div>
                <div class="subject">
                    <label for="Mark">Bangla</label>
                    <input type="number" name="BanglaMark" placeholder="Enter Mark">
                </div>
                <div class="subject">
                    <label for="Mark">English</label>
                    <input type="number" name="EnglishMark" placeholder="Enter Mark">
                </div>
                <div class="subject">
                    <label for="Mark">Math</label>
                    <input type="number" name="MathMark" placeholder="Enter Mark">
                </div>
                <div class="subject">
                    <label for="Mark">Science</label>
                    <input type="number" name="ScienceMark" placeholder="Enter Mark">
                </div>
                <div class="subject">
                    <label for="Mark">Relegion</label>
                    <input type="number" name="RelegionMark" placeholder="Enter Mark">
                </div>

                <div id="submit">
                    <button type="submit" name="submit">submit</button>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>