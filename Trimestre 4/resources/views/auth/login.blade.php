<!doctype html>
<html lang="en">

<head id="header">
  <title>login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('css/styleLogin.css') }}" rel="stylesheet">

</head>

<body>
    <header id="header">
            <div class="logo">
                <img src="{{ asset('Iconos/image-removebg-preview.png')}}" class="img-fluid" alt="Logo empresa">
               
            </div>

    </header>

    
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                      
                        <div class="card-body">

                            <form action="" method="post">
                              @csrf
              
                                <div class="form-outline mb-4"> 
                              
                                  <div class="text-center">
                                    <h2>CLIENTE</h2>
                                    <img id="funcionarioIcono"src="{{ asset('Iconos/funcionarioIcono.jpg') }}" class="rounded" alt="...">
                                  </div>
                                  

                                   <label class="form-label" for="form2Example11">Username</label>
                                  <input type="email" name="email" id="form2Example11" class="form-control"
                                    placeholder="Phone number or email address" />
                                
                                </div>
              
                                <div class="form-outline mb-4">
                                  <label class="form-label" for="form2Example22">Password</label>
                                  <input type="password" id="form2Example22" class="form-control" />
                                  
                                </div>
              
                                <div class="text-center pt-1 mb-5 pb-1">
                                  <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                    in</button>
                                  
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1"><a class="text-muted" href="#!">Forgot password?</a></div>
              
                                <div class="d-flex align-items-center justify-content-center pb-4">
                                  
                                  <p class="mb-0 me-2">Don't have an account?</p>
                                  <button type="button" class="btn btn-outline-danger">Create new</button>
                                </div>
              
                              </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
    </main>
    
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>