<!DOCTYPE html>
<html lang="en">
    <head>
        

       


        </style>
        
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        
        
        
        

        <!--  #########                Popup    -->
        <style type="text/css">
            #Mypop { display:none; }
            .button {
                background-color: #2b91af;
                border-radius: 10px;
                box-shadow: 0 2px 3px rgba(0,0,0,0.3);
                color: #fff;
                cursor: pointer;
                display: inline-block;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none
            }
            .button.small {
                border-radius: 15px;
                float: right;
                margin: 22px 5px 0;
                padding: 6px 15px
            }
            .button:hover {
                background-color: #1e1e1e
            }
            .button>span {
                font-size: 84%
            }
            .button.b-close,.button.bClose {
                border-radius: 7px 7px 7px 7px;
                box-shadow: none;
                font: bold 131% sans-serif;
                padding: 0 6px 2px;
                position: absolute;
                right: -7px;
                top: -7px
            }
            #popup{
                background-color: #fff;
                border-radius: 10px 10px 10px 10px;
                color: #111;
                display: none;
                padding: 25px;
                margin-top: 20px;
            }
            .slide-image1{
                width: 100%;
                height: auto;
            }
        </style>
    <div id="popup">
        <span class="button b-close"><span>X</span></span>
        <img src="img/popup/pk.png" width="750" height="510" class="img-responsive">
    </div>

    <script src="js/jquery.bpopup.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript">
            ;
            (function ($) {
                // DOM Ready
                $(function () {
                    $('#popup').bPopup({
                        easing: 'easeOutBack',
                        speed: 450,
                        transition: 'slideDown',
                        transitionClose: 'slideUp',
                        // modalClose: false,
                        onClose: function () {

                        }
                    });
                });
            })(jQuery);
    </script>
    <!--  #########                Popup    -->
</head>

<body>
    

</body>

</html>
