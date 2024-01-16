    <!-- Modal Pendaftaran-->
    <div id="modalFeedback" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFeedbackLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalFeedbackLabel" data-id="">Layanan Pendaftaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div id="modalBodyFeedBack" class="modal-body d-flex justify-content-evenly">
                <ul class="row row-cols-2 row-cols-sm-4 row-cols-lg-4 row-cols-xl-4 list-unstyled list d-flex flex-row-reverse">
                    <li class="col mb-2 feedLink">
                        <a href="#" class="d-block text-danger text-decoration-none" data-bs-toggle="tooltip" title="Sangat Tidak Puas" data-nilai="1">
                            <div class="px-3 py-4 mb-2 bg-body-secondary text-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-emoji-angry-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 1-.183-.683A4.5 4.5 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 1 1-.866.5A3.5 3.5 0 0 0 8 10.5a3.5 3.5 0 0 0-3.032 1.75.5.5 0 0 1-.683.183M10 8c-.552 0-1-.672-1-1.5 0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5"/>
                            </svg>
                            </div>
                            <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">sangat tidak puas</div>
                        </a>
                    </li>
                    <li class="col mb-2 feedLink">
                        <a href="#" class="d-block text-black text-decoration-none" data-bs-toggle="tooltip" title="Tidak Puas" data-nilai="2">
                            <div class="px-3 py-4 mb-2 bg-body-secondary text-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-emoji-expressionless-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M4.5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1m5 0h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1m-5 4h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1"/>
                            </svg>
                            </div>
                            <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">tidak puas</div>
                        </a>
                    </li>
                    <li class="col mb-2 feedLink">
                        <a href="#" class="d-block text-success-emphasis text-decoration-none" data-bs-toggle="tooltip" title="Puas" data-nilai="3">
                            <div class="px-3 py-4 mb-2 bg-body-secondary text-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8"/>
                            </svg>
                            </div>
                            <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">puas</div>
                        </a>
                    </li>
                    <li class="col mb-2 feedLink">
                        <a href="#" class="d-block text-success text-decoration-none" data-bs-toggle="tooltip" title="Sangat Puas" data-nilai="4">
                            <div class="px-3 py-4 mb-2 bg-body-secondary text-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                            </svg>
                            </div>
                            <div class="name text-decoration-none text-center text-wrap text-uppercase font-monospace pt-0" style="width: auto;">sangat puas</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>