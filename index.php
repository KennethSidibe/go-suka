<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Scolarisons les Enfants burkinabes</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />

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
    </style>

    <!-- Custom styles for this template -->
    <link href="./styles/cover.css" rel="stylesheet" />

    <!-- Contact form css -->
    <link rel="stylesheet" href="./styles/contact-form.css">
    
    <!-- Home made css -->
    <link rel="stylesheet" href="./styles/style.css">
  </head>

  <body class="d-flex flex-column text-center mb-5 pb-3" cz-shortcut-listen="true">
    <!-- Lading Screen -->
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">

      <header class="mb-auto mt-2">
        <div>
          <h3 class="float-md-start mb-0 text-white">Go Suka</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end mt-2">
            <a
              class="nav-link fw-bold py-1 px-0 active"
              aria-current="page"
              href="#"
              >Home</a
            >
            <a class="nav-link fw-bold py-1 px-0" href="#">Réservation</a>
            <a class="nav-link fw-bold py-1 px-0" href="#">Infoline</a>
          </nav>
        </div>
      </header>

      <main class="px-3">

        <h1 class="my-4 text-white pb-5">Scolarisons les Futurs <span style="color: #F8DE22;" >Étoiles</span> Du Burkina</h1>

        <h1 class="text-white">Conférence</h1>
        <h4 class="text-white px-4 fw-light">Date : Vendredi 28 Août</h4>
        <h4 class="text-white px-4 fw-light mb-5">Time : 8h30~11h30</h4>


        <h1 class="text-white">Thème</h1>

        <p class="lead text-white">
            Cadre de concertation sur la contribution 
            moyenne a l'éducation des enfants déplacés internes au Burkina Faso.
        </p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white"
            >Réserve ta place</a
          >
        </p>
      </main>
    </div>

    <!-- CONTACT FORM -->
    <div class="contact-form bg-success-subtle ">
        <div class="wrapper container" >
            <form method="post" action="send-email.php" id="wizard">
                <!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/children_in_school.jpg" alt="">
                        </div>
                        <div class="form-content" >
                            <div class="form-header">
                                <h3>Réservation</h3>
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
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                              <div class="checkbox-tick">
                                <label class="male">
                                  <input type="radio" name="gender" value="male" checked> Male<br>
                                  <span class="checkmark"></span>
                                </label>
                                <label class="female">
                                  <input type="radio" name="gender" value="female"> Female<br>
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5 fs-5">Réserve ta place</button>
                    </div>
                </section>
            </form>
        </div>
        
    </div>


    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
