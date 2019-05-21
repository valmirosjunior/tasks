@include('tasks.form', [
    "action" => route('tasks.update',[$task->id]),
    "method" => 'PUT',
    "task" => $task,
    "title" => 'Editing '.$task->name,
])
