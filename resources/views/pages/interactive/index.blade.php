@extends('layouts.main')

@section('title', 'interactive')

@section('content')

<!--================Start Portfolio Details Area =================-->
<div class="editor-container">
<div id="editor" class="col-12 col-lg-6"></div>
<iframe id="output" class="col-lg-6 col-12 "></iframe>
</div>
<script>
var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.session.setMode("ace/mode/html");
</script>

<style>
    #editor {
height: 700px;
float: left;
font-size: 18px;
}


#output {
resize: both;
border: 1px solid var(--secondColor);
min-width: 260px !important;
max-width: 50% !important;
min-height: 700px !important;
max-height: 700px !important;
}
</style>
<!--================End Portfolio Details Area =================-->
@endsection