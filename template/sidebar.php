


 <div class="col-md-2" id="sidebar">
     <ul>
     <?php
     $files = scandir(".");
     foreach ($files as $file) {
       if(is_file("/var/www/unmuk/".$file))
       {
        echo "<li><a href='$file'>$file</a></li>";
       }
     }

     ?> 
     </ul>


          <ul class="list-group">
          <li class="list-group-item list-group-item-success">սկիզբ</li>
          
          <li class="list-group-item list-group-item-success"><span class="label label-success">&#8593;</span> <span class="label label-success">&#8592;</span> <span class="label label-success">&#8594;</span> <span class="label label-success">&#8595;</span></li>
          
          <li class="list-group-item list-group-item-success" ><span class="label label-success">Ctrl+&#8593;</span> <span class="label label-success">Ctrl+&#8592;</span> <span class="label label-success">Ctrl+&#8594;</span> <span class="label label-success">Ctrl+&#8595;</span></li>
          

          <li class="list-group-item list-group-item-success"> <span class="label label-success">PgUp</span> և <span class="label label-success">PgDn</span></li>
          
          <li class="list-group-item list-group-item-success"> <span class="label label-success">Home</span> և <span class="label label-success">End</span></li>
          

          <li class="list-group-item list-group-item-success"><span class="label label-success">Tab</span> և <span class="label label-success">Enter</span></li>

          <li class="list-group-item list-group-item-success"> <span class="label label-success">Whitespace</span></li>
          
          <li class="list-group-item list-group-item-success">Ֆորմայի լրացում միայն ստեղնաշարով</li>

          <li class="list-group-item"><span class="label label-success">Ctrl+Tab</span> և <span class="label label-success">Alt+Tab</span></li>

          <li class="list-group-item">
            <span class="label label-success">Ctrl+z</span>
          </li>

          <li class="list-group-item">
            <span class="label label-success">Ctrl+a</span>
          </li>


          <li class="list-group-item">
            <span class="label label-success">Shift+&#8593;</span>
            <span class="label label-success">Shift+&#8592;</span>
            <span class="label label-success">Shift+&#8594;</span>
            <span class="label label-success">Shift+&#8595;</span>                                    
          </li>

          <li class="list-group-item">
            <span class="label label-success">Shift+Home</span>
            <span class="label label-success">Shift+End</span>
            <span class="label label-success">Shift+PgUp</span>
            <span class="label label-success">Shift+PgDn</span>                                    
          </li>

          <li class="list-group-item">
            <span class="label label-success">Ctrl+c</span>
            <span class="label label-success">Ctrl+x</span>
            <span class="label label-success">Ctrl+v</span>
          </li>

          <li class="list-group-item">
            <span class="label label-success">Ctrl+t</span>
            <span class="label label-success">Ctrl+w</span>
          </li>

          <li class="list-group-item">

          </li>

          <li class="list-group-item">
            Ուղեցույց և <span class="label label-success">Ctrl+s</span>
          </li>
    
          </ul>


      </div>
    

