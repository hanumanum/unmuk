<!DOCTYPE html>
<html lang="hy_am">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ան֊Մուկ | Ctrl+c, Ctrl+v, Ctrl+x</title>

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
        <div class="col-md-8">

        <div class="panel panel-success">
          <div class="panel-heading"><span class="glyphicon glyphicon-wrench"></span> Աշխատանքային տարածք</div>
          <div class="panel-body">
          <h4>Պատճենիր տեքստը կողքի դաշում</h4>
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
              <input class="form-control" type="text" value="Կտրվելիք տեքստ" id="textFromCut">
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="textToCut">
            </div>
          </div>
          <h4>Պատճենիր ամբողջ տեքստը երկրորդ տեքստային դաշտում</h4>
          <textarea class="form-control" id="ttext" cols="100" rows="5">Մենք պետք է վերցնենք տեղեկատվությունը, անկախ դրա գտնվելու վայրից, պատճենենք, եւ կիսվենք դրանով աշխարհի հետ։ Մենք պետք է վերցնենք տեղեկատվությունը, որը պաշտպանված չէ հեղինակային իրավունքով, եւ ավելացնենք այն Արխիվում։ Մենք պետք է գնենք գաղտնի տվյալների բազաներ եւ տեղադրենք դրանք Վեբում։ Մենք պետք է բեռնենք գիտական ամսագրեր եւ տարածենք դրանք սոց․ ցանցերում, որոնք հնարավորություն են տալիս պանակներ տեղադրել։ Մենք պետք է պայքարենք Բաց հասանելիության պարտիզանականության համար։
          </textarea>
          <br>
          <textarea class="form-control" id="ttext2" cols="100" rows="5"></textarea>


          <br>
          <hr>
          <a href="11_shift_arrows.php" id="next" class="btn btn-lg btn-success pull-right">
          Հաջորդ վարժանքը »
          </a>
          </div>


        </div>
      

       </div>

    <div class="col-md-4" id="sidebar">
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
              <li>Աշխատանքային տարածքում գտնվող տեքստերը կտրիր,պատճենիր կամ զետեղիր ըստ դաշտերում գրված ցուցումների</li>
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
      var cuted =false;
      var copied =false;
      var copied2=false;
      var textToCopy = $("#textToCopy").val();
      var textFromCopy = $("#textFromCopy").val(); 
      var textToCut = $("#textToCut").val();
      var textFromCut = $("#textFromCut").val();
      var ttext = $("#ttext").val();

      function checkAndActivate()
      {
        active = (cuted && copied && copied2);
        console.log(cuted,copied,copied2);
        //console.log("name,fname,selectlang,date,color,check1,check2,range");
        toogleButton(active,"#next");

      }
      
      checkAndActivate();

      $("#textToCopy").change(function(){
        copied = ($("#textToCopy").val()==textFromCopy) ? true:false;
        checkAndActivate();
      })
      
      $("#textToCut").change(function(){
        cuted = ($("#textToCut").val()==textFromCut && $("#textFromCut").val()=="") ? true:false;
        checkAndActivate();
      })

      $("#ttext2").bind("paste",function(){
        setTimeout(function() {
        copied2 = ($("#ttext2").val().trim()==ttext.trim() && $("#ttext").val().trim()==ttext.trim()) ? true:false;
        checkAndActivate();
        }, 100);
      })


    </script>
        <?php include "template/footer.php" ?> 
  </body>
</html>