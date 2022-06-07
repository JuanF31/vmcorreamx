<!-- Modal Organigrama-->
<div class="modal fade win" id="modalOrganigrama" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl del">
        <div class="modal-content  modal-custom">
            <div class="modal-header">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-sm-12 col-md-12 button__title-dashboard">
                            <div><i class="fa-solid fa-sitemap"></i> Organigrama</div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @forelse ($organizational as $org)
                    {!! $org->uri_flipbook !!}
                @empty
                    <h6 class="display-5">No hay algun organigrama para mostrar!</h6>
                @endforelse
            </div>
        </div>
    </div>
</div>