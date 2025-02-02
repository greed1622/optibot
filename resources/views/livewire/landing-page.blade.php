<section class="body">
    <div>
        <div class="card-header d-flex justify-content-center bg-dark">
            <div class="d-flex align-items-center" style="gap: 1rem;">
                <img src="{{ asset('img/logo/opti-logo-removebg-preview.png') }}" class="img-fluid" style="width: 150px;"
                    alt="OptiBot Logo">
                <h1 class="card-title text-white">Clinic OptiBot Management System</h1>
            </div>
        </div>
        <div class="ms-5 me-5">
            <div class="row mt-2">
                @php
                    $clinics = \App\Models\Clinic::all();
                @endphp
                @foreach ($clinics as $clinic)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="ps-3 pe-3 pb-3 pt-2 rounded" style="background-color: #5980a6;">
                            <section class="card w-100 mt-2">
                                <header class="card-header d-flex flex-column align-items-center justify-content-center"
                                    style="height: 300px;">
                                    <img src="{{ asset('img/logo/' . $clinic->clinic_logo . '.png') }}"
                                        class="img-fluid" style="max-width: 100%; max-height: 180px; height: auto;"
                                        alt="{{ $clinic->clinic_name ?? 'Clinic' }} Logo">

                                    <h2 class="card-title pt-2">
                                        <!-- Pass all required arguments -->
                                        <button wire:click="setClinic({{ $clinic->id }},'{{ $clinic->clinic_logo }}')"
                                            class="btn btn-link p-0 m-0 border-0" style="background: none;">
                                            {{ $clinic->clinic_name }}
                                        </button>
                                    </h2>
                                </header>
                            </section>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
