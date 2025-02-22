<div class="table-responsive-sm">
    <table class="table table-striped" id="departments-table">
        <thead>
            <th>Project Id</th>
        <th>Name</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($departments as $department)
            <tr>
                <td>{!! $department->project_id !!}</td>
            <td>{!! $department->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['departments.destroy', $department->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('departments.show', [$department->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('departments.edit', [$department->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>