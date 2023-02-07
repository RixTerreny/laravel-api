@extends("dashboard")

@section("content")
<div class="container">

    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Cover_img</th>
            <th>Github</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ( $projects as $project )
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{Str::limit( $project->description,50)}}</td>
                    <td><img src="{{asset('storage/'. $project->cover_img)}}" alt=""></td>
                    <td><a href="{{$project->github_link}}">Visualizza la Repository</a></td>
                    <td>
                        <a class="me-1" href="{{route("admin.projects.show",$project->id)}}">&#128065;</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>

@endsection