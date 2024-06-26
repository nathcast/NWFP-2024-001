<x-guest-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Content - List of Page') }}
        </h2>
    </x-slot>

    <p class="m-5 rounded border border-red-700 bg-orange-400 p-3 text-lg font-semibold text-white"> A working document -
        the link to the old page and to the new pages. progress</p>

        <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">In Progress</h2>
    <ul>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('technologies') }}">North Wyke and the Farm
                Platform as a Test-Bed For Advances in Sensor Technologies</a>
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/north-wyke-and-farm-platform-test-bed-advances-sensor-technologies
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('agri_modelling') }}">Agri-Modelling</a> -
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/agri-modelling-0
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
            class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
            href="{{ route('map') }}">Farm Platform Map</a>
        http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-map
    </li>
    </ul>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Static Pages - To Do</h2>

    <ul class="list-disc">
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('home') }}"> Landing page - will be done later</a>:
            was : http://resources.rothamsted.ac.uk/farmplatform
        </li>

        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('contacts') }}">Contacts</a>
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600">
            <a class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('visits') }}">Site
                Visits</a> :
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/about-farm-platform

        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ Route('information') }}">Information on trouble shooting</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('overview') }}">Overview & Hypotheses</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/overview-hypotheses
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ Route('live_trends') }}">Live Catchment Data Trends and Meteorogical Data</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-live-trends-and-met-data
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('facilities') }}">Using Our Facilities and Opportunities for Co-Development</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/using-our-facilities
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ Route('lamb_cheque') }}">News (example)</a>
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/trial-finds-ewe-data-route-bigger-lamb-cheque
        </li>
    </ul>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Pages depending on
        Databases</h2>
    <ul>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ Route('guides') }}">User Guides, Information, Data Portal Updates and External Links</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('publications') }}">
                Publications</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/publications
        </li>
    </ul>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Needs Sorting</h2>
    <ul>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('key_findings') }}">Key Research Findings</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/key-research-findings
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                href="{{ Route('experiments') }}">Experiments</a>
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/experiments Maybe
            don't include this one as this was set up as an interim to show how the NWFP was being used
            until the data were being published in Journals eetc.
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('timeline') }}">Timeline of Events</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/timeline-events
        </li>


        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                href="{{ route('data_collection') }}">Datasets Available on the Data Portal and Record Counts</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-collections
        </li>

    </ul>
    <h1 class="mt-0 h-12 content-center bg-nw-blue-50 px-4 text-2xl font-bold text-nw-blue-900">Heading 1</h1>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Heading 2</h2>

    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Heading 3</h3>
    <h4 class="mt-4 p-3 font-semibold text-nw-blue-700">Heading 4 </h4>

    <span
        class="me-2 rounded-full border border-2 border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 500
    </span>
    <span
        class="me-2 rounded-full border border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 600
    </span>
    <span
        class="me-2 rounded-full border border-2 border-nw-blue-50 bg-nw-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 700
    </span>
    <span
        class="me-2 rounded-full border border-2 border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 800
    </span>
    <span
        class="me-2 rounded-full border border-2 border-nw-blue-50 bg-nw-blue-900 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 900
    </span>

    <ul class="space-y-3 p-3">
        <x-li-dot class="bg-nw-blue-500">List with a DOT x-li-dot</x-li-dot>
        <x-li-dot class="bg-nw-blue-600">List with a DOT x-li-dot</x-li-dot>
        <x-li-dot class="bg-nw-blue-700">List with a DOT x-li-dot</x-li-dot>
        <x-li-dot class="bg-nw-blue-900">List with a DOT x-li-dot</x-li-dot>
    </ul>
    <ul class="space-y-3">
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
    </ul>
    </div>

    <h2 class="mt-4 h-12 content-center bg-nw-blue-500 px-4 text-lg font-medium text-nw-blue-50">
        <span
            class="me-2 rounded-full border border-2 border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Data Use
        </span> heading 2 with a pill of color 500
    </h2>

</x-guest-layout>
