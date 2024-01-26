<form id="specializationForm" method="post" action="/api/author/delete">
@csrf
    @method('delete')
    <input name="id" hidden value="{{$authors->id}}">
    <div id="formBody">
        <div class="row mb-1">
            <h2>are you sure you want to delete <b>{{$authors->name}}</b>?</h2>
        </div>
    </div>
    <div class="row text-end">
        <div class="col">
        </div>
        <div class="col">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">No</button>
            <button id="btnSubmit" class="btn btn-danger" type="submit">Yes</button>
        </div>
    </div>
</form>