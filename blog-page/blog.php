<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="blog-style.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="../images/Logo.png" alt="Nexcent" height="35" />
        </div>
        <div class="menu-button">
            <div class="menu">
                <ul>
                    <a href="../index.html">
                        <li>Home</li>
                    </a>
                    <a href="../index.html">
                        <li>Member</li>
                    </a>
                    <a href="#">
                        <li>Blog</li>
                    </a>
                    <a href="../index.html">
                        <li>Community</li>
                    </a>
                    <a href="../index.html">
                        <li>Pricing</li>
                    </a>
                    <a href="../index.html">
                        <li>About</li>
                    </a>
                    <a href="../index.html">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>

            <a href="./login-page/login.html">
                <div class="button">
                    <button>Login</button>
                </div>
            </a>
            <a href="./signup-page/signup.html">
                <div class="button">
                    <button>Signup</button>
                </div>
            </a>
        </div>
    </div>

    <div>
        <div class="blog">
            <!-- Left Sidebar -->
            <div class="left-div">
                <h3>Profile</h3>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Friends</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
                <h4>Friend Suggestions</h4>
                <ul>
                    <li>Emon Shikder</li>
                    <li>Sabbir Hossain</li>
                    <li>Nahid Khan</li>
                    <li>Noman Hasan</li>
                </ul>
            </div>

            <!-- Middle Feed -->
            <div class="middle-div">
                <?php
                include '../connect.php';
                
                $query = "SELECT * FROM post";
                $run = mysqli_query($con, $query);
                if (mysqli_num_rows($run) > 0) {
                    
                    while ($row = mysqli_fetch_assoc($run)) {
                        echo "<div class='card'>";
                        echo "<h4>" . htmlspecialchars($row['heading']) . "</h4>";
                        echo "<p>" . nl2br(htmlspecialchars($row['text'])) . "</p>";
                        echo "<button>Like</button>";
                        echo "<button>Comment</button>";
                        echo "</div>";
                    }
                }
                ?>

                
            </div>

            <!-- Right Sidebar -->
            <div class="right-div">
                <h3>Suggested for You</h3>
                <ul>
                    <li>Ad: Buy new shoes!</li>
                    <li>Ad: Check out the latest gadgets.</li>
                    <li>Ad: 50% off on pizza orders.</li>
                </ul>
            </div>

        </div>
    </div>





    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Your Company Name. All rights reserved.</p>
        </div>
    </footer>

    <script src="./script.js"></script>
</body>

</html>
