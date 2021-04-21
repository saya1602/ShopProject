<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportIdea</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>
    <style>
        .head {
            color: red;
        }
        .custom-login {
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img {
            height: 400px !important;
        } 
        .custom-product {
            height: 600px
        }
        .items {
            /* width: 50vw; */
            margin: auto;
            
        }
        .inner-items {
            display: flex;
            justify-content: center;
        }
        .slider-text {
            background-color: #35443585 !important  
        }
        .trending-image{
            height: 100px;
        }
        .trening-item{
            float: left;
            width: 25%;
        }
        .trending-wrapper{
            margin: 30px;
        }
        .detail-img{
            height: 200px;
        }
        .search-box{
            width: 500px !important
        }
        .cart-list-devider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px
        }

/* Contacts */
        
        #contacts {
            min-height: 100vh;
            color: #523881;
            line-height: 1.6;
            padding-top: 100px;
        }

        .contacts__container {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
            padding: 1em;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        .wrapper {
            box-shadow: 0 0 20px 0 rgba(72, 94, 116, .7);
        }

        .wrapper > * {
            padding: 1em;
        }

        .company__info {
            background: #bdaada;
        }

        .company__info h3, .company__info ul {
            text-align: center;
            margin-bottom: 15px;
        }

        .contact {
            background-color: #e1d8ee;
        }

        .contact form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        .contact form label {
            display: block;
        }

        .contact form p {
            margin-right: 20px;
        }

        .contact form .full {
            grid-column: 1/3;
        }

        .contact form button, .contact form input, .contact form textarea {
            width: 100%;
            padding: 1em;
            border: 1px solid #523881;
            background-color: #d6cae8;
        }

        .contact form button {
            background: #4e799c;
            border: 0;
            color: #fff;
            width: 200px;
            text-transform: uppercase;

        }

        .contact form button:hover, .contact form:focus {
            background: #92bde7;
            color: rgb(50, 68, 107);
            font-weight: 700;
            outline: 0;
            cursor: pointer;
            transition: background-color .7s ease-out;
        }

/* Footer */

        .copyright {
            padding: 20px 0;
            margin-bottom: 0;
            background-color: #BCAD8E;
        }

        .copyright__text {
            text-align: center;
            font-size: 14px;
            line-height: 1.5;
            color: rgba(84, 63, 23);
        }

        .copyright__text span {
            color: rgba(84, 63, 23, .5);
        }
        
        .footer {
            background-color: #E9E3D7;
        }

        .footer__inner {
            display: flex;
            flex-wrap: wrap;
            padding: 70px 20px;
        }

        .footer__block {
            width: 33.33333%;
            padding: 0 25px;

            text-align: center;
        }

        .footer__title {
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: 700;
            color: #543F17;
            text-transform: uppercase;
        }

        .footer__address {
            font-size: 14px;
            line-height: 1.5;
            font-style: normal;
            color: rgba(84, 63, 23, .5);
        }

        .footer__text {
            font-size: 14px;
            line-height: 1.5;
            color: rgba(84, 63, 23, .5);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;  
        }
    </style>

</html>



<script type="text/javascript"> 

  $(document).on('click', 'ul li', function() {
      $(this).addClass('active').siblings().removeClass('active');
  })

</script>