@extends('layout')

@section('content')

<div class="container flex items-center justify-center h-screen px-3 mx-auto ">
<div
    class="w-full max-w-md p-4 bg-white border border-gray-200 mx-auto rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
>
    <form class="space-y-6" action="#" enctype="multipart/form-data" onsubmit="handleFormSubmit(event, this);">
    <h5
        class="text-xl font-medium text-gray-900 text-center dark:text-white"
    >
        Masuk
    </h5>

    <div>
        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white text-center">Masukan Email Registrasi</label>
        <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                {{-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                    <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                </svg> --}}
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                  </svg>
            </span>
            <input type="email" id="email" name="email" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama lengkap ...">
        </div>
    </div>

    <button
        type="submit"
        {{-- data-modal-show="readProductModal" --}}
        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >
        Masuk
    </button>
    </form>
</div>
</div>

<!-- Main modal -->
<div id="readProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                        <h3 class="font-semibold ">
                            Konfirmasi Masuk
                        </h3>
                    </div>
                    <div>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                </div>
                <dl>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nama</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400" id="nama">
                        {{-- Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US. --}}
                        {{-- Radja Aulia Al Ramdani --}}
                    </dd>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Email</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400" id="emailPeserta">
                        {{-- radjaauliaalramdani@gmail.com --}}
                    </dd>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white" >No Telepon</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400" id="no-telepon"></dd>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Instansi</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400" id="instansi"></dd>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Alamat</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400" id="alamat"></dd>
                </dl>
                <div class="flex justify-end items-center w-full">

                    <form action="{{ route('submit-login') }}" method="get" enctype="multipart/form-data">
                        @csrf <!-- Include the CSRF token -->
                        <input type="hidden" name="id">
                        <button type="submit" class="text-white inline-flex items-center bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover-bg-emerald-700 dark:focus:ring-emerald-800">
                            Masuk
                            <svg class="ml-1.5 w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3"/>
                            </svg>
                        </button>
                    </form>


                </div>
        </div>
    </div>
</div>

    <!-- Main modal -->
    <div id="successModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto ">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800  border border-gray-600 sm:p-5">
                <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">BERHASIL</p>
                <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="successModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                    <svg aria-hidden="true" class="w-8 h-8 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Success</span>
                </div>
                <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Email berhasil di registrasi.</p>
                {{-- <button data-modal-toggle="successModal" type="button" class="py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-900">
                    Continue
                </button> --}}
                <button
                    onclick="location.href = '{{ route('login-event') }}';"
                    data-modal-toogle=="successModal"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Selanjutnya
                </button>
            </div>
        </div>
    </div>

    <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                {{-- <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg> --}}
                <div class="flex justify-center items-center mb-3">
                    <span class="w-20 h-20 animate-bounce text-red-500 bg-gray-700 rounded-md flex  justify-center items-center my-3">
                        <svg class="w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                    </span>
                </div>

                <p class="mb-4 text-gray-500 dark:text-gray-300">Maaf, Ada sedikit kendala mengenai aksi anda !</p>
                <div class="flex text-left p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 border-red-500 border border-dashed" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Danger</span>
                    <div>
                    <span class="font-medium">list pesan error :</span>
                        <ul class="mt-1.5 ml-4 list-disc list-inside" id="error-list">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

<script>
    /*
    * INIT
    */

    // options with default values
    const options = {
        placement: 'bottom-right',
        backdrop: 'dynamic',
        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
        closable: true,
        onHide: () => {
            // console.log('modal is hidden');
        },
        onShow: () => {
            // console.log('modal is shown');
        },
        onToggle: () => {
            // console.log('modal has been toggled');
        }
    };

    const $sModal = document.getElementById('successModal');
    const $readModal = document.getElementById('readProductModal');
    const sModal = new Modal($sModal, options);
    const dModal = new Modal(document.getElementById('deleteModal'), options);
    const rModal = new Modal($readModal, options);

    // Function to handle form submission
    function handleFormSubmit(event, form) {
        event.preventDefault();
        const formData = new FormData(form);

        axios.post("{{ route('check-login') }}", formData)
            .then(response => {
                if (response.status === 200) {
                    // Update the HTML elements with the response data
                    console.log(response.data.data)
                    // document.getElementById('id').value = response.data.data.id;
                    document.querySelector('input[name="id"]').value = response.data.data.id;
                    document.getElementById('nama').textContent = response.data.data.nama;
                    document.getElementById('emailPeserta').textContent = response.data.data.email;
                    document.getElementById('no-telepon').textContent = response.data.data.telp;
                    document.getElementById('instansi').textContent = response.data.data.instansi;

                    document.getElementById('alamat').textContent = response.data.data.alamat;
                    rModal.show();

                    // You can also show a success message or modal here if needed
                } else {
                    // Show the delete modal for other status codes
                    dModal.show();
                }
            })
            .catch(error => {
                // Handle validation errors and other errors
                console.error(error);
                if (error.response && error.response.status === 422) {
                    const errors = error.response.data.errors;
                    const errorList = document.getElementById('error-list');

                    // Clear existing error messages
                    errorList.innerHTML = '';

                    // Loop through the errors and append them as list items
                    for (const fieldName in errors) {
                        if (errors.hasOwnProperty(fieldName)) {
                            const errorMessages = errors[fieldName];
                            errorMessages.forEach(errorMessage => {
                                const listItem = document.createElement('li');
                                listItem.textContent = errorMessage;
                                errorList.appendChild(listItem);
                            });
                        }
                    }
                } else {
                    // Handle other errors here, e.g., network issues
                    dModal.show();
                }

                dModal.show();
            });

        return false; // Prevent the form from submitting traditionally
    }

    function handleError(error) {
        // Handle other types of errors here
    }


</script>
@endpush
