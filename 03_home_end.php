<!DOCTYPE html>
<html lang="hy_am">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ան֊Մուկ | Աշխատանք Home և End ստեղներով</title>

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
            <p>Աշխատանք <span class="label label-success">Home</span> և <span class="label label-success">End</span>
                ստեղներով</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">


            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
                <div class="panel-body">
                    <h4>Տեքստային դաշտ</h4>
          <textarea class="form-control" cols="100" rows="30">Լոռեմ իփսում ․․․․ 
          Մոռեմ լիպսում

          Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունքում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, 

          ինչպիսին է Aldus PageMaker-ը, որը ներառում է Lorem Ipsum-ի տարատեսակներ:
          </textarea>


                    <hr>
                    <a href="04_tab_enter.php" class="btn btn-lg btn-success pull-right">
                        Հաջորդ վարժանքը »
                    </a>
                </div>


            </div>


        </div>
        <div class="col-md-4" id="sidebar">
            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
                <div class="panel-body">
                    <span class="label label-success">Home</span> և <span class="label label-success">End</span>
                    ստեղները նույնպես նավարկման ստեղներ են։ Այս ստեղների ֆունկցիաները կախված են կոնտեքստից։
                    <br> <br>
                    <ul>
                        <li>
                            <strong>Էջի կոնտեքստում</strong>
                            <ul>
                                <li><span class="label label-success">Home</span>֊ով տեղափոխվում ենք էջի սկիզբ</li>
                                <li><span class="label label-success">End</span>֊ով տեղափոխվում ենք էջի վերջ</li>
                            </ul>

                        </li>
                        <li>
                            <strong>Տողի կոնտեքստում</strong>
                            <ul>
                                <li><span class="label label-success">Home</span>֊ով տեղափոխվում ենք տողի սկիզբ</li>
                                <li><span class="label label-success">End</span>֊ով տեղափոխվում ենք տողի վերջ</li>
                            </ul>

                        </li>

                    </ul>


                </div>
            </div>

            <div class="panel panel-danger">
                <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
                <div class="panel-body">
                    <ol>
                        <li>Մի քանի անգամ սեղմիր <span class="label label-success">Home</span> և <span
                                class="label label-success">End</span> ստեղներին
                        </li>
                        <li>Կուրսորը հերթով տեղադրիր Տեքստային դաշտում գտնվող տեքստի տարբեր տողերում , ապա սեղմիր <span
                                class="label label-success">Home</span> և <span class="label label-success">End</span>
                            ստեղներին
                        </li>
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

<script type="text/javascript">


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