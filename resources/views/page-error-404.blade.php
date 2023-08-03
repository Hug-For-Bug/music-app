<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Error - Page Not Found</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- Add custom CSS file if needed -->
    <!-- <link href="{{ asset('path-to-custom-css.css') }}" rel="stylesheet"> -->
    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}" defer></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/custom.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/deznav-init.js') }}" defer></script>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
                        <p>You may have mistyped the address or the page may have moved.</p>
                        <div>
                            <!-- Update the link URL for the home page if needed -->
                            <a class="btn btn-primary" href="{{ url('/') }}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
