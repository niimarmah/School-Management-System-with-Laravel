
<div class="modal fade left" id="role-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal_notify modal-ms modal-right modal-success" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal_title" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Roles</i></h5>
<button type="button" class="close" data-dismiss="modal" aria_label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

</div>
    <div class="modal-footer">
    <button type="button" class="btn btn-warning"  data-dismiss="modal">Close</button>
    {!! Form::submit('Create Role', ['class' => 'btn btn-success']) !!}
    </div>
</div>
</div>
</div>
</div>
