<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Welcome...') }}
        </h2>
    </x-slot>


        <p><iframe
            src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1KQ75WdA1zVxpyPTH7U_LrjEicULz6ymZNjI_njEKMtU&amp;font=Default&amp;lang=en&amp;initial_zoom=1&amp;height=650"
            style="width: 100%; height: 600px;" frameborder="0" height="14" scrolling="no" width="47"></iframe></p>

            <div class="py-12 ">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-auto bg-white sm:rounded-lg p-5 shadow-lg">
                        <div class="list-decimal grid grid-cols-4 gap-4">
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('home') }}"> Landing page </a>:
                                <a href="http://resources.rothamsted.ac.uk/farmplatform : <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('home') }}">
                            </div>

                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('contacts') }}">Contacts</a> and
                                <a class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('visits') }}">Site
                                    Visits</a> :
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/about-farm-platform">Old Site</a>
                                contacts.blade. And site_visits
                            </div>

                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ Route('guides') }}">User Guides, Information, Data Portal Updates and External Links</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('technologies') }}">North Wyke and the Farm
                                    Platform as a Test-Bed For Advances in Sensor Technologies</a>
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/north-wyke-and-farm-platform-test-bed-advances-sensor-technologies">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('overview') }}">Overview & Hypotheses</a> -
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/overview-hypotheses">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('publications') }}">
                                    Publications</a> -
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/publications">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('agri_modelling') }}">Agri-Modelling</a> -
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/agri-modelling-0">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ Route('live_trends') }}">Live Catchment Data Trends and Meteorogical Data</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-live-trends-and-met-data">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('key_findings') }}">Key Research Findings</a> -
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/key-research-findings">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    href="{{ Route('experiments') }}">Experiments</a>
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/experiments">Old Site</a> Maybe
                                don't include this one as this was set up as an interim to show how the NWFP was being used
                                until the data were being published in Journals eetc.
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('timeline') }}">Timeline of Events</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/timeline-events">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('map') }}">Farm Platform Map</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-map">Old Site</a>
                            </div>

                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('data_collection') }}">Datasets Available on the Data Portal and Record Counts</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-collections">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ route('facilities') }}">Using Our Facilities and Opportunities for Co-Development</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/using-our-facilities">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-green-400 p-3 border-3 hover:bg-green-500 hover:text-slate-100 shadow-lg"> <a
                                    class="text-blue-800 hover:text-yellow-400 hover:underline active:text-yellow-700"
                                    href="{{ Route('lamb_cheque') }}">News (example)</a>
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/trial-finds-ewe-data-route-bigger-lamb-cheque">Old Site</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-guest-layout>
