<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>公告详情</title>
	<style>
    </style>
</head>
<body>

	 @foreach($data as $row)
	   <h1>{{$row->title}}</h1><br>
	   <div>
	   {!!$row->descr!!}
	</div>
     @endforeach
</body>
</html>