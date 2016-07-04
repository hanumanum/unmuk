<!DOCTYPE html>
<html lang="hy_am">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="descripton" content="Ողջու՜յն, Սա համակարգչի ստեղնաշարային կառավարման ինքուսույց է">

    <meta property="og:url" content="http://ablog.gratun.am/unmuk/"/>
    <meta property="og:title" content="Ան֊Մուկ․ Համակարգչի ստեղնաշարային կառավարման ինքուսույց"/>
    <meta property="og:description" content="Սովորիր կառավարել համակարգիչդ միայն ստեղնաշարի օգնությամբ։"/>
    <meta property="og:image" content="http://ablog.gratun.am/unmuk/images/no-mouse.jpg"/>

    <title>Ան֊Մուկ | Համակարգչի ստեղնաշարային կառավարման ինքուսույց</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/grumble.js/css/grumble.min.css?v=5">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="page-header row">
        <div class="col-md-11">
            <h1>Ան-Մուկ (&beta;)</h1>
            <p>Ողջու՜յն, Սա համակարգչի ստեղնաշարային կառավարման ինքուսույց է</p>
            <p>Այս պահին ինքնուսույցը դեռևս գտնվում է զարգացման և տեստավորման փուլում, սակայն դու կարող ես ուսումնասիրել
                այն և անել առաջարկներ և դիտողություններ։</p> Ինքնուսույցը աշխատում է chrome <img src="images/chrome.png"
                                                                                                 width="25"> և firefox
            <img src="images/firefox_logo.50.jpg" width="33"> դիտարկիչներում։
            <!-- <p>Առաջարկների կամ դիտողությունների համար օգտվիր կայքի նկուղում գտնվող կապ հղումից։</p> -->
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success" id="zoomInfo">
                <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
                <div class="panel-body">
                    <p>Այո, այո համակարգիչը կարելի է կառավարել միայն ստեղնաշարով, ու դու ցանկության դեպքում կարող ես դա
                        սովորել։</p>
                    <p>Ամեն վարժանք կազմված է <span class="label label-success han-size1"><span
                                class="glyphicon glyphicon-exclamation-sign"></span> Իմացիր</span> , <span
                            class="label label-danger han-size1"><span class="glyphicon glyphicon-tasks"></span> Կատարիր</span>
                        և <span class="label label-success han-size1"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</span>
                        բլոկներից</p>
                </div>
            </div>

            <div class="panel panel-danger" id="zoomTodo">
                <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
                <div class="panel-body">
                    <ol>
                        <li>Ինքուսույցի ամեն բաժին ունի իր վարժանքները, որոնք զետեղված են «Կատարի՛ր» բլոկում։</li>
                        <li>Վարժանքները կատարելով է միայն, որ նոր հմտությունները քեզ մոտ կձևավորվեն որպես ռեֆլեքս։</li>
                    </ol>


                </div>
            </div>


            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
                <div class="panel-body">
                    Ամեն բաժին ունի իր աշխատանքային տարածքը, որտեղ զետեղված են տվյալ վարժանքը կատարելու համար նախատեսված
                    նյութեր, ներմուծման դաշտեր, տեքստեր և այլն ․․․

                    <hr>
                    <a href="00_arrows.php" class="btn btn-lg btn-success pull-right">
                        Սկսել »
                    </a>
                </div>


            </div>

            <p>Վարժանքներում օգտագործված տեքստերը <a href="http://grapaharan.org" target="_blank">Գրապահարան</a>-ից են։
            </p>
        </div>

        <div id="share" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Տարածել</h4>
                    </div>
                    <div class="modal-body">
                        <p>Տարածելով այս ինքուսույցը դու ավելի էֆեկտիվ կդարձնես ընկերներիդ աշխատանքը։</p>
                        <a class="btn btn-social-icon btn-facebook"
                           onclick="Share.facebook('http://ablog.gratun.am/unmuk/','Ան֊Մուկ. Համակարգչի ստեղնաշարային կառավարման ինքուսույց','images/no-mouse.jpg','Սովորիր աշխատել առանց ստեղնաշարի։')"><span
                                class="fa fa-facebook"></span></a>
                        <a class="btn btn-social-icon btn-odnoklassniki"
                           onclick="Share.odnoklassniki('http://ablog.gratun.am/unmuk/','Ան֊Մուկ. Համակարգչի ստեղնաշարային կառավարման ինքուսույց')"><span
                                class="fa fa-odnoklassniki"></span></a>
                        <a class="btn btn-social-icon btn-vk"
                           onclick="Share.vkontakte('http://ablog.gratun.am/unmuk/','Ան֊Մուկ. Համակարգչի ստեղնաշարային կառավարման ինքուսույց','images/no-mouse.jpg','Սովորիր աշխատել առանց ստեղնաշարի։')"><span
                                class="fa fa-vk"></span></a>
                        <a class="btn btn-social-icon btn-twitter"
                           onclick="Share.twitter('http://ablog.gratun.am/unmuk/','Ան֊Մուկ․ Համակարգչի ստեղնաշարային կառավարման ինքուսույց')"><span
                                class="fa fa-twitter"></span></a>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Փակել</button>
                    </div>
                </div>

            </div>
        </div>

        <?php include "template/sidebar.php"; ?>

    </div>


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/grumble.js/js/jquery.grumble.min.js?v=7"></script>
<script src="js/common.js"></script>

<script type="text/javascript">


    $(document).ready(function () {
        if (window.location.href.indexOf('#share') != -1) {
            $('#share').modal('show');
        }
    });


    /*
     $('#ctrltab').on("hide.bs.modal",function(){
     $('#ancum').focus();
     });
     */
    /*
     $('#ctrltab').on("show.bs.modal",function(){
     $('#modalClose').focus();
     });
     */

</script>
<?php include "template/footer.php" ?>
</body>
</html>