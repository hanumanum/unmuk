<!DOCTYPE html>
<html lang="hy_am">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ԱնՄուկ | Աշխատանք Tab, Shift+Tab և Enter ստեղներով</title>

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
          <a href="" id="logo"><img src="images/no-mouse.jpg" width="80"></a>
        </div>
        <div class="col-md-11">
          <h1>Ան-Մուկ</h1>
          <p><span class="label label-success">TAB</span> և <span class="label label-success">Enter</span> ստեղները և <span class="label label-success">Shift+Tab</span> համադրությունը</p>
      </div>
      </div>
      
      
      <div class="row">
        <div class="col-md-10">
        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
          <div class="panel-body">
            <span class="label label-success">Tab</span> ստեղնի միջոցով կարելի է տեղափոխվել էջի ներսում գտնվող ակտիվ էլեմենտների վրայով։          
          </div>
        </div>

        <div class="panel panel-danger">
          <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
          <div class="panel-body">
            <ol>
              <li>Հիմա փորձիր սեղմել <span class="label label-success">Tab</span>-ին մի քանի անգամ և հասկանալ թե ինչ է կատարվում։</li>
              <li>Tab-ի միջոցով նավարկելով հասիր «Հաջորդը» կոճակին</li>
              <li>Սեղմի՛ր <span class="label label-success">Enter</span>, կանցնես հաջորդ վարժանքին</li>
            </ol>
          </div>
        </div>


        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
          <div class="panel-body">
          <a href="http://hy-it.org" id="link-first">ՀայIT.org</a><br>
          <a href="http://grapaharan.org">Գրապահարան</a><br>
          <a href="http://gago.org" id="link-last">Gago.com</a>   
          <hr>
          <a href="04_tab_enter.php" id="ancum" class="btn btn-lg btn-primary">
          Կոճակ
          </a>
          <a href="04_tab_enter.php"  class="btn btn-lg btn-primary">
          Կոճակ
          </a>

          <a href="04_tab_enter.php" id="havayi" data-toggle="tooltip" title="asdfsd" class="btn btn-lg btn-primary">
            Գաղտնիք
          </a>
          <br>
          
          <hr>
            <select class="form-control" id="selectt">
              <option>Արժեք 1</option>
              <option>Արժեք 2</option>
              <option>Արժեք 3</option>
            </select>
           <br> 
          <input type="text" id="textinput" class="form-control" placeholder="Ներմուծման դաշտ">
          <br>
          <textarea class="form-control" placeholder="Բազմատող ներմուծման դաշտ"></textarea>
          <hr>
          <a href="05_whitespace.php" class="btn btn-lg btn-success pull-right">
          Հաջորդ վարժանքը »
          </a>
          </div>


        </div>


       </div>

<?php include "template/sidebar.php"; ?>
      
      </div>
    
    
        
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.grumble.min.js?v=7"></script>
    <script src="js/common.js"></script>
    
    <script type="text/javascript">
    $("#logo").focus(function(){
        $("#logo").grumble({
          text:"Հիմա նշված է լոգոն, եթե Enter սեղմեք ապա կանցնեք կայքի սկիզբ",
          angle: 85, 
          distance: 200, 
          showAfter: 200,
          hideAfter:2500,
          type: 'alt-'

        })

    });

    $("#link-first").focus(function(){
        $("#link-first").grumble({
          text:"tab-ին սեղմելով գնում ենք առաջ",
          angle: 85, 
          distance: 200, 
          showAfter: 500,
          hideAfter:1600,
          type: 'alt-'

        })

    });

    

    $("#havayi").focus(function(){
        $("#havayi").grumble({
          text: 'կարելի է հետ գնալ իրար հետևից սեղմելով <span class="label label-success">Shift+Tab</span> ստեղները</p>', 
          angle: 85, 
          distance: 200, 
          showAfter: 500,
          type: 'alt-',

        });

      });
    
    $("#selectt").focus(function(){
        $("#selectt").grumble({
          text:"Ընտրիչները նույնպես ակտիվ էլեմենտ են <br><br> սլաքներով կարելի է ընտրել արժեք",
          angle: 85, 
          distance: 200, 
          showAfter: 500,
          hideAfter:2500,
          type: 'alt-'

        })

    });

    


    </script>
        <?php include "template/footer.php" ?> 
  </body>
</html>