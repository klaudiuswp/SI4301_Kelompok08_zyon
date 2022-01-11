<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Zyon Indonesia</title>
    <meta content="Dari Zyon, Untuk kamu" name="description" />
    <meta content="psychology, Consultant, Helper, Cares" name="keywords" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO TAGS -->
    <meta name="author" content="RYG, Ditra, Kelompok08" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="google" content="nositelinkssearchbox" />

    <!-- Favicons -->
    <link href="home_assets/img/favicon.png" rel="icon" />
    <link href="home_assets/img/favicon.png" rel="apple-touch-icon" />

    <!-- Vendor CSS Files -->
    <link href="home_assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="home_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="home_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="home_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="home_assets/css/style.css">

</head>

<body>
    
    @include('home.header')

    @yield('container')

    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="home_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="home_assets/js/main.js"></script>

<!-- JS -->
<script>
    const isNumericInput = (event) => {
        const key = event.keyCode;
        return ((key >= 48 && key <= 57) || // Allow number line
            (key >= 96 && key <= 105) // Allow number pad
        );
    };

    const isModifierKey = (event) => {
        const key = event.keyCode;
        return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
            (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
            (key > 36 && key < 41) || // Allow left, up, right, down
            (
                // Allow Ctrl/Command + A,C,V,X,Z
                (event.ctrlKey === true || event.metaKey === true) &&
                (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
            )
    };

    const enforceFormat = (event) => {
        // Input must be of a valid number format or a modifier key, and not longer than ten digits
        if (!isNumericInput(event) && !isModifierKey(event)) {
            event.preventDefault();
        }
    };

    const formatToPhone = (event) => {
        if (isModifierKey(event)) {
            return;
        }

        const input = event.target.value.replace(/\D/g, '').substring(0, 13); // First ten digits of input only
        const areaCode = input.substring(0, 4);
        const middle = input.substring(4, 8);
        const last = input.substring(8, 13);

        if (input.length > 7) {
            event.target.value = `(${areaCode}) ${middle}-${last}`;
        } else if (input.length > 4) {
            event.target.value = `(${areaCode}) ${middle}`;
        } else if (input.length > 0) {
            event.target.value = `(${areaCode}`;
        }
    };

    const inputElement = document.getElementById('phoneNumber');
    inputElement.addEventListener('keydown', enforceFormat);
    inputElement.addEventListener('keyup', formatToPhone);
</script>
    

</body>

</html>