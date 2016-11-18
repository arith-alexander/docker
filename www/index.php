<!DOCTYPE html>
<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
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


        <div class="footer">
            <a href="LESSON" >
                <img src="" alt="LESSON" style="margin-left:20%">
            </a>

            <a href="STORY">
                <img src="" alt="STORY" style="margin-left:20%">
            </a>

            <a href="GACHA">
                <img src="" alt="GACHA" style="margin-left:20%">
            </a>
        </div>

    </body>
</html>
