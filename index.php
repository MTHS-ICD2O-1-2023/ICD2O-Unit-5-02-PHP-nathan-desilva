<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Number Guessing Game, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Nathan De Silva" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Positive or Negative #, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Positive or Negative, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/positive_negative.jpg" alt="positive_negative" width="250" />
      </div>
      <h3>Select Positive or Negative.
      </h3>
      <div class="page-content-php">
        <form action="answer.php" method="POST">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="positive">
            <input type="radio" id="positive" class="mdl-radio__button" name="options" value="1" checked>
            <span class="mdl-radio__label">Positive</span>
          </label>
          <br />
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="negative">
            <input type="radio" id="negative" class="mdl-radio__button" name="options" value="1">
            <span class="mdl-radio__label">Negative</span>
          </label>
          <br />
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
            Generate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
