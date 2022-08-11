<!DOCTYPE html>
<html>
<head>
    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet" />
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset(' lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset(' lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />
    <style>
        @font-face { font-family: AlongSans; src: url('../fonts/AlongSansExtraBold.ttf'); }
        @font-face { font-family: AlongSans; src: url('../fonts/AlongSansLight.ttf'); }
        @font-face { font-family: AlongSans; src: url('../fonts/AlongSansSemiBold.ttf'); }
        @font-face { font-family: AlongSans; src: url('../fonts/AlongSansThin.ttf'); }
        @font-face { font-family: AlongSans; src: url('../fonts/AlongsansMedium.ttf'); }



        @font-face {
            font-family: 'AlongSans';
            src: url('../fonts/Alongsans.ttf') format('truetype');
        }

        @font-face {
            font-family: 'AlongSans';
            src: url('../fonts/AlongSansThin.ttf') format('truetype');
            font-weight: 100;
        }


        @font-face {
            font-family: 'AlongSans';
            src: url('../fonts/AlongSansLight.ttf') format('truetype');
            font-weight: 300;
        }

        @font-face {
            font-family: 'AlongSans';
            src: url('../fonts/AlongsansMedium.ttf') format('truetype');
            font-weight: 500;
        }

        @font-face {
            font-family: 'AlongSans';
            src: url('../fonts/AlongSansSemiBold.ttf') format('truetype');
            font-weight: 600;
        }

        @font-face {
            font-family: 'AlongSans';
            src: url('../fonts/AlongSansExtraBold.ttf') format('truetype');
            font-weight: 800;
        }

        .social-link {
            font-size: 18px;
            display: inline-block;
            /* background: #007bff; */
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }
        #subscribe input[type="email"] {
            border: 0;
            padding: 6px 8px;
            max-width: 65%;
        }

        #subscribe input[type="submit"] {
            background: linear-gradient(
                39deg,
                #8639b9 -76%,
                #682696 -76%,
                #692594 -76%,
                #93246d -62%,
                #b6234c -48%,
                #d12233 -34%,
                #e42221 -19%,
                #f02216 -4%,
                #f42213 11%,
                #f8b04a 98%
            );
            border: 0;
            max-width: 35%;
            padding: 6px 0;
            text-align: center;
            color: #fff;
            transition: 0.3s;
            cursor: pointer;
        }

        #subscribe input[type="submit"]:hover {
            background: linear-gradient(
                27deg,
                #8639b9 -76%,
                #682696 -76%,
                #692594 -76%,
                #93246d -62%,
                #b6234c -48%,
                #d12233 -34%,
                #e42221 -19%,
                #f02216 -4%,
                #f42213 11%,
                #f8b04a 98%
            );
        }
    </style>
</head>
<footer style="background: #000;">
    <div class="xl:ml-48 ml-0 p-8 grid grid-cols-1 md:grid-cols-2 lg-grid-cols-4 xl:grid-cols-5">
        <div>
            <h1 style="font-size: 70px" class="text-white font-bold">bitapps</h1>
            <p class="text-red-100 mt-6">
                BitApps Technology can put together complete teams of engineers, developers, and other experts to see a
                project through from start to finish. Our main goal is to provide clever solutions that will help the
                business function smoothly in the future.</p>
        </div>
        <div class="md:ml-20 mt-7">
            <h1 class="uppercase text-white font-bold">USEFUL LINKS</h1>
            <ul class="mt-6">
                <li class="mt-5"><a class="text-white" href="https://bitappstech.com/">Home</a></li>
                <li class="mt-5"><a class="text-white" href="https://bitappstech.com/#about">About us</a></li>
                <li class="mt-5"><a class="text-white" href="https://bitappstech.com/#services">Services</a></li>
                <li class="mt-5"><a class="text-white" href="https://bitappstech.com/#portfolio">Portfolio</a></li>
                <li class="mt-5"><a class="text-white" href="https://bitappstech.com/#contact">Contact</a></li>
            </ul>
        </div>
        <div class="mt-7">
            <h1 class="uppercase text-white font-bold">CONTACT US</h1>
            <ul class="mt-6">
                <li class="mt-5 text-white">Cape Verde St -
                    Salfaz Building 5th Floor <br>
                    Addis Ababa, Ethiopia
                </li>
                <li class="mt-5 text-white">phone: 251 90 946 5857 | +251 91 0990147</li>
                <li class="mt-5 text-white">Email: info@bitappstech.com</li>
            </ul>
            <div class="flex mt-7">
                <a  href="#" class="twitter social-link"><i class="fa fa-twitter"></i></a>
                <a href="https://t.me/bitApps" class="telegram social-link" target="_blank"><i class="fa fa-telegram"></i></a>
                <a href="https://www.facebook.com/bitappstech" class="social-link facebook" target="_blank"
                ><i class="fa fa-facebook"></i
                    ></a>
                <a href="https://www.instagram.com/bitapps.tech/" class="social-link instagram" target="_blank"
                ><i class="fa fa-instagram"></i
                    ></a>
                <a href="https://www.linkedin.com/company/bitappstech" class="social-link linkedin" target="_blank"
                ><i class="fa fa-linkedin"></i
                    ></a>
            </div>
        </div>
        <div class="mt-7 md:ml-6">
            <h1 class="uppercase text-white font-bold">OUR NEWSLETTER</h1>
            <p class="text-white mt-6">We'll send you newsletters, product updates, event alerts, and promotional emails
                on
                a regular basis. Your e-mail address will not be used for anything other than delivering you the emails
                you
                requested.</p>
            <form id="subscribe" action="{{url('/subscription')}}" method="post" class="flex mt-6">
                @csrf
                <input id="email" name="email" placeholder="Subscribe" class="p-2" type="email" required>
                <input class="text-white" type="submit" name="Subscribe"/>
            </form>
        </div>
    </div>
    <div class="flex justify-center py-16">
        &nbsp;
        <a class="font-bold" style="color: #007bff" href="https://www.bitappstech.com">Bitapps Tech</a>
        <p class="text-white"> - 2022. All Rights Reserved</p>
    </div>
</footer>
</html>
