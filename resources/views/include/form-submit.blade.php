<div class="col col-11 mx-auto">
    <form action="{{route('tarefa.store')}}" method="post">
        @csrf
        <div
            class="row bg-white rounded shadow-sm p-2 add-ToDo-wrapper align-items-center justify-content-center">
            <div class="col">
                <input class="form-control form-control-lg border-0 add-ToDo-input bg-transparent rounded"
                    type="text" placeholder="Add new .." name="title">
                    @error('title')
                    <span class="d-block fs-6 text-danger"> {{$message}} </span>
                    @enderror
            </div>
            <div class="col-auto m-0 px-2 d-flex align-items-center">
                <label class="text-secondary my-2 p-0 px-1 view-opt-label due-date-label d-none">Due date
                    not set</label>
                <i class="fa fa-calendar my-2 px-1 text-primary btn due-date-button" data-toggle="tooltip"
                    data-placement="bottom" title="Set a Due date"></i>
                <input class="form-control form-control-sm  border-0 add-ToDo-input bg-transparent rounded" 
                    type="text" name="" id="">
                <i class="fa fa-calendar-times-o my-2 px-1 text-danger btn clear-due-date-button d-none"
                    data-toggle="tooltip" data-placement="bottom" title="Clear Due date"></i>
            </div>
            <div class="col-auto px-0 mx-0 mr-2">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
</div>