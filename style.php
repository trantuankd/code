
  /*!
 * Bootstrap v3.3.6 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  margin: .67em 0;
  font-size: 2em;
}
mark {
  color: #000;
  background: #ff0;
}
small {
  font-size: 80%;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -.5em;
}
sub {
  bottom: -.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  height: 0;
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font: inherit;
  color: inherit;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  padding: .35em .625em .75em;
  margin: 0 2px;
  border: 1px solid #c0c0c0;
}
legend {
  padding: 0;
  border: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;

    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';

  src: url('/blogger/anhcuoi/fonts/glyphicons-halflings-regular.eot');
  src: url('/blogger/anhcuoi/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('/blogger/anhcuoi/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('/blogger/anhcuoi/fonts/glyphicons-halflings-regular.woff') format('woff'), url('/blogger/anhcuoi/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('/blogger/anhcuoi/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\002a";
}
.glyphicon-plus:before {
  content: "\002b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-btc:before {
  content: "\e227";
}
.glyphicon-xbt:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-jpy:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-rub:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
html {
  font-size: 10px;

  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  display: inline-block;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all .2s ease-in-out;
       -o-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 36px;
}
h2,
.h2 {
  font-size: 30px;
}
h3,
.h3 {
  font-size: 24px;
}
h4,
.h4 {
  font-size: 18px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 21px;
  }
}
small,
.small {
  font-size: 85%;
}
mark,
.mark {
  padding: .2em;
  background-color: #fcf8e3;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    overflow: hidden;
    clear: left;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #eee;
  border-left: 0;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  -webkit-box-shadow: none;
          box-shadow: none;
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 34px;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 46px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  vertical-align: middle;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  min-height: 34px;
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-right: 0;
  padding-left: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 32px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.form-group-lg select.form-control {
  height: 46px;
  line-height: 46px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 46px;
  min-height: 38px;
  padding: 11px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 25px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 18px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px;
  }
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
  opacity: .65;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  font-weight: normal;
  color: #337ab7;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity .15s linear;
       -o-transition: opacity .15s linear;
          transition: opacity .15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-timing-function: ease;
       -o-transition-timing-function: ease;
          transition-timing-function: ease;
  -webkit-transition-duration: .35s;
       -o-transition-duration: .35s;
          transition-duration: .35s;
  -webkit-transition-property: height, visibility;
       -o-transition-property: height, visibility;
          transition-property: height, visibility;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
          box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #337ab7;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: "";
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  display: table-cell;
  float: none;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-right: 0;
  padding-left: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.nav > li.disabled > a {
  color: #777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 4px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-right: 0;
    padding-left: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
}
.navbar-form {
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: -15px;
  margin-bottom: 8px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
    margin-right: -15px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  color: #fff;
  background-color: #080808;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  padding: 0 5px;
  color: #ccc;
  content: "/\00a0";
}
.breadcrumb > .active {
  color: #777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #337ab7;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #fff;
  cursor: default;
  background-color: #337ab7;
  border-color: #337ab7;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  text-align: center;
  list-style: none;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  padding-right: 15px;
  padding-left: 15px;
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-right: 60px;
    padding-left: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-right: auto;
  margin-left: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
  -webkit-transition: width .6s ease;
       -o-transition: width .6s ease;
          transition: width .6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
          background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
       -o-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  color: #555;
  text-decoration: none;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #eee;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-right: 15px;
  padding-left: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  margin-bottom: 0;
  border: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, .15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  filter: alpha(opacity=20);
  opacity: .2;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  filter: alpha(opacity=50);
  opacity: .5;
}
button.close {
  -webkit-appearance: none;
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
}
.modal-open {
  overflow: hidden;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform .3s ease-out;
       -o-transition:      -o-transform .3s ease-out;
          transition:         transform .3s ease-out;
  -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
       -o-transform: translate(0, -25%);
          transform: translate(0, -25%);
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
       -o-transform: translate(0, 0);
          transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  outline: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
          box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0;
}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: .5;
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  filter: alpha(opacity=0);
  opacity: 0;

  line-break: auto;
}
.tooltip.in {
  filter: alpha(opacity=90);
  opacity: .9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  right: 5px;
  bottom: 0;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .2);

  line-break: auto;
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  content: "";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, .25);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, .25);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, .25);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, .25);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: .6s ease-in-out left;
       -o-transition: .6s ease-in-out left;
          transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
         -o-transition:      -o-transform .6s ease-in-out;
            transition:         transform .6s ease-in-out;

    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    -webkit-perspective: 1000px;
            perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    left: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    left: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
  background-color: rgba(0, 0, 0, 0);
  filter: alpha(opacity=50);
  opacity: .5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  filter: alpha(opacity=90);
  outline: 0;
  opacity: .9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  margin-top: -10px;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  font-family: serif;
  line-height: 1;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*# sourceMappingURL=bootstrap.css.map */

  form.cmxform{width:370px;font-size:1.0em;color:#333;}
form.cmxform legend{padding-left:0;}
form.cmxform legend, form.cmxform label{color:#333;}
form.cmxform fieldset{border:none;border-top:1px solid #C9DCA6;background:url(../images/cmxform-fieldset.gif) left bottom repeat-x;background-color:#F8FDEF;}
form.cmxform fieldset fieldset{background:none;}
form.cmxform fieldset p, form.cmxform fieldset fieldset{padding:5px 10px 7px;background:url(../images/cmxform-divider.gif) left bottom repeat-x;}
form.cmxform label.error, label.error{color:red;font-size:11px;font-style:italic;font-weight:normal;}
div.error{display:none;}
input{border:1px solid black;}
input.checkbox{border:none}
input:focus{border:1px solid black;}
.form-list input.error{border:1px solid red;}
form.cmxform .gray *{color:gray;}
  /*
    Colorbox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden; -webkit-transform: translate3d(0,0,0);}
#cboxWrapper {max-width:none;}
#cboxOverlay{position:fixed; width:100%; height:100%;}
#cboxMiddleLeft, #cboxBottomLeft{clear:left;}
#cboxContent{position:relative;}
#cboxLoadedContent{overflow:auto; -webkit-overflow-scrolling: touch;}
#cboxTitle{margin:0;}
#cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic;}
.cboxIframe{width:100%; height:100%; display:block; border:0; padding:0; margin:0;}
#colorbox, #cboxContent, #cboxLoadedContent{box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box;}

/* 
    User Style:
    Change the following styles to modify the appearance of Colorbox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
#cboxOverlay{background:url(/blogger/anhcuoi/images/overlay.png) repeat 0 0; opacity: 0.9; filter: alpha(opacity = 90);}
#colorbox{outline:0;}
    #cboxTopLeft{width:21px; height:21px; background:url(/blogger/anhcuoi/images/controls.png) no-repeat -101px 0;}
    #cboxTopRight{width:21px; height:21px; background:url(/blogger/anhcuoi/images/controls.png) no-repeat -130px 0;}
    #cboxBottomLeft{width:21px; height:21px; background:url(/blogger/anhcuoi/images/controls.png) no-repeat -101px -29px;}
    #cboxBottomRight{width:21px; height:21px; background:url(/blogger/anhcuoi/images/controls.png) no-repeat -130px -29px;}
    #cboxMiddleLeft{width:21px; background:url(/blogger/anhcuoi/images/controls.png) left top repeat-y;}
    #cboxMiddleRight{width:21px; background:url(/blogger/anhcuoi/images/controls.png) right top repeat-y;}
    #cboxTopCenter{height:21px; background:url(/blogger/anhcuoi/images/border.png) 0 0 repeat-x;}
    #cboxBottomCenter{height:21px; background:url(/blogger/anhcuoi/images/border.png) 0 -29px repeat-x;}
    #cboxContent{background:#fff; overflow:hidden;}
        .cboxIframe{background:#fff;}
        #cboxError{padding:50px; border:1px solid #ccc;}
        #cboxLoadedContent{margin-bottom:28px;}
        #cboxTitle{position:absolute; bottom:4px; left:0; text-align:center; width:100%; color:#949494;}
        #cboxCurrent{position:absolute; bottom:4px; left:58px; color:#949494;}
        #cboxLoadingOverlay{background:url(images/loading_background.png) no-repeat center center;}
        #cboxLoadingGraphic{background:url(images/loading.gif) no-repeat center center;}

        /* these elements are buttons, and may need to have additional styles reset to avoid unwanted base styles */
        #cboxPrevious, #cboxNext, #cboxSlideshow, #cboxClose {border:0; padding:0; margin:0; overflow:visible; width:auto; background:none; }
        
        /* avoid outlines on :active (mouseclick), but preserve outlines on :focus (tabbed navigating) */
        #cboxPrevious:active, #cboxNext:active, #cboxSlideshow:active, #cboxClose:active {outline:0;}

        #cboxSlideshow{position:absolute; bottom:4px; right:30px; color:#0092ef;}
        #cboxPrevious{position:absolute; bottom:0; left:0; background:url(/blogger/anhcuoi/images/controls.png) no-repeat -75px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxPrevious:hover{background-position:-75px -25px;}
        #cboxNext{position:absolute; bottom:0; left:27px; background:url(/blogger/anhcuoi/images/controls.png) no-repeat -50px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxNext:hover{background-position:-50px -25px;}
        #cboxClose{position:absolute; bottom:0; right:0; background:url(/blogger/anhcuoi/images/controls.png) no-repeat -25px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxClose:hover{background-position:-25px -25px;}

/*
  The following fixes a problem where IE7 and IE8 replace a PNG's alpha transparency with a black fill
  when an alpha filter (opacity change) is set on the element or ancestor element.  This style is not applied to or needed in IE9.
  See: http://jacklmoore.com/notes/ie-transparency-problems/
*/
.cboxIE #cboxTopLeft,
.cboxIE #cboxTopCenter,
.cboxIE #cboxTopRight,
.cboxIE #cboxBottomLeft,
.cboxIE #cboxBottomCenter,
.cboxIE #cboxBottomRight,
.cboxIE #cboxMiddleLeft,
.cboxIE #cboxMiddleRight {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
}
  

ul.resp-tabs-list, p {
    margin: 0px;
    padding: 0px;
}

.resp-tabs-list li {
    font-weight: 600;
    font-size: 13px;
    display: inline-block;
    padding: 13px 15px;
    margin: 0 4px 0 0;
    list-style: none;
    cursor: pointer;
    float: left;
}

.resp-tabs-container {
    padding: 0px;
    background-color: #fff;
    clear: left;
}

h2.resp-accordion {
    cursor: pointer;
    padding: 5px;
    display: none;
}
li.resp-tab-item {
    border-bottom: 0px dashed;
    color:#222;
    line-height: 10px;background: #e5e5e5;
}
li.resp-tab-item a{
    color: @mau1;
}
.resp-tab-content {
    display: none;
    padding: 15px;
}

.resp-tab-active {
	border: 1px solid #e5e5e5 !important;
	border-bottom: none;
	margin-bottom: -1px !important;
	padding: 12px 14px 14px 14px !important;
	border-top: 1px solid #e5e5e5 !important;
	border-bottom: 0px #fff solid !important;
}

.resp-tab-active {
    border-bottom: none;
  background: @mau4!important;color: white!important;
}

.resp-content-active, .resp-accordion-active {
    display: block;
}

.resp-tab-content {
    border: 1px solid #e5e5e5;
	border-top-color: #e5e5e5;
}

h2.resp-accordion {
    font-size: 13px;
    border: 1px solid #e5e5e5;
    border-top: 0px solid #e5e5e5;
    margin: 0px;
    padding: 10px 15px;
}

h2.resp-tab-active {
    border-bottom: 0px solid #e5e5e5 !important;
    margin-bottom: 0px !important;
    padding: 10px 15px !important;
}

h2.resp-tab-title:last-child {
    border-bottom: 12px solid #e5e5e5 !important;
    background: blue;
}

/*-----------Vertical tabs-----------*/
.resp-vtabs ul.resp-tabs-list {
    float: left;
    width: 30%;
}

.resp-vtabs .resp-tabs-list li {
    display: block;
    padding: 15px 15px !important;
    margin: 0 0 4px;
    cursor: pointer;
    float: none;
}

.resp-vtabs .resp-tabs-container {
    padding: 0px;
    background-color: #fff;
    border: 1px solid #e5e5e5;
    float: left;
    width: 68%;
    min-height: 250px;
    border-radius: 4px;
    clear: none;
}

.resp-vtabs .resp-tab-content {
    border: none;
    word-wrap: break-word;
}

.resp-vtabs li.resp-tab-active { 
position: relative;
z-index: 1;
margin-right: -1px !important;
padding: 14px 15px 15px 14px !important;
border-top: 1px solid;
border: 1px solid #5AB1D0 !important;
border-left: 4px solid #5AB1D0 !important;
margin-bottom: 4px !important;
border-right: 1px #FFF solid !important;
}

.resp-arrow {
    width: 0;
    height: 0;
    float: right;
    margin-top: 3px;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 12px solid #e5e5e5;
}

h2.resp-tab-active span.resp-arrow {
    border: none;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 12px solid #9B9797;
}

/*-----------Accordion styles-----------*/
h2.resp-tab-active {
    background: #DBDBDB;/* !important;*/
}

.resp-easy-accordion h2.resp-accordion {
    display: block;
}

.resp-easy-accordion .resp-tab-content {
    border: 1px solid #e5e5e5;
}

.resp-easy-accordion .resp-tab-content:last-child {
    border-bottom: 1px solid #e5e5e5;/* !important;*/
}

.resp-jfit {
    width: 100%;
    margin: 0px;
}

.resp-tab-content-active {
    display: block;
}

h2.resp-accordion:first-child {
    border-top: 1px solid #e5e5e5;/* !important;*/
}

/*Here your can change the breakpoint to set the accordion, when screen resolution changed*/
@media only screen and (max-width: 768px) {
    ul.resp-tabs-list {
        display: none;
    }

    h2.resp-accordion {
        display: block;
    }

    .resp-vtabs .resp-tab-content {
        border: 1px solid #e5e5e5;
    }

    .resp-vtabs .resp-tabs-container {
        border: none;
        float: none;
        width: 100%;
        min-height: 100px;
        clear: none;
    }

    .resp-accordion-closed {
        display: none !important;
    }

    .resp-vtabs .resp-tab-content:last-child {
        border-bottom: 1px solid #e5e5e5 !important;
    }
}

  @font-face{font-family:'flexslider-icon';src:url('/blogger/anhcuoi//fonts/flexslider-icon.eot');src:url('/blogger/anhcuoi//fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('/blogger/anhcuoi//fonts/flexslider-icon.woff') format('woff'), url('/blogger/anhcuoi//fonts/flexslider-icon.ttf') format('truetype'), url('/blogger/anhcuoi//fonts/flexslider-icon.svg#flexslider-icon') format('svg');font-weight:normal;font-style:normal;}
.flex-container a:hover,
.flex-slider a:hover,
.flex-container a:focus,
.flex-slider a:focus{outline:none;}
.slides,
.slides > li,
.flex-control-nav,
.flex-direction-nav{margin:0;padding:0;list-style:none;}
.flex-pauseplay span{text-transform:capitalize;}
.flexslider{margin:0;padding:0;}
.flexslider .slides > li{display:none;-webkit-backface-visibility:hidden;}
.flexslider .slides img{width:100%;display:block;}
.flexslider .slides:after{content:"\0020";display:block;clear:both;visibility:hidden;line-height:0;height:0;}
html[xmlns] .flexslider .slides{display:block;}
* html .flexslider .slides{height:1%;}
.no-js .flexslider .slides > li:first-child{display:block;}
.flexslider{margin:0 0 60px;background:#ffffff;border:4px solid #ffffff;position:relative;zoom:1;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:'' 0 1px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow:'' 0 1px 4px rgba(0, 0, 0, 0.2);-o-box-shadow:'' 0 1px 4px rgba(0, 0, 0, 0.2);box-shadow:'' 0 1px 4px rgba(0, 0, 0, 0.2);}
.flexslider .slides{zoom:1;}
.flexslider .slides img{height:auto;}
.flex-viewport{max-height:2000px;-webkit-transition:all 1s ease;-moz-transition:all 1s ease;-ms-transition:all 1s ease;-o-transition:all 1s ease;transition:all 1s ease;}
.loading .flex-viewport{max-height:300px;}
.carousel li{margin-right:5px;}
.flex-direction-nav{*height:0;}
.flex-direction-nav a{text-decoration:none;display:block;width:40px;height:40px;margin:-20px 0 0;position:absolute;top:50%;z-index:10;overflow:hidden;opacity:0;cursor:pointer;color:rgba(0, 0, 0, 0.8);text-shadow:1px 1px 0 rgba(255, 255, 255, 0.3);-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;}
.flex-direction-nav a:before{font-family:"flexslider-icon";font-size:40px;display:inline-block;content:'\f001';color:rgba(0, 0, 0, 0.8);text-shadow:1px 1px 0 rgba(255, 255, 255, 0.3);}
.flex-direction-nav a.flex-next:before{content:'\f002';}
.flex-direction-nav .flex-prev{left:-50px;}
.flex-direction-nav .flex-next{right:-50px;text-align:right;}
.flexslider:hover .flex-direction-nav .flex-prev{opacity:0.7;left:10px;}
.flexslider:hover .flex-direction-nav .flex-prev:hover{opacity:1;}
.flexslider:hover .flex-direction-nav .flex-next{opacity:0.7;right:10px;}
.flexslider:hover .flex-direction-nav .flex-next:hover{opacity:1;}
.flex-direction-nav .flex-disabled{opacity:0!important;filter:alpha(opacity=0);cursor:default;}
.flex-pauseplay a{display:block;width:20px;height:20px;position:absolute;bottom:5px;left:10px;opacity:0.8;z-index:10;overflow:hidden;cursor:pointer;color:#000;}
.flex-pauseplay a:before{font-family:"flexslider-icon";font-size:20px;display:inline-block;content:'\f004';}
.flex-pauseplay a:hover{opacity:1;}
.flex-pauseplay a.flex-play:before{content:'\f003';}
.flex-control-nav{width:100%;position:absolute;bottom:-40px;text-align:center;}
.flex-control-nav li{margin:0 6px;display:inline-block;zoom:1;*display:inline;}
.flex-control-paging li a{width:11px;height:11px;display:block;background:#666;background:rgba(0, 0, 0, 0.5);cursor:pointer;text-indent:-9999px;-webkit-box-shadow:inset 0 0 3px rgba(0, 0, 0, 0.3);-moz-box-shadow:inset 0 0 3px rgba(0, 0, 0, 0.3);-o-box-shadow:inset 0 0 3px rgba(0, 0, 0, 0.3);box-shadow:inset 0 0 3px rgba(0, 0, 0, 0.3);-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px;}
.flex-control-paging li a:hover{background:#333;background:rgba(0, 0, 0, 0.7);}
.flex-control-paging li a.flex-active{background:#000;background:rgba(0, 0, 0, 0.9);cursor:default;}
.flex-control-thumbs{margin:5px 0 0;position:static;overflow:hidden;}
.flex-control-thumbs li{width:25%;float:left;margin:0;}
.flex-control-thumbs img{width:100%;height:auto;display:block;opacity:.7;cursor:pointer;-webkit-transition:all 1s ease;-moz-transition:all 1s ease;-ms-transition:all 1s ease;-o-transition:all 1s ease;transition:all 1s ease;}
.flex-control-thumbs img:hover{opacity:1;}
.flex-control-thumbs .flex-active{opacity:1;cursor:default;}
@media screen and (max-width:860px){.flex-direction-nav .flex-prev{opacity:1;left:10px;}
.flex-direction-nav .flex-next{opacity:1;right:10px;}
}
.flex-direction-nav a {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi//images/bg-direction-nav.png") no-repeat scroll 0 0;
    cursor: pointer;
    display: block;
    height: 30px;
    margin: -20px 10px 0;
    opacity: 0;
    position: absolute;
    text-indent: -9999px;
    top: 45%;
    width: 30px;
}
.flex-direction-nav .flex-next {
    background-position: 100% 0;
    right: -36px;
}
.flex-direction-nav .flex-prev {
    left: -36px;
}
.flexslider:hover .flex-next {
    opacity: 0.8;
    right: 5px;
}
.flexslider:hover .flex-prev {
    left: 5px;
    opacity: 0.8;
}
.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover {
    opacity: 1;
}
.flex-direction-nav .disabled {
    cursor: default;
    opacity: 0.3 !important;
}
.flex-control-nav {
    position: absolute;
    text-align: center;
    top: 55%;
    width: 100%;
}
.flex-control-nav li {
    display: inline-block;
    margin: 0 6px;
}
.flex-control-paging li a {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi//images/bg-control-nav.png") no-repeat scroll 0 0;
    cursor: pointer;
    display: block;
    height: 13px;
    margin: 0 1px;
    text-indent: -9999em;
    width: 13px;
}
.flex-control-paging li a:hover {
    background-position: 0 -13px;
}
.flex-control-paging li a.flex-active {
    background-position: 0 -26px;
    cursor: default;
}
.flex-control-thumbs {
    margin: 5px 0 0;
    overflow: hidden;
    position: static;
}
.flex-control-thumbs li {
    float: left;
    margin: 5px;
    width: 15%;
}
.flex-control-thumbs img {
    border: 1px solid #ccc;
    cursor: pointer;
    display: block;
    margin: 8px;
    opacity: 0.7;
    padding: 10px;
    width: 100%;
}
.flex-control-thumbs img:hover {
    opacity: 1;
}
.flex-control-thumbs .active {
    cursor: default;
    opacity: 1;
}
  /*!
 *  Font Awesome 4.6.3 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.6.3');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.6.3') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.6.3') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.6.3') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.6.3') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}

  /*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp
{
	padding: 0;
	margin: 0;
	border: 0;
	outline: none;
	vertical-align: top;
}

.fancybox-wrap {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 8020;
}

.fancybox-skin {
	position: relative;
	background: white;
	color: #444;
	text-shadow: none;
	-webkit-border-radius: 4px;
	   -moz-border-radius: 4px;
	        border-radius: 4px;
}

.fancybox-opened {
	z-index: 8030;
}

.fancybox-opened .fancybox-skin {
	-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	   -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
}

.fancybox-outer, .fancybox-inner {
	position: relative;
}

.fancybox-inner {
	overflow: hidden;
}

.fancybox-type-iframe .fancybox-inner {
	-webkit-overflow-scrolling: touch;
}

.fancybox-error {
	color: #444;
	font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	margin: 0;
	padding: 15px;
	white-space: nowrap;
}

.fancybox-image, .fancybox-iframe {
	display: block;
	width: 100%;
	height: 100%;
}

.fancybox-image {
	max-width: 100%;
	max-height: 100%;
}

#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
	background-image: url('/blogger/anhcuoi/images/fancybox_sprite.png');
}

#fancybox-loading {
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -22px;
	margin-left: -22px;
	background-position: 0 -108px;
	opacity: 0.8;
	cursor: pointer;
	z-index: 8060;
}

#fancybox-loading div {
	width: 44px;
	height: 44px;
	background: url('/blogger/anhcuoi/images/fancybox_loading.gif') center center no-repeat;
}

.fancybox-close {
	position: absolute;
	top: -18px;
	right: -18px;
	width: 36px;
	height: 36px;
	cursor: pointer;
	z-index: 8040;
}

.fancybox-nav {
	position: absolute;
	top: 0;
	width: 40%;
	height: 100%;
	cursor: pointer;
	text-decoration: none;
	background: transparent url('/blogger/anhcuoi/images/blank.gif'); /* helps IE */
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	z-index: 8040;
}

.fancybox-prev {
	left: 0;
}

.fancybox-next {
	right: 0;
}

.fancybox-nav span {
	position: absolute;
	top: 50%;
	width: 36px;
	height: 34px;
	margin-top: -18px;
	cursor: pointer;
	z-index: 8040;
	visibility: hidden;
}

.fancybox-prev span {
	left: 10px;
	background-position: 0 -36px;
}

.fancybox-next span {
	right: 10px;
	background-position: 0 -72px;
}

.fancybox-nav:hover span {
	visibility: visible;
}

.fancybox-tmp {
	position: absolute;
	top: -99999px;
	left: -99999px;
	visibility: hidden;
	max-width: 99999px;
	max-height: 99999px;
	overflow: visible !important;
}

/* Overlay helper */

.fancybox-lock {
    overflow: hidden !important;
    width: auto;
}

.fancybox-lock body {
    overflow: hidden !important;
}

.fancybox-lock-test {
    overflow-y: hidden !important;
}

.fancybox-overlay {
	position: absolute;
	top: 0;
	left: 0;
	overflow: hidden;
	display: none;
	z-index: 8010;
	background: url('/blogger/anhcuoi/images/fancybox_overlay.png');
}

.fancybox-overlay-fixed {
	position: fixed;
	bottom: 0;
	right: 0;
}

.fancybox-lock .fancybox-overlay {
	overflow: auto;
	overflow-y: scroll;
}

/* Title helper */

.fancybox-title {
	visibility: hidden;
	font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	position: relative;
	text-shadow: none;
	z-index: 8050;
}

.fancybox-opened .fancybox-title {
	visibility: visible;
}

.fancybox-title-float-wrap {
	position: absolute;
	bottom: 0;
	right: 50%;
	margin-bottom: -35px;
	z-index: 8050;
	text-align: center;
}

.fancybox-title-float-wrap .child {
	display: inline-block;
	margin-right: -100%;
	padding: 2px 20px;
	background: transparent; /* Fallback for web browsers that doesn't support RGBa */
	background: rgba(0, 0, 0, 0.8);
	-webkit-border-radius: 15px;
	   -moz-border-radius: 15px;
	        border-radius: 15px;
	text-shadow: 0 1px 2px #222;
	color: #FFF;
	font-weight: bold;
	line-height: 24px;
	white-space: nowrap;
}

.fancybox-title-outside-wrap {
	position: relative;
	margin-top: 10px;
	color: #fff;
}

.fancybox-title-inside-wrap {
	padding-top: 10px;
}

.fancybox-title-over-wrap {
	position: absolute;
	bottom: 0;
	left: 0;
	color: #fff;
	padding: 10px;
	background: #000;
	background: rgba(0, 0, 0, .8);
}

/*Retina graphics!*/
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   only screen and (min--moz-device-pixel-ratio: 1.5),
	   only screen and (min-device-pixel-ratio: 1.5){

	#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
		background-image: url('/blogger/anhcuoi/images/fancybox_sprite@2x.png');
		background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
	}

	#fancybox-loading div {
		background-image: url('/blogger/anhcuoi/images/fancybox_loading@2x.gif');
		background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/
	}
}
.popup-inline-content  h2{
   font-size: 24px; 
}
.popup-inline-content  h4{
     font-size: 18px;
}
.popup-inline-content  strong{
     font-size: 18px;color: #0068DE; 
}
  .owl-carousel .owl-wrapper:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0;}
.owl-carousel{display:none;position:relative;width:100%;-ms-touch-action:pan-y;}
.owl-carousel .owl-wrapper{display:none;position:relative;-webkit-transform:translate3d(0px, 0px, 0px);}
.owl-carousel .owl-wrapper-outer{overflow:hidden;position:relative;width:100%;padding-bottom: 3px;}
.owl-carousel .owl-wrapper-outer.autoHeight{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out;}
.owl-carousel .owl-item{float:left;}
.owl-controls .owl-page,
.owl-controls .owl-buttons div{cursor:pointer;}
.owl-controls{-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);}
.grabbing{cursor:url(grabbing.png) 8 8, move;}
.owl-carousel .owl-wrapper,
.owl-carousel .owl-item{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);}

.owl-theme .owl-controls{margin-top:10px;text-align:center;}
.owl-theme .owl-controls .owl-buttons div{background:@maulink;border-radius:30px;color:#fff;display:inline-block;font-size:12px;margin:5px;opacity:0.9;padding:3px 10px;}
.owl-theme .owl-controls.clickable .owl-buttons div:hover{filter:Alpha(Opacity=100);opacity:1;text-decoration:none;}
.owl-theme .owl-controls .owl-page{display:inline-block;zoom:1;*display:inline;}
.owl-theme .owl-controls .owl-page span{display:block;width:12px;height:12px;margin:5px 7px;filter:Alpha(Opacity=50);opacity:0.5;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px;background:#869791;}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{filter:Alpha(Opacity=100);opacity:1;}
.owl-theme .owl-controls .owl-page span.owl-numbers{height:auto;width:auto;color:#FFF;padding:2px 10px;font-size:12px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;}
.owl-item.loading{min-height:150px;background:url(AjaxLoader.gif) no-repeat center center}
.sanphamkhuyenmaidacbiet .owl-theme .owl-controls{position:absolute;right:-5px;text-align:center;top:-59px;}


#owl-demo .owl-theme .owl-controls{

text-align:center;
-webkit-tap-highlight-color:transparent;
cursor:e-resize
}

#owl-demo .owl-carousel div img
{
color:#fff;
font-size:14px;

font-family: 'KeplerStd-Regular';


display:block;
cursor:e-resize;

}
#owl-demo .owl-next{     }
#owl-demo .owl-prev {
    display: block;
    width: 42px;
    height: 51px;
    background: url('/blogger/anhcuoi//images/mukamskin.png');
   
}

#owl-demo:hover .owl-controls .owl-buttons .owl-prev {opacity: 1 !important;}
#owl-demo:hover .owl-controls .owl-buttons .owl-next {opacity: 1 !important;}

#owl-demo .owl-prev { 
    opacity:0 !important;
     left:0;
      text-align:right; 
      position:absolute;
      z-index:999999;
     cursor:pointer;
       top: 40%;
    display: block;border-radius: 0px;
    width: 42px;
    height: 51px;
    background: url('/blogger/anhcuoi//images/mukamskin.png');

  }
  

#owl-demo .owl-next {
    opacity: 0 !important; 
    text-align:right; 
    position:absolute;
    z-index:999999; 
     top: 40%; text-align:right; 
  transform: translateY(-50%);
  cursor:pointer;right:0;
  transition:0.5s all;
    display: block;border-radius: 0px;
    width: 42px;
    height: 51px;
    background: url('/blogger/anhcuoi//images/mukamskin.png');

  
  }

#owl-demo .owl-controls .owl-nav [class*=owl-]:hover{
background-color:#1f1f1f;transition:0.5s all;
cursor:e-resize
}

#owl-demo .owl-controls .owl-nav .disabled{
opacity:.5; 
cursor:e-resize
}






#owl-demo .owl-item > div img {
    display: block;
    width: 100%;
    height: auto;
   
    margin-bottom:0px;
}
#owl-demo .owl-item > div {
   
}
#owl-slidethuonghieu{
    background: white;
    height:190px;
}
#owl-slidethuonghieu .owl-controls{
    
}
#owl-slidethuonghieu .owl-controls .owl-prev{
    position: absolute;left: 7px;top:65px;width: 30px;height: 30px;
    background: url('http://kientrucdviet.com/css/images/arrows.png') transparent;color: transparent;display: none;
}
#owl-slidethuonghieu .owl-controls .owl-next{
    position: absolute;right: 7px;top:65px;width: 30px;height: 30px;
    background: url(http://kientrucdviet.com/css/images/arrows.png) no-repeat -30px 0px transparent;color: transparent;display: none;
}
#owl-slidethuonghieu:hover .owl-prev{
    display: block;
}
#owl-slidethuonghieu:hover .owl-next{
    display: block;
}
#owl-demo1 .item{
    padding: 5px;
}
  .owl-theme .owl-controls{margin-top:10px;text-align:center;}
.owl-theme .owl-controls .owl-buttons div{background:@maulink;border-radius:30px;color:#fff;display:inline-block;font-size:12px;margin:5px;opacity:0.9;padding:3px 10px;}
.owl-theme .owl-controls.clickable .owl-buttons div:hover{filter:Alpha(Opacity=100);opacity:1;text-decoration:none;}
.owl-theme .owl-controls .owl-page{display:inline-block;zoom:1;*display:inline;}
.owl-theme .owl-controls .owl-page span{display:block;width:12px;height:12px;margin:5px 7px;filter:Alpha(Opacity=50);opacity:0.5;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px;background:#869791;}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{filter:Alpha(Opacity=100);opacity:1;}
.owl-theme .owl-controls .owl-page span.owl-numbers{height:auto;width:auto;color:#FFF;padding:2px 10px;font-size:12px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;}
.owl-item.loading{min-height:150px;background:url(AjaxLoader.gif) no-repeat center center}
.sanphamkhuyenmaidacbiet .owl-theme .owl-controls{position:absolute;right:-5px;text-align:center;top:-59px;}


#owl-demo .owl-theme .owl-controls{

text-align:center;
-webkit-tap-highlight-color:transparent;
cursor:e-resize
}

#owl-demo .owl-carousel div img
{
color:#fff;
font-size:14px;

font-family: 'KeplerStd-Regular';


display:block;
cursor:e-resize;

}
#owl-demo .owl-next{     }
#owl-demo .owl-prev {
    display: block;
    width: 42px;
    height: 51px;
    background: url('/blogger/anhcuoi//images/mukamskin.png');
   
}

#owl-demo:hover .owl-controls .owl-buttons .owl-prev {opacity: 1 !important;}
#owl-demo:hover .owl-controls .owl-buttons .owl-next {opacity: 1 !important;}

#owl-demo .owl-prev { 
    opacity:0 !important;
     left:0;
      text-align:right; 
      position:absolute;
      z-index:999999;
     cursor:pointer;
       top: 40%;
    display: block;border-radius: 0px;
    width: 42px;
    height: 51px;
    background: url('/blogger/anhcuoi//images/mukamskin.png');

  }
  

#owl-demo .owl-next {
    opacity: 0 !important; 
    text-align:right; 
    position:absolute;
    z-index:999999; 
     top: 40%; text-align:right; 
  transform: translateY(-50%);
  cursor:pointer;right:0;
  transition:0.5s all;
    display: block;border-radius: 0px;
    width: 42px;
    height: 51px;
    background: url('/blogger/anhcuoi//images/mukamskin.png');

  
  }

#owl-demo .owl-controls .owl-nav [class*=owl-]:hover{
background-color:#1f1f1f;transition:0.5s all;
cursor:e-resize
}

#owl-demo .owl-controls .owl-nav .disabled{
opacity:.5; 
cursor:e-resize
}






#owl-demo .owl-item > div img {
    display: block;
    width: 100%;
    height: auto;
   
    margin-bottom:0px;
}
#owl-demo .owl-item > div {
   
}
#owl-slidethuonghieu{
    background: white;
    height:190px;
}
#owl-slidethuonghieu .owl-controls{
    
}
#owl-slidethuonghieu .owl-controls .owl-prev{
    position: absolute;left: 7px;top:65px;width: 30px;height: 30px;
    background: url('http://kientrucdviet.com/css/images/arrows.png') transparent;color: transparent;display: none;
}
#owl-slidethuonghieu .owl-controls .owl-next{
    position: absolute;right: 7px;top:65px;width: 30px;height: 30px;
    background: url(http://kientrucdviet.com/css/images/arrows.png) no-repeat -30px 0px transparent;color: transparent;display: none;
}
#owl-slidethuonghieu:hover .owl-prev{
    display: block;
}
#owl-slidethuonghieu:hover .owl-next{
    display: block;
}
  .owl-origin{-webkit-perspective:1200px;-webkit-perspective-origin-x:50%;-webkit-perspective-origin-y:50%;-moz-perspective:1200px;-moz-perspective-origin-x:50%;-moz-perspective-origin-y:50%;perspective:1200px;}
.owl-fade-out{z-index:10;-webkit-animation:fadeOut .7s both ease;-moz-animation:fadeOut .7s both ease;animation:fadeOut .7s both ease;}
.owl-fade-in{-webkit-animation:fadeIn .7s both ease;-moz-animation:fadeIn .7s both ease;animation:fadeIn .7s both ease;}
.owl-backSlide-out{-webkit-animation:backSlideOut 1s both ease;-moz-animation:backSlideOut 1s both ease;animation:backSlideOut 1s both ease;}
.owl-backSlide-in{-webkit-animation:backSlideIn 1s both ease;-moz-animation:backSlideIn 1s both ease;animation:backSlideIn 1s both ease;}
.owl-goDown-out{-webkit-animation:scaleToFade .7s ease both;-moz-animation:scaleToFade .7s ease both;animation:scaleToFade .7s ease both;}
.owl-goDown-in{-webkit-animation:goDown .6s ease both;-moz-animation:goDown .6s ease both;animation:goDown .6s ease both;}
.owl-fadeUp-in{-webkit-animation:scaleUpFrom .5s ease both;-moz-animation:scaleUpFrom .5s ease both;animation:scaleUpFrom .5s ease both;}
.owl-fadeUp-out{-webkit-animation:scaleUpTo .5s ease both;-moz-animation:scaleUpTo .5s ease both;animation:scaleUpTo .5s ease both;}
@-webkit-keyframes empty{0%{opacity:1}
}
@-moz-keyframes empty{0%{opacity:1}
}
@keyframes empty{0%{opacity:1}
}
@-webkit-keyframes fadeIn{0%{opacity:0;}
100%{opacity:1;}
}
@-moz-keyframes fadeIn{0%{opacity:0;}
100%{opacity:1;}
}
@keyframes fadeIn{0%{opacity:0;}
100%{opacity:1;}
}
@-webkit-keyframes fadeOut{0%{opacity:1;}
100%{opacity:0;}
}
@-moz-keyframes fadeOut{0%{opacity:1;}
100%{opacity:0;}
}
@keyframes fadeOut{0%{opacity:1;}
100%{opacity:0;}
}
@-webkit-keyframes backSlideOut{25%{opacity:.5;-webkit-transform:translateZ(-500px);}
75%{opacity:.5;-webkit-transform:translateZ(-500px) translateX(-200%);}
100%{opacity:.5;-webkit-transform:translateZ(-500px) translateX(-200%);}
}
@-moz-keyframes backSlideOut{25%{opacity:.5;-moz-transform:translateZ(-500px);}
75%{opacity:.5;-moz-transform:translateZ(-500px) translateX(-200%);}
100%{opacity:.5;-moz-transform:translateZ(-500px) translateX(-200%);}
}
@keyframes backSlideOut{25%{opacity:.5;transform:translateZ(-500px);}
75%{opacity:.5;transform:translateZ(-500px) translateX(-200%);}
100%{opacity:.5;transform:translateZ(-500px) translateX(-200%);}
}
@-webkit-keyframes backSlideIn{0%, 25%{opacity:.5;-webkit-transform:translateZ(-500px) translateX(200%);}
75%{opacity:.5;-webkit-transform:translateZ(-500px);}
100%{opacity:1;-webkit-transform:translateZ(0) translateX(0);}
}
@-moz-keyframes backSlideIn{0%, 25%{opacity:.5;-moz-transform:translateZ(-500px) translateX(200%);}
75%{opacity:.5;-moz-transform:translateZ(-500px);}
100%{opacity:1;-moz-transform:translateZ(0) translateX(0);}
}
@keyframes backSlideIn{0%, 25%{opacity:.5;transform:translateZ(-500px) translateX(200%);}
75%{opacity:.5;transform:translateZ(-500px);}
100%{opacity:1;transform:translateZ(0) translateX(0);}
}
@-webkit-keyframes scaleToFade{to{opacity:0;-webkit-transform:scale(.8);}
}
@-moz-keyframes scaleToFade{to{opacity:0;-moz-transform:scale(.8);}
}
@keyframes scaleToFade{to{opacity:0;transform:scale(.8);}
}
@-webkit-keyframes goDown{from{-webkit-transform:translateY(-100%);}
}
@-moz-keyframes goDown{from{-moz-transform:translateY(-100%);}
}
@keyframes goDown{from{transform:translateY(-100%);}
}
@-webkit-keyframes scaleUpFrom{from{opacity:0;-webkit-transform:scale(1.5);}
}
@-moz-keyframes scaleUpFrom{from{opacity:0;-moz-transform:scale(1.5);}
}
@keyframes scaleUpFrom{from{opacity:0;transform:scale(1.5);}
}
@-webkit-keyframes scaleUpTo{to{opacity:0;-webkit-transform:scale(1.5);}
}
@-moz-keyframes scaleUpTo{to{opacity:0;-moz-transform:scale(1.5);}
}
@keyframes scaleUpTo{to{opacity:0;transform:scale(1.5);}
}
  
/* Color Theme */
.gry{background:#424242; color:#fff;}
.orange {background:#ff670f; color:#fff;}
.blue {background:#4A89DC; color:#fff;}
.green{background:#74a52e; color:#fff;}
.red{background:#DA4B38; color:#fff;}
.yellow{background:#F6BB42; color:#fff;}
.purple{background:#967ADC; color:#fff;}
.pink{background:#ee1289; color:#fff;}
.chocolate {background:#934915; color:#fff;}


.gry > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.gry > .wsmenu-list > li > a{background-color:#fff !important;}
.gry > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.gry > .wsmenu-list > li:hover>a{background:#424242 !important; color:#fff !important;}
.gry > .wsmenu-list > li > a:hover {background:#424242 !important; color:#fff !important;}
.gry > .wsmenu-list > li > a.active{background:#424242 !important; color:#fff !important;}
.gry > .wsmenu-submenu > li > a:hover {background:#424242; border-radius:0px!important; color:#fff;}
.gry .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.gry .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.gry .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}

.orange > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.orange > .wsmenu-list > li > a{background-color:#fff !important;}
.orange > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.orange > .wsmenu-list > li:hover>a{background:#ff670f !important; color:#fff !important;}
.orange > .wsmenu-list > li > a:hover {background:#ff670f !important; color:#fff !important;}
.orange > .wsmenu-list > li > a.active{background:#ff670f !important; color:#fff !important;}
.orange > .wsmenu-submenu > li > a:hover {background:#ff670f; border-radius:0px!important; color:#fff;}
.orange .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.orange .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.orange .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}

.blue > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.blue > .wsmenu-list > li > a{background-color:#fff !important;}
.blue > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.blue > .wsmenu-list > li:hover>a{background:#4A89DC !important; color:#fff !important;}
.blue > .wsmenu-list > li > a:hover {background:#4A89DC !important; color:#fff !important;}
.blue > .wsmenu-list > li > a.active{background:#4A89DC !important; color:#fff !important;}
.blue > .wsmenu-submenu li > a:hover {background:#4A89DC !important; border-radius:0px!important; color:#fff !important;}
.blue .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.blue .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.blue .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}

.green > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.green > .wsmenu-list > li > a{background-color:#fff !important;}
.green > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.green > .wsmenu-list > li:hover>a{background:#74a52e !important; color:#fff !important;}
.green > .wsmenu-list > li > a:hover {background:#74a52e !important; color:#fff !important;}
.green > .wsmenu-list > li > a.active{background:#74a52e !important; color:#fff !important;}
.green > .wsmenu-submenu > li > a:hover {background:#74a52e !important; border-radius:0px!important; color:#fff !important;}
.green .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.green .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.green .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}

.red > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.red > .wsmenu-list > li > a{background-color:#fff !important;}
.red > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.red > .wsmenu-list > li:hover>a{background:#DA4B38 !important; color:#fff !important;}
.red > .wsmenu-list > li > a:hover {background:#DA4B38 !important; color:#fff !important;}
.red > .wsmenu-list > li > a.active{background:#DA4B38 !important; color:#fff !important;}
.red > .wsmenu-submenu > li > a:hover {background:#DA4B38 !important; border-radius:0px!important; color:#fff !important;}
.red .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.red .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.red .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}

.yellow > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.yellow > .wsmenu-list > li > a{background-color:#fff !important;}
.yellow > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.yellow > .wsmenu-list > li:hover>a{background:#F6BB42 !important; color:#fff !important;}
.yellow > .wsmenu-list > li > a:hover {background:#F6BB42 !important; color:#fff !important;}
.yellow > .wsmenu-list > li > a.active{background:#F6BB42 !important; color:#fff !important;}
.yellow > .wsmenu-submenu > li > a:hover {background:#F6BB42 !important; border-radius:0px!important; color:#fff !important;}
.yellow .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.yellow .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.yellow .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}
.yellow > .wsmenu-list li a .fa{color:#424242 !important;}

.purple > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.purple > .wsmenu-list > li > a{background-color:#fff !important;}
.purple > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.purple > .wsmenu-list > li:hover>a{background:#967ADC !important; color:#fff !important;}
.purple > .wsmenu-list > li > a:hover {background:#967ADC !important; color:#fff !important;}
.purple > .wsmenu-list > li > a.active{background:#967ADC !important; color:#fff !important;}
.purple > .wsmenu-submenu > li > a:hover {background:#967ADC !important; border-radius:0px!important; color:#fff !important;}
.purple .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.purple .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.purple .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}

.pink > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.pink > .wsmenu-list > li > a{background-color:#fff !important;}
.pink > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.pink > .wsmenu-list > li:hover>a{background:#ee1289 !important; color:#fff !important;}
.pink > .wsmenu-list > li > a:hover {background:#ee1289 !important; color:#fff !important;}
.pink > .wsmenu-list > li > a.active{background:#ee1289 !important; color:#fff !important;}
.pink > .wsmenu-submenu > li > a:hover {background:#ee1289 !important; border-radius:0px!important; color:#fff !important;}
.pink .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.pink .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.pink .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}

.chocolate > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.chocolate > .wsmenu-list > li > a{background-color:#fff !important;}
.chocolate > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
.chocolate > .wsmenu-list > li:hover>a{background:#934915 !important; color:#fff !important;}
.chocolate > .wsmenu-list > li a:hover {background:#934915 !important; color:#fff !important;}
.chocolate > .wsmenu-list > li a.active{background:#934915 !important; color:#fff !important;}
.chocolate > .wsmenu-submenu > li a:hover {background:#934915 !important; border-radius:0px!important; color:#fff !important;}
.chocolate .wsmenu-list li a:hover .arrow:after{ border-top-color:#fff;}
.chocolate .wsmenu-list li a.active .arrow:after{ border-top-color:#fff;}
.chocolate .wsmenu-list li:hover>a .arrow:after{ border-top-color:#fff;}




/* Gradient Theme */
.tranbg{background-color:transparent !important;}
.whitebg{ background-color:#fff !important; }
.whitebg:hover{ color:#000 !important; }
.blue-grdt{
	background: #5999ee;
	background: -moz-linear-gradient(top,  #5999ee 0%, #4a89dc 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5999ee), color-stop(100%,#4a89dc));
	background: -webkit-linear-gradient(top,  #5999ee 0%,#4a89dc 100%);
	background: -o-linear-gradient(top,  #5999ee 0%,#4a89dc 100%);
	background: -ms-linear-gradient(top,  #5999ee 0%,#4a89dc 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5999ee', endColorstr='#4a89dc',GradientType=0 );
	color:#fff;}
	
.gry-grdt{
	background: #565656;
	background: -moz-linear-gradient(top,  #565656 0%, #424242 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#565656), color-stop(100%,#424242));
	background: -webkit-linear-gradient(top,  #565656 0%,#424242 100%);
	background: -o-linear-gradient(top,  #565656 0%,#424242 100%);
	background: -ms-linear-gradient(top,  #565656 0%,#424242 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#565656', endColorstr='#424242',GradientType=0 );
	color:#fff;}
	
.green-grdt{
	background: #86ba3d;
	background: -moz-linear-gradient(top,  #86ba3d 0%, #74a52e 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#86ba3d), color-stop(100%,#74a52e));
	background: -webkit-linear-gradient(top,  #86ba3d 0%,#74a52e 100%);
	background: -o-linear-gradient(top,  #86ba3d 0%,#74a52e 100%);
	background: -ms-linear-gradient(top,  #86ba3d 0%,#74a52e 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#86ba3d', endColorstr='#74a52e',GradientType=0 );
	color:#fff;}	

.red-grdt{
	background: #f05c48;
	background: -moz-linear-gradient(top,  #f05c48 0%, #da4b38 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f05c48), color-stop(100%,#da4b38));
	background: -webkit-linear-gradient(top,  #f05c48 0%,#da4b38 100%);
	background: -o-linear-gradient(top,  #f05c48 0%,#da4b38 100%);
	background: -ms-linear-gradient(top,  #f05c48 0%,#da4b38 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f05c48', endColorstr='#da4b38',GradientType=0 );
	color:#fff;}	
		
.orange-grdt{
	background: #fc7d33;
	background: -moz-linear-gradient(top,  #fc7d33 0%, #ff670f 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fc7d33), color-stop(100%,#ff670f));
	background: -webkit-linear-gradient(top,  #fc7d33 0%,#ff670f 100%);
	background: -o-linear-gradient(top,  #fc7d33 0%,#ff670f 100%);
	background: -ms-linear-gradient(top,  #fc7d33 0%,#ff670f 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fc7d33', endColorstr='#ff670f',GradientType=0 );
	color:#fff;}	

.yellow-grdt{
	background: #ffcd67;
	background: -moz-linear-gradient(top,  #ffcd67 0%, #f6bb42 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffcd67), color-stop(100%,#f6bb42));
	background: -webkit-linear-gradient(top,  #ffcd67 0%,#ff670f 100%);
	background: -o-linear-gradient(top,  #ffcd67 0%,#f6bb42 100%);
	background: -ms-linear-gradient(top,  #ffcd67 0%,#f6bb42 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffcd67', endColorstr='#f6bb42',GradientType=0 );
	color:#fff;}	

.purple-grdt{
	background: #a98ded;
	background: -moz-linear-gradient(top,  #a98ded 0%, #967adc 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a98ded), color-stop(100%,#967adc));
	background: -webkit-linear-gradient(top,  #a98ded 0%,#967adc 100%);
	background: -o-linear-gradient(top,  #a98ded 0%,#967adc 100%);
	background: -ms-linear-gradient(top,  #a98ded 0%,#967adc 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a98ded', endColorstr='#967adc',GradientType=0 );
	color:#fff;}	
			
.pink-grdt{
	background: #fb3ea4;
	background: -moz-linear-gradient(top,  #fb3ea4 0%, #f21b8f 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fb3ea4), color-stop(100%,#f21b8f));
	background: -webkit-linear-gradient(top,  #fb3ea4 0%,#f21b8f 100%);
	background: -o-linear-gradient(top,  #fb3ea4 0%,#f21b8f 100%);
	background: -ms-linear-gradient(top,  #fb3ea4 0%,#f21b8f 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fb3ea4', endColorstr='#f21b8f',GradientType=0 );
	color:#fff;}	


.whitebg > .wsmenu-list > li > a{color:#424242; border-right:1px solid rgba(0,0,0,0.10); }
.whitebg > .wsmenu-list > li > a{background-color:#fff !important;}
.whitebg > .wsmenu-list > li > a > .arrow:after{ border-top-color:#E5E5E5 !important;}
					
.red-grdt > .wsmenu-list > li > a{color:#fff !important;}
.red-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.red-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#fff !important;}

.gry-grdt > .wsmenu-list > li > a{color:#fff !important;}
.gry-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.gry-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#fff !important;}

.blue-grdt > .wsmenu-list > li > a{color:#fff !important;}
.blue-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.blue-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#fff !important;}


.green-grdt > .wsmenu-list > li > a{color:#fff !important;}
.green-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.green-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#fff !important;}

.orange-grdt > .wsmenu-list > li > a{color:#fff !important;}
.orange-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.orange-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#fff !important;}

.yellow-grdt > .wsmenu-list > li > a{color:#424242 !important;}
.yellow-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.yellow-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#424242 !important;}
.yellow-grdt > .wsmenu-list li a .fa{color:#424242 !important;}

.purple-grdt > .wsmenu-list > li > a{color:#fff !important;}
.purple-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.purple-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#fff !important;}

.pink-grdt > .wsmenu-list > li > a{color:#fff !important;}
.pink-grdt > .wsmenu-list > li > a{background-color:transparent !important;}
.pink-grdt > .wsmenu-list > li > a > .arrow:after{ border-top-color:#fff !important;}

 
@media only screen and (max-width: 780px) {

.red-grdt > .wsmenu-list > li > a > .fa{ color:#fff !important; }
.blue-grdt > .wsmenu-list > li > a > .fa{ color:#fff !important; }
.orange-grdt > .wsmenu-list > li > a > .fa{ color:#fff !important; }
.green-grdt > .wsmenu-list > li > a > .fa{ color:#fff !important; }
.purple-grdt > .wsmenu-list > li > a > .fa{ color:#fff !important; }
.pink-grdt > .wsmenu-list > li > a > .fa{ color:#fff !important; }

/* Color Theme */
.gry > .wsmenu-submenu > li:hover>a{ background-color:#424242 !important; color:#fff;}
.gry > .wsmenu .wsmenu-list > li > a.active{color: #fff; background-color: #424242;}
.gry > .wsmenu .wsmenu-list > li > a:hover{ color: #fff; background-color: #424242;}

.orange > .wsmenu-submenu > li:hover>a{ background-color:#ff670f !important; color:#fff;}
.orange > .wsmenu > .wsmenu-list > li > a.active{color: #fff; background-color: #ff670f;}
.orange > .wsmenu > .wsmenu-list > li > a:hover{ color: #fff; background-color: #ff670f;}

.blue > .wsmenu-submenu > li:hover>a{ background-color:#4A89DC !important; color:#fff;}
.blue > .wsmenu > .wsmenu-list > li > a.active{color: #fff; background-color: #4A89DC;}
.blue > .wsmenu > .wsmenu-list > li > a:hover{ color: #fff; background-color: #4A89DC;}	

.green > .wsmenu-submenu > li:hover>a{ background-color:#74a52e !important; color:#fff;}
.green > .wsmenu > .wsmenu-list > li > a.active{color: #fff; background-color: #74a52e;}
.green > .wsmenu > .wsmenu-list > li > a:hover{ color: #fff; background-color: #74a52e;}	

.red > .wsmenu-submenu > li:hover>a{ background-color:#DA4B38 !important; color:#fff;}
.red > .wsmenu > .wsmenu-list > li > a.active{color: #fff; background-color: #DA4B38;}
.red > .wsmenu > .wsmenu-list > li > a:hover{ color: #fff; background-color: #DA4B38;}	

.yellow > .wsmenu-submenu > li:hover>a{ background-color:#F6BB42 !important; color:#fff;}
.yellow > .wsmenu .wsmenu-list > li > a.active{color: #fff; background-color: #F6BB42;}
.yellow > .wsmenu .wsmenu-list > li > a:hover{ color: #fff; background-color: #F6BB42;}	

.purple > .wsmenu-submenu > li:hover>a{ background-color:#967ADC !important; color:#fff;}
.purple > .wsmenu > .wsmenu-list > li > a.active{color: #fff; background-color: #967ADC;}
.purple > .wsmenu > .wsmenu-list > li > a:hover{ color: #fff; background-color: #967ADC;}	
	
.pink > .wsmenu-submenu > li:hover>a{ background-color:#ee1289 !important; color:#fff;}
.pink > .wsmenu > .wsmenu-list > li > a.active{color: #fff; background-color: #ee1289;}
.pink > .wsmenu > .wsmenu-list > li > a:hover{ color: #fff; background-color: #ee1289;}	
	
.chocolate > .wsmenu-submenu > li:hover>a{ background-color:#934915 !important; color:#fff;}
.chocolate > .wsmenu > .wsmenu-list > li > a.active{color: #fff; background-color: #934915;}
.chocolate > .wsmenu > .wsmenu-list > li > a:hover{ color: #fff; background-color: #934915;}	

}

/*------------------------------------ Desktop CSS ---------------------------------------------*/
.wsmobileheader{display:none;}
.overlapblackbg{ display:none; }
.bigmegamenu{ position:relative; }
.wsmenu{
	font-family:Helvetica, sans-serif;
	color:#fff;
	font-size:13px;
	padding:0px;
	width:80%;
	float:right;
	-webkit-border-radius:2px 2px 2px 2px;
	-moz-border-radius:2px 2px 2px 2px;
	border-radius:2px 2px 2px 2px;}

.wsmenu-list{
    float: right;
    padding: 0;}
	
.wsmenu-list > li{
    float: left;
    list-style: outside none none;
   
    text-align: center;}
	
.wsmenu-list li:first-child a{
	-webkit-border-radius:2px 2px 2px 2px;
	-moz-border-radius:2px 2px 2px 2px;
	border-radius:2px 2px 2px 2px;
	}
	
.wsmenu-list li:last-child a{
	-webkit-border-radius:2px 2px 2px 2px;
	-moz-border-radius:2px 2px 2px 2px;
	border-radius:2px 2px 2px 2px;
	border-right:0px solid;
	}
	
.wsmenu-list > li > a .fa{
	display: inline-block;
	font-size:14px;
	line-height:inherit;
	margin-right:4px; }
	
.wsmenu-list li ul li a .fa.fa-angle-double-right{ font-size:12px; margin: 0 3px 0 -4px;}

.wsmenu-list li a .arrow:after {
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-top: 4px solid #b3b3b3;
    content: "";
    float: right;
    height: 0;
    margin: 0 0 0 9px;
    position: absolute;
    text-align: right;
    top: 41px;
    width: 0;}

.wsmenu-list > li > a{
color: #333;
    display: block;
    font-family: UVNTinTucHepThemBold;
    font-size: 18px;
    line-height: 85px;
    padding: 0 20px;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;}

.wsmenu-list li a:hover .arrow:after{ border-top-color:#b3b3b3}
.wsmenu-list li a.active .arrow:after{ border-top-color:#b3b3b3}
.wsmenu-list li:hover>a .arrow:after{ border-top-color:#b3b3b3}

.megamenu iframe{width:100%; margin-top:10px; min-height:200px; }
.megamenu video{ width:100%; margin-top:10px;  min-height:200px;}

/*For megamenu desktop */
.wsmenu-list li:hover .megamenu{opacity:1;}
.megamenu{
	width:100%;
	left:0px;
	position:absolute;
	top:85px;
	color:#000;
	z-index:1000;
	margin:0px;
	text-align:left;
	padding:14px;
	font-size:15px;
	border:solid 1px #eeeeee;
	background-color:#fff;border-top: 5px solid #0068DE;
	opacity: 0;
	-o-transform-origin: 0% 0%;
	-ms-transform-origin: 0% 0%;
	-moz-transform-origin: 0% 0%;
	-webkit-transform-origin: 0% 0%;
	-o-transition: -o-transform 0.3s, opacity 0.3s;
	-ms-transition: -ms-transform 0.3s, opacity 0.3s;
	-moz-transition: -moz-transform 0.3s, opacity 0.3s;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;}

.megamenu .title{
	border-bottom:1px solid #CCC;
	font-size:14px;
	padding:9px 5px 9px 0px;
	font-size:17px;
	color:#424242;
	margin-bottom:7px;
	text-align:left;
	height:39px;}
	
.link-list li{
	display:block;
	text-align:center;
	white-space:nowrap;
	text-align:left;}
	
.link-list li a{
	line-height:18px;
	border-right:none;
	text-align:left;
	padding:6px 0px;
	background:#fff !important;
	background-image:none !important;
	color: #666666 !important;
	border-right: 0 none !important;
	display:block;
	border-right:1px solid #e7e7e7;
	background-color:#fff;
	color:#424242;}
	
.link-list .fa{font-size:11px;}

.megacollink{width:23%; float:left; margin:0% 1%;}	
.megacollink li{
	display:block;
	text-align:center;
	white-space:nowrap;
	text-align:left;}
.megacollink li a{
	line-height:18px;
	border-right:none;
	text-align:left;
	padding:8px 0px;
	background:#fff !important;
	background-image:none !important;
	color: #666666 !important;
	border-right: 0 none !important;
	display:block;
	border-right:1px solid #e7e7e7;
	background-color:#fff;
	color:#424242;}
.megacollink .fa{font-size:11px;}

.megacolimage{width:31.33%; float:left; margin:0% 1%;}	
.typographydiv{width:100%; margin:0% 0%;}	
.typographylinks{width:25%; float:left; margin:0% 0%;}	
.mainmapdiv{ width:100%; display:block; margin:0% 0%; }

.wsmenu-list .ad-style{width:28%; float:right;}
.wsmenu-list .ad-style a{border:none !important; padding:0px !important; margin:0px !important; line-height:normal !important; background-image:none !important;}
.mobile-sub .megamenu .ad-style a:hover{ background-color:transparent !important; }
.wsmenu-list .megamenu  li:hover>a{background:transparent !important;}
.wsmenu-list .megamenu  li a:hover{background:transparent !important; text-decoration:underline;}
.wsmenu-list .megamenu li .fa {  margin-right:5px;    text-align: center;    width: 18px;}
.mrgtop{ margin-top:15px; }
.show-grid div{padding-bottom: 10px; padding-top: 10px; background-color:#dbdbdb; border: 1px solid #e7e7e7; color:#6a6a6a; margin:2px 0px;}


/*For halfmenu */
.halfmenu{
	width:40%;
	right:auto !important;
	left:auto !important;}

.halfmenu .megacollink{
	width:48%;
	float:left;
	margin:0% 1%;}		
/*For halfmenu */


/*Form for desktop */
.halfdiv{
	width:35%;
	right:0px !important;
	left:auto;}
	
.menu_form{width:100%; display:block;}
.menu_form input[type="text"]{
	width:100%;
	border:1px solid #e2e2e2;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	color:#000;
	font-size:13px;
	padding:8px 5px;
	margin-bottom:8px;
	}
.menu_form textarea{
	width:100%;
	border:1px solid #e2e2e2;
	border-radius:5px;
	color:#000;
	font-size:13px;
	padding:8px 5px;
	margin-bottom:8px;
	min-height:122px;}
	
.menu_form input[type="submit"]{width:25%; display:block; height:28px; float:right;  border:solid 1px #ccc; margin-right:15px; -webkit-border-radius:2px; -moz-border-radius:2px; border-radius:2px;}
.menu_form input[type="button"] {width:25%; display:block; height:28px; float:right; border:solid 1px #ccc; -webkit-border-radius:2px; -moz-border-radius:2px; border-radius:2px;}

.megamenu .left.carousel-control{ padding-top:20%; }
.megamenu .right.carousel-control{ padding-top:20%; }
.carousel-inner .item img{ width:100%; }
.megamenu .carousel-caption{
	bottom:0px;
	background-color:rgba(0,0,0,0.7);
    font-size: 13px;
    height: 31px;
    left: 0;
    padding: 7px 0;
    right: 0;
    width: 100%;}

/*Animation*/
.wsmenu-list li > .wsmenu-submenu{
	transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-webkit-transform-style: preserve-3d;
	transform: rotateX(-75deg);
	-o-transform: rotateX(-75deg);
	-moz-transform: rotateX(-75deg);
	-webkit-transform: rotateX(-75deg);
	visibility:hidden;
		}
	
.wsmenu-list li:hover > .wsmenu-submenu{
	transform: rotateX(0deg);
	-o-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-webkit-transform: rotateX(0deg);
    opacity: 1;
	visibility:visible;
	}

.wsmenu-submenu li > .wsmenu-submenu-sub{
	transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-webkit-transform-style: preserve-3d;
	transform: rotateX(-75deg);
	-o-transform: rotateX(-75deg);
	-moz-transform: rotateX(-75deg);
	-webkit-transform: rotateX(-75deg);
	visibility:hidden;
	}
	
.wsmenu-submenu li:hover > .wsmenu-submenu-sub{
	transform: rotateX(0deg);
	-o-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-webkit-transform: rotateX(0deg);
    opacity: 1;
	visibility:visible;
	}

.wsmenu-submenu-sub li > .wsmenu-submenu-sub-sub{
	transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-webkit-transform-style: preserve-3d;
	transform: rotateX(-75deg);
	-o-transform: rotateX(-75deg);
	-moz-transform: rotateX(-75deg);
	-webkit-transform: rotateX(-75deg);
	visibility:hidden;
	}
	
.wsmenu-submenu-sub li:hover > .wsmenu-submenu-sub-sub{
	transform: rotateX(0deg);
	-o-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-webkit-transform: rotateX(0deg);
    opacity: 1;
	visibility:visible;
	}


.wsmenu-list li > .megamenu{
	transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-webkit-transform-style: preserve-3d;
	transform: rotateX(-75deg);
	-o-transform: rotateX(-75deg);
	-moz-transform: rotateX(-75deg);
	-webkit-transform: rotateX(-75deg);
	visibility:hidden;
	}
	
.wsmenu-list li:hover > .megamenu{
	transform: rotateX(0deg);
	-o-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-webkit-transform: rotateX(0deg);
    opacity: 1;
	visibility:visible;
	}

	
/* Submenu CSS */
.wsmenu-submenu{
	position:absolute;
	top: 85px;
	z-index:1000;min-width: 200px;
	margin:0px;
	padding:2px;
	border:solid 1px #eeeeee;
	background-color:#fff;
	opacity: 0;
	-o-transform-origin: 0% 0%;
	-ms-transform-origin: 0% 0%;
	-moz-transform-origin: 0% 0%;
	-webkit-transform-origin: 0% 0%;
	-o-transition: -o-transform 0.3s, opacity 0.3s;
	-ms-transition: -ms-transform 0.3s, opacity 0.3s;
	-moz-transition: -moz-transform 0.3s, opacity 0.3s;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;}

.wsmenu-submenu li a {
	background:#fff !important;
	background-image:none !important;
	color: #666666 !important;
	border-right: 0 none !important;
	text-align:left;
	display:block;
	line-height:22px;
	padding:6px 12px;
	text-transform:none; 
	font-size:13px;
	letter-spacing:normal;
	border-right:0px solid;}

.wsmenu-submenu li{position:relative; margin:0px; padding:0px;}

.wsmenuexpandermain{display:none;}

.wsmenu-list li:hover .wsmenu-submenu{display:block;}

.wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub{min-width:220px; position:absolute; left:100%; top:0; margin:0px; padding:0px;
	opacity: 0;
	-o-transform-origin: 0% 0%;
	-ms-transform-origin: 0% 0%;
	-moz-transform-origin: 0% 0%;
	-webkit-transform-origin: 0% 0%;
	-o-transition: -o-transform 0.4s, opacity 0.4s;
	-ms-transition: -ms-transform 0.4s, opacity 0.4s;
	-moz-transition: -moz-transform 0.4s, opacity 0.4s;
	-webkit-transition: -webkit-transform 0.4s, opacity 0.4s;}
	
.wsmenu-list .wsmenu-submenu li:hover .wsmenu-submenu-sub{opacity:1; list-style:none; padding:2px; border:solid 1px #eeeeee; background-color:#fff;}
.wsmenu-list .wsmenu-submenu li:hover .wsmenu-submenu-sub{display:block;}
.wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub .wsmenu-submenu-sub-sub{
	min-width:220px; position:absolute; left:100%; top:0; margin:0px; padding:0px;
	opacity: 0;
	-o-transform-origin: 0% 0%;
	-ms-transform-origin: 0% 0%;
	-moz-transform-origin: 0% 0%;
	-webkit-transform-origin: 0% 0%;
	-o-transition: -o-transform 0.4s, opacity 0.4s;
	-ms-transition: -ms-transform 0.4s, opacity 0.4s;
	-moz-transition: -moz-transform 0.4s, opacity 0.4s;
	-webkit-transition: -webkit-transform 0.4s, opacity 0.4s;}
	
.wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub li:hover .wsmenu-submenu-sub-sub{opacity:1; list-style:none; padding:2px; border:solid 1px #eeeeee; background-color:#fff;}
.wsmenu-submenu li{position:relative; padding:0px; margin:0px; display:block;}
.wsmenu-click{display:none;}
.wsmenu-click02{display:none;}

/* Default Theme */ 
.wsmenu-list li:hover>a{background-color:#0068DE !important; text-decoration:none;color: white;}
.wsmenu-list > li > a:hover { background: #0068DE;  text-decoration:none;}
.wsmenu-list > li > a.active{background-color:rgba(0,0,0,0.08) !important; text-decoration:none; }
.wsmenu-submenu > li > a:hover {background-color:rgba(0,0,0,0.08) !important; border-radius:0px!important; text-decoration:none;  text-decoration:none;}

.typography-text { padding:0px 0px; font-size:15px;}
.typography-text p{ text-align:justify; line-height:24px; color:#656565;}
.typography-text ul li{ display:block; padding:2px 0px; line-height:22px;}
.typography-text ul li a{color:#656565;}
.hometext{display:none;}
.wsmenu-submenu .fa{ margin-right:7px;}


@media only screen and (min-width:780px) and (max-width:1064px) {
.wsmenu-list > li > a > .fa { display:none !important;}
.hometext{ display:block !important;}
.wsmenu{ width:100%; font-size:13px !important; position:relative;}
.bigmegamenu{ position:static !important; }
.wsmenu-list li a { white-space:nowrap !important; padding-left:4px !important; padding-right:10px !important;}
.megacollink {width:48%; margin:1% 1%;}
.typographylinks{width:48%; margin:1% 1%;}


}


 

@media only screen and (min-width: 781px) {

.wsmenu-list li:hover > .wsmenu-submenu{display:block !important;}
.wsmenu-submenu li:hover > .wsmenu-submenu-sub{display:block !important;}
.wsmenu-submenu-sub li:hover > .wsmenu-submenu-sub-sub{display:block !important;}
.wsmenu-list li:hover > .megamenu{display:block !important;}

}


/*------------------------------------ Mobile CSS ---------------------------------------------*/
@media only screen and (max-width: 780px) {
.wsoffcanvasopener .wsmenu {
	left:0px;
	-webkit-transition:all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	}

.wsmenucontainer.wsoffcanvasopener{
	display:block; margin-left:240px;
	}
	
.wsmobileheader{
	display:block !important;
	position:relative;
	top:0;
	right:0;
	left:0;
	-webkit-transition:all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	
	}
	

.wsmenu-list > li:hover>a{background-color:rgba(0,0,0,0.08) !important; text-decoration:none;}
.hometext{ display:inline-block !important; }
.megacollink {width:96% !important; margin:0% 2% !important; }
.megacolimage{width:90% !important; margin:0% 5% !important;}
.typographylinks{width:98% !important; margin:0% 1% !important;}	
.typographydiv{width:86% !important; margin:0% 7% !important;}	
.mainmapdiv{width:90% !important; margin:0% 5% !important; }

.overlapblackbg{
	left:0;
	z-index:102;
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	display:none;
	background-color:rgba(0, 0, 0, 0.45);
	cursor:pointer;}
	
.wsoffcanvasopener .overlapblackbg{display:block !important;}

/* Default Theme */ 
.wsmenu-submenu > li:hover>a{ background-color:#0068DE; color:#666666;}
.wsmenu > .wsmenu-list > li > a.active{color: #666666; background-color:#0068DE;}
.wsmenu > .wsmenu-list > li > a:hover{ color: #666666; background-color:#0068DE;}	

.wsmenu-list li:hover .wsmenu-submenu{display:none ;}
.wsmenu-list li:hover .wsmenu-submenu .wsmenu-submenu-sub{display:none;}
.wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub li:hover .wsmenu-submenu-sub-sub{display:none; list-style:none; padding:2px; border:solid 1px #eeeeee; background-color:#fff;}
.wsmenu-list li:first-child a{-webkit-border-radius:0px 0px 0px 0px; -moz-border-radius:0px 0px 0px 0px; border-radius:0px 0px 0px 0px;}
.wsmenu-list li:last-child a{-webkit-border-radius:0px 4px 0px 0px; -moz-border-radius:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-right:0px solid;}

.innerpnd{ padding:0px !important; }
.typography-text { padding:10px 0px; }

.wsmenucontainer{
	overflow: hidden;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	min-height:800px;
	-webkit-transition:all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;}
	


/* Mobile click to drop arrow */
.wsmenu-click {
	height:43px;
	position:absolute;
	top:0;
	right:0;
	display:block;
	cursor:pointer;
	width:100%;
	}

.wsmenu-click i{
	display:block;
	height:23px;
	width:25px;
	margin-top:11px;
	margin-right:8px;
	background-size:25px;
	font-size:21px;
	color:rgba(0,0,0,0.25);
	float:right;
	}
	
	
.wsmenu-click02 {
	height:43px;
	position:absolute;
	top:0;
	right:0;
	display:block;
	cursor:pointer;
	width:100%;
	}

.wsmenu-click02 i{
	display:block;
	height:23px;
	width:25px;
	margin-top:11px;
	margin-right:8px;
	background-size:25px;
	font-size:21px;
	color:rgba(0,0,0,0.25);
	float:right;
	}	
	
.ws-activearrow > i{transform: rotate(180deg);}

.wsmenu-rotate{
	-webkit-transform:rotate(180deg);
	-moz-transform:rotate(180deg);
	-ms-transform:rotate(180deg);
	-o-transform:rotate(180deg);
	transform:rotate(180deg);}

/*2nd UL Style*/
.wsmenu-submenu-sub{
	width:100% !important;
	position:static !important;
	left:100% !important;
	top:0 !important;
	display:none;
	margin:0px !important;
	padding:0px !important;
	border:solid 0px !important;
	transform:none !important;
	opacity:1 !important;
	visibility:visible !important;
	}
	
.wsmenu-submenu-sub li{
	margin:0px 0px 0px 0px !important;
	padding:0px;
	position:relative;}
	
.wsmenu-submenu-sub a{
	display:block;
	padding:10px 25px 10px 25px;
	border-bottom:solid 1px #ccc;
	font-weight:normal;}
	
.wsmenu-submenu-sub li a.active{color:#000 !important;}

.wsmenu-submenu-sub li:hover>a{ background-color:#333333 !important; color:#fff;}

.wsmenu-list > li > a .fa{margin-right:6px;}

.wsmenu-submenu-sub-sub{
	width:100% !important;
	position:static !important;
	left:100% !important;
	top:0 !important;
	display:none;
	margin:0px !important;
	padding:0px !important;
	border:solid 0px !important;
	transform:none !important;
	opacity:1 !important;
	visibility:visible !important;
	}
	
.wsmenu-submenu-sub-sub li{
	margin:0px 0px 0px 0px !important;}
	
.wsmenu-submenu-sub-sub a{
	display:block;
	color:#000;
	padding:10px 25px;
	background:#000 !important;
	border-bottom:solid 1px #ccc;
	font-weight:normal;}
	
.wsmenu-submenu-sub-sub li a.active{ color:#000 !important;}
.wsmenu-submenu-sub-sub li:hover>a{ background-color:#606060 !important; color:#fff;}
.wsmenu{position: relative;}

.wsmenu .wsmenu-list{
	height:100%;
	overflow-y:auto;
	display:block !important;}
	
.wsmenu .wsmenu-list > li{
	width:100%;
	display:block;
	float:none;
	border-right:none;
	background-color:transparent;
	position:relative;
	white-space:inherit;}
	
.wsmenu > .wsmenu-list > li > a{
	padding:9px 32px 9px 17px;
	font-size:14px;
	text-align:left;
	border-right:solid 0px;
	background-color:transparent;
	color:#666666;
	line-height:25px;
	border-bottom:1px solid;
	border-bottom-color:rgba(0,0,0,0.13);
	position:static;
	}
	
.wsmenu > .wsmenu-list > li > a > .fa{font-size: 16px; color:#bfbfbf;}
.wsmenu .wsmenu-list li a .arrow:after{ display:none !important; }
.wsmenu .wsmenu-list li ul li a .fa.fa-caret-right{ font-size:12px !important; color:#8E8E8E; }

.mobile-sub .wsmenu-submenu{
	transform:none !important;
	opacity:1 !important;
	display:none;
	position:relative !important;
	top:0px;
	background-color:#fff ;
	border:solid 1px #ccc;
	padding:0px;
	visibility:visible !important;
	}
	
.mobile-sub .wsmenu-submenu li a{
	line-height:20px;
	height:36px;
	background-color:#e7e7e7 !important;
	font-size:13px !important;
	padding:8px 0px 8px 18px;
	color:#8E8E8E;}

.mobile-sub .wsmenu-submenu li a:hover{ background-color:#e7e7e7  !important; color:#666666; text-decoration:underline; }
.mobile-sub .wsmenu-submenu li:hover>a{ background-color:#e7e7e7 !important; color:#666666; }
.mobile-sub .wsmenu-submenu li .wsmenu-submenu-sub li a{line-height:20px; height:36px; background-color:#e7e7e7 !important; border-bottom:none; padding-left:28px;}
.mobile-sub .wsmenu-submenu li .wsmenu-submenu-sub li .wsmenu-submenu-sub-sub li a{line-height:20px; height:36px; background-color:#e7e7e7 !important; border-bottom:none !important; padding-left:38px; color:#8e8e8e;}



.wsmenu-list .megamenu{
	background-color:#e7e7e7;
	color:#666666;
	display:none;
	position:relative !important;
	top:0px;
	padding:0px;
	border:solid 0px;
	transform:none !important;
	opacity:1 !important;
	visibility:visible !important;
	}
	
.wsmenu-list li:hover .megamenu{display:none; position:relative !important; top:0px; }
.megamenu .title{ color:#666666; font-size:15px !important; padding:10px 8px 10px 0px;}
.halfdiv .title{ padding-left:15px;}
.megamenu > ul{
	width:100% !important;
	margin:0px;
	padding:0px;
	font-size:13px !important;}
	
.megamenu > ul > li > a{
	padding:9px 14px !important;
	line-height:normal !important;
	font-size:13px !important;
	background-color:#e7e7e7 !important;
	color:#666666;}
	
.megamenu > ul > li > a:hover{background-color:#000000 !important;}

.ad-style{ width:100% !important;}

.megamenu ul li.title{
	line-height:26px;
	color:#666666;
	margin:0px;
	font-size:15px;
	padding:7px 13px !important;
	border-bottom:1px solid #ccc;
	background-color:transparent !important;}

.halfdiv{ width:100%; display:block;}
.halfmenu{width:100%; display:block;}

.menu_form{ padding:10px 10px 63px 10px; background-color: #e7e7e7;}

.menu_form input[type="button"]{ width:46%; }
.menu_form input[type="submit"]{ width:46%; }	
.menu_form textarea{min-height:100px;}

.wsmenu {
	width:240px;
	left:-240px;
	height: 100%;
	position: fixed;
	top: 0;
	margin: 0;
	background-color: #fff;
	border-radius:0px;
	z-index:103;
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	border:none !important;
	background-color:#fff !important;
	}

/*.wsoffcanvasopener .wsmenu {
	width:240px;
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	}
 
.wsmenu.menuclose{
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	}*/
 

 
/* Navigation arrow Animation */
.animated-arrow{
	position:fixed;
	left:0; top:0; z-index:102;
	-webkit-transition:all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	}
	
.callusicon{
	color: #c9c9c9;
    font-size: 25px;
    height: 25px;
    position: fixed;
    right: 15px;
    top: 2px;
    transition: all 0.4s ease-in-out 0s;
    width: 25px;
    z-index: 102;
	-webkit-transition:all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	}	
	
.callusicon:focus, callusicon:hover {
    color: #fff !important;
}

.wsoffcanvasopener .callusicon{ display:none !important; }

.smallogo{
	width:100%;
	display:block;
	text-align:center;
	padding-top:9px;
	position:fixed;
	z-index:101;
	width:100%;
	height:52px;
	background: white;

	box-shadow: 0 1px 4px rgba(0,0,0,.5);
	-webkit-box-shadow: 0 1px 4px rgba(0,0,0,.5);
}
li.cap2 a {
    color: #0068de !important;
}
.wsoffcanvasopener .animated-arrow{
	left:240px;
	}


.animated-arrow{
	cursor:pointer;
	padding:13px 35px 16px 0px;
	margin:10px 0 0 15px;}
	
.animated-arrow span, .animated-arrow span:before, .animated-arrow span:after {
	cursor: pointer;
	height:3px;
	width:23px;
	background: #c9c9c9;
	position: absolute;
	display: block;
	content: '';}
	
.animated-arrow span:before{
	top: -7px;}
	
.animated-arrow span:after {
	bottom: -7px;}
	
.animated-arrow span, .animated-arrow span:before, .animated-arrow span:after{
	transition: all 500ms ease-in-out;}
	
.wsoffcanvasopener .animated-arrow span{
	background-color: transparent;}
	
.wsoffcanvasopener .animated-arrow span:before, .animated-arrow.active span:after{
	top:7px;}
	
.wsoffcanvasopener .animated-arrow span:before {
	transform: rotate(45deg);
	-moz-transform:  rotate(45deg);
	-ms-transform:  rotate(45deg);
	-o-transform:  rotate(45deg);
	-webkit-transform:  rotate(45deg);
	bottom:0px;
	}
	
.wsoffcanvasopener .animated-arrow span:after {
	transform: rotate(-45deg);
	-moz-transform:  rotate(-45deg);
	-ms-transform:  rotate(-45deg);
	-o-transform:  rotate(-45deg);
	-webkit-transform:  rotate(-45deg);
	}


/*Animation None */
.wsmenu-list li > .wsmenu-submenu{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	}
	
.wsmenu-list li:hover > .wsmenu-submenu{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	}

.wsmenu-submenu li > .wsmenu-submenu-sub{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	}
	
.wsmenu-submenu li:hover > .wsmenu-submenu-sub{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	opacity:1  !important;
	}

.wsmenu-submenu-sub li > .wsmenu-submenu-sub-sub{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	opacity:1  !important;
	}
	
.wsmenu-submenu-sub li:hover > .wsmenu-submenu-sub-sub{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	opacity:1  !important;
	}


.wsmenu-list li > .megamenu{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	opacity:1  !important;
	}
	
.wsmenu-list li:hover > .megamenu{
	transform:none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform:none !important;
	transform: none !important;
	-o-transform:none !important;
	-moz-transform: none !important;
	-webkit-transform: none !important;
	visibility:visible !important;
	opacity:1  !important;
	}

	

}


.wrapper{
	max-width:1200px;
	margin:0 auto;
	min-width:320px;}
.header{
	width:100%;
	display:block;

	padding:0px 20px;
	background:white;

	}

.logo{
	padding:10px 0px;
	margin:0;
	float:left;
	width:200px;
	}
	div.header-top p {
    float: left;
    font-size:16px;
    line-height: 50px;
    margin: 0;
}
div.header-top i {
    margin-left: 6px;
    margin-right: 6px;
    position: relative;
    top: 1px;
}
div.header-top a{
    font-size: 16px;
    color: #0068DE;
}
div.header-top nav {
    float: left;
    width: auto;
}
 div.header-top ul.nav-top {
    margin: 7px 0 0 -15px;
    min-height: 5px;
}
 div.header-top ul.nav-top li.phone {
    margin-right: 10px;
}
div.header-top ul.nav-top li a {
    padding-left: 4px;
}
 div.search {
    margin-top: 8px;
}
 div.search form {
    margin: 0;
}
.topright_are {
    float: right;
}
ul.wsmenu-list li.active a {
    /*background: rgba(0, 0, 0, 0) linear-gradient(to bottom, #e5e5e5 0%, #ffffff 100%) repeat scroll 0 0;
    color: black;*/
}
div.search button.btn-default {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    color: #ccc;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 3;
}
div.header-top {
    background-color: #f4f4f4;
    border-bottom: 1px solid #ededed;
   
}
 div.search input.search-query {
    padding-bottom: 5px;
    padding-top: 5px;
}
div.search input.search:first-child {
    border-radius: 20px;
    font-size: 0.9em;
    height: 34px;
    padding: 6px 12px;
    transition: all 0.2s ease-in 0.2s;
    width: 170px;
}
div.search input.search:focus {
    border-color: #ccc;
    width: 220px;
}
div.header-top i {
    margin-left: 6px;
    margin-right: 6px;
    position: relative;
    top: 1px;
}
.show-grid{background-color:#fff; }


@-webkit-keyframes rotating  {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotating {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.rotating {
  -webkit-animation: rotating 2s linear infinite;
  -moz-animation: rotating 2s linear infinite;
  -ms-animation: rotating 2s linear infinite;
  -o-animation: rotating 2s linear infinite;
  animation: rotating 2s linear infinite;
}

/*Color Demo*/

.moreoption{ width:100%; display:block;  margin-top:250px;}
.moreoption .boxheader{ border:solid 0px; padding-top:25px; padding-bottom:10px; font-size:15px; }



.buttoncolor{
	color: #fff;
    display: block;
    font-size:13px;
    padding:10px 15px;
    text-decoration: none;
    transition: background 0.3s linear 0s;
    width:12.5%;
	height:30px;
	float:left;
	text-align:center;
	margin:0px 0px;
}
.buttoncolor:hover{ color:#fff; text-decoration:none;}
.buttoncolor:focus{ color:#fff; text-decoration:none;}

.headertlt{ width:100%; padding:40px 0px 15px 0px; letter-spacing:-0.5px; font-size:22px; font-family: 'archivo_narrowregular'; color:#424242;}


.colorlink01{width:40%; float:left; margin:0% 0% 0% 2%; }
.colorlink02{width:40%; float:left; margin:0% 0% 0% 2%; }
.colorlink03{width:14%; float:left; margin:0% 0% 0% 2%; }

.buttoncolor02{
	color: #424242;
    display: block;
    font-size:15px;
	border-radius:2px;
	height:30px;
    padding:10px 15px;
    text-decoration: none;
    transition: background 0.3s linear 0s;
    width:100%;
	border-right:solid 5px #fff;
	float:left;
	text-align:center;
	margin:0% 0% 0% 0%;
	background-color:#f2f2f2;
	border:solid 1px #D9D9D9;
	cursor:pointer;
	text-align:center !important; 
	text-decoration:none !important;
	width:50%; float:left;
}
.buttoncolor02:hover{background-color:#424242; color:#000;}
.buttoncolor02.active{background-color:#424242; color:#fff;}

.main-content {
	position: absolute;
	top: 0;
	bottom: 0;
	width: 100%;
	overflow-x: hidden;
	overflow-y: scroll;
	-webkit-overflow-scrolling: touch;
} 

@media only screen and (min-width: 230px) and (max-width:780px){
.wrapper { width:100%; margin:0% 0%; }

.logo { display:none !important; }
.header{ box-shadow:none !important; background-image:none !important; }
.colorlink01{ width:92% !important; margin:0% 4%;}
.colorlink02{ width:92% !important; margin:0% 4%;}
.colorlink03{ width:92% !important;  margin:0% 4%;}
.buttoncolor02{ width:100% !important; margin-bottom:2%; }
.buttoncolor{ width:25%; }
.moreoption{ width:100%; margin:85px 0 0 0; background-color:transparent !important; border:none !important;
-webkit-box-shadow:none !important;
-moz-box-shadow:none !important;
box-shadow:none !important;
}

}

@media only screen and (min-width: 781px) and (max-width:1064px) {
.wrapper { width:96%; margin:0% 2%; }
.colorlink01{ width:100% !important; margin:0%;}
.colorlink02{ width:100% !important; margin:0%;}
.colorlink03{ width:100% !important; margin:0%;}
.buttoncolor02{ width:50% !important; margin-bottom:1%; }
.logo{ padding:20px 0px; float:none !important; margin:0 auto !important; width:100% !important; text-align:center; }
}


@media only screen and (min-width: 1024px) and (max-width:1200px) {
.wrapper { width:96%; margin:0% 2%; }
.colorlink01{ width:100% !important; margin:0%; }
.colorlink02{ width:100% !important; margin:0%;}
.colorlink03{ width:100% !important; margin:0%;}

}

.wsmenu-list ul li.cap2{
    font-weight: bolder;color:#0068DE!important;
    text-transform: uppercase;
}
.is-sticky .header{
    z-index: 999999;height: 60px!important;
}
.logo img{
    max-height: 68px!important;
}
.is-sticky .header .logo img{
    max-height: 41px!important;
}
.is-sticky .wsmenu-list > li > a {
  
    line-height: 60px!important;
   
}
.is-sticky .megamenu,.is-sticky .wsmenu-submenu{
    top:60px!important;
}
.is-sticky .wsmenu-list li a .arrow::after{
    top:30px;
}
.link-list li.cap2 a{
    color: #0068DE!important;
}
.link-list{
    margin: 0px;
}
  @font-face{font-family:"UVNTinTucHepThemBold";font-style:normal;font-weight:400;src:url("http://www.lola.vn/css/fonts/uvntintuchepthem_b-swiss.eot?iefix") format("eot"), url("http://www.lola.vn/css/fonts/uvntintuchepthem_b-swiss.woff") format("woff"), url("http://www.lola.vn/css/fonts/uvntintuchepthem_b-swiss.ttf") format("truetype"), url("http://www.lola.vn/css/fonts/uvntintuchepthem_b-swiss.svg#webfontOzH17K0n") format("svg");}
@font-face{font-family:"UVNTinTucHepThemBold1";font-style:normal;font-weight:normal;src:url("/blogger/anhcuoi/fonts/SFU.eot?#iefix") format("embedded-opentype"), url("/blogger/anhcuoi/fonts/UVNTinTucHepThemBold.woff") format("woff"), url("/blogger/anhcuoi/fonts/UVNTinTucHepThemBold.ttf") format("truetype"), url("/blogger/anhcuoi/fonts/UVNTinTucHepThemBold.svg#SFU") format("svg");}
@font-face{font-family:"HelveticaiDesignVn-BdCn";font-style:normal;font-weight:normal;src:url("/blogger/anhcuoi/fonts/HelveticaiDesignVn-BdCn.eot?#iefix") format("embedded-opentype"), url("/blogger/anhcuoi/fonts/HelveticaiDesignVn-BdCn.woff") format("woff"), url("/blogger/anhcuoi/fonts/HelveticaiDesignVn-BdCn.ttf") format("truetype"), url("/blogger/anhcuoi/fonts/HelveticaiDesignVn-BdCn.svg#HelveticaiDesignVn-BdCn") format("svg");}
@font-face {
     font-family: 'SFU';
     src: url('/blogger/anhcuoi//fonts/SFUTrajanRegular.ttf?v=4.3.0') format('truetype');
     font-weight: 400;
     font-style: normal
 }
 @font-face {
     font-family: 'SFUTimesTenRoman';
     src: url('/blogger/anhcuoi//fonts/SFUTimesTenRoman.ttf?v=4.3.0') format('truetype');
     font-weight: 400;
     font-style: normal
 }
.col-xs-5ths, .col-sm-5ths, .col-md-5ths, .col-lg-5ths{position:relative;min-height:1px;padding-right:10px;padding-left:10px;}
.col-xs-5ths{width:20%;float:left;}
@media (min-width:768px){.col-sm-5ths{width:20%;float:left;}
}
@media (min-width:992px){.col-md-5ths{width:20%;float:left;}
}
@media (min-width:1200px){.col-lg-5ths{width:20%;float:left;}
}

h1, h2, h3, h4, h5, h6{
    font-weight: bold;
}
img{max-width:100%;}
.clearfix{clear:both;}
a:focus{border:medium none !important;box-shadow:none !important;outline:medium none;}
*::-moz-selection{background:#009bcb none repeat scroll 0 0;color:#fff;}
 a{color:#0068DE;font-size:14px;}
ul{list-style:outside;margin:0;padding:0;margin-left: 10px;}
a{color:#0068DE;text-decoration:none;}
a:hover{color:#333;text-decoration:underline;}
input:focus, select:focus{box-shadow:none !important;outline:medium none;}
button:focus, textarea:focus{outline:medium none;}
.nav-tabs{border-bottom:medium none;}
.nav-tabs > li{margin-bottom:0;}
.nav-tabs > li > a{border:medium none;border-radius:0;margin:0;}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{border:medium none;}
.clearfix{clear:both;}
.carousel-control{background:rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;bottom:auto;opacity:1;text-shadow:none;width:auto;}
.breadcrumb{background:rgba(0, 0, 0, 0) none repeat scroll 0 0;margin-bottom:5px;margin-top:5px;}
.pagination{float:right;margin:0;}
textarea{resize:none;}
body{background:white;color: #666;}
header{background:white;width:100%;}
#hoadon label{width:136px;}
.giohangsp{border:1px solid #e5e5e5;margin-bottom:10px;padding:10px;}
.content{padding:9px 0;}
.fa{font-size:19px;}
.header-service{background:#f5f5f5 none repeat scroll 0 0;color:#666;font-family:"Open Sans",sans-serif;letter-spacing:0.5px;line-height:1.4em;padding:4px 0;box-shadow:0 0 5px #ccc;font-size:12px;text-transform:uppercase;}
@font-face{font-family:"Roboto-Regular";src:url("fonts/Roboto-Regular.eot?#iefix") format("embedded-opentype"), url("fonts/Roboto-Regular.woff") format("woff"), url("fonts/Roboto-Regular.ttf") format("truetype"), url("fonts/Roboto-Regular.svg#svgFontName") format("svg");}
@font-face{font-family:"Roboto-Bold";src:url("fonts/Roboto-Bold.eot?#iefix") format("embedded-opentype"), url("fonts/Roboto-Bold.woff") format("woff"), url("fonts/Roboto-Bold.ttf") format("truetype"), url("fonts/Roboto-Bold.svg#svgFontName") format("svg");}
.topbar{background:@mau1;display:block;float:left;height:35px;overflow:hidden;padding:7px 0;width:100%;border-bottom:7px solid @mau4;}
.img-responsive1{max-height:96px;max-width:81%;padding:9px 0;}
.topbar-right{text-align:right;}
.time-topbar time, .time-topbar strong, .topbar-right a{color:white;}
.hotline-topbar strong{color:#fff601;font-size:13px;}
.cont-header{background:white;float:left;width:100%;padding:0px 0px;}
.search-header{margin-top:25px;position:relative;}
.search-header select{background:#efefef none repeat scroll 0 0;border:1px solid #efefef;border-radius:5px 0 0 5px;box-shadow:0 0 2px #fff inset;color:#666;float:left;font-size:11px;padding:7px 3px;width:28%;}
.search-header input[type="text"]{border:1px solid #efefef;border-radius:5px;float:right;font-size:12px;padding:6px 5px 5px;width:100%;}
.search-header input[type="submit"]{background:#fdd922 none repeat scroll 0 0;border:medium none;border-radius:5px;color:#333;font-size:12px;font-weight:bold;padding:4px 25px 5px;position:absolute;right:17px;text-transform:uppercase;top:2px;}
.cart-header{border-radius:5px 5px 0 0;float:right;margin-top:15px;padding:3px;position:relative;transition:all 200ms ease 0s;}
.cart-header strong, .cart-header span{clear:both;float:left;margin-left:0;}
.cart-header span.amount{font-size:15px;font-weight:bold;}
.cart-header strong{color:white;left:43px;position:relative;text-transform:uppercase;}
.cart-header p{background:#009bcb none repeat scroll 0 0;border-radius:50%;float:right;margin-left:10px;margin-top:-6px;padding:10px 11px 10px 9px;text-align:center;}
.cart-header p i{color:#fff;float:left;font-size:20px;width:20px;}
.cart-hover{background:#009bcb none repeat scroll 0 0;border-radius:5px 0 5px 5px;opacity:0;padding:10px;position:absolute;right:0;top:57px;width:250px;z-index:-1;}
.cart-hover tr{border-bottom:1px solid #fff;float:left;margin-bottom:10px;padding-bottom:10px;width:100%;}
.cart-hover tr td, .cart-hover tr td h5 a, .cart-hover tr td a i{color:#fff !important;}
.cart-hover table{float:left;width:100%;}
.cart-hover table tbody tr td:first-child{margin-left:10px;padding:0;}
.cart-hover table tbody tr td{padding:5px 10px;}
.all-prod-cart{float:left;width:100%;}
.all-prod-cart p, .all-prod-cart a{float:left;text-align:right;width:100%;}
.all-prod-cart p{background:rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;border-radius:0;margin:0;padding:0;}
.all-prod-cart strong, .all-prod-cart span{clear:none;color:#fff;float:none;}
.all-prod-cart a{color:#fff !important;}
.cart_total{color:#fff;}
.hotline-topbar{display:inline-block;float:none;}
.hotline-topbar p{float:right;color:white;line-height: 10px;}
.content-home{float:left;margin-top:20px;position:relative;width:100%;}
#carousel-slider-home{overflow:hidden;}
#carousel-slider-home .carousel-control{background:#009bcb none repeat scroll 0 0 !important;opacity:0;top:42%;transition:all 300ms ease 0s;}
#carousel-slider-home:hover .carousel-control{opacity:1;transition:all 300ms ease 0s;}
#carousel-slider-home .carousel-control i{color:#fff;font-size:26px;line-height:16px;padding:12px 15px;}
#carousel-slider-home .carousel-control.left{left:-100px;}
#carousel-slider-home .carousel-control.right{right:-100px;}
#carousel-slider-home:hover .carousel-control.left{left:15px;}
#carousel-slider-home:hover .carousel-control.right{right:15px;}
.sidebar-home h6{background:#009bcb none repeat scroll 0 0;color:#fff;float:left;font-family:"Roboto-Bold";font-size:16px;padding:14px 0 10px;text-align:center;text-transform:uppercase;width:100%;}
.sidebar-home ul{float:left;width:100%;}
.sidebar-home ul li{float:left;padding:5px 10px 4px 15px;width:100%;}
.danhmucsanpham i{font-size:7px;padding-right:6px;position:relative;top:-1px;}
.sidebar-home ul li img{float:left;margin-right:15px;}
.sidebar-home ul li ul img{float:none;margin:0;}
.sidebar-home ul li h2{color:#666;font-size:14px;}
.sidebar-home ul li:hover h2{color:#009bcb;}
.sidebar-home ul li span, .sidebar-home ul li p{float:left;width:79%;}
.text-sidebar{float:left;width:85%;}
.text-sidebar p{color:#a7a7a7;font-size:11px;}
.sidebar-home select{float:left;font-size:14px;padding:5px;width:100%;}
.opt-content-top{background:#e5e5e5 none repeat scroll 0 0;float:left;margin-top:3px;padding:10px 0 0;width:100%;}
.list-opt-content-top p{border:4px solid transparent;border-radius:50%;float:left;padding:7px 0;text-align:center;width:44px;}
.list-opt-content-top p i{color:#fff;font-size:20px;}
.list-opt-content-top-1 p{background:#000 none repeat scroll 0 0;border-color:#d0d0d0;}
.list-opt-content-top-2 p{background:#db2881 none repeat scroll 0 0;border-color:#f6d5e4;}
.list-opt-content-top-3 p{background:#ed6a1a none repeat scroll 0 0;border-color:#ffe5d5;}
.list-opt-content-top-4 p{background:#0cafe1 none repeat scroll 0 0;border-color:#0086af;}
.text-list-opt{float:left;margin-top:5px;padding-left:10px;width:75%;}
.text-list-opt h6{font-size:12px;font-weight:bold;}
.text-list-opt span{font-size:11px;}
.list-opt-content-top-1 .text-list-opt h6, .list-opt-content-top-1 .text-list-opt span{color:#000;}
.list-opt-content-top-2 .text-list-opt h6, .list-opt-content-top-2 .text-list-opt span{color:#db2881;}
.list-opt-content-top-3 .text-list-opt h6, .list-opt-content-top-3 .text-list-opt span{color:#ed6a1a;}
.list-opt-content-top-4 .text-list-opt h6, .list-opt-content-top-4 .text-list-opt span{color:#009bcb;}
.banner-home{float:left;margin-top:20px;width:100%;}
.box-fashion{background:#222222 none repeat scroll 0 0;border-radius:10px 10px 0 0;float:left;margin:0;min-height:320px;padding:0 20px;position:relative;width:100%;}
.title-section{border-bottom:3px solid @maulink;float:left;margin-bottom:18px;width:100%;margin-top: 10px;}
.title-section a{color:@maulink;float:left;font-family:HelveticaiDesignVn-BdCn;font-size:22px;font-weight:normal;padding-bottom:9px;position:relative;text-transform:uppercase;}
.before-content-area .box{padding:17px 30px 21px;}
.top-box h2{border:medium none;color:#f2880a;display:inline-block;float:left;font-size:24px;line-height:28px;margin:0;min-height:37px;padding:12px 0 0;width:129px;}
.box-text{background:rgba(0, 0, 0, 0) url("http://livedemo00.template-help.com/wordpress_42065/wp-content/themes/theme1887/images/bg-title.gif") repeat-y scroll 0 0;color:#6f6f6f;font-size:14px;line-height:20px;overflow:hidden;padding:5px 0 4px 29px;}
.widget.popular.facebook{border:1px solid #e5e5e5;overflow:hidden;}
.image-button.image-left.giomocua.style4{font-size:25px;font-weight:bold;margin-bottom:20px;}
.quangcao{width:100%;}
.quangcao img{border:1px solid #e5e5e5;margin-bottom:10px;padding:2px;width:100%;}
.title-section a::before{bottom:-1px;content:"";height:2px;left:0;position:absolute;width:120%;}
.tab-fashion .link-cat{position:absolute;right:8px;top:14px;z-index:100;}
.tab-fashion .link-cat a{background:#e3e3e3 none repeat scroll 0 0;margin-right:1px;padding:7px 15px 5px;}
.tab-fashion .link-cat a:first-child{background:#009bcb none repeat scroll 0 0;color:#fff !important;padding-bottom:6px;}
.tab-fashion .tab-fashion-cont{float:left;margin-top:40px;position:relative;width:100%;}
.tab-fashion .slick-prev, .tab-fashion .slick-next{border:1px solid #ccc;font-size:14px;height:22px;position:absolute;top:-20px;width:22px;}
.tab-fashion .slick-prev::before, .tab-fashion .slick-next::before{display:none;}
.tab-fashion .slick-prev{left:auto;right:30px;}
.tab-fashion .slick-next{right:0;}
.slick-dots{display:none !important;}
.slider-fashion{margin-bottom:0;padding:20px 0;}
.list-slider-fashion{background:white none repeat scroll 0 0;border:1px solid #e5e5e5;margin-bottom:28px;margin-left:-1px;overflow:hidden;padding:0px 15px;height:100%;position:relative;text-align:center;}
.boxspitemslide{background:white none repeat scroll 0 0;border:0px solid #e5e5e5;margin-right:7px;padding:0px 11px 12px 11px;position:relative;text-align:center;}
.boxspitemslide b {
    clear: both;
    color: #858076;
    display: block;
    font-size: 10px;padding-top: 10px;padding-bottom: 7px;
    max-height: 41px;
    overflow: hidden;
   
}
.list-slider-fashion span.onsale, .slider-top-buy span.onsale, .slider-detail span.onsale{background:#3f5c9a none repeat scroll 0 0;border-radius:50%;box-shadow:none;color:#fff;font-weight:normal;left:auto;line-height:16px;margin:0;min-height:0;min-width:0;padding:10px 6px;position:absolute;right:30px;top:15px;width:auto;z-index:1000;}
.slider-top-buy span.onsale, .slider-detail span.onsale{top:20px;}
.list-slider-fashion span.onsale::before, .slider-top-buy span.onsale::before, .slider-detail span.onsale::before{background:#fff none repeat scroll 0 0;border-radius:50%;content:"";height:4px;left:16px;position:absolute;top:4px;width:4px;}
.list-slider-fashion span.onsale::after, .slider-top-buy span.onsale::after, .slider-detail span.onsale::after{background:#333 none repeat scroll 0 0;content:"";height:24px;left:18px;position:absolute;top:-20px;width:1px;}
.slider-top-buy .item > div{position:relative;}
.list-slider-fashion > a{float:left;text-align:center;width:100%;}
.list-slider-fashion a img{display:initial;padding:20px 0;width:100%;}
.list-slider-fashion h2{float:left;margin-top:15px;width:100%;}
.list-slider-fashion h2 a{color:#009bcb;float:left;font-size:14px;min-height:36px;width:100%;}
.list-slider-fashion span.amount{color:#f00;font-size:18px;margin-top:15px;}
.list-slider-fashion del span.amount, .text-slider-top-buy .price del span.amount{color:#aeaeae;font-size:12px;margin-top:0 !important;text-decoration:line-through;}
.list-slider-fashion ins span.amount, .text-slider-top-buy .price ins span.amount{color:#f00;font-size:18px;margin-top:0 !important;}
.boxspitemslide > a{float:left;text-align:center;width:100%;}
.boxspitemslide.item a {
    color: #858076;
    font-family: SFU;
}
.boxspitemslide a img{  
    border-radius: 0px;
    padding: 0 0px 0px 0;
    width: 100%;}
.boxspitemslide h2{float:left;margin-top:15px;width:100%;}
.boxspitemslide h2 a{color:#009bcb;float:left;font-size:14px;min-height:36px;width:100%;}
.boxspitemslide span.amount{color:#f00;font-size:18px;margin-top:15px;}
.boxspitemslide del span.amount, .text-slider-top-buy .price del span.amount{color:#aeaeae;font-size:12px;margin-top:0 !important;text-decoration:line-through;}
.boxspitemslide ins span.amount, .text-slider-top-buy .price ins span.amount{color:#f00;font-size:18px;margin-top:0 !important;}
.text-slider-top-buy .price ins{text-decoration:none;}
.list-slider-fashion span{float:left;margin-top:10px;width:100%;}
.list-slider-fashion span a{background:#adadad none repeat scroll 0 0;color:#fff;padding:3px 5px;}
.list-slider-fashion span:hover a{background:#ff3420 none repeat scroll 0 0;color:#fff !important;}
.ad-page, .cmt-detail-pro{float:left;width:100%;}
.ad-page img{float:left;width:100%;}
.slider-prod-cost-down, .slider-prod-new{float:left;width:100%;}
.slider-prod-cost-down{background:#f8f8f8 none repeat scroll 0 0;padding:20px 0;}
.slider-prod-new{padding:20px 0;}
.prod-cost-down .title-section a{font-size:16px;}
.prod-new .title-section a{color:#333;font-size:16px;white-space:nowrap;}
.prod-new .title-section a::before{display:none;}
.box-fashion-2{min-height:435px;}
.box-fashion-2 .tab-content{margin-top:20px;}
.slider-top-buy{float:left;width:100%;}
.slider-top-buy .item{background:#f8f8f8 none repeat scroll 0 0;float:left;margin-top:20px;padding:30px 10px;width:100%;}
.text-slider-top-buy{text-align:center;}
.text-slider-top-buy h2 a{color:#009bcb;float:left;font-size:16px;margin:5px 0 10px;width:100%;}
.text-slider-top-buy p{color:#b1b1b1;font-size:13px;}
.text-slider-top-buy span{display:block;margin-top:10px;}
.text-slider-top-buy span a{background:#adadad none repeat scroll 0 0;color:#fff !important;padding:5px 10px;}
.text-slider-top-buy span a:hover{background:#f00 none repeat scroll 0 0;}
.slider-top-buy .carousel-control.left{left:auto;right:30px;}
.slider-top-buy .carousel-control.right{right:0;}
.slider-top-buy .carousel-control{border:1px solid #ccc;height:22px;position:absolute;top:-27px;width:22px;}
.slider-top-buy .carousel-control i{font-size:14px;margin-top:3px;}
.slider-brand{border-top:1px solid #ebebeb;margin-top:30px;padding-top:10px;}
.list-brand{height:auto;padding:5px 10px;}
.slider-brand .slick-prev, .slider-brand .slick-next{border:5px solid #009bcb;height:0;top:75%;transform:rotateZ(45deg);width:0;}
.slider-brand .slick-prev{border-right:5px solid transparent !important;border-top:5px solid transparent !important;}
.slider-brand .slick-next{border-bottom:5px solid transparent !important;border-left:5px solid transparent !important;}


.social-footer, .paygate-footer{float:left;margin-top:20px;width:100%;}
.paygate-footer{border-top:1px solid #e1e1e1;padding-top:10px;}
.social-footer{border-top:1px solid #e1e1e1;padding-top:20px;}
.social-footer ul{float:left;width:100%;}
.social-footer ul li{float:left;margin-right:5px;}
.social-footer ul li a{background:#828182 none repeat scroll 0 0;border-radius:50%;float:left;padding:10px;}
.social-footer ul li a i{color:#fff;float:left;font-size:18px;height:20px;text-align:center;width:20px;}
.footer-right ul li{float:left;margin-bottom:5px;width:100%;}
.footer-right ul li a{color:white;font-size:13px;}
.received-mail{border-top:1px solid #e1e1e1;margin-top:6px;padding:20px 15px 0;}
.received-mail p{color:#838383;font-size:13px;}
.received-mail form{margin-top:20px;position:relative;}
.received-mail form input[type="text"]{background:#f6d685 none repeat scroll 0 0;border:medium none;border-radius:7px;font-size:12px;padding:10px 120px 10px 10px;width:100%;}
.received-mail form input[type="submit"]{background:#009bcb none repeat scroll 0 0;border:medium none;border-radius:0 7px 7px 0;color:#fff;font-family:"Roboto-Bold";font-size:16px;padding:9px 20px 6px;position:absolute;right:0;top:29px;}
.received-mail p.wysija-paragraph{float:left;width:100%;}
.copyright{border-top:1px solid #f6d685;padding:20px 0 15px;}
.copyright p{float:left;font-size:13px;color:white;}
.copyright span{float:right;font-size:13px;}
.copyright a{color:white;}
.footer-t {
    color: white;
    font-family: SFU;
    font-size: 21px;
    margin-bottom: 13px;
    text-transform: uppercase;
}
.sidebar-home .widget_price_filter, .sidebar-home .widget_price_filter form, .cont-slider-filter, .promo-sidebar{float:left;margin-top:15px;width:100%;}
.sidebar-home .widget_price_filter .title-section a, .promo-sidebar .title-section a{font-family:"Roboto-Regular";font-size:18px;}
.sidebar-home .widget_price_filter form .ui-slider-range.ui-widget-header.ui-corner-all{background:rgba(0, 0, 0, 0) -moz-linear-gradient(center top , #14baee 0%, #009bcb 100%) repeat scroll 0 0 !important;box-shadow:none;}
.sidebar-home .widget_price_filter form .ui-slider-handle.ui-state-default.ui-corner-all{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;border-bottom:3px solid #009bcb;border-image:none;border-left:3px solid transparent !important;border-radius:0;border-right:3px solid #009bcb;border-top:3px solid transparent !important;box-shadow:none;height:0;top:-10px;transform:rotateZ(45deg);width:0;}
.sidebar-home .widget_price_filter form .ui-slider-handle.ui-state-default.ui-corner-all:last-child{margin-left:-5px;}
.sidebar-home .price_slider_amount button[type="submit"]{background:#f4f4f4 none repeat scroll 0 0 !important;border:medium none !important;border-radius:0 !important;box-shadow:none !important;color:#333 !important;font-size:14px !important;font-weight:normal !important;text-shadow:none !important;}
.sidebar-home .price_slider_amount button[type="submit"]:hover{background:#009bcb none repeat scroll 0 0 !important;color:#fff !important;}
.title-cate-all{border-bottom:1px solid #ddd;float:left;padding:8px 0;width:100%;}
.title-cate-all h1.page-title, .title-cate-all p, .title-cate-all h1.pagetitle, .cont-news-detail-page h1.single_title{color:white;float:left;font-family:"Roboto-Bold";font-size:18px;text-transform:uppercase;white-space:nowrap;}
.cont-cate-all{float:left;margin-top:15px;padding:0 10px;width:100%;}
.woocommerce-breadcrumb{color:#333 !important;float:right;font-size:12px !important;margin-bottom:15px !important;width:100%;}
.woocommerce-breadcrumb a{color:#009bcb !important;font-size:12px !important;}
.pos-link{float:right;}
.cont-cate-all p.woocommerce-result-count{font-family:Arial,"Helvetica Neue",Helvetica,sans-serif !important;font-size:12px;text-transform:none !important;}
.cont-promo-sidebar{background:#f8f8f8 none repeat scroll 0 0;float:left;margin-top:15px;width:100%;}
.list-promo-sidebar{float:left;padding:10px;width:100%;}
.list-promo-sidebar a img{float:left;width:33.3333%;}
.text-promo-sidebar{float:left;padding-left:10px;width:66.6667%;}
.text-promo-sidebar h2 a{color:#009bcb;font-size:14px;}
.text-promo-sidebar small{color:#aeaeae;font-size:12px;text-decoration:line-through;}
.text-promo-sidebar p{color:#f00;font-size:18px;}
.woocommerce-pagination ul, .woocommerce-pagination ul li{border:medium none !important;}
.woocommerce-pagination ul li a, .woocommerce-pagination ul li span{background:#ededed none repeat scroll 0 0;border:medium none;border-radius:0 !important;color:#333;margin-left:10px !important;padding:8px 10px 8px 11px !important;}
.woocommerce-pagination ul li a:hover, .woocommerce-pagination ul li span{background:#009bcb none repeat scroll 0 0 !important;color:#fff !important;}
#slider-product, #thumb-product ul li{border:1px solid #ccc;}
#thumb-product ul li{border-radius:3px;}
#thumb-product{margin-top:20px;position:relative;}
#thumb-product .jcarousel-prev, #thumb-product .jcarousel-next{border:10px solid #009bcb;height:0 !important;top:36%;transform:rotateZ(45deg);width:0;}
#thumb-product .jcarousel-prev{border-right:10px solid transparent;border-top:10px solid transparent;left:-10px;}
#thumb-product .jcarousel-next{border-bottom:10px solid transparent;border-left:10px solid transparent;right:-10px;}
.info-detail h1{color:#666 !important;font-family:"Roboto-Bold" !important;font-size:18px !important;line-height:24px;text-transform:uppercase !important;}
.info-detail .clear{clear:none;}
.product_meta{float:left;margin:5px 0;width:100%;}
.product_meta span{color:#b3b3b3;font-size:13px;}
.share-prod{border-bottom:1px dotted #ccc;float:left;padding:5px 0;width:100%;}
p.stt-prod{float:left;margin-top:10px;width:100%;}
p.stt-prod i{color:#025889;font-size:16px;}
p.stt-prod span{color:#025889;font-size:13px;margin-left:10px;}
.price-prod{float:left;margin-top:10px;width:100%;}
del{color:#666 !important;float:left;font-size:13px !important;width:100%;}
.price-prod ins{color:#f00;float:left;font-size:20px;text-decoration:none;width:100%;}
.price-prod ins em{color:#adadad;font-size:11px;margin-left:10px;}
.save-money{color:#666;float:left;font-size:13px;margin:5px 0;width:100%;}
.description-prod{float:left;margin-top:10px;width:100%;}
.description-prod p, .description-prod ul li{color:#666;font-size:13px;}
.description-prod ul li{float:left;padding-left:10px;position:relative;width:100%;}
.description-prod ul li::before{content:"-";font-size:14px;left:0;position:absolute;top:0;}
.qti-prod{float:left;margin-top:15px;width:100%;}
.qti-prod p{float:left;margin-right:10px;margin-top:8px;}
.qti-prod form{float:left;margin-bottom:0;width:auto;}
.qti-prod .quantity.buttons_added{float:left;margin-right:5px;padding-right:25px;position:relative;}
.qti-prod .quantity.buttons_added input[type="number"]{float:left;padding:5px;width:40px;}
.qti-prod .quantity.buttons_added input.minus[type="button"]{bottom:0;line-height:10px;padding:0 7px 0 6px;position:absolute;right:0;}
.qti-prod .quantity.buttons_added input.plus[type="button"]{line-height:10px;padding:0 5px;position:absolute;right:0;top:0;}
.info-detail button[type="submit"]{background:#428bca none repeat scroll 0 0 !important;border:1px solid #357ebd !important;box-shadow:none;margin-right:5px;padding:7px 10px;}
.qti-prod form button[type="submit"] i, .qti-prod form a.view-cart i{color:#fff;font-size:14px;margin-right:10px;}
.qti-prod form a.view-cart{background:#bfbfbf none repeat scroll 0 0;border-radius:4px;color:#fff !important;float:left;padding:8px 7px 6px;}
.yith-wcwl-add-to-wishlist{border-top:1px dotted #ccc;float:left;margin:10px 0;padding-left:20px;padding-top:10px;position:relative;width:50%;}
.yith-wcwl-add-to-wishlist::before{content:"?";display:inline-block;font-family:FontAwesome;font-feature-settings:normal;font-kerning:auto;font-language-override:normal;font-size:inherit;font-size-adjust:none;font-stretch:normal;font-style:normal;font-synthesis:weight style;font-variant:normal;font-weight:normal;left:0;line-height:1;position:absolute;text-rendering:auto;top:11px;}
.info-detail a.compare{border-top:1px dotted #ccc;float:left;margin:10px 0;padding-left:20px;padding-top:10px;position:relative;width:50%;}
.info-detail a.compare::before{content:"?";display:inline-block;font-family:FontAwesome;font-feature-settings:normal;font-kerning:auto;font-language-override:normal;font-size:inherit;font-size-adjust:none;font-stretch:normal;font-style:normal;font-synthesis:weight style;font-variant:normal;font-weight:normal;left:0;line-height:1;position:absolute;text-rendering:auto;top:11px;}
.info-detail form.cart{float:left;width:100%;}
.info-detail .price-prod .price del span.amount{color:#666 !important;font-size:13px !important;}
.info-detail .price-prod .price span.amount{color:#f00;font-size:20px;width:100%;}
.compare-prod a{margin-right:15px;}
.compare-prod a, .compare-prod a i{color:#025889;font-size:13px;}
.info-des-detail{margin-top:30px;}
.title-info-des-detail{border-bottom:1px dotted #ccc;float:left;padding-bottom:10px;width:100%;}
.title-info-des-detail h5{color:#666;font-size:18px;text-transform:uppercase;}
.cont-info-des-detail{float:left;margin-top:15px;width:100%;}
.cont-info-des-detail h1{font-size:26px;line-height:30px;}
.cont-info-des-detail h2{font-size:22px;line-height:26px;}
.cont-info-des-detail h3{font-size:18px;line-height:22px;}
.cont-info-des-detail h4, .cont-info-des-detail h5, .cont-info-des-detail h6{font-size:16px;line-height:20px;}
.cont-info-des-detail ul{list-style:outside none disc;margin:5px 0;padding-left:25px;}
.cont-info-des-detail ul li{float:left;padding:3px 0;width:100%;}
.cont-info-des-detail p{color:#666;font-size:13px;margin-bottom:5px;}
.info-service{border:1px dotted #ccc;float:left;padding:10px;width:100%;}
.title-info-service{border-bottom:1px solid #ccc;float:left;padding-bottom:10px;width:100%;}
.title-info-service p{background:#009bcb none repeat scroll 0 0;color:#fff;float:left;padding:5px 10px;}
.cont-info-service{border-bottom:1px solid #ccc;float:left;margin-top:10px;width:100%;}
.cont-info-service p{float:left;margin-bottom:10px;width:100%;}
.cont-info-service p i{margin-right:10px;}
.number-info-service{float:left;margin-top:15px;width:100%;}
.list-number-info-service{float:left;margin-bottom:10px;width:100%;}
.list-number-info-service i{float:left;font-size:20px;margin-right:15px;}
.list-number-info-service p{color:#f00;font-size:18px;}
.list-number-info-service span{color:#b0b0b0;font-size:12px;}
.tab-prod-rel{margin-top:15px;}
.tab-prod-rel .nav-tabs{border-bottom:1px solid #ddd;float:left;width:100%;}
.tab-prod-rel .nav-tabs > li.active > a, .tab-prod-rel .nav-tabs > li.active > a:hover, .tab-prod-rel .nav-tabs > li.active > a:focus{background:#009bcb none repeat scroll 0 0;color:#fff !important;}
.tab-prod-rel .tab-content{float:left;margin-top:20px;min-height:350px;position:relative;width:100%;}
.tab-prod-rel .tab-content .tab-pane{display:block;left:0;opacity:0;position:absolute;top:0;width:100%;z-index:1;}
.tab-prod-rel .tab-content .tab-pane.active{opacity:1;z-index:100;}
.tab-prod-rel .slick-prev, .tab-prod-rel .slick-next{top:-40px;}
.cont-news-page, .list-news-page{float:left;width:100%;}
.list-news-page{border-bottom:1px dotted #ccc;padding:15px 0;}
.list-news-page a img{background:#fff none repeat scroll 0 0;border:1px solid #ccc;float:left;margin-right:15px;padding:2px;}
.list-news-page h2 a{color:#025889;font-size:18px;line-height:22px;}
.list-news-page p{color:#666;font-size:13px;margin-top:10px;}
.cont-news-detail-page{float:left;padding-top:15px;width:100%;}
.cont-news-detail-page h1{font-size:14px;font-weight:bold;margin-bottom:15px;text-transform:uppercase;white-space:nowrap;}
.cont-news-detail-page p{color:#666;font-size:13px;line-height:22px;margin-bottom:10px;text-align:justify;}
.cont-news-detail-page img{margin:0 auto 30px;}
.list-news-detail-rel{height:auto !important;}
.list-news-detail-rel img{margin-bottom:10px;min-width:100%;}
.list-news-detail-rel h2 a{color:#025889;font-size:12px;}
.news-detail-rel-wrap, .title-news-detail-rel, .cont-news-detail-rel{float:left;position:relative;width:100%;}
.title-news-detail-rel{margin-bottom:15px;}
.title-news-detail-rel a{font-size:15px;text-transform:uppercase;}
.cont-news-detail-rel .slick-prev, .cont-news-detail-rel .slick-next{background:rgba(0, 0, 0, 0) url("images/icon/sprites.png") no-repeat scroll 0 0;height:22px;position:absolute;top:-25px;width:22px;}
.cont-news-detail-rel .slick-prev::before, .cont-news-detail-rel .slick-next::before{display:none;}
.cont-news-detail-rel .slick-prev{background-position:-10px -40px;left:auto;right:30px;}
.cont-news-detail-rel .slick-next{background-position:-40px -40px;right:0;}
.post_page .woocommerce form table thead tr th{font-size:16px;font-weight:normal;line-height:20px;}
.post_page .woocommerce form table tbody tr td img{border:1px solid #ddd;margin:0;}
.post_page .woocommerce form table tbody tr td input#coupon_code[type="text"]{box-shadow:none;font-size:12px;width:150px;}
.post_page .woocommerce form table tbody tr td input[type="submit"]{background:#009bcb none repeat scroll 0 0;border:medium none;box-shadow:none;color:#fff;font-size:12px;font-weight:normal;padding:7px 10px 8px;text-shadow:none;}
.post_page .woocommerce form table tbody tr td input.checkout-button[type="submit"]{background:#003a4b none repeat scroll 0 0;}
.post_page .woocommerce .cart_totals h2{float:left;font-size:16px;text-align:left;width:100%;}
.post_page .woocommerce .cart_totals table{float:left;margin-top:15px;width:100%;}
.post_page .woocommerce .cart_totals table tr th{font-size:12px;font-weight:normal;vertical-align:middle;}
.post_page .woocommerce .cart_totals table tr td, .post_page .woocommerce .cart_totals table tr td span{font-size:12px;font-weight:normal;vertical-align:middle;}
.post_page .woocommerce .cart_totals table tr td strong span{color:#009bcb;font-size:18px;}
.woocommerce .woocommerce-error::before, .woocommerce .woocommerce-info::before, .woocommerce .woocommerce-message::before, .woocommerce-page .woocommerce-error::before, .woocommerce-page .woocommerce-info::before, .woocommerce-page .woocommerce-message::before{padding-top:0;}
.post_page .woocommerce form .form-row input.input-text, .post_page .woocommerce form .form-row textarea, .post_page .woocommerce-page form .form-row input.input-text, .post_page .woocommerce-page form .form-row textarea{border:1px solid #ddd;border-radius:3px;padding:4px 10px;}
.post_page .woocommerce form .form-row.validate-required.woocommerce-invalid .chosen-drop, .post_page .woocommerce form .form-row.validate-required.woocommerce-invalid .chosen-single, .post_page .woocommerce form .form-row.validate-required.woocommerce-invalid input.input-text, .post_page .woocommerce form .form-row.validate-required.woocommerce-invalid select, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid .chosen-drop, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid .chosen-single, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid input.input-text, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid select{border:1px solid #009bcb;}
.cont-cart-detail{float:left;margin-top:15px;width:100%;}
.add-pay h4, .add-other h4{color:#666;font-family:"Roboto-Regular";font-size:20px;}
.add-pay form, .add-other form{float:left;margin-top:15px;width:100%;}
.add-pay form label, .add-other form label{color:#666;font-size:16px;font-weight:normal;}
.add-pay form label span{color:#f00;font-size:16px;margin-left:5px;}
.add-pay form input{border-radius:0;}
.add-other form textarea{border-radius:0;height:100px;resize:none;}
.order-client{float:left;width:100%;}
.order-client h6{color:#009bcb;float:left;font-family:"Roboto-Regular";font-size:17px;margin-bottom:15px;width:100%;}
.order-client .radio{border-bottom:1px solid #ddd;margin:0;}
.order-client .radio, .order-client .radio label{float:left;width:100%;}
.order-client .radio label{margin-bottom:10px;}
.order-client .radio label input{margin-top:1px;}
.order-client button{background:#009bcb none repeat scroll 0 0;border:medium none;color:#fff;float:right;font-size:13px;font-weight:bold;margin:15px 0;padding:5px 10px;}
.post_page{float:left;width:100%;}
.post_page .ninja-forms-cont .ninja-forms-required-items{float:left;margin-bottom:15px;width:100%;}
.post_page .ninja-forms-cont .field-wrap label{float:left;margin-bottom:0;margin-right:15px;text-align:right;width:30%;}
.post_page .ninja-forms-cont .field-wrap input[type="text"]{background:#fbfbfb none repeat scroll 0 0;border:1px solid #ccc;border-radius:0;float:left;font-size:12px;height:31px;line-height:1.42857;padding:6px 12px;width:60%;}
.post_page .ninja-forms-cont .field-wrap input[type="submit"]{background:#009bcb none repeat scroll 0 0;border:medium none;color:#fff;float:left;margin-left:34%;margin-top:10px;padding:6px 10px 3px;}
.post_page .contact-right iframe{height:400px;width:100%;}
.share-prod ul{float:left;width:100%;}
.share-prod ul li{float:left;}
.single .detail-page{margin-bottom:15px;}
.formError{top:0;}
.formError .formErrorContent{background:#fff none repeat scroll 0 0;border:1px solid #ddd;color:#333;font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;font-size:12px;line-height:20px;}
.received-mail p.wysija-paragraph{margin-top:15px;position:relative;}
.title-section span{color:#009bcb;float:left;font-size:14px;padding:7px 0;position:relative;text-transform:uppercase;}
.title-section span::before{background:#009bcb none repeat scroll 0 0;bottom:-1px;content:"";height:2px;left:0;position:absolute;width:100%;}
.product_list_widget{background:#f8f8f8 none repeat scroll 0 0;float:left;margin-top:15px;width:100%;}
.product_list_widget li{float:left;margin-bottom:10px;padding:10px !important;width:100%;}
.product_list_widget li img{box-shadow:none !important;color:#009bcb !important;float:left !important;margin-right:10px !important;width:75px !important;}
.product_list_widget li del{color:#aeaeae !important;font-size:12px !important;}
.product_list_widget li ins, .sidebar-home .product_list_widget li span.amount{color:#f00 !important;float:left;font-size:18px !important;text-decoration:none;width:60%;}
.tagcloud{float:left;margin-top:15px;width:100%;}
.tagcloud a{border:1px solid #666;color:#666;float:left;font-size:12px !important;margin:0 5px 5px 0;padding:2px 4px 0;}
.tagcloud a:hover{border:1px solid #009bcb;}
.product_list_widget img{float:left !important;margin:0 15px 0 0 !important;}
.sidebar-home .product_list_widget li span.amount, .sidebar-home .product_list_widget li p{width:63% !important;}
.sidebar-home .product_list_widget li del span.amount{color:#aeaeae !important;font-size:12px !important;}
.archive .list-slider-fashion{margin-bottom:30px;}
.woocommerce .woocommerce-message, .woocommerce-page .woocommerce-message{background:#fff none repeat scroll 0 0;border-radius:0;border-top:3px solid #009bcb;box-shadow:none;float:left;margin-bottom:30px !important;padding:10px 10px 10px 40px !important;width:100%;}
.woocommerce .woocommerce-message::before, .woocommerce-page .woocommerce-message::before{background:#009bcb none repeat scroll 0 0;border-radius:0;padding:0;top:10px;}
.woocommerce-message a.button{background:#f8f8f8 none repeat scroll 0 0;border:medium none;border-radius:0;box-shadow:none;color:#333;text-shadow:none;}
.woocommerce-message a.button:hover{background:#009bcb none repeat scroll 0 0;color:#fff !important;}
.woocommerce.widget_layered_nav ul{margin-top:15px;}
.woocommerce.widget_layered_nav ul li{padding:5px 10px;}
.woocommerce.widget_layered_nav ul li:last-child{border-bottom:medium none;}
.woocommerce.widget_layered_nav select{border:1px solid #009bcb;margin-top:15px;}
.sidebar-home select.tinynav{display:none;}
@media screen and (max-width:768px){.sidebar-home select.tinynav{display:block;}
.sidebar-home #slectmenu{display:none;}
}
.woocommerce-billing-fields h3{font-size:12px;font-weight:bold;margin-bottom:27px;margin-top:6px;}
.cart-hover img{max-width:30px;}
.cart-hover a.vews_cart{display:inline-block;font-size:15px;font-weight:bold;text-align:right;width:auto;}
.page-404{padding:15px 0;}
.page-404 h2{font-size:18px;font-weight:bold;padding:15px 0;}
ins span.amount{text-decoration:none !important;}
.woocommerce form table tbody tr td img{width:60px !important;}
.time-topbar h1{color:white;float:left;font-size:12px;font-weight:bold;line-height:10px;margin:0;overflow:hidden;padding:1px;width:75%;}
.sale-label{background:rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/pt.png") repeat scroll -1px -89px;color:white;display:block;font-family:"Open Sans",sans-serif;font-size:15px;font-weight:bold;height:33px;margin-top:3px;position:absolute;right:4px;text-align:center;text-transform:uppercase;top:0;width:45px;z-index:100;}
h2.title-block, h1.page-title, h2.page-title{color:white !important;font-family:Roboto-Bold;font-size:20px;font-weight:bold;line-height:34px;margin:10px auto;}
.sidebar-home .tieude-danhmuc{background:black none repeat scroll 0 0;color:white;float:left;font-family:arial;font-size:16px;font-weight:bold;padding:10px 10px 10px 30px;text-align:left;text-transform:uppercase;width:100%;}
.a-menu-verti-0{color:#666;display:block;font-size:12px;font-weight:bold;padding-bottom:3px;}
.maintainHover{color:#666;font-size:11px;}
div.description-group{background:#e5e5e5 none repeat scroll 0 0;clear:both;margin:10px 0;overflow:hidden;padding:10px;width:100%;}
.title-sp{color:black;font-size:24px;font-weight:bold;line-height:26px;margin-top:auto;}
.spinfo_giaban{color:red;font-size:23px;font-weight:bold;}
.button-add-to-cart{background:#ff9933 none repeat scroll 0 0;border:1px solid #ff6600;color:#ffffff;display:block;float:left;font-size:21px;height:56px;line-height:20px;margin-top:16px;padding-top:7px;text-align:center;text-decoration:none;text-transform:uppercase;width:184px;}
.button-check-price{background:#ffffff none repeat scroll 0 0;border:1px solid #cccccc;color:#585858;display:block;float:left;font-size:21px;height:56px;line-height:20px;margin-left:10px;margin-top:16px;padding-top:7px;text-align:center;text-decoration:none;text-transform:uppercase;width:184px;}
.button-add-to-cart:hover{background:#ff6600 none repeat scroll 0 0;color:#ffffff;}
.button-check-price span{font-size:12px;line-height:0;text-transform:none;}
.button-add-to-cart span{font-size:12px;line-height:0;text-transform:none;}
.onlineSupport{background:rgba(0, 0, 0, 0) url("/blogger/anhcuoi//css/boxSupport.png") no-repeat scroll left top;padding-left:50px;padding-top:10px;}
.onlineSupportemail{border-top:1px dashed #cccbc5;color:#000000;line-height:1.5;margin:8px 0 0 10px;padding-top:5px;}
.widget.popular{background:#ffffff none repeat scroll 0 0;border-radius:4px;padding:0;margin-top:10px;}
.title-widget span{border-bottom:3px solid #db2c2c;display:inline-block;font-weight:bold;padding-left:10px;}
.title-widget{border-bottom:1px solid #e6e6e6;font-size:15px;line-height:40px;margin-bottom:30px;text-transform:uppercase;white-space:nowrap;}
.widget ul{margin:0;padding:0;}
.widget.popular ul li img{border:1px solid #eee;float:left;height:auto;margin-right:15px;width:100px;}
.widget.popular ul li{border-bottom:1px dotted #eee;margin-bottom:10px;overflow:hidden;padding-bottom:10px;}
.row h3{font-size:16px;font-weight:bold;}
.danhmucsanpham{border:1px solid #e5e5e5;border-radius:5px;overflow:hidden;}
.titlename{font-size:22px;}
ul.menu-verti li.menu-verti-i-0 span.icon{color:#666;float:left;height:25px;margin:3px 3px 0 0;width:27px;}
.icon-leddownlight::before{content:url("../images/leddownlight.png");}
.icon-trangchu::before{content:url("../images/icon-trangchu.png");}
.icon-bongled::before{content:url("images/bongled.png");position:relative;}
.icon-denphaled::before{content:url("../images/denphaled.png");}
.icon-denchum::before{content:url("../images/denchum.png");position:relative;}
.icon-dentha::before{content:url("../images/dentha.png");}
.icon-denngoaitroi::before{content:url("../images/denledngoaitroi.png");position:relative;}
.icon-ledrosy::before{content:url("../images/ledrosy.png");}
.icon-tuypled::before{content:url("../images/tuypled.png");position:relative;}
.icon-phaled::before{content:url("images/phaled.png");}
.icon-dentuong::before{content:url("../images/dentuong.png");}
.icon-dayled::before{content:url("../images/dayled.png");}
.icon-ledray::before{content:url("../images/denledray.png");position:relative;}
.icon-tuvan::before{content:url("../images/tuvan.png");}
.icon-giohang::before{content:url("../images/giohang.png");}
.icon-vanchuyen::before{content:url("../images/vanchuyen.png");}
.icon-catdat::before{content:url("../images/catdat.png");}
.icon-footer-showroom::before{content:url("../images/footer-showroom.png");}
.guide{display:block;padding-left:31px;}
.pro_ny.amount{text-decoration:line-through;}
#owl-demo .owl-item div{}
#owl-demo .owl-item img{width:100%;height:auto;}
#owl-slidethuonghieu{margin-top:10px;padding:10px;border: 1px solid #e3e3e3;}
.boxbaiviet{}
.boxtintucsukien{background:@mau5;margin-top:12px;overflow:hidden;border: 1px solid #e5e5e5;}
.boxtintucsukien .col-xs-12{
    padding-bottom:20px;
}
.baiviethome-img{float:left;height:120px;padding:0 10px 10px 0px;width:120px;}
.title-tintuc > a{color:@maulink;display:block;font-family:SFU;font-size:23px;text-transform:uppercase;padding-bottom: 16px;}
.info1{padding:10px 20px 20px 20px;color:white;}
.boxbaiviet li{list-style:square;margin-left: 30px;color: #333;}
.boxbaiviet li a{background:rgba(0, 0, 0, 0) url("http://donghoduyanh.com/images/arr1.jpg") no-repeat scroll left 4px;color:#333;font-size:13px;padding-left:6px;}
.title-tintuc1 > a{color:@maulink;display:block;font-size:16px;padding-bottom:6px;}
.introtext{font-size:13px;color:#333}
h2.title_dacbiet{border-bottom:3px solid @maulink;color:@maulink;font-family:SFU;padding-bottom:13px;text-transform:uppercase;}
.sanphamkhuyenmaidacbiet{position:relative;}
.title_dacbiet > span{background:transparent;padding-right:10px;font-size:23px;}
.noidunggroup{margin-top:20px;}
.itemdanhmuc_images{width:100%;}
.itemdanhmuc{border:2px solid #e8e8e8;overflow:hidden;padding:0;}
.itemdanhmuc_info{background:#003152;bottom:0;color:white;left:0;padding:7px;position:absolute;width:100%;}
.title-text-nhanhieu{
 background: white none repeat scroll 0 0;
    border: medium none;
    color: black !important;
    display: table;
    font-family: "times new roman";
    font-size: 25px;
    font-weight: normal;
    padding: 0 5px 15px 0;
    position: relative;
    text-transform: uppercase;
    width: auto;
    z-index: 1;
    }
    .news-detail-content img {
    display: block;
    margin: 20px auto;max-width: 640px;
}
.p-top {
    color: white;
    margin-top: -4px;
}
.itemdanhmuc_info > a{color:white;}
.boxspitem.col-xs-6.col-lg-5ths{padding:7px 7px 0 0;}
.img-responsive.wp-post-image{
    background:white;
    margin-bottom:17px;
 box-shadow: 0 0 5px #cccccc;
    float: left;
    margin-right: 10px;
    padding: 3px;width: 100%;
}
.entry-title > a{font-weight:bold;font-size: 18px;}
.rows-info-product-detail p{float:left;font-family:"times new roman",arial;font-size:16px;font-weight:normal;margin:0;width:130px;}
.rows-info-product-detail{color:#373435;display:block;font-family:"times new roman",arial;font-size:14px;font-weight:bold;overflow:hidden;padding:3px 0 5px;width:100%;}
#js-smart-tabs-tabs img{display:block;margin:17px auto;max-width:80%;}
.list-slider-fashion a{font-size:13px;}
@media (max-width:768px){@media (max-width:360px){}
@media (min-width:360px){.list-slider-fashion span.amount{color:#f00;font-size:15px;margin-top:6px;}
}
@media (min-width:480px){.list-slider-fashion span.amount{color:#f00;font-size:15px;margin-top:6px;}
}
@media (min-width:640px){}
.menu-header{margin-top:-62px;}
}
@media (min-width:768px){.container{width:760px;}
.img-responsive{display:inline-block;width:100%;height:auto;}
.navbar-toggle{float:none;}
}
@media (min-width:980px){.container{width:980px;}
}
@media (min-width:1280px){.container{width:1280px;}
.itemdanhmuc_images{width:100%;height:250px;}

}
.glc-title{background-color:#000;background-image:linear-gradient(to bottom, #000, #000);border-radius:4px 4px 0 0;color:#fff;}
.glc-title span{background:#ffffff none repeat scroll 0 0;border-radius:4px;color:#696969;}
.glc-col{background-color:#ffffff;border-color:#ededed;border-radius:0 0 4px 4px;padding:10px;}
#checkout-review-table, #checkout-review-table td, #checkout-review-table th{border-color:#ededed !important;padding:5px;}
.lightcheckout-discount-form, .discount-bottom .lightcheckout-discount-form, #checkout-review-table-wrapper .buttons-set, .glc-rewards-points{background-color:#ffffff;border-color:#ededed;color:#000;}
.data-table .odd, .data-table .even{background-color:#ffffff;}
.data-table tfoot{background:#f5f5f5 none repeat scroll 0 0;}
#checkout-review-table-wrapper thead th{border-bottom:medium none;color:#222;font-size:12px;font-weight:600;margin:0.5em 0 0.75em;padding:5px;text-align:left;text-transform:none;}
.data-table th, .data-table td{border-bottom:1px solid #e4e4e4;border-right:1px solid #e4e4e4;}
.data-table tbody th{background:#F5F5F5;}
.data-table tfoot td{border-bottom:1px solid;border-right:1px solid #e4e4e4;padding-bottom:5px;padding-top:5px;}
.data-table{border-collapse:collapse;border-spacing:0;border-top:1px solid;color:#3e3e3e;empty-cells:show;font-size:100%;margin:0;padding:0;width:100%;}
.glc-step.review{border:1px solid #e5e5e5;border-radius:4px 4px 0 0;margin-bottom:20px;margin-top:20px;background:white;}
.glc-title{background-color:#222222;background-image:linear-gradient(to bottom, #222222, #222222);border-radius:4px 4px 0 0;color:#fff;font-size:14px;font-weight:bold;padding:5px 10px;margin-top:0px;text-transform:uppercase;}
.glc-title span{background:#fff none repeat scroll 0 0;border:1px solid #dedede;color:#1b1b1b;float:left;font:700 11px/11px Arial,"Nimbus Sans L",Helvetica,sans-serif;height:17px;margin:1px 7px 0 0;padding:2px 0;text-align:center;width:17px;}
.glc-title strong{font-weight:700;}
.data-table tfoot td{border-bottom:1px solid #e4e4e4;border-right:1px solid #e4e4e4;padding-bottom:5px;padding-top:5px;}
.form-list input.input-text,.form-list textarea, .form-list input.input-text{font-size:12px;height:24px;}
.form-list input, .form-list select, .form-list textarea{background:#fff none repeat scroll 0 0;border:1px solid #bfbfbf;border-radius:3px;font-size:13px;width:100%;height:27px;padding-bottom:0;padding-right:0;color:#888;transition:all 0.2s ease 0s;padding-top:0px;}
.form-list label.required, .form-list label, .form-list label.required{color:#888;float:left;padding-bottom:0;padding-right:0;font-size:14px;position:relative;width:auto;z-index:0;}
.form-list label.required em, .form-list label.required em{color:#888;float:right;font-style:normal;margin:0;position:absolute;right:-8px;top:0;}
.form-list li{clear:both;}
.btnCheckOut{border-radius:3px;float:left;font-size:13px;font-weight:bold;margin-left:10px;margin-right:10px;padding:12px 31px;text-transform:uppercase;white-space:nowrap;}
.btnRed{background:rgba(0, 0, 0, 0) linear-gradient(to bottom, #ff5335 0%, #ff5335 92%, #d93307 92%) repeat scroll 0 0;border:medium none;color:#fff;cursor:pointer;text-align:center;}
.btnRed:hover{background:#d93307 none repeat scroll 0 0;color:#fff !important;}
.thuonghieukhuyenmai{background:white none repeat scroll 0 0;height:306px;padding:2px;margin:3px;}
.thuonghieukhuyenmai.item img{height:100%;width:100%;}
.blade_km{position:absolute;top:-3px;left:-3px;z-index:100;font-family:Arial, Helvetica, sans-serif;color:#fff;font-size:18px;height:75px;width:76px;background:url(http://donghoduyanh.com/images/icon-km.png) no-repeat;text-align:center;padding-top:23px}
.khungtimkiem{background:rgba(0, 0, 0, 0) url("/blogger/anhcuoi//images/bg-register.png") repeat scroll 0 0;margin:10px 0;overflow:hidden;padding:10px;}
.textinput{height:30px;margin-top:2px;padding:4px;color:#ADADAD;width:100%;}
input.textinput{
    border: 0px;
}
.boxspitem{margin-top:20px;}

.pricing {

  background: #3498db;
  width: 100%;
 
  padding: 0px 0 10px;
  color: #fff;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}
.pricing .thumbnail {
  background: #fff;
  /* IE Fall */
  background: rgba(255, 255, 255, 0.2);
  display: block;
  width: 90px;
  height: 90px;
  margin: 0 auto;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  font-size: 36px;
  line-height: 90px;
  text-align: center;
}
.pricing .title {
  cursor: pointer;
  background: #2980b9;
  margin: 40px 0 0;
  padding: 10px;
  font-size: 18px;
  text-align: center;
  text-transform: uppercase;
  font-weight: 700;
}
.pricing .content {

}
.pricing .content .sub-title {
  background: #eee;
  padding: 10px;
  color: #666;
  font-size: 14px;
  font-weight: 700;
  text-align: center;
}
.pricing .content ul {
  list-style: none;
  background: #fff;
  margin: 0;
  padding: 0;
  color: #666;
  font-size: 14px;
}
.pricing .content ul li {
  padding: 6px;
}
.pricing .content ul li:nth-child(2n) {
  background: #f3f3f3;
}
.pricing .content ul li .fa {
  width: 16px;
  margin-right: 10px;
  text-align: center;
}
.pricing .content ul li .fa-check {
  color: #2ecc71;
}
.pricing .content ul li .fa-close {
  color: #e74c3c;
}
.pricing .content a {
  display: block;
  background: #2980b9;
  max-width: 150px;
  margin: 0 auto;
  margin-top: 20px;
  padding: 10px 15px;
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  text-align: center;
  text-decoration: none;
  -webkit-transition: 0.2s linear;
  -moz-transition: 0.2s linear;
  -ms-transition: 0.2s linear;
  -o-transition: 0.2s linear;
  transition: 0.2s linear;
}
.pricing .content a:hover {
  background: #34495e;
  /* IE Fallback */
  background: rgba(52, 73, 94, 0.7);
}
.clickMe {
  background: #fff;
  /* IE Fallback */
  background: rgba(255, 255, 255, 0.8);
  position: absolute;
  top: 180px;
  left: -60px;display: none;
  padding: 5px 7px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;

  color: #3498db;
  font-size: 10px;
  text-transform: uppercase;
  font-weight: 800;
}
.clickMe:before {
  content: '';
  position: absolute;
  top: 6px;
  right: -5px;
  width: 0px;
  height: 0px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 5 solid #fff;
  /* IE Fallback */
  border-left: 5px solid rgba(255, 255, 255, 0.8);
}
@media screen and (max-width: 320px) {
	.image-small {
		display: block!important;
	}
	.image-medium {
		display: none!important;
	}
	.image-large {
		display: none!important;
	}
}

@media screen and (min-width: 320px) {
	.image-small {
		display: none!important;
	}
	.image-medium {
		display: block!important;
	}
	.image-large {
		display: none!important;
	}
}

@media screen and (min-width: 800px) {
	.image-small {
		display: none!important;
	}
	.image-medium {
		display: none!important;
	}
	.image-large {
		display: block!important;
	}
  
}
.first{
 
}
.n i{
    color: red;padding-right: 5px;font-size: 14px;
}
.full-title {
    background: #f5f5f5 none repeat scroll 0 0;
    border-radius: 3px;
    color: #323232;
    font-family: robotocondensed-bold;
    font-size: 22.8px;
    margin-bottom: 20px;
    padding: 10px;
    text-align: center;
    text-transform: uppercase;
}
.descript-post {
    float: left;
    padding: 20px 0 25px;
    width: 100%;
}
.note-txt {
    margin-bottom: 40px;
    text-align: center;
    width: 100%;
}
.note-txt span::before {
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-top: 100px solid #ea6465;
    bottom: -100px;
    content: "";
    height: 0;
    left: 25%;
    position: absolute;
    width: 0;
}
.note-txt span {
    background: #ff4b49 none repeat scroll 0 0;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    font-size: 15px;
    line-height: 20px;
    padding: 10px 13px;
    position: relative;
    text-align: left;
    width: 470px;
}
.note-txt span p{
    color: white;
}
.descript-post > img {
    display: block;
    margin: 0 auto;
    max-width: 530px;
}
 .head-hl {
    background: #f5f5f5 none repeat scroll 0 0;
    border-radius: 5px 0 0 5px;
    float: left;
    width: 100%;
}
 .hl-3 {
    margin-bottom: 10px;
    padding-right: 10px;
    width: auto;
}

.hl-3 .fa {
    font-size: 19px;
  display: inline-block;
    font-family: FontAwesome;
    font-feature-settings: normal;
    font-kerning: auto;
    font-language-override: normal;
    font-size: inherit;
    font-size-adjust: none;
    font-stretch: normal;
    font-style: normal;
    font-synthesis: weight style;
    font-variant: normal;
    font-weight: normal;
    line-height: 1;color: white;
    text-rendering: auto;
}
 .hl-3 .icon-head {
    background: #fd983c none repeat scroll 0 0 !important;
    border-radius: 3px 0 0 3px !important;
    font-size: 20px !important;
    height: 45px;
    line-height: 42px;display: block;
    margin-right: 12px;
    padding: 0;float: left;
    text-align: center;
    width: 45px;
}
.head-hl h2 {
    color: #323232;
    display: inline-block;
    font-size: 15px;
    font-weight: bold;
    line-height: 21px;
    margin-top: -1px;
    padding-top: 13px;
    text-transform: uppercase;
}

.w_gray_box {
    background-color:white;
    border-radius: 5px;
    color: #444444;
    line-height: 26px;
    margin-bottom: 20px;
    padding: 20px;
}
.w_gray_box h4 {
    color: #444444;
    font-family: "robotocondensed-regular",tahoma;
    font-size: 18px;
    line-height: 22px;
    margin-top: 2px;
}

.w_gray_box a.recommend {
    background-color: #ffffff;
    color: #666666;
    float: left;
    font-size: 12px;
    margin-bottom: 6px;
    margin-right: 6px;
    padding: 8px 22px;
}
.descript-post {
    float: left;
    padding: 5px 20px;
    width: 100%;
}
.spchitiet {
    
    clear: both;
    overflow: hidden;
}
.descript-post.descript-post-2 img {
    border: 1px solid #e5e5e5;
    margin: 10px;
    max-width: 504px;
    padding: 2px;
}
.khunghienthisanpham{
  background: white;
  text-align: justify;border-radius: 10px;
    padding: 20px;
   
}
.introtext > p {
    color: #333;
}
footer{
    margin-top: 20px;
     background: #f8f6ec none repeat scroll 0 0;
    color:#666;
}
footer h2 {
    color:#666!important;background: transparent!important;
    font-size: 16px;
    font-weight: 700;padding: 0px!important;
    text-transform: uppercase;
}
footer h2::after {
    background: #ED9C28;
    content: "";
    display: block;
    height: 4px;
    margin-top: 9px;
    width: 20%;
}


footer p{
    color:white;
}
footer li a{
    color: white;
}
footer li{
    list-style: none;
    border-bottom: 1px dotted  #ccc;
    padding: 5px 0;
}
.black{
    background:rgba(0, 0, 0, 0) url("/theme/denledv2/images/bg-register.png") repeat scroll 0 0;
}
.copyright-section {
   
    padding: 25px 0 15px;
    text-align: center;
}
.layered_subtitle {
    background-color: @maulink;
    border-radius: 5px 5px 0 0;
    color: #ffffff;
    line-height: 48px;
    margin: 0;
    padding-left: 15px; font-family: UVNTinTucHepThemBold;
    font-size: 20px;
}
.check-box-list {
    margin: 0 0 20px;
    padding: 0;
    width: 100%;
}
.check-box-list > li {
    background: white none repeat scroll 0 0;
    border-bottom: 1px solid #e5e5e5;
    border-left: 1px solid #e5e5e5;
    border-right: 1px solid #e5e5e5;
    list-style: outside none none;
    padding: 8px 20px;
}
.check-box-list a {
    font-weight: bold;
}
.is-sticky header {
    box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1);z-index: 10;
}
.is-sticky header .topbar{
    display: none;
}
.title-sp > span {
    color: #3d9b11;
}
.img-overlay {
    background: transparent none repeat scroll 0 0;
    height: 100%;
    left: 0;
    padding: 5px;
    position: absolute;
    top: 0;
    width: 100%;
}
.img-overlay::before {
    border: 1px solid #c1b89b;
    content: "";
    display: block;
    height: 100%;
    width: 100%;
}
.article-title a {
    
    font-size: 16px;
    font-weight: 700;text-transform: uppercase;
    line-height: 1.3;
}
.article-title {
    margin: 0;padding-top: 10px;
}
.overlay-wrapper {
    overflow: hidden;
    position: relative;
    max-height: 256px;
}
.article {
    border-bottom: 1px solid #e3e3e3;
    color: #333;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
.article:hover .overlay-wrapper {
    box-shadow: 0 2px 5px 3px rgba(107, 107, 107, 1);
}
.bx-form {
    margin: 10px auto;
    width: 500px;
}
.bx-form .form-group {
    margin: 10px 0;
}
.bx-form .form-group .form-title {
    border-bottom: 1px solid #e0e0e0;
    font-size: 24px;
    font-weight: 600;
    line-height: 1.5em;
    padding: 10px;
    text-align: center;
}
.bx-form .form-group .form-info {
    color: red;
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
    padding: 10px;
    text-align: center;
}
.bx-form .form-group .form-label {
    font-weight: 600;
    margin-top: 10px;
    padding-right: 10px;
    text-align: left;
    width: 100%;
}
.bx-form .form-group .form-input {
    position: relative;
    width: 100%;
}
.bx-form .form-group .form-input input[type="text"], .bx-form .form-group .form-input input[type="email"], .bx-form .form-group .form-input input[type="password"], .bx-form .form-group .form-input input[type="number"], .bx-form .form-group .form-input textarea, .bx-form .form-group .form-input select {
    border: 1px solid #e0e0e0;
    outline: medium none;
    padding: 5px 5px 5px 34px;
    transition: all 0.4s ease 0s;
    vertical-align: middle;
    width: 100%;
}
.bx-form .form-group .form-input input[type="text"]:focus, .bx-form .form-group .form-input input[type="text"]:focus ~ .form-ico, .bx-form .form-group .form-input input[type="email"]:focus, .bx-form .form-group .form-input input[type="email"]:focus ~ .form-ico, .bx-form .form-group .form-input input[type="password"]:focus, .bx-form .form-group .form-input input[type="password"]:focus ~ .form-ico, .bx-form .form-group .form-input input[type="number"]:focus, .bx-form .form-group .form-input input[type="number"]:focus ~ .form-ico, .bx-form .form-group .form-input textarea:focus, .bx-form .form-group .form-input textarea:focus ~ .form-ico, .bx-form .form-group .form-input select:focus, .bx-form .form-group .form-input select:focus ~ .form-ico {
    border-color: #333333;
}
.bx-form .form-group .form-input input.txt-sercurity[type="text"], .bx-form .form-group .form-input input.txt-sercurity[type="email"], .bx-form .form-group .form-input input.txt-sercurity[type="password"], .bx-form .form-group .form-input input.txt-sercurity[type="number"], .bx-form .form-group .form-input textarea.txt-sercurity, .bx-form .form-group .form-input select.txt-sercurity {
    width: 100px;
}
.bx-form .form-group .form-input input[type="checkbox"], .bx-form .form-group .form-input input[type="radio"] {
    vertical-align: middle;
}
.bx-form .form-group .form-input .form-input-inblock {
    display: inline-block;
    margin-right: 10px;
}
.btn-send, .btn-cancel {
    color: #ffffff!important;
    font-size: 16px;
    font-weight: 600;
    padding: 10px 20px;border: 0px;
    text-align: center;
    text-transform: uppercase;
}
.btn-send span,.btn-send i{
    color: #ffffff!important;
}
.btn-send {
    background:#0068DE;
}
.bx-form .form-group .form-input .form-input-block {
    display: block;
    margin-top: 10px;
}
.bx-form .form-group .form-input .form-ico {
    border-right: 1px solid #e0e0e0;
    height: 28px;
    left: 1px;
    line-height: 28px;
    position: absolute;
    text-align: center;
    top: 1px;
    width: 30px;
}
.bx-form .form-group .form-button {
    border-top: 1px solid #e0e0e0;
    padding-top: 10px;
    text-align: center;
}
.bx-form .error {
    color: red;
    font-weight: bold;
}
.item.slide_duan_item {
    padding: 4px;
    text-align: center;
}
.item.slide_duan_item img {
    max-height: 180px;width: 100%;;
    border: 1px solid #e5e5e5;
    padding: 2px;
    box-shadow: 0px 0px 3px #ccc;
}
.tieude_duan {
    color: @maulink;
    font-family: SFU;
    text-align: center;
}
.ico-border::after {
  
}
.ico-border::before, .ico-border::after {
    background: @maulink;
    content: "";
    display: inline-block;
    height: 2px;
    width: 222px;
}
.ico-border {
    display: inline-block;
    position: relative;
  
}
.fa-asterisk::before {
    color: @maulink;
   
    font-size: 15px;
    position: relative;
    top: 5px;
}
.boxspitemslide.item a {
    font-family: SFU;
}

.border-title {
    display: inline-block;
    margin: 0 0 20px;
    padding: 0;
    text-align: center;
    width: 100%;
}
ul.name_thuoctinh, ul.info-pro-cate {
    display: block;
    float: left !important;
    margin: 0;
    padding: 0;
    text-align: left;
    width: 50%;
}
ul.name_thuoctinh li {
   background: rgba(0, 0, 0, 0) url("http://danang.premiervillage.com.vn/PremiereVillage/Kooboo-Resource/theme/1_0_0_20160120020905/true/../../../../../Cms_Data/Sites/PremiereVillage/Themes/Default/images/icon-list.png") no-repeat scroll 6px 8px;
    border: 0 none !important;
    color: #333;
    font-size: 14px;
    height: 20px;
    list-style: outside none none;
    overflow: hidden;
    padding-left: 20px;
    width: 110px;
}
ul.info-pro-cate li {
    border: 0 none !important;
    color: #333;
    font-size: 12px;
    height: 20px;
    overflow: hidden;
    width: 160px;
}
.thongso {

    border: 1px solid #e5e5e5;
    clear: both;
    display: block;
    margin: 10px auto;
    overflow: hidden;
    padding: 10px;
    width: 100%;
}
.resp-tab-content img {
    display: block;
    margin: 20px auto;
    max-width: 700px;
}
body{

-moz-user-select: none !important;

-webkit-touch-callout: none!important;

-webkit-user-select: none!important;

-khtml-user-select: none!important;

-moz-user-select: none!important;

-ms-user-select: none!important;

user-select: none!important;

}

.sologan {
    padding: 10px 0;
}
.page {
    border-bottom: 0px solid #e3e3e3;
}
.welcom-title {
    position: relative;
}
.title-page {
    color:#333;
    font-family:"Arial";
    font-size: 24px;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.box {
    height: 162px;
    overflow: hidden;
    padding-right: 10px;
}
.overlay-wrapper > img {
    width: 100%;
}
.welcome {
    border-right: 1px solid #e3e3e3;
}
#owl-slidethuonghieu .item img {
    height: 168px;
    width: 100%;
}
.copyright-section  p,.copyright-section  a {
    color: white!important;
}
.thongso  h5 {
    text-align: left;
    color: #b2a682;
    font-size: 16px;
    font-weight: 700;
    margin-top: 0;
}
.media .media-body p {
    height: 60px;text-align: left;
    max-height: 60px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.media, .media-body {
    overflow: hidden;
}
.media {
    margin-top: 1px;
}

.media-body {
    display: table-cell;
    vertical-align: top;
}
.btn-view {
    background: rgba(0, 0, 0, 0) url("http://danang.premiervillage.com.vn/PremiereVillage/Kooboo-Resource/theme/1_0_0_20160120020905/true/../../../../../Cms_Data/Sites/PremiereVillage/Themes/Default/images/btn-view.png") no-repeat scroll 0 0;
    border: 0 none;
    border-radius: 0;
    box-shadow: none;
    color: #c1b89b;
    font-size: 18px;
    height: 50px;
    width: 50px;
}
.media-middle {
    vertical-align: middle;
}
.media-left, .media-right, .media-body {
    display: table-cell;
    vertical-align: top;
}
div.home-intro {
    background-color: #171717;
    margin-bottom: 20px;color: white;
    overflow: hidden;
    padding: 10px;
    position: relative;
    text-align: left;
}

div.home-intro p,div.home-intro a,div.home-intro span{
    color: white!important;
}





div.page-intro {
    background-color: #171717;
    margin-bottom: 20px;
    overflow: hidden;
    padding: 20px 0 10px;clear: both;
    position: relative;
    text-align: left;
}
div.page-intro div.get-started {
    margin-bottom: 15px;
    margin-top: 15px;
    position: relative;
    text-align: right;
}
div.page-intro div.get-started a.btn {
    position: relative;
    z-index: 1;
}
div.page-intro div.get-started a.btn i {
    font-size: 1.1em;
    font-weight: normal;
    margin-left: 5px;
}
div.page-intro div.get-started a {
    color: #fff;
}
div.page-intro div.learn-more {
    margin-left: 15px;
}
div.page-intro p {
    color: #fff;
    display: inline-block;
    font-size:12px;
    font-weight: 300;
    max-width: 800px;
    padding-top: 5px;
    font-style: italic;
}
div.page-intro p span {
    color: #999;
    display: block;
    font-size: 0.8em;
    padding-top: 5px;
}
div.page-intro p em {
    font-family: tahoma;
    font-size: 1.2em;
}
div.page-intro-compact {
    border-radius: 0 0 10px 10px;
    margin-top: -10px;
}
div.page-intro-compact p {
    padding-left: 20px;
}
div.page-intro-compact div.get-started {
    padding-right: 20px;
}
div.page-intro.light {
    background-color: #e2e2e2;
}
div.page-intro.light.secundary {
    background-color: #e0e1e4;
}
div.page-intro.light p, div.page-intro div.get-started a:not(.btn) {
    color: #777;
}
.page-intro h1 {
    color: white;
}
div.page-intro p {
    color: #ccc;
    display: inline-block;
    font-size: 14px;
    font-weight: 300;
    text-align: justify;
    max-width: 800px;
    padding-top: 0px;
}
.col-xs-12.col-sm-4.col-lg-4.lastest-post {
    margin-bottom: 11px;
}
img.wp-post-image {
    float: left;
}
.module-title > span, .module-title > span {
    background:#0068DE;
    border-radius: 4px;
    display: block;
    float: left;
  
    padding: 9px 15px;margin-bottom: 10px;
}
.module-title > span a {
    color: white;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    text-transform: uppercase;
    top: -3px;
}
.lastest-post .wp-post-image {
    background: white none repeat scroll 0 0;
    box-shadow: 0 0 5px #cccccc;
    float: left;
    margin-right: 10px;
    padding: 3px;
}
.lastest-post a {
    font-size: 14px;
    font-weight: bold;
}
.mota {
    font-size: 14px;
    font-style: italic;
}
.baiviet_title{
    font-size: 16px;font-weight: bold;position: relative;top:5px
}
.boxtin-right img {
    
      background: white none repeat scroll 0 0;
    box-shadow: 0 0 5px #cccccc;
    padding: 3px;
}
/* css for group tin tuc style color box*/
}
.img-thumbnail {
    border-radius: 8px;
    position: relative;margin-bottom: 20px!important;
}
.img-thumbnail span.zoom {
    background: #ccc none repeat scroll 0 0;
    border-radius: 100%;
    bottom: 8px;
    color: #fff;
    display: block;
    height: 30px;
    padding: 6px;
    position: absolute;
    right: 8px;
    text-align: center;
    width: 30px;
}
.img-thumbnail span.zoom i {
    font-size: 14px;
    left: -1px;
    position: relative;
    top: -3px;
}
a.thumb-info {
    display: block;
    max-width: 100%;
    overflow: hidden;
    position: relative;
    text-decoration: none;
}
.page-intro h1 {
    color: white;
    font-size: 30px;
}
a.thumb-info:hover span.thumb-info-action-icon {
    right: 0;
    top: 0;
}
a.thumb-info:hover span.thumb-info-action {
    opacity: 1;
}
a.thumb-info span.thumb-info-action-icon {
    background: #ccc none repeat scroll 0 0;
    border-radius: 0 0 0 25px;
    display: inline-block;
    font-size: 25px;
    height: 50px;
    line-height: 50px;
    position: absolute;
    right: -100px;
    text-align: center;
    top: -100px;
    transition: all 0.3s ease 0s;
    width: 50px;
}
a.thumb-info span.thumb-info-action-icon i {
    font-size: 24px;
    left: 3px;
    position: relative;
    top: -4px;
}
a.thumb-info:hover span.thumb-info-title {
    background: #000 none repeat scroll 0 0;
}
a.thumb-info span.thumb-info-action {
    background: rgba(36, 27, 28, 0.9) none repeat scroll 0 0;
    bottom: 0;
    color: #fff;
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: all 0.3s ease 0s;
    width: 100%;
}
a.thumb-info span.thumb-info-inner {
    display: block;
    transition: all 0.3s ease 0s;
    white-space: nowrap;
}
a.thumb-info span.thumb-info-title {
    background: rgba(41, 41, 41, 0.9) none repeat scroll 0 0;
    bottom: 10%;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    left: 0;
    letter-spacing: -1px;
    padding: 6px 8px 1px;
    position: absolute;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
    z-index: 1;
}
a.thumb-info span.thumb-info-type {
    
    border-radius: 2px;
    display: inline-block;
    float: left;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 0;
    margin: 3px -2px -15px;
    padding: 1px 5px;
    text-transform: none;
}
a.thumb-info:hover img {
    transform: scale(1.1, 1.1);
}
a.thumb-info img {
    border-radius: 3px;
    position: relative;
    transition: all 0.2s linear 0s;
}
span.thumb-info-caption {
    padding: 10px 0;
}
span.thumb-info-caption p {
    font-size: 0.9em;
    line-height: 20px;
    margin: 0 0 8px;
    padding: 10px;
}
span.thumb-info-social-icons {
    border-top: 1px dotted #ddd;
    display: block;
    margin: 0;
    padding: 15px 0;
}
span.thumb-info-social-icons a {
    background: #ccc none repeat scroll 0 0;
    border-radius: 25px;
    display: inline-block;
    height: 30px;
    line-height: 30px;
    text-align: center;
    width: 30px;
}
span.thumb-info-social-icons a:hover {
    text-decoration: none;
}
span.thumb-info-social-icons a span {
    display: none;
}
span.thumb-info-social-icons a i {
    color: #fff;
    font-size: 0.9em;
    font-weight: normal;
}
.bvitem{
    margin-bottom: 20px;
}
a.thumb-info.secundary span.thumb-info-title {
    background: transparent none repeat scroll 0 0;
    bottom: auto;
    left: 0;
    opacity: 0;
    right: 0;
    text-align: center;
    top: 35%;
}
a.thumb-info.secundary span.thumb-info-type {
    float: none;
}
a.thumb-info.secundary:hover span.thumb-info-title {
    opacity: 1;
    top: 42%;
}
.popup-inline-content {
    background: #fff none repeat scroll 0 0;
    display: none;
    margin: 0px auto;
    max-width: 1170px;
    padding: 0px 30px;
    position: relative;
    text-align: left;
}
 span.thumb-info-type {
    background-color: #0068DE;
}
.breadcrumb a {
    color: white;
}
/***pag nav baiviet***/
section.page-top {
   background-color: #171717;
    border-bottom: 5px solid #ccc;
    border-top: 5px solid #384045;
    margin-bottom: 32px;
    min-height: 50px;
    padding: 6px 0;
    position: relative;
    text-align: left;
}
section.page-top h2, section.page-top h1 {
    border-bottom: 5px solid #ccc;
    color: #fff;
    display: inline-block;
    font-size: 22px;
    font-weight: 200;
    line-height: 26px;
    margin: 0 0 -11px;
    padding: 0 0 12px;
    position: relative;
}
section.page-top h2, section.page-top h1 {
    border-bottom-color: #0069DE;
}
/****stylle biviet**/
.fulltext{
    text-align: justify;
}
.fulltext img{
display:block;margin:10px auto;
}
.baivietlienquan h4 {
    color: black;
    font-size: 16px;
    font-weight: 700;
    margin-top: 20px;
    text-transform: uppercase;
}
.baivietlienquan h4::after {
    background: #0069DE none repeat scroll 0 0;
    content: "";
    display: block;
    height: 4px;
    margin-top: 9px;
    width: 20%;
}
.sidebar h4 {
    color: black;
    font-size: 16px;
    font-weight: 700;
    margin-top: 20px;
    text-transform: uppercase;
}
.sidebar h4::after {
    background: #0069DE none repeat scroll 0 0;
    content: "";
    display: block;
    height: 4px;
    margin-top: 9px;
    width: 20%;
}
.btn-share {
    
    border-bottom: 3px solid #000;
    color: #444;
    display: block;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    padding: 10px 00px;margin-top: 30px;
    width: 100%;
}
.btn-share b {
  
    margin-right: 20px;
    padding: 7px 12px;
}
.btn-share a.face {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/facebook.png") no-repeat scroll left 5px;
    padding: 10px 30px 5px 31px;
}
.btn-share a.zing {
 
    padding-left: 16px;
}
.btn-share a.twi {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/twitter.png") no-repeat scroll left 5px;
    padding: 10px 30px 5px 31px;
}
.btn-share a.plus {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/google-plus.png") no-repeat scroll left 5px;
    padding: 10px 30px 5px 31px;
}
.btn-share a.linkhay {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/linkhay.png") no-repeat scroll left 5px;
    padding: 10px 30px 5px 31px;
}
.btn-share a.print {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/print.png") no-repeat scroll left 5px;
    padding: 10px 30px 5px 31px;
}
.idea {
    background: #fafafa none repeat scroll 0 0;
    border: 1px solid #cccccc;
    margin-bottom: 9px;
    overflow: hidden;
    padding: 5px;
}
.idea img {
    width: 100%;
}
.idea .title {
    background: #403d37 url("/blogger/anhcuoi/images/idea_marker.png") no-repeat scroll 8px 13px;
    color: #ffffff;
    display: block;
    font-family: arial;
    font-size: 17px;
    line-height: 29px;
    margin: 0;
    padding: 1px 0 0 20px;
    text-shadow: 1px 1px rgba(0, 0, 0, 0.07);
}
.footer_ad {
    background: #f0f0ed none repeat scroll 0 0;
    border-top: 5px solid #ecece8;
    margin: 20px 0px 0px 0px;
    padding: 3px 0;
}

.xemthem {
   background: #0068de none repeat scroll 0 0;
    color: white;
    display: block;
    margin: 0 auto;
    padding: 7px 19px;
    width: 162px;

}
.call-to-action h3 {
    color: #121212;font-size: 24px;font-weight: normal;
    text-transform: none;text-align: center;margin-bottom: 30px;
}

*::before, *::after {
    box-sizing: border-box;
}
*::before, *::after {
    box-sizing: border-box;
}
span.arrow.hlb {
    background: rgba(0, 0, 0, 0) url("http://shac.vn/wp-content/themes/porto/assets/css/../img/arrows.png") repeat scroll -209px -101px;
    display: inline-block;top:-22px;position: relative;
    height: 47px;
    width: 120px;
}
.sidebar p{
    line-height: 25px;
}
.lastest-post {
    margin-bottom: 5px;
}
.xemthem:hover{color:white}
.xemthem i{
    font-size: 12px;
}
article.bvitem {
    padding: 6px;
}
a.linkify_tags {
    background:#77A5D6;
    border-left: 4px solid #0068DE;
    color: #fff;
    display: inline-block;
    margin: 3px 5px 3px 0;
    padding: 3px 10px;
    text-transform: capitalize;
}
.sidebar li {
    line-height: 34px;
}

.title_pro_list {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/page-title.png") repeat-x scroll 0 20px;
    float: left;
    line-height: 13px;
    text-align: center;
    width: 100%;
}
.title_pro_list h2 {
    background: rgba(0, 0, 0, 0) url("/blogger/anhcuoi/images/bg.png") repeat scroll 0 0;
    display: inline-block;
    font-family: roboto,Helvetica,sans-serif;
    font-weight: 600;
    line-height: 27px;
    margin-bottom: 0;
    margin-top: 5px;
    padding: 0 10px;
    position: relative;
    text-align: center;
    text-transform: uppercase;
}
.title_pro_list a {
    font-family: UVNTinTucHepThemBold;
    font-size: 22px;
}
.ovrly04 img{
    transition: all 0.2s ease;
-webkit-transition: all 0.2s ease;
-moz-transition: all 0.2s ease;
-o-transition: all 0.2s ease;
}
.ovrly04:hover img {
    transform: scale(1.2,1.2);
-webkit-transform: scale(1.2,1.2);
-moz-transform: scale(1.2,1.2);
-o-transform: scale(1.2,1.2);
-ms-transform: scale(1.2,1.2);
}
.ovrly04 {
  position: relative;
  border: 1px solid transparent;
  margin: 0px;
  overflow: hidden;
 
}
.box_mn_3_in_list1{
    margin-top: 30px;margin-bottom: 20px;
}
.mota_group_page{
 text-align: justify;
}
.img_group_page{
    padding: 5px;border: 1px solid #e5e5e5;background: white;
}
.title_group_page {
    font-family: UVNTinTucHepThemBold;
    font-size: 23px;
    text-align: center;
    text-transform: uppercase;
}
 .boxtin-right {
    margin-bottom: 7px;
}
.boxtin-right p{
    text-align: center;height: 50px;overflow: hidden;
}
img.img_lightbox{
    cursor: pointer;
}
.popup-inline-content h2 {
    color: #0068e9;
    font-size: 27px;
    margin-bottom: 15px;
    margin-top: 7px;
    text-align: center;
    text-transform: uppercase;
}
.btn-primary{
    background: #0068DE;
}

.has-feedback {
    position: relative;
}
.has-feedback .form-control {
    padding-right: 42.5px;
}
.has-feedback .form-control-feedback {
    display: block;
    height: 34px;
    line-height: 34px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 25px;
    width: 34px;
}
.has-success .help-block, .has-success .control-label, .has-success .radio, .has-success .checkbox, .has-success .radio-inline, .has-success .checkbox-inline {
    color: #3c763d;
}
.has-success .form-control {
    border-color: #3c763d;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.has-success .form-control:focus {
    border-color: #2b542c;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 6px #67b168;
}
.has-success .input-group-addon {
    background-color: #dff0d8;
    border-color: #3c763d;
    color: #3c763d;
}
.has-success .form-control-feedback {
    color: #3c763d;
}
.has-feedback .form-control-feedback {
    top: 0;
}
.btn-submit {
    background: #0068DE;
    border: medium none;
    color: #fff;
    font-weight: 700;
    height: 30px;padding: 0px 25px;
}
#owl-demo .owl-controls{
    
}
.ew_wrapper {
    border: 1px solid #e3e3e3;
    float: left;
    margin-top: 30px;
    padding: 20px 20px 10px;
    position: relative;
    width: 100%;
}
#tab-fixed {
    left: -99px;
    position: absolute;
    top: 0;
}
.tab-fixed{ position: absolute;left: 0px; top:0}
#sticker li{list-style: none}
.tab-fixed{ position: absolute;left: 0px; top:0}
.single-du-an #tab-fixed{ top:110px}
.tab_sticker li {margin-bottom: 1px;position: relative}
.tab_sticker li a:active, .tab_sticker li a:focus, .tab_sticker li a.li-active {background: #083151}
.tab_sticker li a {width: 78px;display: block;padding: 5px;text-align: center;color: #fff;background: #ED9C28}
.tab_sticker li a span.tab_icon {display: block;font-size: 20px}
.tab_sticker li a.li-active:after {content: "";width: 0;height: 0;border-color: rgba(253,186,55,0);border-left-color: #F4C60C;border-width: 10px;border-style: solid;position: absolute;top: 50%;margin-top: -10px;right: -20px}
.tab_sticker .tab_icon:before {font-family: FontAwesome}
.icon_gt:before {content: "\f0e4"}
.icon_qt:before {content: "\f0d6"}
.icon_cp:before {content: "\f201"}
.icon_kq:before {content: "\f03e"}
.icon_kh:before {content: "\f0e6"}
.icon_bs:before {content: "\f0f0"}
.icon_dk:before {content: "\f25d"}
.post-h1 {
    background-color: #ED9C28;
    color: #fff;
    font-size: 18px;text-align: center;
    line-height: 34px;
    text-transform: uppercase;
}
.title-block {
    background-color: #ED9C28;
    border-radius: 24px;
    color: #fff!important;
    display: table;
    line-height: 45px;font-size: 18px;
    margin: 20px auto;
    padding: 0 20px;
}
.content-block img {
    display: block;
    margin: 10px auto;
    max-width: 80%;
}
.img-thumbnail {
    border-radius: 50%;
    width: 100%;
}
.img-thumbnail1{
    border: 1px solid #ccc;padding: 3px;
    
}
@media (min-width:1280px){.container{width:1180px;}
img.wp-post-image{}
}
.title {
    background: #ed9c28 none repeat scroll 0 0;
    color: white;
    font-size: 14px;
    padding: 6px 20px;
}
.sidebar.section {
    margin-top: 30px;
}
#footer1,#footer2,#footer3{
    padding-bottom: 20px;
}
.post.hentry {
    border: 1px solid #e5e5e5;
    margin: 11px 0;
    overflow: hidden;
    padding: 10px;
}
.post.hentry h2{
    margin: 0px;
}
  /* http://nicolasgallagher.com/micro-clearfix-hack */
.clearfix {
  zoom: 1;
}
.clearfix:after {
  clear: both;
}
.clearfix:after,
.clearfix:before {
  display: table;
  content: "";
}
.accordion > section {
  display: block;
}
.accordion > section > :first-child + * {
  overflow: hidden;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-property: height;
  -moz-transition-property: height;
  -o-transition-property: height;
  transition-property: height;
}
.js .accordion > section > :first-child {
  cursor: pointer;
}
.tabs {
  overflow-y: hidden;
  position: relative;
}
.tabs.cross-fade.transition {
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
}
.tabs.cross-fade.transition > section {
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
}
.js .tabs.hide-title > section > :first-child {
  display: none;
}
.tabs > section {
  width: 100%;
}
.js .tabs > section {
  opacity: 0;
  position: absolute;
  visibility: hidden;
}
.tabs > section[aria-expanded="true"] {
  opacity: 1;
  visibility: visible;
}
.tabs > ul {
  position: relative;
  z-index: 99;
}
.tabs > ul > li {
  cursor: pointer;
}

  /* http://nicolasgallagher.com/micro-clearfix-hack */

.detached {
  margin: 24px 0;
}
.detached:focus {
  outline: none;
}
.detached.accordion > section {
  
}
.detached.accordion > section > * {
  max-width: 100%;
}
.detached.accordion > section[aria-expanded="true"] > :first-child {
  border-bottom-color: #dddddd;
}
.detached.accordion > section > :first-child {
  margin-top: 0;
}
.js .detached.accordion > section {
  padding: 0;
}
.js .detached.accordion > section > :first-child {
  border-bottom: 1px solid transparent;
  color: #0073CF;
  font-size: inherit;
  font-weight: inherit;
  margin: 0;
  padding: 12px 24px;
  -webkit-transition: 0.5s;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.js .detached.accordion > section > :first-child + * > * {
  padding: 4px;
}
.js .detached.accordion > section > :first-child + * > * > * {
  max-width: 100%;
}
.js .detached.accordion > section > :first-child + * > * > :first-child {
  margin-top: 0;
}
.js .detached.accordion > section > :first-child + * > * > :last-child {
  margin-bottom: 0;
}
.detached.accordion > section > :last-child {
  margin-bottom: 0;
}
.detached.accordion > section + section {
  margin-top: 12px;
}
.detached.tabs {
  padding: 0 0 24px 0;
  text-align: center;
}
.js .detached.tabs.hide-title > section > :first-child + * {
  margin-top: 0;
}
.detached.tabs > section {
 
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: left;
}
.detached.tabs > section > :first-child {
  margin-top: 0;
}
.js .detached.tabs > section > * > * > * {
  max-width: 100%;
}
.js .detached.tabs > section > * > * > :first-child {
  margin-top: 0;
}
.js .detached.tabs > section > * > * > :last-child {
  margin-bottom: 0;
}
.detached.tabs > section > :last-child {
  margin-bottom: 0;
}
.detached.tabs > section + section {
  margin-top: 12px;
}
.js .detached.tabs > section + section {
  margin-top: 0;
}
.detached.tabs > ul {
  zoom: 1;
  display: table;
  list-style: none;
  margin: 0 auto 24px auto;
  padding: 0;
}
.detached.tabs > ul:after {
  clear: both;
}
.detached.tabs > ul:after,
.detached.tabs > ul:before {
  display: table;
  content: "";
}
.detached.tabs > ul > li {
    background: white none repeat scroll 0 0;
    border: 1px solid #dddddd;
    color: #0073cf;
    float: left;
    font-size: 12px;
    font-weight: bold;
    padding: 10px 13px;
    position: relative;
    text-transform: uppercase;
}

.detached.tabs > ul > li.current {
  background-color: #0069DE;
  border: 1px solid #CCCCCC;color: white!important;
  -webkit-box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1) inset;
  color: inherit;
  pointer-events: none;
  z-index: 99;
}
.detached.tabs > ul > li:first-child {
  border-radius: 5px;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.detached.tabs > ul > li:last-child {
  border-radius: 5px;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.detached.tabs > ul > li + li {
  margin-left: -1px;
}

  .comments{
    clear: both;
    margin: 10px 0px 10px 0px;
}
.comment_box {
    background-color: #eceff5;
    border-bottom: 1px solid #e5eaf1;
    clear: left;
    color: #333;
    display: block;
    float: none;
    margin-bottom: 2px;
    overflow: hidden;
    padding: 5px 0 4px 5px;
}
.emComment{
    background-color: #ECEFF5;
    border-bottom: 1px solid #E5EAF1;
    clear: left;
    float: none;
    margin-bottom: 2px;
    overflow: hidden;
    padding: 5px 0 4px 5px;
    display: block;
    color: #333;
}

.emInfoMessage{
    background-color: #FFEFF5;
    border-bottom: 1px solid #E5EAF1;
    clear: left;
    float: none;
    margin-bottom: 2px;
    overflow: hidden;
    padding: 5px 0 4px 5px;
    display: block;
    color: #333;
    text-align: center;
    font-weight: bold;
}

.emCommentImage{
    float: left;
}
.emCommentImage img{
    width: 32px !important;margin: 0px !important;
}
.emComment .emCommentText{
    padding-right: 7px;
    margin-left: 40px;
}

.emComment .emCommentInto{
    color: #777;
    padding: 7px 7px 1px 40px;
    text-align: left;
}

.emShowAllComments, .emHideAllComments{
    border-bottom: 1px solid #E5EAF1;
    clear: left;
    float: none;
    margin-bottom: 2px;
    overflow: hidden;
    padding: 5px 0 4px 5px;
    display: block;
    color: #333;

    background: #ECEFF5 url('images/comments.png') no-repeat 5px 4px;
    padding-left: 26px;
}

#emContent, .emContent{
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 11px;
}

#emContent a, .emContent a{
    text-decoration: none;
    color: #3B5998;font-size: 11px;
}

#emContent a:hover, .emContent a:hover{
    text-decoration: underline;
}

.emSenderName{
    font-weight: bold;
}

.emAddComment .addEmPot{
    display: none;
}

.emCommentLike{
    margin-top: 5px; 
    color: #777;
}
.emContent {
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 11px;
}
.emCommentText a {
    color: #3b5998;font-size: 12px;
    text-decoration: none;
}
.emCommentImage img {
    margin: 0 !important;
    width: 47px !important;
}
.emAddComment {
    background-color: #eceff5;
    border-bottom: 1px solid #e5eaf1;
    clear: left;
    color: #333;
    display: block;
    float: none;
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 11px;
    margin-bottom: 2px;
    overflow: hidden;
    padding: 5px 15px 4px 5px;
    text-align: left;clear: both;
}

.emAddComment textarea {
    border: 1px solid #bdc7d8;
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 11px;
    height: 29px;
    margin: 0 10px 5px 0;
    min-height: 29px;
    overflow: hidden;
    padding: 3px;resize: vertical;
    width: 100%;
}
.emAddComment label {
    text-align: left;
   font-weight: normal;
}
.emAddComment .addEmMail, .emAddComment .addEmName {
    border: 1px solid #bdc7d8;
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 11px;
    margin: 0 10px 5px 0;
    padding: 3px;
    width: 200px;
}
input.emButton {
    background-color: transparent;
    border: medium none;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 11px;
    font-weight: bold;
    margin: 0;
    overflow: visible;
    padding: 2px 4px 3px;
    width: auto;
}
span.emButton{
    background-color: #5B74A8;
    border-color: #29447E #29447E #1A356E;
    border-width: 1px;
    border-style: solid;
    display: inline-block;
    outline: medium none;
    vertical-align: bottom;
}
a.emButton {
    color: white;
    display: block;
    font-size: 11px;
    font-weight: bold;
    padding: 2px 13px 3px;
}
#cancel-comment-reply {
    float: left;
    padding-right: 10px;
}
.children.comment_box {
    margin-left: 20px;
}
  @media (min-width:768px){.container{width:760px;}
.img-responsive{display:inline-block;width:100%;height:auto;}
.navbar-toggle{float:none;}
}
@media (min-width:980px){.container{width:980px;}
}
@media (min-width:1280px){.container{width:1180px;}
img.wp-post-image{}
}
@media (max-width:801px){.menu-header nav ul li{width:100%;}
.menu-header .mega-menu{width:100%;;}
.bx-form{
    width: 100%!important;
}
.tabcontentt  h2 {
    background:#e5e5e5;
    border-radius: 4px;
    color: #333;
    margin-bottom: 10px;
}
.tabcontentt[aria-expanded="true"]  h2{
     background:#0068DE;
   display: block;
    color: white!important;margin-bottom: 10px;
}
.btn-danger {
    display: block;
    margin: 9px auto !important;
}
.textinput{
    margin-top:9px!important ;
}
.lastest-post .wp-post-image {
  
    height: 70px;
   width: 70px;
    
}
span.hlb{
    display: none!important;
}
}
@media (max-width:469px){
    body{
        font-size:12px;
    }
    article.bvitem {
    margin: 5px 0px;
    padding: 0;
}
.home-intro{
    display: none;
}
span.hlb{
    display: none!important;
}
.popup-inline-content h2 {
   
    font-size: 14px!important;
   
    text-transform:none!important;
}
.popup-inline-content{
    padding: 0px!important;
}
h2.title-block, h1.page-title, h2.page-title {
    color: white !important;
    font-family: Roboto-Bold;
    font-size: 14px;
    font-weight: bold;
    line-height: 22px;
    margin: 11px auto;
}
h4{
    font-size: 16px;  
}
h1, .h1 {
    font-size: 18px;
}
.title {
    background: #ed9c28 none repeat scroll 0 0;
    color: white;
    font-size: 12px;
    padding: 6px 10px;
    text-transform: uppercase;
}
.title-block {
    background-color: #ed9c28;
    border-radius: 24px;
    color: #fff !important;
    display: table;
    font-size: 18px;
    line-height: 45px;
    margin: 20px auto;
    padding: 4px 16px;
}
}
@media (min-width: 980px) and (max-width: 1180px) {
    .wsmenu{
        width:100%;
    }
    .wsmenu-list{
        float: left!important;
    }
    .wsmenu-list > li > a{
        padding: 2px 15px!important;
        line-height: 41px!important;
    }
    .logo.clearfix{
        float: none!important;
        width: 100%!important;
    }
     .logo.clearfix img{
        display: block;margin: 0px auto;
     }
     #tab-fixed{
        left: -77px;
     }
}
