@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$task->name}}</div>

                    <div class="card-body">
                        <div class="justify-content-center">
                            {{$task->description}}
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{route('tasks.index')}}" class="btn btn-primary">Back</a>
                        <a href="{{route('tasks.edit',[$task->id])}}" class="btn btn-primary">Edit</a>
                        <a class="btn btn-danger" href="javascript:void(0);onclick = confirmDelete ()">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="form_delete_task" method="POST" action="{{route('tasks.destroy',[$task->id])}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
    </form>

    <script>
        function confirmDelete() {
            if (confirm('Desire remove {{$task->name}}?')){
                $('#form_delete_task').submit();
            }
        }
    </script>
@endsection