@extends('layouts.app')
@section('content')

    <div class="card p-4">
        <div class="d-flex flex-row justify-content-between">
            <h1>Authors</h1>
            <button class="btn btn-success" onclick="addData()">Add Author</button>
        </div>
        <table class="table table-hover">
            <thead>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($authors as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->dob}}</td>
                    <td style="width: 150px;">
                        <button class="btn btn-warning" onclick="editData('{{$data->id}}')">edit</button>
                        <button class="btn btn-danger" onclick="deleteData('{{$data->id}}')">hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function addData(){
            $.ajax({
            url:'/author/add-form',
            type:'get',
            async:false,
            contentType:'html',
            success:function(addform){
                $('.modal').modal('show')
                $('.modal-title').html('Add Author')
                $('.modal-body').html(addform)
                $('.modal-footer').hide()
                console.log('open form')
            }
        })
        }
        function editData(id){
            $.ajax({
            url:'/author/edit/'+id,
            type:'get',
            async:false,
            contentType:'html',
            success:function(addform){
                $('.modal').modal('show')
                $('.modal-title').html('Edit Author')
                $('.modal-body').html(addform)
                $('.modal-footer').hide()
                console.log('open form')
            }
        })
        }

        function deleteData(id){
            $.ajax({
            url:'/author/delete/'+id,
            type:'get',
            async:false,
            contentType:'html',
            success:function(addform){
                $('.modal').modal('show')
                $('.modal-title').html('Edit Author')
                $('.modal-body').html(addform)
                $('.modal-footer').hide()
                console.log('open form')
            }
        })
        }
    </script>
@endsection