<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function showdata(str){
  if(str.length == ""){
    document.getElementById('cool').innerHTML = "";
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
  if(this.readyState == 4 && this.onstatus == 100){
      document.getElementById('cool').innerHTML = this.responseText;
  }
}
  xhttp.open("GET","userdata.php?q"+str,true);
  xhttp.send();
}
</script>
</head>
<body>
  <div id="hindu">
    <h1>THE HINDU PAPER</h1>
  </div>
  <div class="logregister">
    <a id="login" href="login.php">LOGIN</a>&nbsp;
    <a id="register" href="register.php">REGISTER &nbsp;&nbsp;</a>
  </div>
  </div>
  <marquee> Viral News is coming By!!!</marquee>
  <div class="auto">
    <img class="center" src="download.png" alt="Adidas">
      <div class="l">
        <p id="def1"> Adidas is the one of the most provocative brands in the  world with it's more interactive showcase of the
        products and brand value</p>
        <span>According to 2017 marketing report Adidas has utmost 21% of the  market share in the world with over 200 billion dollar turn over every year</span>
        <p id="def">Adidas being the world's brand in all most all core ware it also has started few incentives which were good to cherish for!!
        It has agreed to pay over $90,000 dollars to every citizen in Nigeria for the sake of the people who have been infected with Malaria at a large Scale</p>
      </div><br>
      <div class="demo">
          <b>Headlines:</b><strong>Dragon BallZ</strong>
      </div>
      <img class="circle" src="maxresdefault.jpg" alt="DragonBallZ">
      <div class="m">
          <p id="def1">Dragon BallZ being one of the most adventurous cartoon of all time is coming to an end..</p>
          <p id="def">A Standard cartoon known for it's impeccable attention towards the audience and is capable of making a huge fan base across the world</p>
          <p id="def2">The makers are planning to call it an end and make sure that it's final series is more intense and freakier as it introduces Jiren a most powerful and dangerous police from Universe-11</p>
      </div><br>
      <div class="fero">
          <b>Highlights:</b><strong>Syria</strong>
      </div>
      <img class="gear" src="Terroristas.jpg" alt="Syria">
      <div class="n">
          <p id="def1">Back to the times of the then ruler Bashar Al Shaan the President of Syria used to be a great leader and a good enthusiast in development of complete hygiene and greater economic prosperity</p>
          <p id="def">But as the time went he became literally corrupted and exploited the nation,with which the people were vexed up and protested aganist him</p>
          <p id="def2">So he became brutally weird and declared a war on the people and from then almost 3,00,000 peolpe were killed and it's a bloody mass acre going around there</p>
  </div>
  <!--textarea id="cool"></textarea-->
</body>
</html>
