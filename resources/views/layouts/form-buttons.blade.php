<td>
<form class="delete-form" action="{{ route($element.'.destroy',$id) }}" style="display: inline-block;" method="POST">
	@method('DELETE')
	@csrf
<button type="submit" class="btn btn-warning">
 <i class="fa fa-trash"></i>
</button>
</form>
</td>
<td>
<a href="{{ route($element.'.edit',$id) }}" class="btn btn-warning">
  <i class="fa fa-pencil"></i></a>
</td>