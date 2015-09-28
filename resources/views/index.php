<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Buscador Ubícate</title>

    <!-- prevent the Angular html template displayed -->
    <style>
      [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {display: none !important; }
    </style>

    <script id="loaders">
      /** START_loaders **/
      function loadCSS(href,before,media,callback){"use strict";var ss=window.document.createElement("link");var ref=before||window.document.getElementsByTagName("script")[0];var sheets=window.document.styleSheets;ss.rel="stylesheet";ss.href=href;ss.media="only x";if(callback){ss.onload=callback;}ref.parentNode.insertBefore(ss,ref);ss.onloadcssdefined=function(cb){var defined;for(var i=0;i<sheets.length;i++){if(sheets[i].href&&sheets[i].href===ss.href){defined=true;}}if(defined){cb();}else{setTimeout(function(){ss.onloadcssdefined(cb);});}};ss.onloadcssdefined(function(){ss.media=media||"all";});return ss;}(function(){'use strict';function d(b){return function(){var a=arguments[0],e;e="["+(b?b+":":"")+a+"] http://errors.angularjs.org/1.4.4/"+(b?b+"/":"")+a;for(a=1;a<arguments.length;a++){e=e+(1==a?"?":"&")+"p"+(a-1)+"=";var d=encodeURIComponent,c;c=arguments[a];c="function"==typeof c?c.toString().replace(/ \{[\s\S]*$/,""):"undefined"==typeof c?"undefined":"string"!=typeof c?JSON.stringify(c):c;e+=d(c)}return Error(e)}}(function(b){function a(c,a,b){return c[a]||(c[a]=b())}var e=d("$injector"),n=d("ng");b=a(b,"angular",Object);b.$minErr=b.$minErr||d;return a(b,"module",function(){var c={};return function(b,d,h){if("hasOwnProperty"===b)throw n("badname","module");d&&c.hasOwnProperty(b)&&(c[b]=null);return a(c,b,function(){function c(a,b,d,e){e||(e=f);return function(){e[d||"push"]([a,b,arguments]);return g}}function a(c,e){return function(a,d){d&&"function"===typeof d&&(d.$moduleName=b);f.push([c,e,arguments]);return g}}if(!d)throw e("nomod",b);var f=[],k=[],l=[],m=c("$injector","invoke","push",k),g={_invokeQueue:f,_configBlocks:k,_runBlocks:l,requires:d,name:b,provider:a("$provide","provider"),factory:a("$provide","factory"),service:a("$provide","service"),value:c("$provide","value"),constant:c("$provide","constant","unshift"),decorator:a("$provide","decorator"),animation:a("$animateProvider","register"),filter:a("$filterProvider","register"),controller:a("$controllerProvider","register"),directive:a("$compileProvider","directive"),config:m,run:function(a){l.push(a);return this}};h&&m(h);return g})}})})(window)})(window);(function(e,t){typeof module!="undefined"&&module.exports?module.exports=t():typeof define=="function"&&define.amd?define(t):this[e]=t()})("$script",function(){function p(e,t){for(var n=0,i=e.length;n<i;++n)if(!t(e[n]))return r;return 1}function d(e,t){p(e,function(e){return!t(e)})}function v(e,t,n){function g(e){return e.call?e():u[e]}function y(){if(!--h){u[o]=1,s&&s();for(var e in f)p(e.split("|"),g)&&!d(f[e],g)&&(f[e]=[])}}e=e[i]?e:[e];var r=t&&t.call,s=r?t:n,o=r?e.join(""):t,h=e.length;return setTimeout(function(){d(e,function t(e,n){if(e===null)return y();e=!n&&e.indexOf(".js")===-1&&!/^https?:\/\//.test(e)&&c?c+e+".js":e;if(l[e])return o&&(a[o]=1),l[e]==2?y():setTimeout(function(){t(e,!0)},0);l[e]=1,o&&(a[o]=1),m(e,y)})},0),v}function m(n,r){var i=e.createElement("script"),u;i.onload=i.onerror=i[o]=function(){if(i[s]&&!/^c|loade/.test(i[s])||u)return;i.onload=i[o]=null,u=1,l[n]=2,r()},i.async=1,i.src=h?n+(n.indexOf("?")===-1?"?":"&")+h:n,t.insertBefore(i,t.lastChild)}var e=document,t=e.getElementsByTagName("head")[0],n="string",r=!1,i="push",s="readyState",o="onreadystatechange",u={},a={},f={},l={},c,h;return v.get=m,v.order=function(e,t,n){(function r(i){i=e.shift(),e.length?v(i,r):v(i,t,n)})()},v.path=function(e){c=e},v.urlArgs=function(e){h=e},v.ready=function(e,t,n){e=e[i]?e:[e];var r=[];return!d(e,function(e){u[e]||r[i](e)})&&p(e,function(e){return u[e]})?t():!function(e){f[e]=f[e]||[],f[e][i](t),n&&n(r)}(e.join("|")),v},v.done=function(e){v([null],e)},v})
      /** END_loaders **/

      // load CSS
      loadCSS("css/app.css", document.getElementById("loaders"));
      // load JS asynchronously.
      $script([
        'https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js',
        'js/appscripts.js'
      ], function() {
        // when all is done, execute bootstrap angular application
        angular.bootstrap(document, ['searcherUbicate']); 
      });
    </script>
  </head>
  <body ng-cloak ng-controller="mainController">
    <h1 class="txt-center">Buscador Ubícate</h1>
    
    <div class="pure-g pure-g-r container">
      <!-- filters container -->
      <div class="pure-u-2-5 filters">
        <div class="content-box">
          <div class="pure-form pure-form-stacked"> 
            <legend>¿Quieres saber dónde puedes estudiar la carrera que te interesa?</legend>
            <!-- select area -->
            <div class="pure-control-group">
              <label for="">Área:</label>
              <select name="area" ng-model="Area"
                ng-change="getCareersByArea(Area)"
                ng-options="area for area in areas">
                  <option value="">---Selecciona una área---</option>
              </select>
            </div>

            <!-- select career -->
            <div class="pure-control-group" ng-show="careers">
              <label for="">Carrera:</label>
              <select name="career" ng-model="Career"
                ng-change="getCountries(Career)"
                ng-options="career.name for career in careers">
                  <option value="">---Selecciona una carrera---</option>
              </select>
            </div>

            <!-- select country -->
            <div class="pure-control-group" 
              ng-show="Career && countries.length > 1">
              <label for="">País:</label>
              <select name="country" ng-model="Country"
                ng-options="country for country in countries">
                  <option value="">---Selecciona un país--</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="pure-u-3-5 results">
        <div class="content-box" ng-if="Career">
          <!-- message of results -->
          <p>
            Estas son las universidades en 
            <strong class="itemcountry" 
              ng-if="countries.length > 1 && !Country"
              ng-repeat="country in countries">
              {{ country }}</strong>
            <strong ng-if="Country">
              {{ Country }}
            </strong>
            <strong ng-if="countries.length == 1">
              {{ countries[0] }}
            </strong>
            donde puedes estudiar la carrera de <b>{{ Career.name }}</b>
          </p>
          <!-- items of results -->
          <div class="item-search" ng-if="!Country" 
            ng-repeat="university in Career.universities">
            <img class="universitylogo" ng-src="http://placehold.it/84x84/dddddd/?text=Logo">
            <p><strong>País:</strong> {{ university.country }}</p>
            <p><strong>Universidad:</strong> {{ university.name }}</p>
          </div>

          <div class="item-search" ng-if="Country"
            ng-repeat="university in Career.universities | filter:university.country=Country">
            <img class="universitylogo" ng-src="http://placehold.it/84x84/dddddd/?text=Logo">
            <p><strong>País:</strong> {{ university.country }}</p>
            <p><strong>Universidad:</strong> {{ university.name }}</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>