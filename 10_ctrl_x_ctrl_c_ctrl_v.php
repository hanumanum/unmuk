<!DOCTYPE html>
<html lang="hy_am">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ԱնՄուկ | Ctrl+c, Ctrl+v, Ctrl+x</title>

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
          <p>
            <span class="label label-success">Ctrl+c</span>
            <span class="label label-success">Ctrl+v</span>
            <span class="label label-success">Ctrl+x</span>
          </p>
      </div>
      </div>
      
      
      <div class="row">
        <div class="col-md-10">
        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-exclamation-sign"></span> Իմացի՛ր</div>
          <div class="panel-body">
              <span class="label label-success">Ctrl+c</span>
            , <span class="label label-success">Ctrl+v</span>
            , <span class="label label-success">Ctrl+x</span>
            
            Նախատեսված են նշված տեքստը(կամ այլ օբյեկտը, օրինակ ՝ ֆայլը) պատճենելու, կտրելու և զետեղելու համար։
            <br>
            <br>
            <ul>
              <li><span class="label label-success">Ctrl+c</span> - պատճենել (copy)</li>
              <li><span class="label label-success">Ctrl+x</span> - կտրել (cut)</li>
              <li><span class="label label-success">Ctrl+v</span> - զետեղել նախկինում կրկնապատկվածը կամ կտրվածը (paste)</li>
            </ul>
          </div>
        </div>

        <div class="panel panel-danger">
          <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Կատարի՛ր</div>
          <div class="panel-body">
            <ol>
              <li>Աշխատանքային տարածքում գտնվող տեքստերը կտրիր,պատճենիր կամ զետեղիր ըստ ցուցումների</li>
            </ol>
          </div>
        </div>


        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
          <div class="panel-body">
          <h4>Պատճենել տեքստը կողքի դաշում</h4>
          <div class="row"> 
            <div class="col-md-6">
              <input class="form-control" type="text" value="Կրկնապակելիք տեքստ" id="textFromCopy">
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="textToCopy">
            </div>
          </div>
          <h4>Կտրիր տեքստը և տեղադրիր այն կողքի դաշում</h4>
          <div class="row"> 
            <div class="col-md-6">
              <input class="form-control" type="text" value="Կտրվելիք տեքստ" id="textFromCopy">
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="textToCopy">
            </div>
          </div>

          <br>
          <hr>
          <a href="01_tab.html" id="next" class="btn btn-lg btn-success pull-right">
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


    </script>
        <?php include "template/footer.php" ?> 
  </body>
</html>