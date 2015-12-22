<!DOCTYPE html>
<html lang="hy_am">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ան֊Մուկ | F5</title>

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
          <p>Էջի թարմացում  
            <span class="label label-success">F5</span>
          </p>
      </div>
      </div>
      
      
      <div class="row">
        <div class="col-md-8">

        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
          <div class="panel-body">
          <h3>Պատահական աֆորիզմ</h3><br>
          <blockquote id="aforizm">
            
          </blockquote>

          <br>
          <hr>
          <a href="15_f11.php" id="next" class="btn btn-lg btn-success pull-right">
          Հաջորդ վարժանքը »
          </a>
          </div>


        </div>
      

       </div>

    <div class="col-md-4" id="sidebar">
        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
          <div class="panel-body">
              <span class="label label-success">F5</span>֊ը նախատեսված է էջը նորից բեռնելու համար, այլ բառերով ասած էջը թարմացնելու համար։
            <br>
            <br>
          </div>
        </div>

        <div class="panel panel-danger">
          <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
          <div class="panel-body">
            <ol>
                <li><span class="label label-success">F5</span>-ով մի քանի անգամ թարմացրու էջը, ամեն անգամ ստանալով նոր աֆորիզմ։
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
      var afor = ["Հավատ որ լինի, աստվածներ կճարվեն","Արևը ստվեր չի տեսնում","Ինչպես քոռն է նայում Աստծուն, այնպես էլ Աստված քոռին","Իմաստունները ճշմարտություն են որոնում, իսկ հիմարները արդեն գտել են այն","10000 դրամով ընտրողը կենդանուց չի տարբերվում","Երբ մարդիկ չէն մտածում, դա արդեն դեմոկրատիա չէ","Ով չի վտանգում իր կյանքը, նա երբեք այն ձեռք չի բերի","Sa hayeren chi, այ սա է հայերեն"];
      var cites = ["ճապոնական ասացվածք","Հովհաննես Թումանյան","հայկական ասացվածք","ինչ որ մի գրքից","քաղաքացիների մի ստվար զանգված","Սերժ Թանկյան","Շիլլեր","Հան Ուման"];
      var rnd = Math.floor(Math.random() * afor.length);
      $("#aforizm").html(afor[rnd]);
      $("#aforizm").append("<footer>"+cites[rnd]+"</footer>");
    </script>
        <?php include "template/footer.php" ?> 
  </body>
</html>