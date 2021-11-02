<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BlackTech Registration Page</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="styles.scss" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Convergence&family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <h1>BlackTech Registration Page</h1>

    <div class="container">
      <div class="div-one">
        <form action="script.php" class="form" method="POST">
          <div class="form-label">
            <label>First Name</label>
            <input type="text" name="firstname" />
          </div>
          <div class="form-label">
            <label>Last Name</label>
            <input type="text" name="lastname" />
          </div>

          <div class="form-label">
            <label for="">Email</label>
            <input type="email" name="email" />
          </div>
          <div class="form-label">
            <label for="">Phone Number</label>
            <input type="text" name="phone" />
          </div>
          <div class="form-label">
            <label for="">Address</label>
            <textarea name="address" id="" cols="20" rows="3"></textarea>
          </div>
          <input type="submit" value="Submit Form" class="button" />
        </form>
      </div>
      <div class="div-two">
        <div class="div-two-container">
          <div class="div2-form-label">
            <input type="search" placeholder="Search contact..." />
            <button class="button">Click!</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>