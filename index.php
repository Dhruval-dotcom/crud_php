<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>How to Align Responsive Image in Center in Bootstrap</title>

</head>

<body>
    <div>
        <div class="row">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <!-- Form -->
                <form id="insert">
                    <h1>Form</h1>
                    <p class="description">
                        A tutorial.
                    </p>
                    <!-- Input fields -->
                    <div class="form-group">
                        <label for="username">Name:</label>
                        <input type="text" class="form-control username" placeholder="Name" id="name" name="name" />
                    </div>
                    <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="text" class="form-control username" placeholder="Email" name="email" id="email"/>
                    </div>
                    <div class="form-group d-flex">
                        <label for="password">Domain of interest:</label>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="php" name="check[]" class="custom-control-input"
                                id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">PHP</label>
                            <input type="checkbox" value="java" name="check[]" class="custom-control-input"
                                id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">java</label>
                            <input type="checkbox" value="js" name="check[]" class="custom-control-input"
                                id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Js</label>
                        </div>

                    </div>
                    <input type="file" name="file[]" multiple><br>
                    <input type="text" id="idrow" name="id" hidden>
                    <button type="submit" id="submit" class="primary">
                        Submit
                    </button>
                </form>
                <!-- Form end -->
            </div>
        </div>
    </div>
    
    <div id="main-content">
    </div>
   
    <div id="targetLayer"></div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="index.js"></script>

</body>

</html>