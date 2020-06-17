<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sbac Care</title> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
  <style>
    #pictureUrl { display: block; margin: 0 auto }
  </style>
</head>
<body>
  <div class="container">
  <h2>Sbac Care</h2>
  <div class="card" style="width:400px">
    <img class="card-img-top"id="pictureUrl" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><p id="displayName"></p></h4>
      <p class="card-text" id="statusMessage"></p>
    </div>
  </div>
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
        const stringifiedResult = JSON.stringify(result);
        alert(stringifiedResult);
        document.getElementById("scanCode").textContent = stringifiedResult;
      if (stringifiedResult.value === "123") {
            location.replace("https://www.w3schools.com")
        }

      });
    }
    liff.init({ liffId: "1654351482-62KJ4VlG" }, () => {}, err => console.error(err.code, error.message));
  </script>
</body>
</html>
