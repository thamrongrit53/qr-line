<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MY APP</title> 
  <style>
    #pictureUrl { display: block; margin: 0 auto }
  </style>
</head>
<body>
  <p id="scanCode"></p>
  <p>
    <button id="btnScanCode" onclick="scanCode();">Scan Code</button>
  </p>
  <script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
  <script>
    function scanCode() {
      liff.scanCode().then(result => {
        const stringifiedResult = JSON.stringify(result);
        alert(stringifiedResult);
       document.getElementById("scanCode").textContent = stringifiedResult;
       if(stringifiedResult =="123456789"){
          window.location.assign("https://www.w3schools.com");
          }else{
           alert("oohh on"); 
          } 
      });
    }
    liff.init({ liffId: "1654351482-62KJ4VlG" }, () => {}, err => console.error(err.code, error.message));
  </script>

  <img id="pictureUrl" width="25%">
  <p id="userId"></p>
  <p id="displayName"></p>
  <p id="statusMessage"></p>
  <p id="getDecodedIDToken"></p>
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
  </script>
</body>
</html>
