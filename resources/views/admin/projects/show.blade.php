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
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{Str::limit( $project->description,50)}}</td>
                    <td><img src="{{asset('storage/'. $project->cover_img)}}" alt=""></td>
                    <td><a href="{{$project->github_link}}">Visualizza la Repository</a></td>
                    <td>
                        <a href="{{route("admin.projects.edit",$project->id)}}">&#9998;</a> 
                    </td>
                </tr>
            </tbody>
    </table>
</div>

@endsection