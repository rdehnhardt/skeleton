<div class="modal fade" id="newImage" tabindex="-1" role="dialog" aria-labelledby="New Image">
    <form action="" method="post" role="form">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ _ucwords(trans('back::documents.images.create')) }}</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">{{ _ucwords(trans('back::dictionary.image')) }}</label>
                        <input type="file" class="form-control" name="" id="" placeholder="Input...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-flat btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>