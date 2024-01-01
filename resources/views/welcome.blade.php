<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
@if(session('message')=="your message has been sent" || session('message')=='You have successfully subscribed')
   <script>
    swal("Success","{{session('message')}}",'success',{
        button:true,
        button:"ok",

    })
   </script>
@elseif(session('message')=='you are alredy subscribed')
<script>
    swal("error","{{session('message')}}",'error',{
        button:true,
        button:"ok",

    })
   </script>
@endif
@include('nav')
@include('services')
<hr>
@include('about')
<hr>
@include('galerie')
<hr>
@include('contact')
<hr>
@include('footer')
@include('scripts')
</body>
</html>