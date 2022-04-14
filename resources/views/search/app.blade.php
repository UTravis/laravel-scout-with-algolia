<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>LARAVEL SCOUT SEARCHABLE APP</title>
</head>
<body>
    <div class="row">
        <div class="offset-md-4 col-md-4 mt-5">
            <form action="{{ route('Comment.search') }}" method="get">
                {{-- @csrf --}}
                <div class="form-group">
                    <label for="search">Search Post</label>
                    <input type="search" name="search" id="search" class="form-control">
                </div>
                <div class="d-grid gap-2 mt-2">
                    <input type="submit" value="Search" class="btn btn-secondary">
                </div>
            </form>

            @if ( request()->has('search') )

                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Comment</th>
                            <th>User ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->user_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $comments->appends(request()->input())->links() }}
            @endif

        </div>
    </div>
</body>

</html>