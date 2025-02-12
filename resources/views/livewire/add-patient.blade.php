<div class="card offset-2 col-8 bg-dark">
    <div class="card-body">
        <form wire:submit.prevent="addPatient">
            <div class="form-group">
                <div class="card-header">
                    <h1 class="card-title">Personal Details</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" wire:model="last_name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" wire:model="first_name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" wire:model="middle_name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="name_extension" class="form-label">Name Extension</label>
                        <input type="text" class="form-control" id="name_extension" wire:model="name_extension">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">

                    <div class="col">
                        <label for="birth_date" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" wire:model.live="birth_date" id="birth_date">
                    </div>
                    <div class="col">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" id="age" wire:model.live="age"
                            placeholder="Age" readonl value="{{ $age }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="mobile_no">Mobile No.</label>
                        <input type="text" class="form-control" id="mobile_no" wire:model="mobile_no">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" wire:model="email">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="card-header">
                    <div class="card-title">
                        <h1>Address</h1>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="province">Province</label>
                        <select id="provinces" class="form-select" wire:model.live="selectedProvince">
                            <option value="">Select Province</option>
                            @foreach ($provinces as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label for="municipality">Municipality</label>
                        <select id="cities" class="form-select" wire:model.live="selectedCity"
                            {{ empty($cities) ? 'disabled' : '' }}>
                            <option value="">Select City</option>
                            @if (!empty($cities))
                                @foreach ($cities as $code => $name)
                                    <option value="{{ $code }}">{{ $name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="col">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" wire:model="zip_code">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="house_no" class="form-label">House No.</label>
                        <input type="text" class="form-control" id="house_no" wire:model="house_no">
                    </div>
                    <div class="col">
                        <label for="street" class="form-label">Street</label>
                        <input type="text" class="form-control" id="street" wire:model.live="street">
                    </div>
                    <div class="col">
                        <label for="barangay" class="form-label">Barangay</label>
                        <select id="barangay" class="form-select" wire:model="selectedBarangay"
                            {{ empty($barangays) ? 'disabled' : '' }}>
                            <option value="">Select Barangay</option>
                            @if (!empty($barangays))
                                @foreach ($barangays as $name)
                                    <option value="{{ $name }}">{{ $name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>


            </div>


            <div class="form-group">

            </div>
            <button class="btn btn-primary">Save</button>

        </form>
    </div>
</div>
