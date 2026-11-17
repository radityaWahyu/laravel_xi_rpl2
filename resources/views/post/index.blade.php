<html>
    <head></head>
    <body>

        <div>
            <h1>Data Posts</h1>
            <table>
                <tr>
                    <td>Id</td>
                    <td>Title</td>
                    <td>Body</td>
                    <td>Actions</td>
                </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>-</td>
                </tr>
            @endforeach
            </table>
        </div>
    </body>

</html>
