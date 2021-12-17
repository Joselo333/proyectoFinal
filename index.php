<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link href="boot/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">


    <section class="vh-100" style="background-color: #ffda9e;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img 
                src="img/comida2.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;" 
                
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="validar.php" method="get">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="img/icono_pestaña.png" width="32" height="32"> 
                    <span class="h1 fw-bold mb-0">MarketPlace</span>
                  </div>

                  <h5 class="fw-bolder mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión</h5>

                  <div class="form-outline mb-4">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"/>
                    <label class="form-label" for="form2Example17">Correo electrónico</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="123456789" />
                    <label class="form-label" for="form2Example27">Contraseña</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit"></input>
                  </div>

                  <a class="small text-muted" href="#!">¿Olvidaste contraseña?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes cuenta? <a href="#!" style="color: #393f81;">Registrate</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
  </body>
</html>

