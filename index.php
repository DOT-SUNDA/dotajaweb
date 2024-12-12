<?php
$data = json_decode(file_get_contents('data.json'), true);
$link = $data['link'];
$lastUpdated = $data['last_updated'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Email For Cloudsigma</title>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="Free Email For Cloudsigma">
    <meta property="og:description" content="If anyone buys and sells this domain, contact us!!!">
    <meta property="og:image" content="https://dotaja.biz.id/dotaja.jpg">
    <meta property="og:url" content="https://dotaja.biz.id">
    <meta property="og:type" content="website">
<style>
  body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background: url('https://dotaja.biz.id/dotaja.gif') no-repeat center center fixed;
            background-size: cover;
        }
.background-blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://dotaja.biz.id/dotaja.gif') no-repeat center center fixed;
            background-size: cover;
            filter: blur(2px); /* Menambahkan blur */
            z-index: -1; /* Supaya ada di belakang konten */
        }

header {
    background-color: #201E43;
    padding: 10px ;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    box-sizing: border-box;
    z-index: 1000;
    font-family: 'Ubuntu';
}

header h2 {
    margin: 0;
    font-size: 1.5em;
    color: #EEEEEE; /* Ensure text color is white */
}

.admin-button {
    background-color: #134B70;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    font-size: 1em;
    font-family: 'Ubuntu';
}

.admin-button:hover {
    background-color: #508C9B;
}

footer {
    background-color: #201E43;
    color: white;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    font-family: 'Ubuntu';
}
footer p {
    color: white;
}

.content {
    padding: 80px 20px 60px;
    min-height: calc(100vh - 140px);
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.7);
    flex-direction: column;
    text-align: center;
    font-family: 'Ubuntu';
}

.container {
    max-width: 1200px;
    width: 100%;
}
.container h5 {
  color: yellow;
}

h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: white;
}

p {
    font-size: 1.2em;
    color: white; /* Ensure text color is white */
    line-height: 1.5;
}

button {
    background-color: #134B70;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    font-size: 1em;
    margin-top: 20px;
    border-radius: 5px;
    font-family: 'Ubuntu';
}

button:hover {
    background-color: #508C9B;
}

.update-info {
    margin-top: 40px;
    font-size: 0.9em;
    color: white;
}

/* Pop-up Style */
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    padding: 20px;
    background-color: #201E43;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    z-index: 1100;
    border-radius: 8px;
    text-align: center;
    font-family: 'Ubuntu';
}

.popup h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: yellow;
}

.popup p {
    font-size: 1em;
    color: #EEEEEE;
    margin-bottom: 20px;
}

.popup button {
    margin: 5px;
    padding: 8px 16px;
    font-size: 1em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-yes {
    background-color: #007bff;
    color: white;
}

.btn-no {
    background-color: #ccc;
    color: #333;
}

.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}

@media (max-width: 768px) {
    header {
        padding: 10px 15px;
    }

    h1 {
        font-size: 2em;
    }

    p {
        font-size: 1em;
    }

    button {
        font-size: 1em;
        padding: 8px 16px;
    }

    .popup {
        width: 90%;
    }
}
  .tutorial-button {
    background-color: #28A745;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    font-size: 1em;
    margin-top: 20px;
    border-radius: 5px;
    font-family: 'Ubuntu';
    display: inline-block;
  }

  .tutorial-button:hover {
    background-color: #218838;
  }

  /* Pop-up Style */
  .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    padding: 20px;
    background-color: #201E43;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    z-index: 1100;
    border-radius: 8px;
    text-align: center;
    font-family: 'Ubuntu';
  }

  .popup h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: yellow;
  }

  .popup p {
    font-size: 1em;
    color: #EEEEEE;
    margin-bottom: 20px;
  }

  .popup button {
    margin: 5px;
    padding: 8px 16px;
    font-size: 1em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn-yes {
    background-color: #007bff;
    color: white;
  }

  .btn-no {
    background-color: #ccc;
    color: #333;
  }

  .popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
  }

  @media (max-width: 768px) {
    header {
        padding: 10px 15px;
    }

    h1 {
        font-size: 2em;
    }

    p {
        font-size: 1em;
    }

    button {
        font-size: 1em;
        padding: 8px 16px;
    }

    .popup {
        width: 90%;
    }
  }

  /* Additional styles for GIF */
  .gif-container {
    text-align: center;
    margin-top: 20px;
  }

  .gif-container img {
    width: 100%;
    border-radius: 8px;
  }
</style>
</head>
<body>
      <div class="background-blur"></div>
    <header>
        <h2>Dot Aja</h2>
        <a href="admin.php" class="admin-button">Admin Only</a>
    </header>

    <div class="content">
        <div class="container">
            <h1>Free Email For cloudsigma</h1>
            <p>This Is A Free Email Domain Provider<br>To Claim Free Trial Cloudsigma</p>
            <h5>This Contains Shortlink,<br>If You Don’t Want to Be Troubled, Don’t Come Here!!!</h5>
            <button onclick="showPopup()">Get Domain</button>
            <!-- New Tutorial Button -->
            <button onclick="showTutorial()">Tutorial</button>
            <p>
            <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4891408,4,107,170,20,00000010']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4891408&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Dot Aja. All rights reserved.</p>
    </footer>

    <!-- Popup for Disclaimer -->
    <div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup" id="popup">
        <h2>Disclaimer</h2>
        <p>Do Not Recommend Opening Or Clicking Other Links. Only The Official Link</p>
        <p>IF YOU SEE ANY RESELLING, CONTACT US!!!</p>
        <button class="btn-yes" onclick="proceed()">Get Domain</button>
    </div>

    <!-- Popup for Tutorial -->
    <div class="popup-overlay" id="tutorial-popup-overlay"></div>
    <div class="popup" id="tutorial-popup">
        <h2>Tutorial</h2>
        <div class="gif-container">
            <img src="https://media.giphy.com/media/3o7aD8iPQU1qc8RJsI/giphy.gif" alt="Tutorial GIF">
        </div>
        <button onclick="closeTutorial()">Close</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const popupOverlay = document.getElementById('popup-overlay');
    const popup = document.getElementById('popup');
    const tutorialPopupOverlay = document.getElementById('tutorial-popup-overlay');
    const tutorialPopup = document.getElementById('tutorial-popup');

    function showPopup(popupElement, overlayElement) {
        popupElement.style.display = 'block';
        overlayElement.style.display = 'block';
    }

    function closePopup(popupElement, overlayElement) {
        popupElement.style.display = 'none';
        overlayElement.style.display = 'none';
    }

    document.querySelector('button[onclick="showPopup()"]').addEventListener('click', function () {
        showPopup(popup, popupOverlay);
    });

    document.querySelector('button[onclick="showTutorial()"]').addEventListener('click', function () {
        showPopup(tutorialPopup, tutorialPopupOverlay);
    });

    popupOverlay.addEventListener('click', function () {
        closePopup(popup, popupOverlay);
    });

    tutorialPopupOverlay.addEventListener('click', function () {
        closePopup(tutorialPopup, tutorialPopupOverlay);
    });

    document.querySelector('.btn-yes').addEventListener('click', function () {
        closePopup(popup, popupOverlay);
        window.open("update.php", "_blank");
    });

    document.querySelector('#tutorial-popup button').addEventListener('click', function () {
        closePopup(tutorialPopup, tutorialPopupOverlay);
    });
});
    </script>
</body>
</html>
