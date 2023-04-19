<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
#search{
  border-radius: 16px;
    border: none;
    width: 80%;
    padding: 12px;
    font-weight: bold;
    outline: none;

}
body{
  height:100%
}
#search_res li label a{
        
        color: rgb(0, 0, 0);
        text-decoration: none;
          margin: 10px;
        }
        #search_res{
          color: rgb(0, 0, 0);
            font-weight: bold;
            /* position: absolute; */
            background: linear-gradient(180deg, #a5303066, #411f3be6);
            /* top: 159%; */
            width: 113%;
            left: 41%;
            /* transform: translate(-50%, -50%); */
            z-index: 2;
            width: 80%;
            border: 2px white solid;
            text-align: left;
            padding: 20px;
        }
        .link{
        
          color: #c3c1e3;
          color: #c3c1e3;
            margin: 10px;
        }
        .link:hover{
        color:white;
        cursor:pointer
        
        
        }
        #linkbox a { 
        text-decoration: none;
         float: right
        }
        
        .dropbtn {
          background-color: #c3c1e3;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
        }
        
        .dropdown {
          position: relative;
          display: inline-block;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #1f000eab;
          min-width: 160px;
          border-radius: 20px;
          border:2px white solid;
          /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
          z-index: 1;
        }
        
        .dropdown-content a {
          color: white;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown-content a:hover {background-color: hsl(0, 0%, 100%);}
        
        .dropdown:hover .dropdown-content {display: block;}
        
        .dropdown:hover .dropbtn {background-color: #c3c1e3;}
        
        
          .button {
          background-color: #c3c1e3; /* Green */
          border: none;
          color: rgb(0, 0, 0);
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 10px 10px;
          cursor: pointer;
        }
        
        .button2 {background-color: #c3c1e3;} /* Black */
        .button3 {background-color: #c3c1e3;} /* Black */ 
        .button4 {background-color: #c3c1e3;} /* Black */ 
        
        
        #t01 th {
          background-color: black;
          color: white;
        }
        
        body, html {
          height: 100%;
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
          box-sizing: border-box;
        }
        nav{
          top: 0;
            position: fixed;
            z-index: 100;
            width: 100%;
            display : flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px;
            background: linear-gradient(180deg, #1b58c2, #1d1d48c9);
        }
        nav label{
        
        font-weight: bold;
        font-size: 20px;
        color:beige
        
        }

         .bg-image {
          background-image: url(data:image/jpeg;base64,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);
            filter: blur(8px);
            -webkit-filter: blur(8px);
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: -1;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Position text in the middle of the page/image */
.bg-text {
  color: white;
    font-weight: bold;
    /* position: absolute; */
    height: 100%;
    bottom: -66%;
    /* left: 55%; */
    padding: 40px 20px 20px 120px;
    /* transform: translate(-50%, -50%); */
    z-index: 2;
    width: 70%;
    /* padding: 20px; */
    text-align: middle;
}
.bg-text button{
  border-radius: 60px;
    margin: 90px;
    background: linear-gradient(90deg, #1b58c2, #f65050);
    text-decoration: none;
    color: white;
    font-size: 25px;

}
    </style>
</head>
<body>
<div class="bg-image"></div>
<nav><label>Here We Go Futbol</label>
<div id = "linkbox">
   <a href = "#">
     <label class = link style = "color:white"
 >Home</label>
    </a> 
    <a href = "./Aboutus.html"><label class = link style = "border-right: 3px white solid;
      padding-right: 15px;">About us</label></a>
  </div>
</nav>



<div class="bg-text">
  <button class="button button2" onclick="window.location = 'home.html'">Home</b></a></button>
  <div class="dropdown">
    <button class="dropbtn">Explore</button>
    <div class="dropdown-content">
      <a href="Explore.html">League of Ireland</a>
    </div>
  </div>
  <button class="button" onclick="window.location='player profile.html'">Profile</b></a></button></h2>
  </div>
</div>
<?php
$servername = "sql107.epizy.com";
$username = "epiz_33782235";
$password = "bTcAbg6O01iPz";
$dbname = "epiz_33782235_herewegofutbol";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
print "Welcome back{$_POST["email"]}<BR>";
?>
</body>
</html>
