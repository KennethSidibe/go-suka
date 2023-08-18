<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Scolarisons les Enfants burkinabes</title>

    <link rel="icon" type="image/x-icon" href="./images/logo_pdf.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, 0.1);
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .cover-container {
            max-height: 200vh !important;
            max-width: 100vw !important;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="./styles/cover.css" rel="stylesheet" />

    <!-- Contact form css -->
    <link rel="stylesheet" href="./styles/contact-form.css">

    <!-- Home made css -->
    <link rel="stylesheet" href="./styles/style.css">

    <style>
        @media (min-width: 992px) {
            .cover-container {
                max-width: 100vw;
                padding: 4vw 5vw !important;
            }

            .go-suka-title {
                font-size: 2.5vw;
            }
            .navbar-text-head {
                font-size: 1.15vw;
            }
        }

        @media (max-width: 768px) {
            .save-spot-lg-btn {
                display: none;
                visibility: hidden;
            }
            .line-break-small {
                display: none;
                visibility: hidden;
            }
            
            
        }
        @media(min-width:768px) {
            .navbar-container-head {
                display: flex;
            }
            .line-break-large {
                display: none;
            }

            .theme-text {
                width: 50%;
            }
            .btn-margin-md {
                margin-left: 30vw;
            }
            

        }
    </style>


</head>

<body class="d-flex flex-column text-center" cz-shortcut-listen="true">

    <!-- Lading Screen -->
    <div class="cover-container d-flex w-100 p-3 mx-auto flex-column" id="conference-details">

        <header class="mt-2 my-m">
            <div class="d-lg-flex flex-row justify-content-between mx-5 align-items-start navbar-container-head">
                <h3 class="float-md-start mb-0 text-white w-lg-25 go-suka-title">Go Suka</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end mt-2 navbar-text-head">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#conference-details">Home</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#save-spot-form">Réservation</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#infoline-section">Infoline</a>
                </nav>
                <p class="lead">
                    <a href="#save-spot-form" class="btn btn-lg btn-light fw-bold border-white bg-white save-spot-lg-btn">Réserve ta place</a>
                </p>
            </div>
        </header>

        <h1 class=" my-4 text-white text-start ms-5 scolariser-text pb-5">Scolarisons les Futurs  <span style="color: #F8DE22;">Étoiles</span> <br class="line-break-small"> Du Burkina</h1>

        <div class="me-md-5">
            <h1 class="text-white px-4 text-end pt-lg-4">Conférence</h1>
            <h4 class="text-white px-4 fw-light text-end">Date : Vendredi 18 Août</h4>
            <h4 class="text-white px-4 fw-light mb-5 text-end pb-lg-5">Time : 8h30~11h30</h4>
        </div>

        <div class="ms-5 d-md-flex flex-row align-items-center">

            <div class="d-md-flex flex-column theme-container">
                <h1 class="text-white text-start">Thème</h1>
                <p class="lead text-white text-start theme-text ">
                    Cadre de concertation sur la contribution
                    citoyenne a l'éducation des enfants déplacés internes au Burkina Faso.
                </p>
            </div>

            <div class="me-5 pe-4 text-center">
                <p class="lead">
                    <a href="#save-spot-form" class="btn btn-lg btn-light fw-bold border-white bg-white">Réserve ta place</a>
                </p>
            </div>
        </div>

    </div>

    <!-- CONTACT FORM -->
    <div class="contact-form bg-success-subtle " id="save-spot-form">
        <div class="wrapper container">
            <form method="post" action="send-email.php" id="wizard">
                <!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner flex-wrap justify-content-center">

                        <div class="image-holder my-lg-auto" style="height: min-content;">
                            <img src="images/children_in_school.jpg" class="img-children" alt="">
                        </div>
                        <div class="form-content form-reserv-spot mb-1">
                            <div class="form-header">
                                <h3 class="form-title-spot">Réservation</h3>
                            </div>
                            <p>Remplis ce formulaire pour assurer ta place.</p>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Nom" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Prénom" name="first-name" id="first-name" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Addresse e-mail" name="e-mail" id="e-mail" class="form-control" required>
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Numéro de téléphone" name="phone-number" id="phone-number" class="form-control" required>
                                </div>
                            </div>

                            <br>
                            <hr class="my-3">

                            <div class="container mx">
                                <p class="color text-secondary text-start pt-2 ms-1">Fonctions :</p>
                            </div>

                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0 " type="radio" checked="true" name="lifeOccupation" value="Student" id="student-choice-occupation" aria-label="Radio button for following text input" onclick="disableWorker()">
                                        <span class="ms-2 me-4 ms-0" style="padding-right: 5px;">Étudiants</span>
                                    </div>
                                    <input type="text" id="university-name-field" name="universityName" class="form-control border-primary-subtle" style=" border-left:2px solid #e6e6e6; border-radius:10px 10px 10px 10px;" placeholder="Votre établissement" aria-label="Text input with radio button">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="radio" name="lifeOccupation" value="ActiveWorker" id="worker-choice-occupation" aria-label="Radio button for following text input" onclick="disableStudent()">
                                        <span class="ms-2">Fonctionnaire</span>
                                    </div>
                                    <input type="text" id="job-name-field" disabled="true" name="jobName" class="form-control border-primary-subtle" style=" border-left:2px solid #e6e6e6; border-radius:10px 10px 10px 10px;" placeholder="Votre emploi" aria-label="Text input with radio button">
                                </div>
                            </div>

                            <br>
                            <hr class="my-3">

                            <div class="container mx">
                                <p class="color text-secondary text-start pt-4 ms-1 text-center">Ou vous nous avez découvert ?</p>
                            </div>

                            <div class="container">
                                <div class="row ms-lg-4">

                                    <div class="form-check col-sm-12 col-md d-inline-flex justify-content-center">
                                        <input class="form-check-input me-2 " type="radio" name="discoveryPlace" id="SocialMediaChoice" value="Social media" onclick="hideInput()">
                                        <label class="form-check-label  ms-0" for="inlineCheckbox1">Réseaux Sociaux</label>
                                    </div>

                                    <div class="form-check col-sm-12 col-md d-inline-flex justify-content-center">
                                        <input class="form-check-input me-2" type="radio" name="discoveryPlace" id="TelevisionChoice" value="TV" onclick="hideInput()">
                                        <label class="form-check-label" for="inlineCheckbox2">Télévision</label>
                                    </div>

                                    <div class="form-check col-sm-12 col-md d-inline-flex justify-content-center">
                                        <input class="form-check-input me-2" type="radio" name="discoveryPlace" id="assocChoice" value="Association" onclick="showInput()">
                                        <label class="form-check-label" for="inlineCheckbox3">Association</label>
                                    </div>

                                    <div class="form-check col-sm-12 col-md d-inline-flex" id="inputAssociationVisibility" style="visibility: hidden;">
                                        <input class="form-control mx-5" name="associationName" id="associationInputText" type="text" placeholder="Nom de l'association">
                                    </div>

                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn-margin-md btn btn-primary mb-5 fs-5" onclick="verifyFonction()">Réserve ta place</button>
                    </div>

                </section>
            </form>
        </div>
    </div>

    <div class="container bg-secondary-subtle" id="infoline-section">
        <h1 class="display-5 text-dark mt-4 mb-5 pb-2 fw-bold"> Infoline </h1>
        <footer class="py-3 my-4 pt-0">
            <ul class="nav flex-column justify-content-center border-bottom pb-3 mb-3">
                <li class="fs-2 text-body-emphasis fw-lighter d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone me-3" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    +226 25-46-63-66
                </li>
                <li class="nav-item fs-2 d-flex align-items-center justify-content-center gap-2"> <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" style="height: 7vw; margin:auto 0px;" alt=""> 52-56-27-27 / 64-81-01-18 </li>
                <li class="nav-item fs-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    gosukatfn01@gmail.com
                </li>
                <li class="nav-item fs-2"><a href="#conference-details" class=" go-top-link nav-link px-2 text-body-secondary">Go to top</a></li>
            </ul>
            <p class="text-center text-body-secondary">2023© Go Suka</p>
        </footer>
    </div>



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <!-- Javascript -->
    <script>
        function showInput() {
            document.getElementById('inputAssociationVisibility').style.visibility = "visible";
        }

        function hideInput() {
            document.getElementById('associationInputText').value = "";
            document.getElementById('inputAssociationVisibility').style.visibility = "hidden";
        }

        function disableStudent() {
            document.getElementById("university-name-field").disabled = true;
            document.getElementById("job-name-field").disabled = false;

        }

        function disableWorker() {
            document.getElementById("university-name-field").disabled = false;
            document.getElementById("job-name-field").disabled = true;

        }
    </script>
</body>

</html>