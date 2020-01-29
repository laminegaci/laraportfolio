@if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

    
@endif

@if(session()->has('success'))
    <!-- <div class="alert alert-success">
        {{ session('success') }}
    </div>  -->
<script>
    alert('votre message a été envoyer avec succès');
</script>
@endif