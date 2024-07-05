<!DOCTYPE html>
<html lang="en">
@include('components._partials.head')
<body>

@include('components._partials.navbar')

{{$slot}}

@include('components._partials.footer')

<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>

