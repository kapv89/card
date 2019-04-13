<?php
$e = function($str) { echo htmlentities($str); };
?>

<doctype html>
<html>
  <head>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat');
    </style>
    <style>
html {
  height: 100%;
  background: #000;
}

.texture {
  width: 700px;
  margin: 49px auto;
  height: calc(43vh - 49px);
  overflow: hidden;
  background: #c6c6c6;
}

#logo {
  color: #000;
  margin-top: calc(19vh - 14px);
  text-align: center;
  font-family: 'Montserrat';
  font-size: 47px;
}

#role {
  color: #05c3f9;
  text-align: center;
  font-family: 'Montserrat';
  font-size: 27px;
  margin-top: 94px
}

#phone {
  color: #494949;
  text-align: center;
  font-family: 'Montserrat';
  font-size: 23px;
  margin-top: 94px
}

#email {
  color: #474846;
  text-align: center;
  font-family: 'Montserrat';
  font-size: 23px;
  margin-top: -33px;
}

#front {
  margin-bottom: 4px;
}

#back {
  margin-top: 5px;
}
    </style>
  </head>
  <body>
    <div id="front" class="texture">
      <div>
        <h4 id="logo">
          <span style="color:#800c0c">const<span> <span style="color: #05c3f9">kapv89Consulting</span><span style="color: #000">;</span>
        </h4>
      </div>
    </div>

    <div id="back" class="texture">
      <div>
        <h6 id="role">
          <span style="color:rgb(233, 144, 2)">(</span><span style="color:#000">kt</span><span style="color:rgb(233, 144, 2)">)</span><span style="color:#800c0c"> => </span><span style="color:rgb(233, 144, 2)"><?= $e('<') ?></span><span style="color:#000">ProductConsultant</span>&nbsp;<span style="color:rgb(233, 144, 2)">{</span><span style="color:#800c0c">...</span><span style="color:rgb(233, 144, 2)">{</span><span style="color:#000">kt</span><span style="color:rgb(233, 144, 2)">}</span><span style="color:rgb(233, 144, 2)">}</span></span><span style="color:#800c0c">/</span><span style="color:rgb(233, 144, 2)"><?= $e('>') ?></span>
        </h6>

        <h6 id="phone">
          +91-9958336777
        </h6>

        <h6 id="email"> 
          kapv89@gmail.com
        </h6>
      </div>
    </div>
  </body>
</html>
