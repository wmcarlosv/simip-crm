@if($errors->any())
    <div class="alert alert-danger" style="width: margin: 10x auto 10px auto;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach($errors->all() as $error)
            <li><b>{{ $error }}</b></li>
            @endforeach
        </ul>
    </div>
@endif