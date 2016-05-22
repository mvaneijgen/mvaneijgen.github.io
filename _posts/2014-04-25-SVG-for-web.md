---
layout: post
title:  SVG animation on the web
author: Mitchel van Eijgen
date:   2015-02-25 16:41:48
categories: Experiment
filter: code
image: svg.jpg
embed: GaIyC
color: 037cb9
clippath: polygon(100% 0, 100% 100%, 60% 100%, 50% 80%, 40% 100%, 0 100%, 0 0)
---

Twee jaar geleden dachten wij een goed idee te hebben, een HTML app maken voor alle mobiele platformen en omdat we houden van schaalbare (responsive) oplossingen, zou SVG de perfecte oplossingen zijn geweest. Alleen werd SVG niet ondersteund op android 2.X wat op dat moment de grootste versie was. Nu zijn wij een aantal jaar later en ben ik zelf nog artikelen tegen gekomen over SVG, maar heb deze altijd afgehouden omdat ik wist dat er zo weinig support voor was. Nu was ik aan het luisteren naar een podcast (<a href="http://5by5.tv/webahead/67">The Web Ahead aflevering 67)</a> deze aflevering staat helemaal in het teken van SVG, door deze aflevering zijn wij er weer helemaal in gedoken. Persoonlijk dacht ik zelf nooit dat het zin zou hebben icon fonts te vervangen voor SVG icons, maar daar ben ik nu van terug gekomen.

<!--more-->

<img src="http://www.s210.nl/wp-content/uploads/2014/08/peekeye.png"> <span style="font-size: 40px;">vs</span><img src="http://www.s210.nl/wp-content/uploads/2014/08/peekeye.svg">


Ik wil hieronder een kleine sprong in de wereld van SVG maken (Scalable Vector Graphics) en laten zien wat er mogelijk is. Het eerste wat ik wil aan aankaarten is het voorbeeld hierboven. Niet alleen is de file veel kleiner, het hele element is stijlbaar met CSS.

<p data-height="268" data-theme-id="0" data-slug-hash="pfoil" data-default-tab="result" data-user="mvaneijgen" class='codepen'>See the Pen <a href='http://codepen.io/mvaneijgen/pen/pfoil/'>Test icon for blogpost on S210.nl</a> by Mitchel van Eijgen (<a href='http://codepen.io/mvaneijgen'>@mvaneijgen</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>

Zie hier precies dezelfde SVG element als net, alleen wat kleuren veranderd. Ook blijft het altijd haarscherp in tegenstelling tot het PNG formaat schaalt het SVG element mee. Met de kennis dat SVG elementen te stijlen zijn met CSS kun je het ook één stap verder gaan met de CSS animaties.

<p data-height="268" data-theme-id="0" data-slug-hash="GaIyC" data-default-tab="result" data-user="mvaneijgen" class='codepen'>See the Pen <a href='http://codepen.io/mvaneijgen/pen/GaIyC/'>SVG animation pure CSS </a> by Mitchel van Eijgen (<a href='http://codepen.io/mvaneijgen'>@mvaneijgen</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>

Omdat dit geen technische blog is zal ik niet te diep op alle aspecten van SVG, maar als je geïnteresseerd bent zou ik voorstellen wat rond te spelen met de hierboven gegeven voorbeelden of als je vragen hebt mail mij op mvaneijgen@gmail.com.

Nog een kleine recap SVG files zijn meestal kleiner, blijven schaalbaar en bewerkbaar met CSS en zijn heel makkelijk te animeren en responsive te maken.
