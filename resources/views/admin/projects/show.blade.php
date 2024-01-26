@extends('layouts.app')
@section('content')
    <section class="container" id="project-show">
        <div class="d-flex justify-content-between pt-4 pb-4">
            <h2>Project detail</h2>
            <div>
                <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-success ">Modifica <i
                        class="fa-solid fa-pencil"></i></a>
            </div>
        </div>
        <h3>{{ $project->title }}</h3>
        @if ($project->type_id)
            <div class="pt-2 pb-2">
                <a href="{{ route('admin.types.show', $project->type->slug) }}">{{ $project->type ? $project->type->name : '' }}
                </a>
            </div>
        @endif

        <div class="my-img-cont"><img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"></div>
        <div>
            <p>{{ $project->body }}</p>
        </div>

        @if ($project->technologies)
            <div>
                <h6 class="pt-2 pb-2">Technologies:</h6>
                @foreach ($project->technologies as $technology)
                    <a class="badge rounded-pill text-bg-primary mt-2 mb-2"
                        href="{{ route('admin.technologies.show', $technology->slug) }}">{{ $technology->name }}</a>
                @endforeach
            </div>
        @endif
        <div>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-dark ">Torna ai progetti</a>
        </div>
    </section>
@endsection
