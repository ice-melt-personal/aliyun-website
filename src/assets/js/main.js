// 评论
export function createComment(){
var appid = 'cytRPCpOX';
var conf = 'prod_1e65dc7b851067d2e5fa952e667c6b16';
var width = window.innerWidth || document.documentElement.clientWidth;
if (width < 960) {
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); }
}

// 首页特效，3D球
export function createHomeSE1(){
  //8,8,12,"+v+"
  (function(){function w(){h.globalCompositeOperation="source-over";h.fillStyle="rgba(8,8,12,"+v+")";h.fillRect(0,0,f,k);h.globalCompositeOperation="lighter";.75>v&&(v+=.05);D=s-x;E=t-y;x=s;y=t;for(var a=f/1.15,l=f/8,p=f/2,r=Math.random,F=Math.abs,w=Math.sqrt,A=Math.cos,B=Math.sin,C=Math.atan2,G=1350;G--;){var e=H[G],g=e.x,c=e.y,d=e.vX,b=e.vY,q=g-s,m=c-t,n=w(q*q+m*m),m=C(m,q),q=A(m),m=B(m);if(z&&n<p)var u=14*(1-n/p),d=d+(q*u+.5-r()),b=b+(m*u+.5-r());n<a&&(u=(1-n/a)*f*.0014,d-=q*u,b-=m*u);n<l&&(n=(1-
    n/l)*f*2.2E-4,d+=D*n,b+=E*n);d*=.96;b*=.96;F(d);F(b);g+=d;c+=b;g>f?g-=f:0>g&&(g=f+g);c>k?c-=k:0>c&&(c=k+c);e.vX=d;e.vY=b;e.x=g;e.y=c;d=e;b=g/f*Math.PI*2;c=c/k*Math.PI;b={theta:b,phi:c,x:-100*Math.sin(c)*Math.sin(b),y:-100*Math.cos(c),z:-100*Math.sin(c)*Math.cos(b)};d.pos3D=b;e.pos3D.z-=200;-299>e.pos3D.z||(d=300/(300+e.pos3D.z),b=e.pos3D.x*d+f/2,c=e.pos3D.y*d+k/2,h.fillStyle=e.color,h.beginPath(),h.arc(b,c,d,0,I,!0),h.closePath(),h.fill())}}function r(a){f=document.documentElement.clientWidth;k=document.documentElement.clientHeight;
    p.width=f;p.height=k}function A(a){a=a?a:window.event;s=x=a.pageX;t=y=a.pageY;document.onmousemove=B}function B(a){a=a?a:window.event;s=a.pageX;t=a.pageY}function C(a){z=!0;return!1}function J(a){return z=!1}function K(){this.color="rgb("+Math.floor(255*Math.random())+","+Math.floor(255*Math.random())+","+Math.floor(255*Math.random())+")";this.size=this.vY=this.vX=this.x=this.y=0;this.pos3D={x:0,y:0,z:100}}var p,h,f=1E3,k=560,H=[],I=2*Math.PI,v=0,s,t,D=0,E=0,x=0,y=0,z=!1;window.onload=function(){p=
    document.getElementById("mainCanvas");if(p.getContext){document.getElementById("outer");document.getElementById("canvasContainer");h=p.getContext("2d");window.moveTo(0,0);window.resizeTo(screen.width,screen.height);r(null);for(var a=1350;a--;){var l=new K;l.x=.5*f;l.y=.5*k;l.vX=Math.cos(a)*Math.random()*40;l.vY=Math.sin(a)*Math.random()*20;l.size=2;H[a]=l}document.onmousedown=C;document.onmouseup=J;document.onmousemove=A;window.onresize=r;r(null);setInterval(w,33)}}})();

  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

  try {
    var pageTracker = _gat._getTracker("UA-11054609-1");
    pageTracker._trackPageview();
  } catch(err) {}

}

// 首页特效,波浪
export function createHomeSE2(){
  var _hmt = _hmt || []; (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?91d4d97aeea60cc72e4822c0aa248da6";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
  (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] ||
      function() { (i[r].q = i[r].q || []).push(arguments)
      },
      i[r].l = 1 * new Date();
      a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-83967883-1', 'auto');
  ga('send', 'pageview');

}

// 首页特效,巧克力
export function createHomeSE3(){
  !function(t){var e={};function i(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,i),o.l=!0,o.exports}i.m=t,i.c=e,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)i.d(n,o,function(e){return t[e]}.bind(null,o));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="",i(i.s=1)}([function(t,e,i){},function(t,e,i){"use strict";i.r(e);i(0);var n=function(t){return t*Math.PI/180},o=function(t,e,i,n,o){return(t-e)/(i-e)*(o-n)+n};var r=function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.geom=new THREE.ConeBufferGeometry(.3,.5,32),this.rotationX=0,this.rotationY=0,this.rotationZ=n(-180)};var s=function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.size=.25,this.geom=new THREE.TorusGeometry(this.size,.08,30,200),this.rotationX=n(90),this.rotationY=0,this.rotationZ=0};var a=function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.geom=new THREE.CylinderGeometry(.3,.3,.2,64),this.rotationX=0,this.rotationY=0,this.rotationZ=n(-180)};function h(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}(new(function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)}var e,i,c;return e=t,(i=[{key:"setup",value:function(){this.gutter={size:4},this.meshes=[],this.grid={rows:11,cols:7},this.width=window.innerWidth,this.height=window.innerHeight,this.mouse3D=new THREE.Vector2,this.geometries=[new r,new s,new a],this.raycaster=new THREE.Raycaster}},{key:"createScene",value:function(){this.scene=new THREE.Scene,this.renderer=new THREE.WebGLRenderer({antialias:!0,alpha:!0}),this.renderer.setSize(window.innerWidth,window.innerHeight),this.renderer.setPixelRatio(window.devicePixelRatio),this.renderer.shadowMap.enabled=!0,this.renderer.shadowMap.type=THREE.PCFSoftShadowMap,document.body.appendChild(this.renderer.domElement)}},{key:"createCamera",value:function(){this.camera=new THREE.PerspectiveCamera(20,window.innerWidth/window.innerHeight,1),this.camera.position.set(0,65,0),this.camera.rotation.x=-1.57,this.scene.add(this.camera)}},{key:"addAmbientLight",value:function(){var t=new THREE.AmbientLight("#ffffff",1);this.scene.add(t)}},{key:"addSpotLight",value:function(){var t=new THREE.SpotLight("#7bccd7",1,1e3);t.position.set(0,27,0),t.castShadow=!0,this.scene.add(t)}},{key:"addRectLight",value:function(){var t=new THREE.RectAreaLight("#341212",1,2e3,2e3);t.position.set(5,50,50),t.lookAt(0,0,0),this.scene.add(t)}},{key:"addPointLight",value:function(t,e){var i=new THREE.PointLight(t,1,1e3,1);i.position.set(e.x,e.y,e.z),this.scene.add(i)}},{key:"addFloor",value:function(){var t=new THREE.PlaneGeometry(100,100),e=new THREE.ShadowMaterial({opacity:.3});this.floor=new THREE.Mesh(t,e),this.floor.position.y=0,this.floor.receiveShadow=!0,this.floor.rotateX(-Math.PI/2),this.scene.add(this.floor)}},{key:"getRandomGeometry",value:function(){return this.geometries[Math.floor(Math.random()*Math.floor(this.geometries.length))]}},{key:"createGrid",value:function(){this.groupMesh=new THREE.Object3D;for(var t=new THREE.MeshPhysicalMaterial({color:"#3e2917",metalness:.58,emissive:"#000000",roughness:.05}),e=0;e<this.grid.rows;e++){this.meshes[e]=[];for(var i=0;i<1;i++)for(var n=this.getTotalRows(e),o=0;o<n;o++){var r=this.getRandomGeometry(),s=this.getMesh(r.geom,t);s.position.y=0,s.position.x=o+o*this.gutter.size+(n===this.grid.cols?0:2.5),s.position.z=e+e*(i+.25),s.rotation.x=r.rotationX,s.rotation.y=r.rotationY,s.rotation.z=r.rotationZ,s.initialRotation={x:s.rotation.x,y:s.rotation.y,z:s.rotation.z},this.groupMesh.add(s),this.meshes[e][o]=s}}var a=-this.grid.cols/2*this.gutter.size-1,h=-this.grid.rows/2-.8;this.groupMesh.position.set(a,0,h),this.scene.add(this.groupMesh)}},{key:"getTotalRows",value:function(t){return t%2==0?this.grid.cols:this.grid.cols-1}},{key:"getMesh",value:function(t,e){var i=new THREE.Mesh(t,e);return i.castShadow=!0,i.receiveShadow=!0,i}},{key:"draw",value:function(){this.raycaster.setFromCamera(this.mouse3D,this.camera);var t,e,i,r,s=this.raycaster.intersectObjects([this.floor]);if(s.length)for(var a=s[0].point,h=a.x,c=a.z,d=0;d<this.grid.rows;d++)for(var u=0;u<1;u++)for(var l=this.getTotalRows(d),f=0;f<l;f++){var w=this.meshes[d][f],y=(t=h,e=c,i=w.position.x+this.groupMesh.position.x,r=w.position.z+this.groupMesh.position.z,Math.sqrt(Math.pow(t-i,2)+Math.pow(e-r,2))),p=o(y,7,0,0,6);TweenMax.to(w.position,.3,{y:p<1?1:p});var g=w.position.y/1.2,v=g<1?1:g;TweenMax.to(w.scale,.3,{ease:Expo.easeOut,x:v,y:v,z:v}),TweenMax.to(w.rotation,.7,{ease:Expo.easeOut,x:o(w.position.y,-1,1,n(270),w.initialRotation.x),z:o(w.position.y,-1,1,n(-90),w.initialRotation.z),y:o(w.position.y,-1,1,n(45),w.initialRotation.y)})}}},{key:"init",value:function(){this.setup(),this.createScene(),this.createCamera(),this.createGrid(),this.addFloor(),this.addAmbientLight(),this.addSpotLight(),this.addRectLight(),this.addPointLight(16773120,{x:0,y:10,z:-100}),this.addPointLight(7952190,{x:100,y:10,z:0}),this.addPointLight(12743737,{x:20,y:5,z:20}),this.animate(),window.addEventListener("resize",this.onResize.bind(this)),window.addEventListener("mousemove",this.onMouseMove.bind(this),!1),this.onMouseMove({clientX:0,clientY:0})}},{key:"onMouseMove",value:function(t){var e=t.clientX,i=t.clientY;this.mouse3D.x=e/this.width*2-1,this.mouse3D.y=-i/this.height*2+1}},{key:"onResize",value:function(){this.width=window.innerWidth,this.height=window.innerHeight,this.camera.aspect=this.width/this.height,this.camera.updateProjectionMatrix(),this.renderer.setSize(this.width,this.height)}},{key:"animate",value:function(){this.draw(),this.renderer.render(this.scene,this.camera),requestAnimationFrame(this.animate.bind(this))}}])&&h(e.prototype,i),c&&h(e,c),t}())).init()}]);
}
