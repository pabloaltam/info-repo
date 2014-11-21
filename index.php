<?php require 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>INFORED Website</title>

  </head>

  <body>
      <div class="container">
    <!-- Static navbar -->
    <?php require 'include/menu.php'; ?>
        
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Noticias</h2>
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                        <h2>Comunicados</h2>
                <p>HOLAM</p>
                    
                    </div>
            
        </div>
            </div>
             <div class="col-md-4">
                <div class="panel panel-default">
                      	<form  action="operaciones/respuesta.php" method="post">

  <div class="panel-heading">Inicio de sesión</div>
  <div class="panel-body">
    <div class="input-group margin-bottom-sm">
    
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    <input class="form-control" type="email" name="email" id="email" placeholder="tu@correo.com">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                    <input class="form-control" type="password" name="password" id="email" placeholder="password">
                
                </div>
      <div class="text-right">
          <button type="submit" class="btn btn-success">
        <i class="fa fa-chevron-right"></i>Entrar</a>
      </div>
  </div>
                    </form>
</div>  
                 <div class="panel panel-default">
  <div class="panel-heading">Últimos cambios en el website</div>
  <div class="panel-body">
<script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><' + '/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "https://github.com/sarqo/info-repo/commits/master.atom",rssmikle_frame_width: "300",rssmikle_frame_height: "220",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "New",rssmikle_title: "off",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#2C3E50",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",item_description_style: "text",item_thumbnail: "full",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a></div>
  </div>
</div>       
                 
</div>
                     
        </div>
            
            
        </div>
       <?php require 'include/pie.php'; ?>