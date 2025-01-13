@extends('layouts.main')
@section('title', 'Buat Surat Keluar')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" method="POST"
                action="{{ route('surat.store') }}">
                @csrf
                <!--begin::Aside column-->
                <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
                    <!-- [Bagian Jenis Surat tetap sama...] -->
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Pilih Jenis Surat</h2>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-10">
                                <div class="fv-row">
                                    <label class="form-label">Nomor Surat</label>
                                    <div class="fw-bold fs-3" id="nomor_surat">{{ $nomorSurat }}</div>
                                </div>

                                <div class="fv-row">
                                    <label class="required form-label">Jenis Surat</label>
                                    <select class="form-select mb-2" name="jenis_surat_id" id="jenis_surat_id" required>
                                        <option>Pilih</option>
                                        @foreach ($jenisSurat as $jenis)
                                            <option value="{{ $jenis->id }}">{{ $jenis->nama_surat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                    <!-- [Bagian Pilih Penduduk tetap sama...] -->
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Pilih Penduduk</h2>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-10">
                                <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll"
                                    id="kt_ecommerce_edit_order_selected_products">
                                    <!--begin::Empty message-->
                                    <span class="w-100 text-muted ">Pilih satu penduduk dari hasil pencaarian di bawah ini
                                        dengan mencentang kotak centang.</span>
                                    <!--end::Empty message-->

                                </div>
                                <div class="d-flex align-items-center position-relative mb-n7">
                                    <i class="fas fa-search fs-3 position-absolute ms-4"></i>
                                    <input type="text" data-kt-ecommerce-edit-order-filter="search"
                                        class="form-control form-control-solid w-100 w-lg-50 ps-12"
                                        placeholder="Cari NIK/Nama Penduduk" />
                                </div>

                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-25px pe-2"></th>
                                            <th class="min-w-200px">Data Penduduk</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600" id="penduduk_result">
                                    </tbody>
                                </table>
                                <input type="hidden" name="penduduk_id" id="selected_penduduk_id">
                            </div>
                        </div>
                    </div>



                    <!--begin::Detail Surat-->
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Detail Surat</h2>
                            </div>
                        </div>

                        <div class="card-body pt-0" id="form-tambahan">
                            <div class="d-flex flex-column gap-5 gap-md-7">
                                {{-- disini akan muncul form tambahan --}}
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-5 gap-md-7">
                                <div class="fv-row">
                                    <label class="required form-label">Keperluan</label>
                                    <textarea class="form-control" name="keperluan" rows="4" placeholder="Tuliskan keperluan surat" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-5 gap-md-7">
                                <div class="fv-row">
                                    <label class="required form-label">Tanda Tangan</label>
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" name="perangkat_id"
                                        id="kt_ecommerce_edit_order_payment">
                                        <option>Pilih</option>
                                        @foreach ($perangkat as $item)
                                            <option value="{{ $item->id }}">{{ $item->penduduk->nama }} -
                                                {{ $item->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('surat.index') }}" class="btn btn-light me-5">Batal</a>
                        <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan Surat</span>
                            <span class="indicator-progress">
                                Mohon tunggu... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
<style>
    /* Gaya untuk checkbox */
    .form-check-input {
        width: 1.2em;
        height: 1.2em;
        border: 2px solid #aaa;
        /* Warna abu-abu jelas */
        border-radius: 4px;
        background-color: #5342ea !important;
        /* Warna background untuk checkbox */
        transition: all 0.2s ease;
    }

    /* Gaya saat checkbox dihover */
    .form-check-input:hover {
        border-color: #e20909 !important;
        /* Warna abu-abu lebih gelap */
    }

    /* Gaya saat checkbox dicentang */
    .form-check-input:checked {
        border-color: #0d6efd;
        /* Warna biru */
        background-color: #0d6efd;
        /* Warna biru */
        color: white;
    }
</style>

@push('scripts')
    <script>
        function initializeDatePickers() {
            $("#dikeluarkan_tanggal").flatpickr({
                dateFormat: "Y-m-d",
                defaultDate: new Date()
            });

            $("#berlaku_sampai").flatpickr({
                dateFormat: "Y-m-d",
                minDate: new Date()
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const jenisSuratSelect = document.getElementById('jenis_surat_id');

            jenisSuratSelect.addEventListener('change', function() {
                const jenisSuratId = this.value;

                if (jenisSuratId) {
                    fetch(`/api/surat/get-form-tambahan?jenis_surat_id=${jenisSuratId}`)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('form-tambahan').innerHTML = data.form;
                            // Perbaikan di sini: menggunakan data.form bukan response.form
                            if (data.form.includes('berlaku_sampai')) {
                                initializeDatePickers();
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Inisialisasi Select2
            $(document).ready(function() {
                $('[data-control="select2"]').select2();
            });

            // [Kode pencarian penduduk tetap sama...]
            const searchInput = document.querySelector('[data-kt-ecommerce-edit-order-filter="search"]');
            let searchTimeout = null;

            searchInput.addEventListener('input', function(e) {
                clearTimeout(searchTimeout);
                const query = e.target.value;

                if (query.length >= 3) {
                    searchTimeout = setTimeout(() => {
                        fetch(`/api/penduduk/search?q=${query}`)
                            .then(response => response.json())
                            .then(data => {
                                const tbody = document.getElementById('penduduk_result');
                                tbody.innerHTML = '';

                                data.forEach(penduduk => {
                                    const tr = document.createElement('tr');
                                    tr.innerHTML = `
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input penduduk-select" type="checkbox"
                                            name="penduduk_radio" value="${penduduk.id}" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-5">
                                            <span class="text-gray-800 fs-5 fw-bold">${penduduk.nama}</span>
                                            <div class="fw-semibold fs-7">NIK: ${penduduk.nik}</div>
                                            <div class="text-muted fs-7">${penduduk.alamat}</div>
                                        </div>
                                    </div>
                                </td>
                            `;
                                    tbody.appendChild(tr);
                                });

                                document.querySelectorAll('.penduduk-select').forEach(
                                    checkbox => {
                                        checkbox.addEventListener('change', function() {

                                            document.getElementById(
                                                    'selected_penduduk_id').value =
                                                this.value;
                                        });
                                    });
                            });
                    }, 500);
                }
            });
        });
    </script>
@endpush
