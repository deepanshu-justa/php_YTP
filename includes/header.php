<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/6e8d342420.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;
            font-weight: 700;
            /* font-family: 'Poppins', sans-serif; */
        }

        section {
            margin-bottom: 8rem;
        }

        input[name="phone"]::-webkit-inner-spin-button,
input[name="phone"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[name="phone"] {
  -moz-appearance: textfield;
  appearance: textfield;
}
    </style>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':

                    new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =

                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-PJMMH86');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <div class="bg-success text-white">
        <div class="container d-none d-md-flex justify-content-between pt-3">
            <p><i>Registered Under Tourism Department of Himachal Pradesh</i></p>
            <p><b>Email:</b> info@yourtravellingpartner.com &nbsp; <b>Phone:</b> 70181-44110</p>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top border-3 border-bottom border-success">
        <div class="container">
            <a class="navbar-brand fs-2 h-font mx-auto" href="/">
                <span class="text-primary">Y</span>our <span class="text-primary">T</span>ravelling <span class="text-primary">P</span>artner</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/packages">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>