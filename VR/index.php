<!DOCTYPE html>

<head>
    <title>VR</title>
    <script src="lib/aframe-master.min.js"></script>
    <script src="lib/aframe-physics-system.min.js"></script>
    <script src="https://cdn.rawgit.com/zcanter/aframe-gradient-sky/master/dist/gradientsky.min.js"></script>
</head>

<body>
   
    <a-scene physics>
        
        <!-- Using Color to BG -->
        <!-- <a-sky color="#6EBA47"></a-sky> -->
           <a-assets>
                    <a-asset-item id="obj1" src="models/monyet.obj" crossorigin="anonymous" ></a-asset-item>
                    <a-asset-item id="mtl1" src="models/monyet.mtl" crossorigin="anonymous"></a-asset-item>
            </a-assets>

            <a-sky id="skyid" material="src:https://cdn.glitch.com/19dba616-2c09-4b5d-9168-e9bb790b4853%2Fpoint2.jpg?1544706553926"
            animation__top="property:material.topColor;startEvents:startSkyAnim;autoplay:false;to:#ffffff"
            animation__bottom="property:material.bottomColor;startEvents:startSkyAnim;autoplay:false;to:#ffffff"
            animation__middle="property:material.middleColor;startEvents:startSkyAnim;autoplay:false;to:#ffffff">
            </a-sky>
            
            <a-obj-model src="#obj1" mtl="#mtl1" position="0 1 -4" scale =".001 .001 .001"></a-obj-model>
            <a-sphere position="0 1.25 -5" rotation="2.25" color="#EF2D5E" ></a-sphere>
            <a-sphere position="0 1.4 -4" rotation="2.25" color="white" radius="0.2" ></a-sphere>
            <a-sphere position="0 1.4 -3.5" rotation="2.25" color="black" radius="0.1" ></a-sphere>
            <a-cylinder position="-1 0.75 -5" rotation="45 45 -15" radius="0.5" height="1.5" color="green" ></a-cylinder>
            <a-box position="-2 0 -5" rotation="0 0 0" color="blue" ></a-box>
            <a-cone position="1 0.9 -5" rotation="0 45 0" color="black" ></a-cone>
            <a-torus color="gold" position="0 2.5 -3" rotation="90" arc="0" radius="0.31" radius-tubular="0.1"></a-torus>
            <a-obj-model src="#obj1" mtl="#mtl1" position="-6 0 -4"></a-obj-model>
        

            <a-plane position="0 -1 -5" rotation="-90 0 0" width="10" height="4" color="white"  static-body></a-plane>
       
        <!-- Object Model -->
      

    <a-entity material="src: #bg; side: back; shader: flat" 
                geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 32">
</a-entity>
         <a-camera position="0 0 0">
            <a-cursor color="#ccc"></a-cursor>
        </a-camera>

    </a-scene>
   
  
</body>

</html>