<!DOCTYPE html>
<html>
  <head>
    <title>Sbac Care App</title>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	
  </head>
  <body>
    <h2>Sbac Care</h2>
    <video id="preview" width="300"></video>

  
  
    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
        );
        scanner.addListener('scan', function(content) {
            alert('value: ' + content);
            window.open(content, "_blank");
        });
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[1]);
            } else {
                console.error("on qr");
            }
        });
    </script>

 </body>
</html>
