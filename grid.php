<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Shop Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .item1 {
            grid-area: upheader;
        }
        
        .item2 {
            grid-area: header;
        }
        
        .item3 {
            grid-area: menu;
        }
        
        .item4 {
            grid-area: menu2;
        }
        
        .item5 {
            grid-area: main;
        }
        
        .item6 {
            grid-area: menu3;
        }
        
        .item7 {
            grid-area: footer;
        }
        
        .grid-container {
            display: grid;
            grid: 'upheader upheader' 'header header' 'menu main' 'menu main' 'menu2 footer' 'menu3 footer';
            grid-gap: 0px;
            transform: scale(0.3);
            transform-origin: 0 0;
            float: left;
            background-color: #ffffff;
            padding: 30px;
        }
        
        .grid-container > div {
            text-align: center;
            padding: 20px 30px;
            font-size: 14px;
        }
    </style>
    <style type="text/css">
        a {
            text-decoration: none;
            color: #22262A;
        }
        
        a:hover {
            background-color: #33A0FF;
        }
    </style>
    <style>
                        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Style the container */
        
        .container {
            display: block;
            color: #262626;
            background-color: #F6F7F8;
            padding: 20px;
            text-align: center;
            border-style: hidden;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-right: 975px;
            margin-left: 175px;
            line-height: 2.5;
        }
        
        .container1 {
            color: #262626;
            background-color: #F6F7F8;
            padding: 10px;
            text-align: center;
            border-style: hidden;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-right: 975px;
            margin-left: 175px;
        }
        /* Style the side navigation */
        
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
        }
        /* Side navigation links */
        
        .sidenav a {
            color: white;
            padding: 16px;
            display: block;
        }
        /* Change color on hover */
        
        .sidenav a:hover {
            background-color: #ddd;
            color: black;
        }
        /* Style the content */
        
        .content {
            margin-left: 450px;
            padding-left: 20px;
        }
        /* Style the header */
        
        .header {
            color: #FF4252;
            background-color: #ffffff;
            padding: 40px;
            /* tova prechi na nav bara da otide v dqsno*/
        }
        /* Style the top navigation bar */
        
        .topnav {
            margin: 36px;
            overflow: hidden;
            background-color: #F6F7F8;
        }
        /* Style the topnav links */
        
        .topnav a {
            float: center;
            display: inline-block;
            color: #33A0FF;
            text-align: right;
            padding: 7px 16px;
        }
        /* Change color on hover */
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
            /* Style the top navigation bar */
            .topnav {
                overflow: hidden;
                background-color: #333;
            }
            /* Style the topnav links */
            .topnav a {
                float: center;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
            }
            /* Change color on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
                /* Style the top navigation bar */
                .navigation {
                    margin: 36px;
                    overflow: hidden;
                    background-color: #F6F7F8;
                }
                /* Style the topnav links */
                .navigation a {
                    display: block;
                    color: #ffffff;
                    text-align: right;
                    padding: 27px 16px;
                }
                /* Change color on hover */
                .navigation a:hover {
                    background-color: #ddd;
                    color: black;
                    /* Style the navigation bar */
                    .navigation {
                        overflow: hidden;
                    }
                    /* Style the navigation links */
                    .navigation a {
                        float: right;
                        display: block;
                        color: black;
                        text-align: right;
                        padding: 14px 16px;
                    }
                    /* Change color on hover */
                    .navigation a:hover {
                        background-color: #ddd;
                        color: black;
                    }
                    /* Style the bottom navigation bar */
                    .botnav {
                        margin: 36px;
                        overflow: hidden;
                        background-color: #F6F7F8;
                    }
                    /* Style the botnav links */
                    .botnav a {
                        float: right;
                        display: inline-block;
                        color: #ffffff;
                        text-align: right;
                        padding: 7px 36px;
                    }
                    /* Change color on hover */
                    .botnav a:hover {
                        background-color: #ddd;
                        color: black;
                        /* Style the navigation bar */
                        .botnav {
                            overflow: hidden;
                        }
                        /* Style the botnav links */
                        .botnav a {
                            float: center;
                            display: block;
                            color: black;
                            text-align: center;
                            padding: 14px 16px;
                        }
                        /* Change color on hover */
                        .botnav a:hover {
                            background-color: #ddd;
                            color: black;
                        }
    </style>

    <! Style for dropdown menu !>
    <style>
        .dropbtn {
            background-color: #ffffff;
            color: black;
            padding: 6px;
            font-size: 12px;
            border: hidden;
            cursor: pointer;
        }
        
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #FF4252;
        }
        
        .dropdown {
            float: left;
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 15px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 6px 6px;
            display: block;
            outline-width: none;
        }
        
        .dropdown a:hover {
            background-color: #FF4252;
        }
        
        .show {
            display: block;
        }
    </style>
    <!Script for dropdown menu!>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction1() {
            document.getElementById("myDropdown1").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

</head>

<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">EN</button>
    <div id="myDropdown" class="dropdown-content">
        <a href="#home">BG</a>
    </div>
</div>
<div class="dropdown">
    <button onclick="myFunction1()" class="dropbtn">USD</button>
    <div id="myDropdown1" class="dropdown-content">
        <a href="#home">BGN</a>
    </div>
</div>
<div style="float: right;">
    <a href="index.php">My profile</a>
    <a href="#">Link</a>
    <a href="#">Link</a>

</div>

<body>

    <div class="grid-container">
        <div class="item1">
            <div class="header">
                <h1>Header</h1>
                <div class="botnav">
                    <a href="#">HOME</a>
                    <a href="#">STORE</a>
                    <a href="#">IPHONE</a>
                    <a href="#">IPAD</a>
                    <a href="#">MACBOOK</a>
                    <a href="#">ACCESORIES</a>
                </div>
            </div>
        </div>
        <div class="item2">
            <div class="topnav">

                <a href="#">Home /</a>
                <a href="#">Accesories /</a>
                <a href="#">Beat Solo2 on Ear Headphones - Black</a>
            </div>
        </div>
        <div class="item3">
            <div class="container">
                <h2>Accesories</h2>
                <a href="#">Apple Car</a>
                <br>
                <a href="#">Air port wireless</a>
                <br>
                <a href="#">Cables Docks</a>
                <br>
                <a href="#">Cases Films</a>
                <br>
                <a href="#">Charging Devices</a>
                <br>
                <a href="#">Connected home</a>
                <br>
                <a href="#">Headphones</a>
            </div>

        </div>
        <div class="item4">
            <div class="container1">
                <h2>Prices</h2>

                <div class="range-slider">

                    <a>Ranger:</a>
                    <input type="number" value="0" min="0" max="500" /><a>-</a>
                    <input type="number" value="500" min="0" max="500" />
                    <input value="0" min="0" max="500" step="10" type="range" />
                    <input value="500" min="0" max="500" step="10" type="range" />
                    <!Style for price range!>
                    <style>
                        input {
                            box-shadow: 0;
                            outline: 0;
                            background-color: #F6F7F8;
                        }
                        
                        .range-slider {
                            width: 180px;
                            margin: auto;
                            text-align: right;
                            position: relative;
                            height: 6em;
                        }
                        
                        .range-slider svg,
                        .range-slider input[type=range] {
                            position: absolute;
                            left: 0;
                            bottom: 0;
                        }
                        
                        input[type=number] {
                            border: none;
                            text-align: center;
                            font-size: 15px;
                            -moz-appearance: textfield;
                        }
                        
                        input[type=number]::-webkit-outer-spin-button,
                        input[type=number]::-webkit-inner-spin-button {
                            -webkit-appearance: none;
                        }
                        
                        input[type=number]:invalid,
                        input[type=number]:out-of-range {
                            border: 12px solid #ffffff;
                        }
                        
                        input[type=range] {
                            -webkit-appearance: none;
                            width: 100%;
                        }
                        
                        input[type=range]:focus {
                            outline: none;
                        }
                        
                        input[type=range]:focus::-webkit-slider-runnable-track {
                            background: #2497e3;
                        }
                        
                        input[type=range]:focus::-ms-fill-lower {
                            background: #2497e3;
                        }
                        
                        input[type=range]:focus::-ms-fill-upper {
                            background: #FF4252;
                        }
                        
                        input[type=range]::-webkit-slider-runnable-track {
                            width: 100%;
                            height: 3px;
                            cursor: pointer;
                            animate: 0.2s;
                            background: #2E90E5;
                            border-radius: 1px;
                            box-shadow: none;
                            border: 0;
                        }
                        
                        input[type=range]::-webkit-slider-thumb {
                            z-index: 2;
                            position: relative;
                            box-shadow: 0px 0px 0px #000;
                            border: 1px solid #2497e3;
                            height: 10px;
                            width: 10px;
                            border-radius: 35px;
                            background: #2497e3;
                            cursor: pointer;
                            -webkit-appearance: none;
                            margin-top: -3px;
                        }
                        
                        input[type=range]::-moz-range-track {
                            width: 100%;
                            height: 5px;
                            cursor: pointer;
                            animate: 0.2s;
                            background: #2E90E5;
                            border-radius: 1px;
                            box-shadow: none;
                            border: 0;
                        }
                        
                        input[type=range]::-moz-range-thumb {
                            z-index: 2;
                            position: relative;
                            box-shadow: 0px 0px 0px #000;
                            border: 1px solid #2E90E5;
                            height: 18px;
                            width: 18px;
                            border-radius: 25px;
                            background: #2E90E5;
                            cursor: pointer;
                        }
                        
                        input[type=range]::-ms-track {
                            width: 100%;
                            height: 5px;
                            cursor: pointer;
                            animate: 0.2s;
                            background: #2E90E5;
                        }
                        
                        input[type=range]::-ms-fill-lower,
                        input[type=range]::-ms-fill-upper {
                            background: #2E90E5;
                            border-radius: 1px;
                            box-shadow: none;
                            border: 0;
                        }
                        
                        input[type=range]::-ms-thumb {
                            z-index: 2;
                            position: relative;
                            box-shadow: 0px 0px 0px #000;
                            border: 1px solid #2E90E5;
                            height: 18px;
                            width: 18px;
                            border-radius: 25px;
                            background: #2E90E5;
                            cursor: pointer;
                        }
                    </style>

                    <script>
                        (function() {

                            var parent = document.querySelector(".range-slider");
                            if (!parent) return;

                            var
                                rangeS = parent.querySelectorAll("input[type=range]"),
                                numberS = parent.querySelectorAll("input[type=number]");

                            rangeS.forEach(function(el) {
                                el.oninput = function() {
                                    var slide1 = parseFloat(rangeS[0].value),
                                        slide2 = parseFloat(rangeS[1].value);

                                    if (slide1 > slide2) {
                                        [slide1, slide2] = [slide2, slide1];
                                    }

                                    numberS[0].value = slide1;
                                    numberS[1].value = slide2;
                                }
                            });

                            numberS.forEach(function(el) {
                                el.oninput = function() {
                                    var number1 = parseFloat(numberS[0].value),
                                        number2 = parseFloat(numberS[1].value);

                                    if (number1 > number2) {
                                        var tmp = number1;
                                        numberS[0].value = number2;
                                        numberS[1].value = tmp;
                                    }

                                    rangeS[0].value = number1;
                                    rangeS[1].value = number2;

                                }
                            });

                        })();
                    </script>
                </div>
            </div>
        </div>
        <div class="item5">
            <style>
                img {
                    margin: 130px;
                    padding: 40px 365px;
                    margin-bottom: 0px;
                    margin-left: 447.97px;
                    margin-right: 56.51px;
                    margin-top: 0px;
                }
            </style>
            <div class="info">
                <style>
                    .info {
                        float: center;
                    }
                    
                    b {
                        margin-top: 57px;
                        float: left;
                        color: #ffffff;
                    }
                    
                    .item5 {
                        background-color: #2E90E5;
                    }
                    
                    .button {
                        float: left;
                        margin-bottom: 0px;
                        margin-left: 0px;
                        margin-right: 150px;
                        margin-top: 200px;
                        color: #ffffff;
                        background-color: #2E90E5;
                        text-decoration: underline;
                    }
                </style>
                <b>IPHONE 8</b>
                <br>
                <b>Performance and design. Taken right to the edge.</b>
                <br>
                <a href="#" class="button">SHOP NOW</a>
            </div>
            <div class="pic">
                <img src="component.png" width="365.53" height="339.87">
            </div>

        </div>

        <div class="item6">
            <div class="container1">
                <h2>Color</h2>
				<button class="button button1"></button>
				<button class="button button2"></button>
				<button class="button button3"></button>
				<button class="button button4"></button>
				<button class="button button5"></button>
				<button class="button button6"></button>
            </div>
			<style>
			.button {
  border: none;
  color: white;
  padding: 16px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 30px 2px;
}

.button1 {
	border-radius: 50%;
	background-color: #006CFF;
}
.button2 {
	border-radius: 50%;
	background-color: #FC3E39;
	}
.button3 {
	border-radius: 50%;
	background-color: #171717;
	}
.button4 {
	border-radius: 50%;
	background-color: #FFF600;
	}
.button5 {
	border-radius: 50%;
	background-color: #FF00B4;
	}
.button6 {
	border-radius: 50%;
	background-color: #EFDFDF;
	}
			</style>
        </div>
        <div class="item7">
            <div class="product1">
                <div class="pic">
                    <img src="laptop.png" width="236" height="153">
                </div>
            </div>
            <style>
                .product1 {
                    float: left;
                    margin-bottom: 0px;
                    margin-left: 0px;
                    margin-right: 50px;
                    margin-top: 0px;
                }
                
                .product2 {
                    float: center;
                    margin-bottom: 0px;
                    margin-left: 0px;
                    margin-right: 0px;
                    margin-top: 0px;
                }
                
                .product3 {
                    float: right;
                    margin-bottom: 0px;
                    margin-left: 0px;
                    margin-right: 0px;
                    margin-top: 0px;
                }
            </style>
            <div class="product2">
                <div class="pic">
                    <img src="laptop.png" width="236" height="153">
                </div>
            </div>
            <div class="product3">
                <div class="pic">
                    <img src="laptop.png" width="236" height="153">
                </div>
            </div>
        </div>
    </div>

</body>

</html>