<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>


      <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">

              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                    <form action="/login" method="POST">
                      @csrf
                      <div class="form-floating">
                        <input type="email" name="email" id="email" autofocus required class="form-control @error('email') is-invalid
                        @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="password" name="password" id="password" required class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>


                      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register</a></small>
                  </main>
            </div>
        </div>


      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
