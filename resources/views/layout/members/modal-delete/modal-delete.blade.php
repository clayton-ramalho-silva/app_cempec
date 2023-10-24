<div id="modal-delete-membro" class="modal fade bd-example-modal-sm" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Deletar Membro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-text">Tem certeza que deseja deletar? </p>
                <p class="modal-text"><strong>{{ $member->name }}</strong> </p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                <form action="{{ route('members.destroy', $member->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>
