<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    width: 80%;
    margin: 0 auto;
}

/* Header Navigation */
.header {
    background-color: #333;
    padding: 20px 0;
}

.navbar {
    display: flex;
    justify-content: center;
    align-items: center;
}

.navbar-list {
    list-style: none;
    display: flex;
    gap: 30px;
}

.navbar-list li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

.navbar-list li a:hover,
.navbar-list li a.active {
    color: #f1c40f;
}

/* About Section */
.about-section {
    background-color: #fff;
    padding: 40px 0;
}

.about-section h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 36px;
}

.about-section p {
    text-align: center;
    font-size: 18px;
    line-height: 1.6;
}

/* Team Section */
.team-section {
    padding: 60px 0;
    background-color: #fafafa;
    margin-bottom: 30px;
}

.team-section h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 32px;
}

.team-members {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.team-member {
    text-align: center;
    width: 18%;
}

.team-member img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 20px;
    border: 3px solid #ddd;
}

.team-member h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.team-member p {
    font-size: 14px;
    color: #666;
}

/* Footer */
.footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <ul class="navbar-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="about-section">
        <div class="container">
            <h1>About Us</h1>
            <p>We are a team of five passionate developers working together to bring you an interactive mental health survey project. Our goal is to provide users with an insightful GAD-7 score, helping them understand their mental well-being.</p>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2>Meet The Team</h2>
            <div class="team-members">
                <!-- Team Member 1 -->
                <div class="team-member">
                    <img src="img/riad.jpg" alt="Member 1">
                    <h3>Md Riad Hasan</h3>
                    <p>Role: Project Lead</p>
                    <p>Short bio: I am passionate about competitive programming and leading our team to build this mental health survey project. With a deep interest in coding and problem-solving, I am excited to contribute to the success of this project..</p>
                </div>
                <!-- Team Member 2 -->
                <div class="team-member">
                    <img src="member2.jpg" alt="Member 2">
                    <h3>Member 2</h3>
                    <p>Role: Backend Developer</p>
                    <p>Short bio or description about Member 2.</p>
                </div>
                <!-- Team Member 3 -->
                <div class="team-member">
                    <img src="member3.jpg" alt="Member 3">
                    <h3>Member 3</h3>
                    <p>Role: Frontend Developer</p>
                    <p>Short bio or description about Member 3.</p>
                </div>
                <!-- Team Member 4 -->
                <div class="team-member">
                    <img src="member4.jpg" alt="Member 4">
                    <h3>Member 4</h3>
                    <p>Role: Designer</p>
                    <p>Short bio or description about Member 4.</p>
                </div>
                <!-- Team Member 5 -->
                <div class="team-member">
                    <img src="member5.jpg" alt="Member 5">
                    <h3>Member 5</h3>
                    <p>Role: Tester</p>
                    <p>Short bio or description about Member 5.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Team Project. All rights reserved.</p>
    </footer>
</body>
</html>