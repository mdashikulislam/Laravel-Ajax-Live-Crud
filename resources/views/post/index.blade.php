@extends('layout.app')
@section('content')
    <div class="headline">
        <h2 class="text-center alert alert-success">Laravel Ajax Live Crud Operation</h2>
    </div>
    <div >
        <table class="table table-bordered" id="table">
            <thead>
                <th width="150px">Sl No</th>
                <th>Title</th>
                <th>Body</th>
                <th>Slug</th>
                <th>Created At</th>
                <th class="text-center" width="150px"><a href="" class="btn btn-info"><i class="fas fa-plus"></i></a></th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>saf</td>
                    <td>asfasf</td>
                    <td>asfasf</td>
                    <td>sfsf</td>
                    <td>
                        <a href="#" class="btn btn-success show-modal"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-info edit-modal"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="btn btn-danger delete-modal"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{--Create Form Modal--}}
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection