<div class="row px-3 align-items-center ToDo-item rounded">
    <div class="col-auto m-1 p-0 d-flex align-items-center">
        <h2 class="m-0 p-0">
            <i class="fa fa-square-o text-primary btn m-0 p-0" data-toggle="tooltip" data-placement="bottom"
                title="Mark as complete"></i>
            <i class="fa fa-check-square-o text-primary btn m-0 p-0 d-none" data-toggle="tooltip" data-placement="bottom"
                title="Mark as To-Do"></i>
        </h2>
    </div>
    <div class="col px-1 m-1 d-flex align-items-center">
        <input type="text" class="form-control form-control-lg border-0 edit-ToDo-input bg-transparent rounded px-3"
            readonly value="{{ $tarefa->title }}" title="{{ $tarefa->title }}" />
        <input type="text" class="form-control form-control-lg border-0 edit-ToDo-input rounded px-3 d-none"
            value="{{ $tarefa->title }}" />
    </div>
    {{-- <div class="col-auto m-1 p-0 px-3">
    <div class="row">
        <div class="col-auto d-flex align-items-center rounded bg-white border border-warning">
            <i class="fa fa-hourglass-2 my-2 px-2 text-warning btn" data-toggle="tooltip"
                data-placement="bottom" title="" data-original-title="Due on date"></i>
            <h6 class="text my-2 pr-2">28th Jun 2020</h6>
        </div>
    </div>
</div> --}}
    <div class="col-auto m-1 p-0 ToDo-actions">
        <div class="row d-flex align-items-center justify-content-end">
            <h5 class="m-0 p-0 px-2">
                <i class="fa fa-pencil text-info btn m-0 p-0" data-toggle="tooltip" data-placement="bottom"
                    title="Edit task"></i>
            </h5>
            <h5 class="m-0 p-0 px-2">
                <i class="fa fa-trash-o text-danger btn m-0 p-0" data-toggle="tooltip" data-placement="bottom"
                    title="Delete task"></i>
            </h5>
        </div>
        <div class="row ToDo-created-info">
            <div class="col-auto d-flex align-items-center pr-2">
                <i class="fa fa-info-circle my-2 px-2 text-black-50 btn" data-toggle="tooltip" data-placement="bottom"
                    title="" data-original-title="Created date"></i>
                <label class="date-label my-2 text-black-50">{{ $tarefa->created_at }}</label>
            </div>
        </div>
    </div>
</div>
