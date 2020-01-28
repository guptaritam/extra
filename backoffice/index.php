<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In | Bingo</title>
    <meta name="description" content="Bingo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link rel="stylesheet" href="../administrator/css/neat.minc619.css?v=1.0">
  </head>
  <body style="background-image: url(img/hui.jpg);">
    <div style="padding: 20px;"></div>
    <div class="o-page o-page--center">
      <div class="o-page__card">
        <div class="c-card c-card--center">
          <img src="../administrator/img/bingo.png" alt="Bingo">
          <div style="padding: 10px"></div>
          <form action="login_redirect.php" method="POST">
            <div class="c-field">
              <label class="c-field__label">Email Address</label>
              <input class="c-input u-mb-small" type="email" name="user" placeholder="e.g. adam@sandler.com" required>
            </div>
            
            <div class="c-field">
              <label class="c-field__label">Password</label>
              <input class="c-input u-mb-small" type="password" name="pass" placeholder="Numbers, Pharagraphs Only" required>
              <input type="hidden" name="role" value="Back Office" />
            </div>

            <button type="submit" class="c-btn c-btn--fullwidth c-btn--info">Login</button>
          </form>
          <div style="padding: 10px"></div>
        </div>
      </div>
    </div>
    <script src="../administrator/js/neat.minc619.js?v=1.0"></script>
  </body>
</html>