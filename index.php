<?php include('funciones.php') ?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="container my-3">

    <div class="card">
        <div class="card-header">
            Lista de Tareas
        </div>
        <div class="card-body">
            <form action="" method="post">

                <div class="mb-3">
                  <label for="tarea" class="form-label">Tarea</label>
                  <input type="text"
                    class="form-control" name="tarea" id="tarea" aria-describedby="helpId" placeholder="Escriba su Tarea">
                </div>
                <div class="d-grid gap-2 my-3">
                  <button type="submit" name="agregartarea" id="agregartarea" class="btn btn-primary">Button</button>
                </div>
            </form>
            <div class="list-group">
              <?php foreach($tareas as $tarea){ ?>
                <form action="" method="post">
                  <input type="hidden" name="id" id="id" value=<?php echo $tarea['id'] ?>>
                  <label class="list-group-item ">
                <input class="form-check-input me-1" name="estado" onChange="this.form.submit()" type="checkbox" value="<?php echo $tarea['estado'] ?>" <?php echo ($tarea['estado'] == 1 )?'checked':''?>>
                <span class="<?php echo ($tarea['estado'] == 1 )?'text-decoration-line-through':'text-decoration-none'?>"><?php echo $tarea['nombre'] ?></span>
                <a href="?id=<?php echo $tarea['id'] ?>">
                <span class="badge bg-danger badge-pill">X</span>
                </a>
            
              </label>
                </form>
              <?php } ;?>
              </div>
        </div>
        <div class="card-footer text-muted">
          
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