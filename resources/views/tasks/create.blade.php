@include('tasks.form', [
    "action" => route('tasks.store'),
    "task" => $task,
    "title" => 'Registering new Task',
])
