{{-- <script>
    $(document).ready(function(){
        //get category id
        @foreach(App\Transmision::all() as $transList)
        $(".transId{{$transList->id}}").click(function(){
            var trans = $(".transId{{$transList->id}}").val();
            alert('trans');
        });
        @endforeach

    });
</script> --}}