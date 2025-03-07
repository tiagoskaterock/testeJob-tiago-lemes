<div style="position: fixed; right: 30px; top: 30px; width: 200px; z-index: 10000;">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>


<script>
    setTimeout(() => {
        $(".alert").fadeOut("slow");
    }, 3000); // A mensagem desaparecerá após 3 segundos
</script>
