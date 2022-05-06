<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col md-8">
            <form method="post">
                <label for="username" class="form-label">Your Username</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" id="username"
                           aria-describedby="basic-addon3">
                </div>
                <label for="password" class="form-label">Your Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password"
                           aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>