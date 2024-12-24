<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anxiety Detection - GAD-7</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="img/anxiety-icon.png">


</head>

<body>
    <style>
        .answer-box label {
            padding: 10px 15px !important;
        }
    </style>
    <!-- Header -->
    <nav style="background-color: #1BB193;" class="navbar navbar-expand-sm p-2">
        <div class="container-fluid col">
            <a href="index.php"><img id="navImg" class="rounded" src="img/anxiety-icon.png" alt=""></a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
        </div>
        </button>
        <div class="collapse navbar-collapse" id="#navber">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item px-1">
                    <a style="color: #fff !important;" class="nav-link active " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item px-1">
                    <a style="color: #fff !important;" class="nav-link active" aria-current="page" href="about.php">About Us</a>
                </li>
                <li class="nav-item px-1">
                    <a style="color: #fff !important;" class="nav-link active" aria-current="page" href="references.php">References</a>
                </li>


            </ul>
        </div>
        <div>
            <a href="contact_us.php" tel="+008" class="call-us-link">
                <button style="background-color: #fff; color: #000; padding: 10px 40px; font-weight: 600; font-size: 20px;" class="btn btn-outline-success" type="submit">Contact US!</button>
            </a>

        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-muted p-4">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-lg-6 mb-4 hero-left">
                    <h2 style="font-size: 60px;" class="display-4">Understand Your Anxiety</h2>
                    <div class="reference">
                        <h3>References</h3>
                        <a class="references" href="https://adaa.org/sites/default/files/GAD-7_Anxiety-updated_0.pdf" target="_blank">https://adaa.org/sites/default/files/GAD-7_Anxiety-updated_0.pdf</a>
                        <a class="references" href="https://jamanetwork.com/journals/jamainternalmedicine/fullarticle/410326" target="_blank">https://jamanetwork.com/journals/jamainternalmedicine/fullarticle/410326</a>
                        <br><a class="references" href="references.php"> ..See More</a>
                    </div>
                    <p class="lead">
                        The Generalized Anxiety Disorder-7 (GAD-7) is a widely used self-assessment tool designed to screen for and measure the severity of generalized anxiety disorder (GAD). Developed by Spitzer et al. in 2006, it is a validated instrument used in both clinical and research settings.
                        The questionnaire consists of 7 items, each addressing a specific symptom of anxiety. Respondents rate the frequency of their symptoms over the past two weeks on a scale ranging from 0 (Not at all) to 3 (Nearly every day). The total score determines the severity of anxiety, helping guide clinical decisions or self-awareness about mental health.
                    </p>
                </div>

                <!-- Right Column -->
                <div style="
                padding: 0px 20px;
                background-color: #fff;
                color: #000;
                border-radius: 10px;" class="col-lg-6">
                    <!-- Questionnaire Section -->
                    <section class="py-5 questions-container">
                        <div class="container">
                            <form id="gad7-form" name="gad7" method="POST" action="index.php">
                                <div class="d-flex flex-wrap gap-3">
                                    <div style="width: 48%;" class="mb-4">
                                        <label for="username" class="form-label fw-bold">Name</label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter your name" required>
                                    </div>
                                    <div style="width: 48%;" class="mb-4">
                                        <label for="age" class="form-label fw-bold">Age</label>
                                        <input type="number" id="age" name="age" class="form-control" placeholder="Enter your age" required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="country" class="form-label fw-bold">Country</label>
                                    <input list="countries" id="country" name="country" class="form-control" placeholder="Enter your Country" required>
                                    <datalist id="countries">
                                        <option value="Afghanistan">
                                        <option value="Albania">
                                        <option value="Algeria">
                                        <option value="Andorra">
                                        <option value="Angola">
                                        <option value="Antigua and Barbuda">
                                        <option value="Argentina">
                                        <option value="Armenia">
                                        <option value="Australia">
                                        <option value="Austria">
                                        <option value="Azerbaijan">
                                        <option value="Bahamas">
                                        <option value="Bahrain">
                                        <option value="Bangladesh">
                                        <option value="Barbados">
                                        <option value="Belarus">
                                        <option value="Belgium">
                                        <option value="Belize">
                                        <option value="Benin">
                                        <option value="Bhutan">
                                        <option value="Bolivia">
                                        <option value="Bosnia and Herzegovina">
                                        <option value="Botswana">
                                        <option value="Brazil">
                                        <option value="Brunei">
                                        <option value="Bulgaria">
                                        <option value="Burkina Faso">
                                        <option value="Burundi">
                                        <option value="Cabo Verde">
                                        <option value="Cambodia">
                                        <option value="Cameroon">
                                        <option value="Canada">
                                        <option value="Central African Republic">
                                        <option value="Chad">
                                        <option value="Chile">
                                        <option value="China">
                                        <option value="Colombia">
                                        <option value="Comoros">
                                        <option value="Congo (Congo-Brazzaville)">
                                        <option value="Costa Rica">
                                        <option value="Croatia">
                                        <option value="Cuba">
                                        <option value="Cyprus">
                                        <option value="Czechia (Czech Republic)">
                                        <option value="Denmark">
                                        <option value="Djibouti">
                                        <option value="Dominica">
                                        <option value="Dominican Republic">
                                        <option value="Ecuador">
                                        <option value="Egypt">
                                        <option value="El Salvador">
                                        <option value="Equatorial Guinea">
                                        <option value="Eritrea">
                                        <option value="Estonia">
                                        <option value="Eswatini (fmr. " Swaziland")">
                                        <option value="Ethiopia">
                                        <option value="Fiji">
                                        <option value="Finland">
                                        <option value="France">
                                        <option value="Gabon">
                                        <option value="Gambia">
                                        <option value="Georgia">
                                        <option value="Germany">
                                        <option value="Ghana">
                                        <option value="Greece">
                                        <option value="Grenada">
                                        <option value="Guatemala">
                                        <option value="Guinea">
                                        <option value="Guinea-Bissau">
                                        <option value="Guyana">
                                        <option value="Haiti">
                                        <option value="Holy See">
                                        <option value="Honduras">
                                        <option value="Hungary">
                                        <option value="Iceland">
                                        <option value="India">
                                        <option value="Indonesia">
                                        <option value="Iran">
                                        <option value="Iraq">
                                        <option value="Ireland">
                                        <option value="Israel">
                                        <option value="Italy">
                                        <option value="Jamaica">
                                        <option value="Japan">
                                        <option value="Jordan">
                                        <option value="Kazakhstan">
                                        <option value="Kenya">
                                        <option value="Kiribati">
                                        <option value="Kuwait">
                                        <option value="Kyrgyzstan">
                                        <option value="Laos">
                                        <option value="Latvia">
                                        <option value="Lebanon">
                                        <option value="Lesotho">
                                        <option value="Liberia">
                                        <option value="Libya">
                                        <option value="Liechtenstein">
                                        <option value="Lithuania">
                                        <option value="Luxembourg">
                                        <option value="Madagascar">
                                        <option value="Malawi">
                                        <option value="Malaysia">
                                        <option value="Maldives">
                                        <option value="Mali">
                                        <option value="Malta">
                                        <option value="Marshall Islands">
                                        <option value="Mauritania">
                                        <option value="Mauritius">
                                        <option value="Mexico">
                                        <option value="Micronesia">
                                        <option value="Moldova">
                                        <option value="Monaco">
                                        <option value="Mongolia">
                                        <option value="Montenegro">
                                        <option value="Morocco">
                                        <option value="Mozambique">
                                        <option value="Myanmar (formerly Burma)">
                                        <option value="Namibia">
                                        <option value="Nauru">
                                        <option value="Nepal">
                                        <option value="Netherlands">
                                        <option value="New Zealand">
                                        <option value="Nicaragua">
                                        <option value="Niger">
                                        <option value="Nigeria">
                                        <option value="North Korea">
                                        <option value="North Macedonia">
                                        <option value="Norway">
                                        <option value="Oman">
                                        <option value="Pakistan">
                                        <option value="Palau">
                                        <option value="Palestine State">
                                        <option value="Panama">
                                        <option value="Papua New Guinea">
                                        <option value="Paraguay">
                                    </datalist>
                                </div>

                                <!-- Question Set 1 -->
                                <div class="question-set active" id="question-set-1">
                                    <!-- Question 1 -->
                                    <div class="mb-4">
                                        <p class="fw-bold">1. Feeling nervous, anxious, or on edge?</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q1" value="0" id="q1-opt1" required>
                                                    <label for="q1-opt1" class="w-100 d-block">Not at all (+0)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q1" value="1" id="q1-opt2">
                                                    <label for="q1-opt2" class="w-100 d-block">Several days (+1)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q1" value="2" id="q1-opt3">
                                                    <label for="q1-opt3" class="w-100 d-block">More than half the days (+2)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q1" value="3" id="q1-opt4">
                                                    <label for="q1-opt4" class="w-100 d-block">Nearly every day (+3)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Question 2 -->
                                    <div class="mb-4">
                                        <p class="fw-bold">2. Not being able to stop or control worrying?</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q2" value="0" id="q2-opt1" required>
                                                    <label for="q2-opt1" class="w-100 d-block">Not at all (+0)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q2" value="1" id="q2-opt2">
                                                    <label for="q2-opt2" class="w-100 d-block">Several days (+1)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q2" value="2" id="q2-opt3">
                                                    <label for="q2-opt3" class="w-100 d-block">More than half the days (+2)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q2" value="3" id="q2-opt4">
                                                    <label for="q2-opt4" class="w-100 d-block">Nearly every day (+3)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question 3 -->
                                    <div class="mb-4">
                                        <p class="fw-bold">3. Worrying too much about different things?</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q3" value="0" id="q3-opt1" required>
                                                    <label for="q3-opt1" class="w-100 d-block">Not at all (+0)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q3" value="1" id="q3-opt2">
                                                    <label for="q3-opt2" class="w-100 d-block">Several days (+1)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q3" value="2" id="q3-opt3">
                                                    <label for="q3-opt3" class="w-100 d-block">More than half the days (+2)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q3" value="3" id="q3-opt4">
                                                    <label for="q3-opt4" class="w-100 d-block">Nearly every day (+3)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Question Set 2 -->
                                <div class="question-set" id="question-set-2">
                                    <!-- Question 4 -->
                                    <div class="mb-4">
                                        <p class="fw-bold">4. Trouble relaxing?</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q4" value="0" id="q4-opt1" required>
                                                    <label for="q4-opt1" class="w-100 d-block">Not at all (+0)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q4" value="1" id="q4-opt2">
                                                    <label for="q4-opt2" class="w-100 d-block">Several days (+1)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q4" value="2" id="q4-opt3">
                                                    <label for="q4-opt3" class="w-100 d-block">More than half the days (+2)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q4" value="3" id="q4-opt4">
                                                    <label for="q4-opt4" class="w-100 d-block">Nearly every day (+3)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Question 5 -->
                                    <div class="mb-4">
                                        <p class="fw-bold">5. Being so restless that it’s hard to sit still?</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q5" value="0" id="q5-opt1" required>
                                                    <label for="q5-opt1" class="w-100 d-block">Not at all (+0)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q5" value="1" id="q5-opt2">
                                                    <label for="q5-opt2" class="w-100 d-block">Several days (+1)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q5" value="2" id="q5-opt3">
                                                    <label for="q5-opt3" class="w-100 d-block">More than half the days (+2)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q5" value="3" id="q5-opt4">
                                                    <label for="q5-opt4" class="w-100 d-block">Nearly every day (+3)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question 6 -->
                                    <div class="mb-4">
                                        <p class="fw-bold">6. Becoming easily annoyed or irritable?</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q6" value="0" id="q6-opt1" required>
                                                    <label for="q6-opt1" class="w-100 d-block">Not at all (+0)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q6" value="1" id="q6-opt2">
                                                    <label for="q6-opt2" class="w-100 d-block">Several days (+1)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q6" value="2" id="q6-opt3">
                                                    <label for="q6-opt3" class="w-100 d-block">More than half the days (+2)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q6" value="3" id="q6-opt4">
                                                    <label for="q6-opt4" class="w-100 d-block">Nearly every day (+3)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question 7 -->
                                    <div class="mb-4">
                                        <p class="fw-bold">7. Feeling afraid, as if something awful might happen?</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q7" value="0" id="q7-opt1" required>
                                                    <label for="q7-opt1" class="w-100 d-block">Not at all (+0)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q7" value="1" id="q7-opt2">
                                                    <label for="q7-opt2" class="w-100 d-block">Several days (+1)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q7" value="2" id="q7-opt3">
                                                    <label for="q7-opt3" class="w-100 d-block">More than half the days (+2)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="answer-box">
                                                    <input type="radio" name="q7" value="3" id="q7-opt4">
                                                    <label for="q7-opt4" class="w-100 d-block">Nearly every day (+3)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional questions can go here -->

                                    <button type="submit" name="submit" class="btn btn-success w-100 mt-3">Submit</button>

                                </div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-secondary" id="prev-button" style="display: none; padding: 10px 50px;">Previous</button>
                                    <button style="padding: 10px 50px;" type="button" class="btn btn-primary" id="next-button">Next</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <div id="result-section" class="text-center" style="display: none; padding: 40px; background: #e8f9fa; border-radius: 8px; border: 1px solid #ddd; position: fixed; bottom: 20px; left: 25%; transform: translateX(-50%); width: 90%; max-width: 600px; box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2); z-index: 1000;">
        <h2>Your GAD-7 Score: <strong><span id="score"></span></h2></strong>
        <p><strong>Feedback:</strong> <span id="feedback"></span></p>
        <p><strong>Recommendation:</strong> <span id="recommendation"></span></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




    <!-- JavaScript -->
    <script>
        //Result Section JS
        document.getElementById('gad7-form').addEventListener('submit', function(e) {
            e.preventDefault();

            let totalScore = 0;

            // Calculate GAD-7 score
            for (let i = 1; i <= 7; i++) {
                const selected = document.querySelector(`input[name="q${i}"]:checked`);
                if (selected) {
                    totalScore += parseInt(selected.value, 10);
                }
            }

            // Determine feedback based on score
            let feedback = "";
            let recommendation = "";
            if (totalScore <= 4) {
                feedback = "Minimal anxiety.";
                recommendation = "You're doing well! Keep maintaining a healthy lifestyle and consider practices like mindfulness or regular exercise to stay in balance.";
            } else if (totalScore <= 9) {
                feedback = "Mild anxiety.";
                recommendation = "It may help to improve your sleep, reduce stress, or engage in relaxation techniques such as yoga or meditation. Keep an eye on your feelings and consider talking to someone if it persists.";
            } else if (totalScore <= 14) {
                feedback = "Moderate anxiety.";
                recommendation = "Consider reaching out to a mental health professional or counselor for support. Building a routine and practicing stress management strategies may also help.";
            } else if (totalScore <= 21) {
                feedback = "Severe anxiety.";
                recommendation = "It's important to seek help from a doctor or psychologist. Severe anxiety can significantly impact your quality of life, but professional support and treatment can make a difference.";
            }

            // Show score and feedback
            document.getElementById('score').innerText = totalScore;
            document.getElementById('feedback').innerText = feedback;
            document.getElementById('recommendation').innerText = recommendation;

            // Show result section
            const resultSection = document.getElementById('result-section');
            resultSection.style.display = "block";
            resultSection.scrollIntoView({
                behavior: "smooth"
            });

            // Get the country value
            const country = document.getElementById('country').value;

            // Send data to PHP using fetch API
            const formData = new FormData();
            formData.append('country', country);
            formData.append('gad7_score', totalScore); // Correct the variable name here to 'totalScore'

            fetch('index.php', {
                method: 'POST',
                body: formData
            })
        });




        const questionSets = document.querySelectorAll('.question-set');
        let currentSet = 0;

        document.getElementById('next-button').addEventListener('click', () => {
            if (currentSet < questionSets.length - 1) {
                questionSets[currentSet].classList.remove('active');
                currentSet++;
                questionSets[currentSet].classList.add('active');
            }
            updateButtons();
        });

        document.getElementById('prev-button').addEventListener('click', () => {
            if (currentSet > 0) {
                questionSets[currentSet].classList.remove('active');
                currentSet--;
                questionSets[currentSet].classList.add('active');
            }
            updateButtons();
        });

        function updateButtons() {
            document.getElementById('prev-button').style.display = currentSet === 0 ? 'none' : 'block';
            document.getElementById('next-button').style.display = currentSet === questionSets.length - 1 ? 'none' : 'block';
        }
    </script>
    <?php
    include 'connection.php';

    // Check if data is received via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve data
        $country = $conn->real_escape_string($_POST['country']);
        $gad7_score = (int) $_POST['gad7_score'];

        // Insert into database
        $sql = "INSERT INTO gad7_submissions (country, gad7_score) VALUES ('$country', '$gad7_score')";
        if ($conn->query($sql) === TRUE) {
            echo "Submission successful!";
        } else {
            echo "Error: " . $conn->error;
        }

        // Close connection
        $conn->close();
    }
    ?>

</body>

</html>