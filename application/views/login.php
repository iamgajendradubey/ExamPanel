<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>
    <title>Login Screen using bootstrap</title>
    <style>
      body {
        background: rgb(146, 146, 146);
      }
    </style>
  </head>
  <body>
    <div
      class="d-flex align-items-center justify-content-center align-items-center"
    >
      <div
        class="border col-md-4 align-middle my-5 mt-3 bg-light"
        style="box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.057)"
      >
        <div>
          <h1 class="text-center"><b>Sign in</b></h1>
          <p class="text-center text-muted">
            Don't have an account?
            <a href="#">Click here to sign Up</a>
          </p>
        </div>
        <div>
          <form action="" method="post">
            <input type="text" placeholder="Username" name="username" class="form-control" />
            <div class="input-group my-3">
              <input
                type="password"
                placeholder="Enter new password"
                class="form-control"
                name="password"
              />
              <span class="input-group-text">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
              </span>
            </div>
            <div class="d-flex justify-content-between" onclick="this">
              <div class="form-check text-left mx-0">
                <input type="checkbox" class="form-check-input" />
                <label for="checkbox" class="form-check-label">
                  Remember me ?
                </label>
              </div>
              <div>
                <a href="#" class="text-right">Forgot Password ?</a>
              </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100 my-5">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
