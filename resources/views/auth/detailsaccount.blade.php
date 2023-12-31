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
  <section class="vh-100 vh-lg-100" style="background-color: #eee;">
    <div class="container py-2 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-18 col-xl-14"> <!-- Modificado col-lg-18 y col-xl-14 -->
          <div class="card rounded-3">
            <div class="card-body p-4">

              <h4 class="text-center my-3 pb-3">MIS TAREAS</h4>

              <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                <div class="col-12">
                  <div class="form-outline">
                    <input type="text" id="form1" class="form-control" />
                    <label class="form-label" for="form1">Enter a task here</label>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-warning">Get tasks</button>
                </div>
              </form>

              <table class="table mb-4">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Todo item</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Buy groceries for next week</td>
                    <td>In progress</td>
                    <td>
                      <button type="submit" class="btn btn-danger">Delete</button>
                      <button type="submit" class="btn btn-success ms-1">Finished</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Renew car insurance</td>
                    <td>In progress</td>
                    <td>
                      <button type="submit" class="btn btn-danger">Delete</button>
                      <button type="submit" class="btn btn-success ms-1">Finished</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Sign up for online course</td>
                    <td>In progress</td>
                    <td>
                      <button type="submit" class="btn btn-danger">Delete</button>
                      <button type="submit" class="btn btn-success ms-1">Finished</button>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>