<?php

namespace App\Livewire;

use App\Models\Address;
use App\Models\Patient;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AddPatient extends Component
{
    public $first_name;
    public $last_name;
    public $middle_name;
    public $name_extension;
    public $birth_date;
    public $house_no;
    public $age = ''; // Ensure default value is an empty string
    public $provinces = [];
    public $selectedProvince = '';
    public $cities = [];
    public $selectedCity = '';
    public $selectedBarangay = '';
    public $barangays=[];
    public $zip_code;
    public $street; 
    public $mobile_no;
    public $email;

    

    public function updatedBirthDate()
    {
        $this->calculateAge();
    }
    public function mount()
    {
        $this->provinces = DB::table('philippine_provinces')->pluck('name', 'province_code')->toArray();
        $this->cities = []; // Initially empty
        $this->barangays = []; // Initially empty
    }

    public function updatedSelectedProvince($value)
    {
        $this->cities = DB::table('philippine_cities')
            ->where('province_code', $value)
            ->pluck('name', 'city_code')
            ->toArray();

        $this->selectedCity = ''; // Reset city selection when province changes
        $this->barangays = []; // Reset barangays when province changes
        $this->selectedBarangay = ''; // Reset barangay selection
    }

    public function updatedSelectedCity($value)
    {
        $this->barangays = DB::table('philippine_barangays')
            ->where('city_code', $value)
            ->pluck('name')
            ->toArray();

        $this->selectedBarangay = ''; // Reset barangay selection when city changes
    }
    public function calculateAge()
    {
        if ($this->birth_date) {
            $this->age = Carbon::parse($this->birth_date)->age;
        } else {
            $this->age = ''; // Ensure empty input when no date is selected
        }
    }
    public function addPatient()
    {
        $this->validate([
            'selectedProvince'  => 'required|string|max:255',
            'selectedCity'      => 'required|string|max:255',
            'selectedBarangay'  => 'required|string|max:255',
            'house_no'          => 'nullable|string|max:255',
            'zip_code'          => 'nullable|string|max:10',
            'street'            => 'nullable|string|max:255',
            'first_name'        => 'required|string|max:255',
            'last_name'         => 'required|string|max:255',
            'middle_name'       => 'nullable|string|max:255',
            'name_extension'    => 'nullable|string|max:10',
            'birth_date'        => 'required|date',
            'age'               => 'required|integer',
            'mobile_no'         => 'required|string|max:255',
            'email'             => 'required|email',
        ]);
    
        // Get actual names instead of codes
        $provinceName = DB::table('philippine_provinces')->where('province_code', $this->selectedProvince)->value('name');
        $cityName = DB::table('philippine_cities')->where('city_code', $this->selectedCity)->value('name');
        $barangayName = DB::table('philippine_barangays')->where('city_code', $this->selectedCity)->where('name', $this->selectedBarangay)->value('name');
    
        Address::create([
            'province'  => $provinceName,  // Store name, not code
            'city'      => $cityName,      // Store name, not code
            'barangay'  => $barangayName,  // Store name, not code
            'house_no'  => $this->house_no,
            'zip_code'  => $this->zip_code,
            'street'    => $this->street,
        ]);
        Patient::create([
            'first_name'    => $this->first_name,
            'last_name'     => $this->last_name,
            'middle_name'   => $this->middle_name,
            'name_extension'=> $this->name_extension,
            'birth_date'    => $this->birth_date,
            'age'           => $this->age,
            'mobile_no' => $this->mobile_no,
            'email' => $this->email,
        ]);
        session()->flash('message', 'Patient address added successfully.');
        $this->reset(['selectedProvince', 'selectedCity', 'selectedBarangay', 'house_no', 'zip_code', 'street']);
    }
    
    public function render()
    {
        return view('livewire.add-patient');
    }
}
