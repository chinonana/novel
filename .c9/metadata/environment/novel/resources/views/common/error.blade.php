{"filter":false,"title":"error.blade.php","tooltip":"/novel/resources/views/common/error.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["@if (count($errors) > 0)","\t<!-- Form Error List -->","\t<div class=\"alert alert-danger\">","\t\t<strong>エラーが発生しています！</strong>","","\t\t<br><br>","","\t\t<ul>","\t\t\t@foreach ($errors->all() as $error)","\t\t\t\t<li>{{ $error }}</li>","\t\t\t@endforeach","\t\t</ul>","\t</div>","@endif",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":0},"end":{"row":14,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1636867063657,"hash":"e08d5435269eae21f589ace0f3d9cb69ad10e842"}