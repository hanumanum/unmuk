<!DOCTYPE html>
<html lang="hy_am">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ԱնՄուկ | Ctrl+z</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="css/grumble.css?v=5">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="page-header row">
        <div class="col-md-1">
          
        </div>
        <div class="col-md-11">
          <h1>Ան-Մուկ</h1>
          <p><span class="label label-success">Ctrl+z</span></p>
      </div>
      </div>
      
      
      <div class="row">
        <div class="col-md-8">


        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
          <div class="panel-body">
          <h4>Տեքստային դաշտ</h4>
          <textarea class="form-control" id="ttext" cols="100" rows="16">Լոռեմ իփսում ․․․․ 
          Մոռեմ լիպսում

          Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունքում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, 

          ինչպիսին է Aldus PageMaker-ը, որը ներառում է Lorem Ipsum-ի տարատեսակներ:
          </textarea>

          <br>
          <hr>
          <a href="09_ctrl_a.php" id="next" class="btn btn-lg btn-success pull-right">
          Հաջորդ վարժանքը »
          </a>
          </div>


        </div>
      

       </div>

      <div class="col-md-4" id="sidebar">
                <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
          <div class="panel-body">
            <span class="label label-success">Ctrl+z</span>-ը նախատեսված է արված փոփոխությունը չեղարկելու համար։
          </div>
        </div>

        <div class="panel panel-danger">
          <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
          <div class="panel-body">
            <ol>
              <li>Աշխատանքային տարածքի "Տեքստային դաշտում"" ավելացրու կամ ջնջիր տեքստը</li>
              <li>Ապա <span class="label label-success">Ctrl+z</span>-ով չեղարկիր փոփոխություններդ</li>
            </ol>
          </div>
        </div>


      </div>
      
      </div>
    
    
        
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.grumble.min.js?v=7"></script>
    <script src="js/common.js"></script>
    <script type="text/javascript">
    var textCheck = false;
    var nextKeyUps = false;
    var skzbnakan = $("#ttext").val();

    checkAndActivate();

    function checkAndActivate()
    {
      active = (textCheck);
      toogleButton(active,"#next");
    
    }

    $("#ttext").keyup(function(){
        if(nextKeyUps)
        {
          textCheck = $("#ttext").val()==skzbnakan ? true:false;
          checkAndActivate();

        }
        nextKeyUps = true;
      })

    </script>
        <?php include "template/footer.php" ?> 
  </body>
</html>