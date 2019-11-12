<?php Header ("Content-type: text/css; charset=utf-8");?> 
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)*/


   header, html, body, div, span, applet, object, iframe,
   h1, h2, h3, h4, h5, h6, p, blockquote, pre,
   a, abbr, acronym, address, big, cite, code,
   del, dfn, em, img, ins, kbd, q, s, samp,
   small, strike, strong, sub, sup, tt, var,
   b, u, i, center,
   dl, dt, dd, ol, ul, li,
   fieldset, form, label, legend,
   table, caption, tbody, tfoot, thead, tr, th, td,
   article, aside, canvas, details, embed, 
   figure, figcaption, footer, header, hgroup, 
   nav, output, ruby, section, summary,
   time, mark, audio, video {
       margin: 0;
       padding: 0;
       border: 0;
       font-size: 100%;
       font: inherit;
       vertical-align: baseline;
   }
   /* HTML5 display-role reset for older browsers */
   article, aside, details, figcaption, figure, 
   footer, header, hgroup, menu, nav, section {
       display: block;
   }
   body {
       line-height: 1;
   }
   ol, ul {
       list-style: none;
   }
   blockquote, q {
       quotes: none;
   }
   blockquote:before, blockquote:after,
   q:before, q:after {
       content: '';
       content: none;
   }
   table {
       border-collapse: collapse;
       border-spacing: 0;
   }
   /* The above is the reset we use */
   /*..................................
   ...................................
   ....................................
   ..................................*/
 .bordertest
 {
     border:5px solid black;
 }

 .colormenu
 {
     background-color:#ffe34d;
     border-radius:14px
     
 }
 .colormenu :hover{
    color:black;
 }
 .textcolorgray{
    color:darkgray;
 }
 .textcolorblack{
     color:black;
 }
 .fontuse{
    font-family:Poppins, sans-serif, Arial, Helvetica;
}
.fontweightheavy{
    font-weight:700;
}
.fontweightmedium{
    font-weight: 650
}
.fontweightbold{
    font-weight:bold;
}
.fontweightnormal{
   font-weight:normal;
}
.fontsizesmall{
    font-size:15px;
}
.fontsizeverybig{
   font-size:55px;
}
.fontsizebig{
    font-size:25px;
}
.fontsizemedium{
    font-size:17px;
}
.fontsizeverysmall{
    font-size:13px;
}
.fontsizeinpx{
    font-size: 2em;
}
.textcolorwhite{
    color:white;
}
.dropdown{
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffe34d;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 12px;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
.dropdown-content a:hover {background-color: orange;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: orange;}
.dropbtn {
    background-color: #ffe34d;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    border-radius: 12px;
  }


div.generic {
    position:absolute;
    z-index:9999999;
    top:50%; 
    left:28%; 
    right:auto; 
    bottom:auto; 
}
div.generic1 {
    position:absolute;
    z-index:9999999;
    top:47%; 
    left:38%; 
    right:auto; 
    bottom:auto; 
}
div.generic-error{
    position:absolute;
    z-index:9999999;
    top:60%; 
    left:38%; 
    right:auto; 
    bottom:auto; 
    color:Red;
}
.active-pink{
    border-radius:12px;
}
.active-pink input[type=text]:focus:not([readonly]) {
    border-bottom: 1px solid orange;
    box-shadow: 0 1px 0 0 orangered;
 }
    .active-pink input[type=text] {
    border-bottom: 1px solid orange;
    box-shadow: 0 1px 0 0 orangered;
}
    .active-pink .fa, .active-pink-2 .fa {
    color: black;
}
.featurebody {
   background: url(/assets/backgroundworld.jpg);
    color: #000305;
    text-align: left;
    background-size:cover;
}
.Box{ 
    display: inline-block; 
    width: 320x;
    padding: 36px;
    border: 0;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    background-color: white;
    border-radius: 12px;                
    margin-left:2%
}
#my_image{
    width:100px;
}
.falsespace{
    height:50px;
}
#tempbox{
    background-color: #DCDCDC;
}
.tempbtn {
    background-color: antiquewhite;
    color: black;
    padding: 16px;
    font-size: 20px;
    border: none;
    border-radius: 15px;
}
.paragraph{
    margin: 170px 0;
    padding: 0 0 0 80px;
    color:#80FFC0;
}