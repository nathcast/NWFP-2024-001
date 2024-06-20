<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Datasets Available on the Data Portal and Record Counts') }}
        </h2>
    </x-slot>

    <p><iframe src="https://nwfp.rothamsted.ac.uk/fpdownload/qc_reports/fp_data_catalogue/FPDataportalDatasets_PROD.html"
            frameborder="0" height="2300" scrolling="no" width="1180"></iframe></p>
    <p></p>
    <p><iframe
            src="https://nwfp.rothamsted.ac.uk/fpdownload/qc_reports/fp_data_catalogue/FPDataportalDataset_Counts_PROD.html"
            frameborder="0" height="2300" scrolling="no" width="1180"></iframe></p>

</x-guest-layout>
