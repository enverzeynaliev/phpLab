@extends("layouts.noteAdd")

@section("content")
    <h1 class="text-center">Notes</h1>
    <div class="row justify-content-center">
        <div class="col-md-5">
                       <br>
            @foreach($notes as $note)
                <div class="card">
                    <h4 class="card-header">{{ $note->title }}</h4>
                    <h5 class="card-body">
                        <p>{{ $note->text }}</p>
                    </h5>
                    <div class="card-footer">
                        <a href="{{ route('note', $note->id) }}" title="note" class="btn btn-info">Show comments</a>
                        @auth
                            @if(Auth::user()->email == "PhPain@mail.ru")
                                <a href="{{ route('delete', $note->id) }}" title="delete" class="btn btn-danger">Delete</a>
                            @endif
                        @endauth
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
@endsection
