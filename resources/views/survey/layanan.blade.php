<x-layout>

    <!-- <p>Selamat Datang,</br>
    {{auth()->user()->username}},
    {{auth()->user()->phone}}    
    </p>

    <form action="/end-survey" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Akhiri</button>
    </form> -->

    @include('components.header')

    <div class="container my-5 text-center">
        <h1 class="text-body-emphasis text-uppercase mb-4">silahkan pilih jaminan</h1>
        
        <ul id="listLayanan" class="row row-cols-1 row-cols-sm-5 row-cols-lg-5 row-cols-xl-5 list-unstyled list">
            
            <li class="col linkLayanan">
                <a href="#" 
                    class="icon-link icon-link-hover d-block text-success text-decoration-none" 
                    data-bs-toggle="modal"
                    data-bs-target="#modalFeedback"
                    data-modal-id="pendaftaran"
                    data-modal-label="Layanan Pendaftaran"
                    >
                    <div class="px-2 py-2 bg-body text-center rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-hospital-fill" viewBox="0 0 16 16">
                            <path d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9m0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25"/>
                        </svg>
                    </div>
                    <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">pendaftaran</div>
                </a>
            </li>

            <li class="col linkLayanan">
                <a href="#" 
                    class="d-block text-success-emphasis text-decoration-none" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalFeedback"
                    data-modal-id="perawat"
                    data-modal-label="Layanan Perawat"
                    >
                    <div class="px-2 py-2 bg-body text-center rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
                        </svg>
                    </div>
                    <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">perawat</div>
                </a>
            </li>

            <li class="col linkLayanan">
                <a href="#" 
                    class="d-block text-primary text-decoration-none" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalFeedback"
                    data-modal-id="dokter"
                    data-modal-label="Layanan Dokter"
                    >
                    <div class="px-2 py-2 bg-body text-center rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                        </svg>
                    </div>
                    <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">dokter</div>
                </a>
            </li>

            <li class="col linkLayanan">
                <a href="#" 
                    class="d-block text-danger text-decoration-none" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalFeedback"
                    data-modal-id="penunjang"
                    data-modal-label="Layanan Penunjang"
                    >
                    <div class="px-2 py-2 bg-body text-center rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-heart-pulse" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857q.09.083.176.171a3 3 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5"/>
                            <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z"/>
                        </svg>
                    </div>
                    <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">penunjang</div>
                </a>
            </li>

            <li class="col linkLayanan">
                <a href="#" 
                    class="d-block text-warning text-decoration-none" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalFeedback"
                    data-modal-id="farmasi"
                    data-modal-label="Layanan Farmasi"
                    >
                    <div class="px-2 py-2 bg-body text-center rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-capsule" viewBox="0 0 16 16">
                            <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z"/>
                        </svg>
                    </div>
                    <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">farmasi</div>
                </a>
            </li>

        </ul>
   
        <div class="d-inline-flex gap-2 mt-3">
            <form action="/end-survey" method="post">
                @csrf
                <button class="d-inline-flex align-items-center btn btn-primary text-uppercase rounded-pill icon-link icon-link-hover" type="submit">
                    <i class="bi bi-send-fill"></i>survey selesai
                </button>
            </form>
        </div>
    </div>

    @include('survey.feedback')

    <script type="module">
        $(function($){
            $('#listLayanan .linkLayanan a').click(function(e){
                e.preventDefault()
                $.noConflict()
                var valKey = $(this).attr('data-modal-id')
                var valLabel = $(this).attr('data-modal-label')
                // alert(valKey)
                $('#modalFeedback #modalFeedbackLabel').text(valLabel)
                $('#modalFeedback #modalFeedbackLabel').attr('data-id', valKey)
            })
        })
    </script>
    <script type="module">
        $(function($){
            function hideFunc() {
                const modalFeedback = document.querySelector('#modalFeedback');
                const modal = new bootstrap.Modal(modalFeedback, {
                    backdrop: 'static'
                });
                modal.hide();
            }
            $('#modalFeedback #modalBodyFeedBack .feedLink a').click(function(e){
                e.preventDefault()
                $.noConflict()
                var nilai = $(this).find('.name').text()
                var nilaiFeedback = $(this).attr('data-nilai')
                // var linkNavigation = $('#listLayanan .linkLayanan a').attr('data-modal-id')
                var linkNavigation = $('#modalFeedback #modalFeedbackLabel').attr('data-id')
                alert(linkNavigation)
                swal.fire({
                    title: "berikan nilai ? " + nilai,
                    text: "apakah anda yakin ?",
                    type: "info",
                    showCancelButton: !0,
                    confirmButtonText: "iya",
                    cancelButtonText: "tidak",
                    reverseButtons: !0
                }).then(function (e) {
                    if (e.value === true) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: `/create-${linkNavigation}`,
                            type:'post',
                            data: {
                                _token: CSRF_TOKEN,
                                nilai:nilaiFeedback,
                                table:linkNavigation
                            },
                            dataType: 'JSON',
                            success: function (results) {
                                if (results.success === true) {
                                    swal.fire("ok", results.message, "success")
                                    // setTimeout(function(){
                                        // location.reload();
                                    // },2000);
                                    $.noConflict()
                                    $(`#listLayanan .linkLayanan a[data-modal-id='${linkNavigation}']`).empty()
                                } else {
                                    swal.fire("oops", results.message, "error")
                                    }
                                }
                            }).done(function(data) {
                                $('#modalFeedback').modal('hide');
                            })
                        } else {
                        e.dismiss;
                        }
                    }, function (dismiss) {
                        return false;
                        })
            })
        })
    </script>

</x-layout>