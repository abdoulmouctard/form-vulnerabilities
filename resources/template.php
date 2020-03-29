<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gouvernance & Gestion de Risques</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <div class="container">
      <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/b/ba/UPEC-logo.svg/1200px-UPEC-logo.svg.png" alt="" />
      <h1>
        Gouvernance & Gestion de Risques
        <span class="status danger">avec failles</span>
      </h1>
    </div>
  </header>
  <main>
    <form class="container" action="/index.php" method="post">
      <div class="group-form-field">
        <h3>Your informations</h3>
        <div class="form-field">
          <label for="fullname">
            Full Name <span class="start">*</span>
          </label>
          <div class="input">
            <input id="fullname" name="fullname" type="text" placeholder="Enter your name here" autocomplete="none" required value="DIALLO" />
          </div>
        </div>

        <div class="form-field">
          <label for="email">Email <span class="start">*</span></label>
          <div class="input">
            <input id="email" name="email" type="email" placeholder="Enter your email here" autocomplete="none" required value="abdoulmouctard@gmail.com" />
          </div>
        </div>
      </div>

      <div class="group-form-field">
        <h3>investigation on the pendemia of CORONAVIRUS</h3>

        <div class="form-field">
          <label for="country">Country <span class="start">*</span></label>
          <div class="input">
            <input id="country" name="country" type="text" placeholder="What is your country ?" autocomplete="none" required value="France" />
          </div>
        </div>
        <div class="form-field">
          <label>
            Is your country on lockdown?<span class="start">*</span>
          </label>
          <div class="input multiple">
            <div class="radio-input">
              <input type="radio" required name="lockdown" autocomplete="none" id="yes-lockdown" checked />
              <label for="yes-lockdown">YES</label>
            </div>
            <div class="radio-input">
              <input type="radio" required name="lockdown" autocomplete="none" id="no-lockdown" />
              <label for="no-lockdown"> NO </label>
            </div>
          </div>
        </div>
        <div class="form-field">
          <label for="number-of-deaths-per-day">
            Number of deaths per day<span class="start">*</span>
          </label>
          <div class="input">
            <input id="number-of-deaths-per-day" name="deaths_per_day" type="number" placeholder="What is the number of deaths per day ?" autocomplete="none" required value="10" />
          </div>
        </div>
        <div class="form-field">
          <label for="number-of-deaths">
            Number of deaths<span class="start">*</span>
          </label>
          <div class="input">
            <input id="number-of-deaths" name="total_deaths" type="number" placeholder="Number of deaths to this date ?" autocomplete="none" required value="100" />
          </div>
        </div>
        <div class="form-field">
          <label for="comment">
            Any Comment ?
          </label>
          <div class="input">
            <textarea name="comment" value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iste at totam dignissimos laborum, nisi amet error mollitia in architecto, illum voluptatem perspiciatis officiis! Sit molestias cumque quidem dolore culpa." id="comment" rows="5" placeholder="Put your comment here" autocomplete="none"></textarea>
          </div>
        </div>
      </div>

      <div class="form-field submit-buttons">
        <button type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
          Submit Form
        </button>
        <button name="submited" type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
          Submit Form
        </button>
      </div>
    </form>
    <div class="container">
      <?= $users ?>
      <?= $inventories ?>
    </div>
  </main>
  <footer>
    ¢
  </footer>
</body>
<script></script>

</html>