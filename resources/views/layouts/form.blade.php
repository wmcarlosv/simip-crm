@if($type == 'new')
<form action="{{ route($routeName.'.store') }}" method="POST">
	@method('POST')
@else
<form action="{{ route($routeName.'.update',$id) }}" method="POST">
	@method('PUT')
@endif
@csrf