<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sbac Care</title> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  <style>
    #pictureUrl { display: block; margin: 0 auto }
  </style>
</head>
<body>
  <div class="container">
  <h2>Sbac Care</h2>
  <img id="pictureUrl" width="25%">
  <p id="userId"></p>
  <p id="displayName"></p>
  <p id="statusMessage"></p>
  <p id="getDecodedIDToken"></p>
   <script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
<br>
<p id="scanCode"></p>

<button class="btn btn-primary" id="btnScanCode" onclick="scanCode();">Scan Code</button>
</div>
 
  <script>
    function runApp() {
      liff.getProfile().then(profile => {
        document.getElementById("pictureUrl").src = profile.pictureUrl;
        document.getElementById("userId").innerHTML = '<b>UserId:</b> ' + profile.userId;
        document.getElementById("displayName").innerHTML = '<b>DisplayName:</b> ' + profile.displayName;
        document.getElementById("statusMessage").innerHTML = '<b>StatusMessage:</b> ' + profile.statusMessage;
        document.getElementById("getDecodedIDToken").innerHTML = '<b>Email:</b> ' + liff.getDecodedIDToken().email;
      }).catch(err => console.error(err));
    }
    liff.init({ liffId: "1654351482-62KJ4VlG" }, () => {
      if (liff.isLoggedIn()) {
        runApp()
      } else {
        liff.login();
      }
    }, err => console.error(err.code, error.message));

     function scanCode() {
      liff.scanCode().then(result => {
        const stringifiedResult = JSON.parse(result);
        alert(stringifiedResult);
        document.getElementById("scanCode").textContent = stringifiedResult.value;

      });
    }
    liff.init({ liffId: "1654351482-62KJ4VlG" }, () => {}, err => console.error(err.code, error.message));
  </script>
</body>
</html>
