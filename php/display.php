<!DOCTYPE html>
<html>

<head>
  <link href="./image/my_img.webp" rel="icon" style="border-radius:50%;">
   <link href="./image/my_img.webp" rel="apple-touch-icon" style="border-radius:50%;">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=New+Tegomin&display=swap');

    * {
      margin: 0;
      padding: 0;
      color: #fff;
      box-sizing: border-box;
      font-family: 'New Tegomin', serif;
      background: #000;
    }

    .container {
      padding: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .container button {
      margin: 10px;
      padding: 10px;
      border-radius: 20px;
      background: rgb(255, 255, 255, 0.250);
      color: #ff0000;
      font-size: 22px;
      font-weight: bold;
      text-align: center;
      text-shadow: 2px 2px 5px #000;
      text-transform: uppercase;
      letter-spacing: 2px;
      cursor: pointer;
    }
    .container button:hover {
      color: #000;
      text-shadow: 1px 1px 0px red,
      -1px -1px 0px red;
      border: 1px solid rgb(255, 255, 255, 0.500);
    }
    .active {
      display: none;
    }
    #txtHint {
        width:98%;
        height:100%;
    }
  </style>
  <script>
    function showUser() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML =
            this.responseText;
        }
      };
      xhttp.open("GET", "data.php", true);
      xhttp.send();
    }
  </script>
</head>

<body>
  <div class="container">
    <button type="button" onclick="showUser()">Show users data</button>
    <div id="txtHint"><b>Person info will be listed here....</b></div>
  </div>
</body>
<script>
  const btn = document.querySelector("button");
  console.log(btn);
    btn.addEventListener('click', () => {
      btn.classList.add("active");
    });
</script>
</html