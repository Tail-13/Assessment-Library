<form id="specializationForm" method="post" action="/api/author/create">
    @csrf
    <input name="user_id" hidden id="user_id">
    <div id="formBody">
        <div class="row mb-1">
            <label for="name" class="fs-6 px-4">Name</label>
        </div>
        <div class="row px-3 mb-4">
            <input id="name" name="name" type="text" class="form-control" required>
        </div>
        <div class="row mb-1">
            <label for="dob" class="fs-6 px-4">Date of Birth</label>
        </div>
        <div class="row px-3 mb-4">
            <input id="dob" name="dob" type="date" class="form-control" required>
        </div>
    </div>
    <div class="row text-end">
        <div class="col">
        </div>
        <div class="col">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
            <button id="btnSubmit" class="btn btn-primary" type="submit">Add</button>
        </div>
    </div>
</form>