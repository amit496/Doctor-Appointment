@extends('backend.layout.index')
@section('content')
    <div class="block justify-between page-header sm:flex">
        <div>
            <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Banner</h3>
        </div>
        <ol class="flex items-center whitespace-nowrap min-w-0">
            <li class="text-sm">
                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">Dashboard
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                </a>
            </li>
            <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">Banner</li>
        </ol>
    </div>

    <div class="grid gap-6">
        <div class="col-span-12 lg:col-span-6">
            <div class="box">
                <div class="box-header flex justify-between items-center">
                    <h5 class="box-title">Banner List</h5>
                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-focus-management-modal">Add Banner</button>
                </div>
                <div class="box-body">
                    <div class="overflow-auto table-bordered">
                        <div id="banner_table" class="ti-custom-table ti-striped-table ti-custom-table-hover">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>I</td>
                                        <td>I</td>
                                        <td>I</td>
                                        <td>I</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="hs-focus-management-modal" class="hs-overlay hidden ti-modal">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
            <div class="ti-modal-content">
                <div class="ti-modal-header">
                    <h3 class="ti-modal-title">Add Banner</h3>
                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-focus-management-modal">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor" />
                        </svg>
                    </button>
                </div>

                <form action="#" method="post" id="banner">
                    <div class="ti-modal-body">
                        <label for="input-label" class="ti-form-label">Image</label>
                        <input type="file" name="bannerimage" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70 file:border-0 file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4 file:py-3 file:px-4 dark:file:bg-black/20 dark:file:text-white/70">
                    </div>

                    <div class="ti-modal-body">
                        <label for="input-label" class="ti-form-label">Start Date</label>
                        <div class="flex rounded-sm shadow-sm">
                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                            </div>
                            <input type="text" name="startdate" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input" id="startdate" placeholder="Choose date" readonly="readonly">
                        </div>
                    </div>

                    <div class="ti-modal-body">
                        <label for="input-label" class="ti-form-label">End Date</label>
                        <div class="flex rounded-sm shadow-sm">
                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                            </div>
                            <input type="text" name="enddate" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input" id="enddate" placeholder="Choose date" readonly="readonly">
                        </div>
                    </div>

                    <div class="ti-modal-body">
                        <label for="input-label" class="ti-form-label">Status</label>
                        <select class="ti-form-select" name="bannerstatus">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="ti-modal-footer">
                        <button type="button" class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-overlay="#hs-focus-management-modal">Close</button>
                        <a class="ti-btn ti-btn-primary" href="javascript:void(0);" id="banner_data">Save changes</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
@section('script')
    <script>
        flatpickr("#startdate", {
            weekNumbers: true,
        });
        flatpickr("#enddate", {
            weekNumbers: true,
        });

        $(document).ready(function () {
            $('#banner_data').on('click', function () {

                const banner_data = new FormData($('#banner')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "{{ route('banner.add') }}",
                    data: banner_data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.log('Error:', error);
                    }
                });
            });
        });

    </script>
@endsection
