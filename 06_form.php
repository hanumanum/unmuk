<!DOCTYPE html>
<html lang="hy_am">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ան֊Մուկ | Ֆորմայի լրացում</title>

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
            <p>Ֆորմայի լրացման վարժանք</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">


            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
                <div class="panel-body">
                    <h4>Ֆորմա</h4>
                    <input type="text" class="form-control" placeholder="Լրացրու անունդ" id="name"><br>
                    <input type="text" class="form-control" placeholder="Լրացրու ազգանունդ" id="fname"><br>
                    <h5>Լեզուներից ընտրիր Չինարեն</h5>
                    <select class="form-control" id="selectlang">
                        <option>--</option>
                        <option>Հայերեն</option>
                        <option>Անգլերեն</option>
                        <option>Ռուսերեն</option>
                        <option>Չինարեն</option>
                    </select>
                    <h5>Ընտրիր որևէ սեռ</h5>
                    <input type="radio" value="male" name="gender" id="gender"> Արական
                    <input type="radio" value="fmale" name="gender"> Իգական
                    <h5>Ընտրիր ամսաթիվ (09/30/2014)</h5>
                    <input type="date" id="date">
                    <h5>Ընտրիր կարմիր գունը (FF0000)</h5>
                    <input type="color" id="color">

                    <h5>Դիր թռչնակը</h5>
                    <input type="checkbox" id="check1">

                    <h5>Ընտրիր 73 թիվը </h5>
                    <input type="range" id="range" value="24" min="20" max="100">
                    Ընտրված արժեքն է <span id="value">24</span>

                    <h5>Հանիր թռչնակը</h5>
                    <input type="checkbox" checked="checked" id="check2">


                    <hr>
                    <a href="07_ctrl_tab_alt_tab.php" disabled id="next" class="btn btn-lg btn-success pull-right">
                        Հաջորդ վարժանքը »
                    </a>
                </div>


            </div>


        </div>

        <div class="col-md-4" id="sidebar">
            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
                <div class="panel-body">

                    Առցանց ֆորմաները կարելի է լրացնել օգտվելով միայն ստեղնաշարից։<br>
                    Դա զգալիորեն արագացնում է աշխատանքը։ <br>
                    Քեզ անհրաժեշտ կլինեն <span class="label label-success">Tab</span>-ը, <span
                        class="label label-success">Shift+Tab</span>, սլաքները <span
                        class="label label-success">&#8593;</span> <span class="label label-success">&#8592;</span>
                    <span class="label label-success">&#8594;</span> <span class="label label-success">&#8595;</span>
                    և <span class="label label-success">Whitespace</span>
                    <br>
                </div>
            </div>

            <div class="panel panel-danger">
                <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
                <div class="panel-body">
                    <ol>
                        <li>Լրացրու Աշխատանքային տարածքում զետեղված ֆորման</li>
                        <li>Ֆորմայի բոլոր դաշտերը լրացնելուց հետո միայն կարող ես անցնել հաջորդ վարժանքին։</li>
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
<script>

    var name = false;
    var fname = false;
    var selectlang = false;
    var gender = false;
    var date = false;
    var color = false;
    var check1 = false;
    var check2 = false;
    var range = false;

    function checkAndActivate() {
        active = (name && fname && selectlang && gender && date && color && check1 && range && check2);
        console.clear();
        console.log(name, fname, selectlang, gender, date, color, check1, range, check2);
        //console.log("name,fname,selectlang,date,color,check1,check2,range");
        toogleButton(active, "#next");
        if (active) {
            //goNext();  
        }


    }

    checkAndActivate();

    $("#name").change(function () {
        name = $(this).val() != "";
        checkAndActivate();
    });

    $("#fname").change(function () {
        fname = $(this).val() != "";
        checkAndActivate();
    });


    $("#selectlang").change(function (event) {
        selectlang = $(this).val() == "Չինարեն";
        checkAndActivate();
    });

    $("input[name='gender']").change(function () {
        //console.log("asdfds");
        var vl = $("input[name='gender']:checked").val();
        //console.log(vl);
        if (vl == "male" || vl == "fmale") {
            gender = true;
            checkAndActivate();
        }
    });

    var dateElement = $("#date");
    dateElement.change(function (event) {
        date = $(this).val() == "2014-09-30";
        checkAndActivate();
    });

    var colorElement = $("#color");
    colorElement.change(function (event) {
        color = $(this).val() == "#ff0000";
        checkAndActivate();
    });


    $("#check1").change(function (event) {
        check1 = $(this).prop('checked') == true;
        checkAndActivate();
    });

    $("#check2").change(function (event) {
        check2 = $(this).prop('checked') == false;
        checkAndActivate();
    });

    var rangeElement = $("#range");
    rangeElement.change(function () {
        range = $(this).val() == "73";
        checkAndActivate();
    });

    $("#gender").focus(function () {
        $("#gender").grumble({
            text: 'Այստեղ ընտրությունը կատրարիր օգտվելով սլաքներից <br> <span class="label label-success">&#8592;</span> <span class="label label-success">&#8594;</span> ',
            angle: 85,
            distance: 200,
            showAfter: 500,
            hideAfter: 2500,
            type: 'alt-'

        })

    });


    dateElement.focus(function () {
        dateElement.grumble({
            text: 'Այստեղ ընտրությունը կատրարիր օգտվելով սլաքներից <br> <span class="label label-success">&#8593;</span> <span class="label label-success">&#8592;</span> <span class="label label-success">&#8594;</span> <span class="label label-success">&#8595;</span> <br>Նաև կարող ես կարգավորել արժեքը գրելով թվերը',
            angle: 85,
            distance: 200,
            showAfter: 500,
            hideAfter: 3500,
            type: 'alt-'

        })

    });


    colorElement.focus(function () {
        colorElement.grumble({
            text: '<span class="label label-success">Whitespase</span> կամ <span class="label label-success">Enter</span>',
            angle: 85,
            distance: 200,
            showAfter: 500,
            hideAfter: 2500,
            type: 'alt-'

        })

    });

    $("#check1,#check2").focus(function () {
        $("#check1,#check2").grumble({
            text: '<span class="label label-success">Whitespase</span>',
            angle: 85,
            distance: 100,
            showAfter: 500,
            hideAfter: 2500,
            type: 'alt-'

        })

    });

    $("#next").focus(function () {
        if (!active) {
            $("#next").grumble({
                text: "Ընտրման դաշտերից որևէ մեկը չէս ընտրել, վարժանքը ճիշտ անելուց հետո միայն կարող ես անցնել մյուս վարժանքին",
                angle: 0,
                distance: 20,
                showAfter: 200,
                hideAfter: 3000,
                type: 'alt-'
            })
        }
    });


    rangeElement.change(function () {
        $("#value").text($(this).val());
    });

    function goNext() {
        window.open("http://grapaharan.org", '_blank');
        window.open("http://hy-it.org", '_blank');
        window.open("07_ctrl_tab_alt_tab.php", '_blank');
        //window.close();
    }

</script>
<?php include "template/footer.php" ?>
</body>
</html>