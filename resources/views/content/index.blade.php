<x-guest-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Content - List of Page') }}
        </h2>
    </x-slot>

    <p class="m-5 rounded border border-red-700 bg-orange-400 p-3 text-lg font-semibold text-white"> A working document -
        the link to the old page and to the new pages. </p>

    <ol class="list-decimal">
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('home') }}"> Landing page </a>:
            http://resources.rothamsted.ac.uk/farmplatform : <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('home') }}">
        </li>

        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('contacts') }}">Contacts</a> and
            <a class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('visits') }}">Site
                Visits</a> :
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/about-farm-platform
            contacts.blade. And site_visits
        </li>

        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ Route('guides') }}">User Guides, Information, Data Portal Updates and External Links</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('technologies') }}">North Wyke and the Farm
                Platform as a Test-Bed For Advances in Sensor Technologies</a>
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/north-wyke-and-farm-platform-test-bed-advances-sensor-technologies
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('overview') }}">Overview & Hypotheses</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/overview-hypotheses
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('publications') }}">
                Publications</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/publications
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('agri_modelling') }}">Agri-Modelling</a> -
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/agri-modelling-0
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ Route('live_trends') }}">Live Catchment Data Trends and Meteorogical Data</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-live-trends-and-met-data
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('key_findings') }}">Key Research Findings</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/key-research-findings
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                href="{{ Route('experiments') }}">Experiments</a>
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/experiments Maybe
            don't include this one as this was set up as an interim to show how the NWFP was being used
            until the data were being published in Journals eetc.
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('timeline') }}">Timeline of Events</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/timeline-events
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('map') }}">Farm Platform Map</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-map
        </li>

        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('data_collection') }}">Datasets Available on the Data Portal and Record Counts</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-collections
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('facilities') }}">Using Our Facilities and Opportunities for Co-Development</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/using-our-facilities
        </li>
        <li class="m-5 rounded-lg border border-green-400 p-3 hover:bg-green-700 hover:text-slate-100"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ Route('lamb_cheque') }}">News (example)</a>
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/trial-finds-ewe-data-route-bigger-lamb-cheque
        </li>
    </ol>

</x-guest-layout>
