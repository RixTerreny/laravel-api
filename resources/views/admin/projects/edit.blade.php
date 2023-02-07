@extends("dashboard")

@section("content")
<div class="container py-3">
    <form action="{{route('admin.projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('put')

        <div class="mb-3">
            <lable class="form-lable">Nome progetto</lable>
            <input type="text" class="form-control" name="name" value="{{$project->name}}">
        </div>

        <div class="mb-3">
            <lable class="form-lable">Descrizione</lable>
            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$project->description}}</textarea>
        </div>

        <div class="mb-3">
            <lable class="form-lable">Cover Img</lable>
            <input type="file" class="form-control" name="cover_img" value="{{$project->cover_img}}">
        </div>

        <div class="mb-3">
            <lable class="form-lable">Link Github</lable>
            <input type="text" class="form-control" name="github_link" value="{{$project->github_link}}">
        </div>

        <div class="mb-3">
            <div>Linguaggi attuali</div>
            <div>
                <ul>
                    @foreach ($project->types as $types  )
                    <li>{{$types->type}}</li>
                    @endforeach
                </ul>
            </div>
            @foreach ( $project->types as $type)
                {{$type->project_id = null}}
            @endforeach
            <lable class="form-lable">Cambia linguaggi</lable>
            <select value="" name="type">
                @foreach ( $project->types as $type)
                        <option value="{{$type->project_id = $project->id}}">{{$type->type}}</option>
                @endforeach
            </select>
        </div>

        
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>

</div>
@endsection