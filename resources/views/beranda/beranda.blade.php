<x-layout>

    <div class="container my-5">
    <div class="p-5 bg-body-tertiary rounded-3">
        <h1 class="text-body-emphasis">RSU Pindad Bandung</h1>
        <p class="col-lg-8 fs-5 text-muted">
        RSU Pindad Memberikan Layanan Kesehatan Untuk Anda dan Keluarga, Kami menerima pasien umum dan BPJS Kesehatan, siap memberikan perawatan terbaik dengan pelayanan professional dan fasilitas modern.
        </p>
        <img src="/logo.jpg" alt="logo" class="card rounded float-end d-block" style="width: 18rem;">
        <div class="d-inline-flex gap-2 mb-5">
            <button 
            type="button" 
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#surveyModal">
            Mulai Survei
            </button>
        </div>
    </div>
    </div>


    <!-- <h1>RSU Pindad Bandung</h1>
    <p>
        RSU Pindad Memberikan Layanan Kesehatan Untuk Anda dan Keluarga, Kami menerima pasien umum dan BPJS Kesehatan, siap memberikan perawatan terbaik dengan pelayanan professional dan fasilitas modern.
    </p>
    Button
    <button 
        type="button" 
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#surveyModal">
        Mulai Survei
    </button> -->

    <!-- Modal Survey -->
    <div class="modal fade" id="surveyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="surveyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="surveyModalLabel">Form identitas</h1>
            </div>
            <form action="/register" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></span>
                        <input 
                        value="{{ old('username') }}" 
                        name="username" 
                        type="text" 
                        class="form-control" 
                        placeholder="Masukan Nama" 
                        aria-label="masukan-nama" 
                        aria-describedby="addon-wrapping">
                        @error('username')
                            <p class="m-0 small alert alert-danger">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-whatsapp"></i></span>
                        <input 
                        value="{{ old('phone') }}" 
                        name="phone" 
                        type="number" 
                        class="form-control" 
                        placeholder="Masukan No Whatsapp" 
                        aria-label="masukan-no-whatapps" 
                        aria-describedby="addon-wrapping">
                        @error('phone')
                            <p class="m-0 small alert alert-danger">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <select 
                        name="category"
                        class="form-select" 
                        aria-label="select-layanan">
                            <option selected readonly>Pilih Penjamin</option>
                            <option value="BPJS">BPJS</option>
                            <option value="JAMSOSTEK">JAMSOSTEK</option>
                            <option value="JKN">JKN</option>
                            <option value="DLL">DLL</option>
                    </select>
                </div>
                <div class="modal-footer hstack gap-4">
                    <div class="p-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                    <div class="p-2 ms-auto">
                        <button type="submit" class="btn btn-primary text-capitalize">mulai survey</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

<!-- <script type="module">
    $('body').html('<h1>Hello World!</h1>');
</script> -->

</x-layout>