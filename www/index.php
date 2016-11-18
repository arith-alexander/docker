<!DOCTYPE html>
<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="modal-menu/menu.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="modal-menu/menu.css">
        <meta charset='utf-8'>
        <title>Docker</title>

        <!-- Live2D Library -->
        <script src="/live2d/lib/live2d.min.js"></script>

        <!-- Live2D Framework -->
        <script src="/live2d/framework/Live2DFramework.js"></script>

        <!-- User's Script -->
        <script src="/src/utils/MatrixStack.js"></script>
        <script src="/src/utils/ModelSettingJson.js"></script>
        <script src="/src/PlatformManager.js"></script>
        <script src="/src/LAppDefine.js"></script>
        <script src="/src/LAppModel.js"></script>
        <script src="/src/LAppLive2DManager.js"></script>
        <script src="/src/SampleApp1.js"></script>

    </head>

    <body onload="sampleApp1()">
        <div id="canvasContainer"><canvas id="glcanvas" style="width:100%" width="1000" height="600" style="border:dashed 1px #CCC"></canvas></div>
        <div id="myconsole" style="color:#000">---- Log ----</div>

        <!-- modal menu -->
        <div id="modal-content">
              <a id="modal-close"　class="button-link">✖︎</a>
              <table class="modal-table">
        	        <tr>
                    <td><a href="menu1-1"><img src="" alt="1-1"></a></td>
                    <td><a href="menu1-2"><img src="" alt="1-2"></a></td>
                    <td><a href="menu1-3"><img src="" alt="1-3"></a></td>
                  </tr>
                  <tr>
                    <td><a href="menu2-1"><img src="" alt="2-1"></a></td>
                    <td><a href="menu2-2"><img src="" alt="2-2"></a></td>
                    <td><a href="menu2-3"><img src="" alt="2-3"></a></td>
                  </tr>
                  <tr>
                    <td><a href="menu3-1"><img src="" alt="3-1"></a></td>
                    <td><a href="menu3-2"><img src="" alt="3-2"></a></td>
                    <td><a href="menu3-3"><img src="" alt="3-3"></a></td>
                  </tr>
            </table>
        </div>
        <p><a id="modal-open" class="button-link" style="right:2%; top:2%;position:absolute"><img src="" alt="MENU"></a></p>
        <!-- modal menu -->

        <div class="footer">
            <a href="LESSON" >
                <img src="resource/button_lesson.png" alt="LESSON" width="32%" height="32%" style="margin-left:1%">
            </a>

            <a href="STORY">
                <img src="resource/button_story.png" alt="STORY" width="32%" height="32%">
            </a>

            <a href="GACHA">
                <img src="resource/button_gacha.png" alt="GACHA" width="32%" height="32%">
            </a>
        </div>
    </body>
</html>
