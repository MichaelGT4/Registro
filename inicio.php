<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <title></title>
    <link rel="stylesheet" href="./librerias/bootstrap4/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


</head>
<body>


<?php include "header.php"; ?>

<!-- Page Content -->
<div id="content" class="bg-gris w-100">

      <section class="bg-white mt-2 mx-2 py-3">
          <div class="container">
              <div class="row">
                  <div class="col-lg-9 col-md-8">
                    <h1 class="font-weight-bold mb-0">Dashboard</h1>
                    <p class="lead text-muted">Libros</p>
                  </div>
              </div>
          </div>
      </section>

      <section class="bg-mix mx-2 py-3">
        <div class="container">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Total Libros</h5>
                                <h2 class="font-weight-bold">0</h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                        

                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Total Descargas</h5>
                                <h2 class="font-weight-bold">0</h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

 
</div>

</div>
</div>
    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4"></h1>
        <p></p>
    </div>
    <!-- /.container -->


</section>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-center m-3">Libros</h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 50px 20px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-capitalize">Total</div>
				<div class="full-box tile-icon text-center"><i class="zmdi zmdi-account"></i></div>
				<div class="full-box tile-number text-titles">
                    <p class="full-box">0</p><small>Registrados</small>
				</div>
            </article>
            
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-capitalize">Descargados</div>
				<div class="full-box tile-icon text-center"><i class="zmdi zmdi-male-alt"></i></div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p><small>Registrados</small>
				</div>
            </article>


		</div>
	</section>


<?php include "footer.php"; ?>

</body>
</html>