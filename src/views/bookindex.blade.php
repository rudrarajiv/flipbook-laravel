<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Show Book</title>

 <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/starter-template.css') }}" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
<div class="starter-template">
        <h1>View All Books</h1>
        <p class="lead">Here you will find list of all Flip Books.</p>
      </div>
<div class="row">
@foreach($flipbooks as $fb)
<div class="col-md-2">

<a href="{{ route('flipbook.show',$fb->id) }}" style="float: left;clear: both;">

<img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="{{ asset(explode(",",$fb->content)[0])  }}" data-holder-rendered="true">
{{ $fb->name  }} , {{ $fb->desc }}



</a>

<a href="{{ route('flipbook.edit',$fb->id) }}" style="float: left;clear: both;width:100%;margin-top: 10px;"> <button id="add_files"  class="btn btn-medium btn-general input-block-level" type="submit" style="width:100%;">Edit</button></a>

</div>
@endforeach
</div>
</div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>
