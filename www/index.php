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

        <script src="/unslider-master/src/js/unslider.js"></script>
        <script src="/slider.js"></script>
        <link rel="stylesheet" href="/unslider-master/src/scss/unslider.css">

    </head>

    <body onload="sampleApp1()">

        <?php include("slider.html"); ?>

        <div id="canvasContainer"><canvas id="glcanvas" style="width:100%" width="1000" height="600" style="border:dashed 1px #CCC"></canvas></div>
        <div id="myconsole" style="color:#000">---- Log ----</div>

        <!-- modal menu -->
        <div id="modal-content">
              <a id="modal-close" class="button-link">X</a>
              <table class="modal-table">
        	        <tr>
                    <td><a href="menu_01"><img src="resource/menu/menu_01.png" alt="menu_01" width="75%" height="75%"></a></td>
                    <td><a href="menu_02"><img src="resource/menu/menu_02.png" alt="menu_02" width="75%" height="75%"></a></td>
                    <td><a href="menu_03"><img src="resource/menu/menu_03.png" alt="menu_03" width="75%" height="75%"></a></td>
                  </tr>
                  <tr>
                    <td><a href="menu_04"><img src="resource/menu/menu_04.png" alt="menu_04" width="75%" height="75%"></a></td>
                    <td><a href="menu_05"><img src="resource/menu/menu_05.png" alt="menu_05" width="75%" height="75%"></a></td>
                    <td><a href="menu_06"><img src="resource/menu/menu_06.png" alt="menu_06" width="75%" height="75%"></a></td>
                  </tr>
                  <tr>
                    <td><a href="menu_07"><img src="resource/menu/menu_07.png" alt="menu_07" width="75%" height="75%"></a></td>
                    <td><a href="menu_08"><img src="resource/menu/menu_08.png" alt="menu_08" width="75%" height="75%"></a></td>
                    <td><a href="menu_09"><img src="resource/menu/menu_09.png" alt="menu_09" width="75%" height="75%"></a></td>
                  </tr>
            </table>
        </div>
        <p><a id="modal-open" class="button-link" style="right:2%; top:2%;position:absolute">
            <img src="resource/button/button_menu.png" alt="MENU" width="75%" height="75%">
        </a></p>
        <!-- modal menu -->

        <div class="footer">

            <a href="LESSON" style="text-decoration:none">
                <img src="resource/button/button_lesson.png" alt="LESSON" width="20%" height="20%" style="margin-left:15%">
            </a>

            <a href="STORY" style="text-decoration:none">
                <img src="resource/button/button_story.png" alt="STORY" width="20%" height="20%" style="margin-left:3%">
            </a>

            <a href="GACHA" style="text-decoration:none">
                <img src="resource/button/button_gacha.png" alt="GACHA" width="20%" height="20%" style="margin-left:3%">
            </a>
        </div>
    </body>
</html>
