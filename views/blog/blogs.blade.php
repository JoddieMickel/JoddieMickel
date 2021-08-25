@foreach($blogs as $blog)

Title: {{$blog->title}}
<a href="{{$blog->id}}">click to read more</a>
<br>
@endforeach