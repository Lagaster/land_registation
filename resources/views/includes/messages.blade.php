<div id="message" class=" col-7 offset-3"  >


    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            {{ $error }}
        </div>
    @endforeach
@endif
@if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Alert!</h4>
        {{ session('success')}}
    </div>

@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        {{ session('error')}}
    </div>
@endif


</div>
<script>
        function flash(){
            document.getElementById("message").style.animationDuration = "2s";
            document.getElementById('message').style.display = "none";
        }
        setTimeout(flash, 6400);
</script>
