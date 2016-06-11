<!DOCTYPE html>
<html lang="hy_am">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ան֊Մուկ | Ctrl+Tab և Alt+Tab</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/grumble.js/css/grumble.min.css?v=5">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container-fluid">
    <div class="page-header row">
        <div class="col-md-1">

        </div>
        <div class="col-md-11">
            <h1>Ան-Մուկ</h1>
            <p><span class="label label-success">Ctrl+Tab</span> և <span class="label label-success">Alt+Tab</span></p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">


            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
                <div class="panel-body">

                    <br>
                    <hr>
                    <a href="08_ctrl_z.php" id="next" class="btn btn-lg btn-success pull-right">
                        Հաջորդ վարժանքը »
                    </a>
                </div>


            </div>


        </div>

        <div class="col-md-4" id="sidebar">
            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
                <div class="panel-body">
                    <span class="label label-success">Ctrl+Tab</span> և <span class="label label-success">Alt+Tab</span>
                    ստեղնաշարային կոմբինացիաների միջոցով կարելի է նավարկել բացված պատուհանների կամ պատուհանների
                    ներդիրների միջև։
                    <br><br>
                    <ul>
                        <li><span class="label label-success">Alt+Tab</span> բացված պատուհաններ(ծրագրեր)</li>
                        <li><span class="label label-success">Ctrl+Tab</span> ակտիվ ծրագրերի ներդիրներ</li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-danger">
                <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
                <div class="panel-body">
                    <ol>
                        <li>Բացված ներդիրների միջև նավարկելու համար արա <span
                                class="label label-success">Ctrl+Tab</span></li>
                        <li>Ապա փորձիր անել <span class="label label-success">Alt+Tab</span></li>
                    </ol>
                </div>
            </div>

        </div>

    </div>


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/grumble.js/js/jquery.grumble.min.js?v=7"></script>
<script src="js/common.js"></script>
<?php include "template/footer.php" ?>
</body>
</html>