<?php

include 'config.php';

?>
<html>

    <head>
        <!-- BootStrap Library -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../src/css/fill_chart.css">
        <link rel="stylesheet" href="../src/css/drinks.css">

        <title>Got Your Bac</title>
        <meta charset="utf-8">
    </head>

    <body>
        <!-- https://codepen.io/junebug12851/pen/mJZNqN -->
            <!--
            Inspired by Code Pen User
            Jamie Dixon, with this pen
            https://codepen.io/JamieDixon/pen/Pqrjvv

            I cleaned up a lot of errors and redundant stuff
            then made it more awesome and customizeable
            -->

        <div class="wrapper">
                
            <div class="drinks-container w3-display-topright"> 
              <div class="drink beer">
                <svg viewbox="0 0 201 350" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                  <defs>
                    <clipPath id="beer-clippath">
                      <path d="M41.17,330c-0.375,0 -0.75,-0.053 -1.1,-0.142l-0.07,-0.018c-1.81,-0.5 -3.19,-2.15 -3.36,-4.19l-25,-305.65l-0.092,0l-1.656,-20l180.217,0l-1.657,20l-0.092,0l-25,305.64c-0.21,2.47 -2.17,4.36 -4.54,4.36l-117.65,0Z" fill="#000"/>
                    </clipPath>
                  </defs>
                  <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/395186/beer-pint-base.svg" x="0" y="0" width="100%" height="100%"/>
                  <g class="glass-fill" clip-path="url(#beer-clippath)">
                    <rect x="0" y="20" width="41" height="330"/>
                    <rect x="40" y="20" width="31" height="330"/>
                    <rect x="70" y="20" width="31" height="330"/>
                    <rect x="100" y="20" width="100" height="330"/>
                    <rect class="froth" x="0" y="0" width="210" height="20"/>
                  </g>
                </svg>
                <div class="w3-display-bottommiddle">
                  <input type="text" class="w3-input" name="amount"/>
                  <label for="amount">oz</label>
                </div>
                <div class="w3-display-bottomright">
                  <button class="beer-std-drink">Std drink</button>
                </div>
              </div>
              <div class="drink wine">
                <svg viewbox="0 0 161 301">
                  <clipPath id="wine-clippath">
                    <path d="M80.125,138.75c-5.973,0 -12.822,-1.152 -19.834,-3.387l-0.166,-0.053c-6.667,-2.123 -13.482,-5.221 -19.849,-9.235l-0.151,-0.095c-16.52,-10.43 -30,-26.96 -30,-48.48c0,-12.61 7.5,-38.75 16.47,-56.25l106.64,0c9.01,17.75 16.89,43.64 16.89,56.25c0,38.585 -44.017,61.162 -69.848,61.25l-0.152,0Z" fill="#000"/>
                  </clipPath>
                  <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/395186/wine.svg" x="0" y="0" width="100%" height="100%"></image>
                  <g class="glass-fill" clip-path="url(#wine-clippath)">
                    <rect x="10" y="20" width="31" height="120"/>
                    <rect x="40" y="20" width="21" height="120"/>
                    <rect x="60" y="20" width="21" height="120"/>
                    <rect x="80" y="20" width="70" height="120"/>
                  </g>
                </svg>
                <div class="size">
                  <p data-size="0.4">Small</p>
                  <p data-size="0.7">Medium</p>
                  <p class="current" data-size="1">Large  </p>
                </div>
              </div>
              <div class="drink whisky">
                <svg viewbox="0 0 180 191">
                  <clipPath id="whisky-clippath">
                    <path d="M15.03,160c-2.78,0 -5.03,-2.25 -5.03,-5.03l0,-94.97l160,0l0,94.97c0,2.78 -2.25,5.03 -5.03,5.03l-149.94,0Z" fill="#000"/>
                  </clipPath>
                  <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/395186/whisky.svg" x="0" y="0" width="100%" height="100%"></image>
                  <g class="glass-fill" clip-path="url(#whisky-clippath)">
                    <rect x="10" y="60" width="21" height="100"/>
                    <rect x="30" y="60" width="31" height="100"/>
                    <rect x="60" y="60" width="31" height="100"/>
                    <rect x="90" y="60" width="80" height="100"/>
                  </g>
                </svg>
                <div class="size">
                  <p data-size="0.5">Single</p>
                  <p data-size="0.7">Single +</p>
                  <p data-size="1">Double</p>
                </div>
              </div>
              <div class="drink alcopop">
                <svg viewbox="0 0 101 326">
                  <clipPath id="alcopop-clippath">
                    <path d="M14.71,311.088c-2.932,0 -5.71,-2.778 -5.71,-5.71l0,-160.29c0,-9.719 3.777,-19.211 10.727,-26.728c0.081,-0.091 0.089,-0.184 0.182,-0.267l0.091,-0.148l0,193.143l-5.29,0ZM20,311.088l0,-192.92c3,-3.15 6.535,-5.92 10.533,-8.078c1.964,-1.051 3.489,-2.749 4.34,-4.781l-0.003,-0.148l0.13,0.037c0,-1.117 0.653,-2.173 0.71,-3.275l3.732,-81.835l21.061,0l3.337,81.836c0.152,3.669 1.946,6.715 5.008,8.401c12.65,6.985 20.152,19.965 20.152,34.763l0,160.21c0,2.895 -1.729,5.79 -4.79,5.79l-64.21,0Z" fill="#000"/>
                  </clipPath>
                  <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/395186/bottle-base.svg" x="0" y="0" width="100%" height="100%"></image>
                  <g class="glass-fill" clip-path="url(#alcopop-clippath)">
                    <rect x="0" y="0" width="21" height="325"/>
                    <rect x="20" y="0" width="16" height="325"/>
                    <rect x="35" y="0" width="16" height="325"/>
                    <rect x="50" y="0" width="40" height="325"/>
                  </g>
                </svg>
                <div class="size">
                  <p data-size="1">Standard Bottle</p>
                </div>
              </div>
            </div>
        </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="../src/drinks.js"></script>
    </body>
</html>
