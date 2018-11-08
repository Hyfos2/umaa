<html>
  <head>
  <title>My Now Amazing Webpage</title>

</head>
<body>
    <script src="{{asset('filemanager/webix.js')}}" type="text/javascript"></script>
    <script src="{{asset('filemanager/filemanager.js')}}" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('filemanager/webix.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('filemanager/filemanager.css')}}">
    <div id="filemanager"></div>
    <script type="text/javascript">
        webix.ready(function(){

                webix.ui({
                    view:"filemanager",
                    id:"files",
                    url:"../common/data.php"
                });

    });
      

    </script>

  </body>
</html>