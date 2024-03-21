<form method="POST" action="{{ route('task') }}">
    @csrf
    <div class="form-group">
        <label for="recipient-name" class="col-form-label">Task Topic</label>
        <input type="text" class="form-control @error('task_topic') is-invalid @enderror" name="task_topic"
            id="recipient-name">
        @error('task_topic')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="message-text" class="col-form-label">Detail</label>
        <textarea class="form-control @error('detail') is-invalid @enderror" name="detail"></textarea>
        @error('detail')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>