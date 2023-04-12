

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="row mt-4">
  <div class="col-lg-6 m-auto">
    <div class="card border-light mb-3">
      <div class="card-header bg-success border-primary">Regestation</div>
      <div class="card-body">
        <form action="reg_post.php" method="post">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Please enter Full name">
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Please enter email">
          </div>

          <div class="mb-3">
                <div class="g-recaptcha" data-sitekey="6LcQvV4lAAAAAHitqszU9TtZl4g8gW3pVRLCHfak"></div>
          </div>

          <button type="submit" name="submit" class="btn btn-primary m-auto">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>




