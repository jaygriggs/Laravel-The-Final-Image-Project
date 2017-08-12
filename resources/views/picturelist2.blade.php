<?php $first = "id"; $second = "name"; $third = "file"; $fourth = "created at"; ?> @foreach($pictures as $key => $picture){ "{{$first}}":{{ $picture->id }}, "{{$second}}":"{{ $picture->name }}", "{{$third}}":"pic/{{ $picture->id }}", "{{$fourth}}":"{{ $picture->created_at}}" }@endforeach           




