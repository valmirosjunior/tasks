@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="row">
                    <a href="{{route('tasks.create')}}" class="btn btn-success">Create</a>
                </div>
                <table class="table table-striped">
                    <thead>
                    <th> Name</th>
                    <th> Description</th>
                    <th> Options</th>
                    </thead>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->name}}</td>
                            <td>{{$task->description}}</td>
                            <td>

                                <a href="{{route('tasks.show',[$task->id])}}" class="btn btn-primary">Show</a>

                                <a href="{{route('tasks.edit',[$task->id])}}" class="btn btn-primary">Edit</a>

                                <a class="btn btn-danger" href="javascript:void(0);
                                    onclick = confirmDelete ('{{ route("tasks.destroy",[$task->id]) }}',
                                    'form_delete_task', '')">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <form id="form_delete_task" method="POST" action="#">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
    </form>

    <script>
        function confirmDelete(urlDelete) {
            if (confirm('Desire remove the record?')) {
                $('#form_delete_task').attr('action', urlDelete).submit();
            }
        }
    </script>
@endsection
