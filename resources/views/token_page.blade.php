<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOKEN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/token_page.css') }}">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- Theme style -->
        <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('assets/css/chatbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/citizen_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
      <!-- Template Main CSS Files -->
      <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
  </head>

<body>
   <!-- ======= Header ======= -->
   <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="margin-left: 15%; margin-right:15%;">

    <div class="d-flex align-items-center justify-content-start  ">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="TaskSwap" width="50">
        </a>
          <a href="Hero Inbox" class="secret" style="margin-left: 10px;"> Inbox</a>
          <a href="Find Task" class="secret"  style="margin-left: 20px; width:80px;"> Find Task</a>
          <a href="Hero Dashboard" class="secret" style="margin-left: 10px; margin-right: 10px;" > Dashboard</a>

        <div class="box" style="margin-left:1%">
<input type="text" placeholder="Search...">
<a href="#">
<i class="fas fa-search"></i>
</a>
</div>
</div>

  


      <div class="position-end">
      
      <div class="dropdown">
      <a class="nav-link" onclick="dropdown1()">
        <img src="assets/images/avatar4.png" style="width: 40px; height: 40px; border-radius: 50%;">
         
          <span class="badge badge-danger navbar-badge">5</span>
        </a>
        <div id="myDropdown1" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <div class="dropdown-divider"></div>
          <a href="Hero Task Status" class="dropdown-item">
          <i class="fas fa-tasks"></i> Task Status
          </a>

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="fas fa-history"></i> Transaction History
          </a>

          <div class="dropdown-divider hide" ></div>
          <a href="Hero Dashboard" class="dropdown-item hide" >
          <i class="fas fa-cog mr-2"></i> Dashboard
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="/" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Log out
          </a>



        </div>
</div>


  </header><!-- End Header -->
  <main>
        
<nav style="color:#FFFFFF; height:50px; margin-top:4%;margin-left:2%">
    <a class="navbar-brand" href="dashboard"><img src="{{ asset('assets/images/left-arrow.png') }}" alt="Back Arrow" height="50"></a>
</nav>

<div class="content">
    <div class="container">
        
    <label for="inputName" class="h4" style="color:#04364A; font-family:'Poppins', sans-serif;">TOKEN BALANCE</label>
    <br><div class="form-group row">
        <div class="col-sm-1 col-form-label">
        <img src="{{ asset('assets/images/token.png') }}" alt="TaskSwap" height="45">
    </div>

        <div class="col-sm-10 peso">
        <p class="h1" style="color:#04364A"><strong>0.00</strong></p>
        </div>
    </div>
    <label for="inputName" class="h4" style="color:#04364A">Php 0.00</label>
<br>
<br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start btn1">
    <button type="submit" class="btn rounded-pill" style="background-color:#62AC83; color: #FFFFFF; font-family:'Poppins', sans-serif; "><strong>BUY TOKEN</strong></button>
    <button type="submit" class="btn rounded-pill" style="background-color:#80BCBD; color: #FFFFFF; font-family:'Poppins', sans-serif;"><strong>TRANSFER EARNINGS</strong></button>
    </div>

    <div class="Packge_Container">
        <div class="top">
            <br>
        <h1 class = "Package_Title">GAMES</h1>
            <br>
    </div>
    <div class="package-container">
        <div class="packages" data-bs-toggle="modal" data-bs-target="#spinModal">
            <br>
        <img src="{{ asset('assets/images/fortune-wheel.png') }}" alt="SpinTheWheel" height="150">
        <br>
            <h1>Spin the Wheel</h1>
            <p class="domain">Engage in an exciting game of chance to put your luck to the test. Launch 
                yourself into an exhilarating ride by spinning the vibrant wheel and landing on a variety of obstacles, 
                prizes, and surprises. Are you prepared to take a chance and follow your destiny?</p>
            </div>
         <!---->
        <!-- Modal -->
        <div class="modal" id="spinModal" tabindex="0" aria-labelledby="spinModalLabel" aria-hidden="true">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-body" style="height: 80vh; width: 100vh; background-image:url('assets/images/spiral.jfif')">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="loading-container">
             <!-- Loading screen content -->
            <div class="text">
                 <h1>Loading...</h1>
            </div>
            <div class="bar">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </div>
            </div>

              <div class="spinContainer" style="display: none;">
              <div class="spinBtn">Spin</div>
              <div class="wheel">
              <div class="number number-zero" style="--i:1;--clr:#db7093;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 1"><span>0 token</span></div>
              <div class="number number-zero" style="--i:2;--clr:#20b2aa;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 0"><span>0 token</span></div>
              <div class="number number-one" style="--i:3;--clr:#d63e92;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 1"><span>2 token</span></div>
              <div class="number number-one" style="--i:4;--clr:#daa520;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 0"><span>1 token</span></div>
              <div class="number number-one" style="--i:5;--clr:#ff340f;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 1"><span>3 token</span></div>
              <div class="number number-one" style="--i:6;--clr:#ff7f50;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 0"><span>1 token</span></div>
              <div class="number number-one" style="--i:7;--clr:#3cb371;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 1"><span>0 token</span></div>
              <div class="number number-zero" style="--i:8;--clr:#4169e1;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 0"><span>0 token</span></div>
           </div>
        </div>
        <div id="spinAgainModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>You can spin again after 24 hours have passed since your last spin.</p>
    </div>
</div>
        

             <div id="modalCongrats" class="modal">
            <div class="modal-content">
            <span class="close">&times;</span>
                <p>Congratulations!</p>
            </div>
            <div class="confetti">
                <img src="{{ asset('assets/images/confetti.gif') }}" style="max-width: 130%; height:33rem !important;"/>
            </div>
        </div>

        <!-- Sorry Modal -->
        <div id="modalSorry" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
            <p>Sorry, better luck next time!</p>
        </div>
        </div>
       
              </div>
            </div>
          </div>
        </div>
        <!-- End of Modal -->
            
        <div class="packages" data-bs-toggle="modal" data-bs-target="#findModal">
                <br>
            <img src="{{ asset('assets/images/puzzle.png') }}" alt="Puzzle" height="150">
            <br>
            <h1>Find the Piece</h1>
            <p class="domain">An addictive puzzle-solving adventure game that will send you on a mission to find hidden 
                pieces strewn around captivating landscapes.  Equipped with keen observational abilities and a sharp mind,
                 go out on this fascinating expedition to solve the mysteries that entail. Are you prepared to start your 
                 search for the missing piece?</p>
            </div> 

        <!-- Modal -->
<div class="modal fade" id="findModal" tabindex="-1" aria-labelledby="findModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="height: 80vh; width: 100vh; background-image: url('assets/images/find-bg.png')">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="find-loading">
                    <!-- Loading screen content -->
                    <div class="load-text">
                        <h1 style="color: yellow;">Loading...</h1>
                    </div>
                    <div class="find-bar">
                        <!-- line-bar -->
                        <div class="prog-bar">
                            <div class="progress"></div>
                            <!-- line -->
                        </div>
                    </div>
                </div>
                <div class="search">
                    <!-- Image after loading screen -->
                    <img src="{{ asset('assets/images/find.jfif') }}" style="height: 80vh; width: 100vh;" alt="Your Image">
                </div>
                <!-- Clickable token image -->
                <div class="token-wrapper">
                    <img src="{{ asset('assets/images/token1.png') }}" style="height: 5vh; width: 4vh;" alt="Token Image" class="tokn-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->

<!-- Coin won modal -->
<div class="modal fade" id="toknModal" tabindex="-1" aria-labelledby="toknModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <span class="close">&times;</span>
                Congratulations! You've won 1 coin.
            </div>
        </div>
    </div>
</div>

        

        <div class="packages" data-bs-toggle="modal" data-bs-target="#completeModal">
                <br>
            <img src="{{ asset('assets/images/goal.png') }}" alt="Mission" height="150">
            <br>
            <h1>Complete the Missions</h1>
            <p class="domain">In this action-packed, heart-pounding game, you will take on the role of elite operatives 
                tasked with completing a series of high-stakes missions. Modify your strategy as every mission offers 
                fresh possibilities and challenges. Are you prepared to step up to the plate and demonstrate your abilities
                 in "Complete the Missions"?</p>
            </div> 

            <!-- Modal -->
        <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="completeModalLabel" aria-hidden="true">
          <div class="modal-lg modal-dialog">
            <div class="modal-content"  style="width:85%">
              <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h3 class="text1">Missions</h3>
              <div class="rect">
                <p>Complete your profile (1/4)</p>
                <button class="claim-button disable-btn" style="display: inline-block;">
                    <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                         Claim
                </button>
              </div>
              <div class="rect2">
              <p>Play Games Today</p>
              <button class="claim-button disable-btn">
                    <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                         Claim
              </button>
              </div>
              <div class="rect3">
              <p>Login Today</p>
              <button class="claim-button disable-btn">
                    <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                         Claim
              </button>
              </div>
              <div class="rect4">
              <p>Find Task/Post Task</p>
              <button class="claim-button disable-btn">
                <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                 Claim
              </button>
              </div>
              <div class="rect5">
              <p>Make your first transaction</p>
              <button class="claim-button disable-btn">
                <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                    Claim
              </button>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Modal -->
            
    </div>  
</div>
</main>
<footer id="footer" class="footer">

<div class="footer-legal">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
      <footer class="container">
    <p style="color: white;">&copy; 2024 Crackers Software Solutions. &middot; <a href="#" style="color: white;">Privacy</a> &middot; <a href="#" style="color: white;">Terms</a></p>
</footer>

<div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
  </div>

</div>

<div class="col-md-6">
  <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
    <a href="#" class="github"><i class="bi bi-github"></i></a>
  </div>

</div>

</div>

</div>
</div>


    {{-- START DEVELOPER MODAL--}}


<div class="modal fade" id="modal-sm">
<div class="modal-dialog modal-dialog-centered modal-sm">
<div class="modal-content">
  <div class="modal-header">
      <div class="text-center mb-0">
          <h4 class="modal-title mb-0 pb-0">Chat with Developers</h4>
      </div>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </button>
  </div>
  <div class="modal-body">
      <div class="chat-container">
          <div class="admin">
              <img src="{{ asset('assets/images/admin.png') }}" alt="Admin" class="admin-img rounded-circle">
          </div>
          <div class="chat-bubble">
              <p>Hey there! How can we assist you today?</p>
          </div>
      </div>
      <form id="messageForm">
          <div class="input-group mt-3">
              <input type="text" class="form-control" id="messageInput" placeholder="Type your message...">
              <div class="send-icon">
                  <img src="{{ asset('assets/images/send.png') }}" alt="chat" class="send" width="30" height="30">
              </div>
          </div>
      </form>
  </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->





<div class="chatbox-wrapper">
<div class="chatbox-toggle">
  <i class='bx bx-message-dots'></i>
</div>
<div class="chatbox-message-wrapper">
  <div class="chatbox-message-header">
      <div class="chatbox-message-profile">
          <img src="assets/images/avatar4.png" alt="" class="chatbox-message-image">
          <div>
              <h4 class="chatbox-message-name">TaskSwap Developers</h4>
              <p class="chatbox-message-status">online</p>
          </div>
      </div>
      <div class="chatbox-message-dropdown">
          <i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
          <ul class="chatbox-message-dropdown-menu">
              <li>
                  <a href="#">Search</a>
              </li>
              <li>
                  <a href="#">Report</a>
              </li>
          </ul>
      </div>
  </div>
  <div class="chatbox-message-content">
      <h4 class="chatbox-message-no-message">Hey There! How can we assist you?</h4>
  </div>
  <div class="chatbox-message-bottom">
      <form action="#" class="chatbox-message-form">
          <textarea rows="1" placeholder="Type message..." class="chatbox-message-input"  style= "width:300px"></textarea>
          <button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
      </form>
  </div>
</div>
</div>

    
<script>
         document.addEventListener("DOMContentLoaded", function() {
    // Function to reset the loading screen content
    function resetLoadingScreen() {
        // Show the loading container
        document.querySelector('.loading-container').style.display = 'flex';
        // Hide the spin container
        document.querySelector('.spinContainer').style.display = 'none';
    }

    // Function to show the spin container
    function showSpinContainer() {
        // Hide the loading container
        document.querySelector('.loading-container').style.display = 'none';
        // Show the spin container
        document.querySelector('.spinContainer').style.display = 'block';
    }

    // Add event listener to the modal close button
    document.querySelector('[data-bs-dismiss="modal"]').addEventListener('click', resetLoadingScreen);

    // Add event listener to the modal show event
    document.getElementById('spinModal').addEventListener('shown.bs.modal', function () {
        resetLoadingScreen(); // Reset loading screen when modal is shown
        // Simulate a delay for the loading screen (you can replace this with your actual loading process)
        setTimeout(function() {
            // Hide the loading container after a delay
            document.querySelector('.loading-container').style.display = 'none';
            // Show the spin container after the loading is complete
            document.querySelector('.spinContainer').style.display = 'block';
        }, 5080); // Adjust the delay time as needed (currently set to 6060 milliseconds or 6.06 seconds)
    });

    // Initially reset loading screen
    resetLoadingScreen();
});
// Function to get the current timestamp in milliseconds
function getCurrentTimestamp() {
        return new Date().getTime();
    }
// Function to show the spin again modal
function showSpinAgainModal() {
    document.getElementById("spinAgainModal").style.display = "block";
}

// Function to close the spin again modal
document.querySelector('#spinAgainModal .close').addEventListener('click', function() {
    document.getElementById("spinAgainModal").style.display = "none";
});
// Close the congratulations modal when the user clicks on the close button
document.getElementById("modalCongrats").querySelector('.close').addEventListener('click', function() {
    document.getElementById("modalCongrats").style.display = "none";
});

// Close the sorry modal when the user clicks on the close button
document.getElementById("modalSorry").querySelector('.close').addEventListener('click', function() {
    document.getElementById("modalSorry").style.display = "none";
});

// Reset modals when spinModal is closed
document.getElementById('spinModal').addEventListener('hidden.bs.modal', function () {
    document.getElementById("modalCongrats").style.display = "none";
    document.getElementById("modalSorry").style.display = "none";
});
        </script>
        <script>
        let wheel = document.querySelector('.wheel');
        let spinBtn = document.querySelector('.spinBtn');
        let spanCongrats = document.getElementsByClassName("close")[0];
        let spanSorry = document.getElementsByClassName("close")[1];
        let spinning = false;

        // Function to check if the user can spin based on the last spin time stored in localStorage
function canSpin() {
    const lastSpinTime = localStorage.getItem('lastSpinTime');
    if (!lastSpinTime) return true; // If there's no last spin time, allow spinning
    const currentTime = new Date().getTime();
     /**const twentyFourHours = 24 * 60 * 60 * 1000; // 24 hours in milliseconds
    return currentTime - parseInt(lastSpinTime) >= twentyFourHours; */
   const threeSeconds = 3 * 1000; // 3 seconds in milliseconds
    return currentTime - parseInt(lastSpinTime) >= threeSeconds; 
}

// Inside the spin button click event handler
spinBtn.onclick = function () {
    if (!canSpin()) {
        showSpinAgainModal();
        return;
    }
    // Proceed with spinning logic
    let spinAngle = Math.ceil(Math.random() * 3600);
    wheel.style.transform = "rotate(" + spinAngle + "deg)";
    spinning = true;
    wheel.addEventListener("transitionend", function () {
        let currentRotation = parseInt(wheel.style.transform.replace("rotate(", "").replace("deg)", ""));
        let prizeNumber = Math.floor((currentRotation % 360) / 45) + 1;
        let tokenClass = document.querySelector('.number:nth-child(' + prizeNumber + ')').classList;
        if (tokenClass.contains('number-one')) {
            document.getElementById("modalCongrats").style.display = "block";
        } else if (tokenClass.contains('number-zero')) {
            document.getElementById("modalSorry").style.display = "block";
        }
        spinning = false;
        // Update last spin time in localStorage
        localStorage.setItem('lastSpinTime', new Date().getTime().toString());
    }, { once: true });
};
        // Close the congratulations modal when the user clicks on the close button
spanCongrats.onclick = function() {
    document.getElementById("modalCongrats").style.display = "none";
}

// Close the sorry modal when the user clicks on the close button
spanSorry.onclick = function() {
    document.getElementById("modalSorry").style.display = "none";
}

</script>
<script>
       document.addEventListener("DOMContentLoaded", function() {
    // Function to reset the loading screen content
    function resetLoadingScreen() {
        // Show the loading container
        document.querySelector('.find-loading').style.display = 'flex';
        // Hide the search img
        document.querySelector('.search').style.display = 'none';
        document.querySelector('.token-wrapper').style.display = 'none';
    }

    // Function to show the search img
    function showSearch() {
        // Hide the loading container
        document.querySelector('.find-loading').style.display = 'none';
        // Show the search img
        document.querySelector('.search').style.display = 'block';
        document.querySelector('.token-wrapper').style.display = 'block';
    }

    // Add event listener to the modal show event
    document.getElementById('findModal').addEventListener('shown.bs.modal', function () {
        resetLoadingScreen(); // Reset loading screen when modal is shown
        // Simulate a delay for the loading screen (you can replace this with your actual loading process)
        setTimeout(function() {
            // Hide the loading container after a delay
            document.querySelector('.find-loading').style.display = 'none';
            // Show the search image after the loading is complete
            document.querySelector('.search').style.display = 'block';
            document.querySelector('.token-wrapper').style.display = 'block';
        }, 5080); // Adjust the delay time as needed (currently set to 5080 milliseconds)
    });

    // Initially reset loading screen
    resetLoadingScreen();

    // Add event listener to the token image to show the toknModal
    document.querySelector('.token-wrapper').addEventListener('click', function(event) {
        event.stopPropagation(); // Stop event propagation to prevent closing findModal
        $('#toknModal').modal('show'); // Show the toknModal
    });

    // Close the token modal when the user clicks on the close button
    document.getElementById("toknModal").querySelector('.close').addEventListener('click', function() {
        $('#toknModal').modal('hide'); // Hide the toknModal
    });
}); 

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="./plugins/daterangepicker/daterangepicker.js"></script>
<script src="./plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

{{-- CHOICES MODAL END --}}

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/pages/dashboard.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/chatbox.js"></script>
<script src="assets/js/citizen_dashboard.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script>
// Minimize the modal
$('#modalRelatedContent').on('show.bs.modal', function () {
  $(this).toggleClass('minimize');
});
</script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdown1() {
document.getElementById("myDropdown1").classList.toggle("show");
}
function dropdown2() {
document.getElementById("myDropdown2").classList.toggle("show");
}
//Date range picker
$('#reservation').daterangepicker()
//Date range as a button
  $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
  )


</script>
</body>
</html>
