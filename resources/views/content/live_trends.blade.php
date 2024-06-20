<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Live Catchment Data Trends and Meteorogical Data') }}
        </h2>
    </x-slot>

    <h2>1. Live Catchment Data Trends (last 30 days)</h2>
    <p></p>
    <table style="width: 500px;" border="1" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td>
                    <h3>Daily precipitation</h3>
                </td>
            </tr>
            <tr>
                <td><img src="http://exadcon.rothamsted.ac.uk/trend/graph?panel=7498&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
                        alt="" style="width: 1162px; height: 390px; float: left;" /></td>
            </tr>
        </tbody>
    </table>
    <p></p>
    <table style="width: 500px;" border="1" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td>
                    <h3>Mean Soil and Air Temperature</h3>
                </td>
            </tr>
            <tr>
                <td><a href="/rr_tools/farmplatform_charts/view/1" title="Sum Daily Precipitation"
                        rel="lightbox[graph]"><img
                            src="http://exadcon.rothamsted.ac.uk/trend/graph?panel=5167&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
                            alt="" style="width: 1162px; height: 390px; float: left;" /></a></td>
            </tr>
            <tr>
                <td> Blue: Mean soil temperature (deg C) from 15 sensors at 15cm Red: Air temperature (deg
                    C) at Met Station </td>
            </tr>
        </tbody>
    </table>
    <p></p>
    <h3>Flow &amp; Precipitation (largest catchment on each farmlet)</h3>
    <table style="width: 500px;" border="1" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td class="rtecenter" style="background-color: rgb(255, 0, 0);">
                    <h5>Red Farmlet (Catchment 2)</h5>
                </td>
            </tr>
            <tr>
                <td><a href="http://www.rothamsted.ac.uk/rr_tools/farmplatform_charts/view/2"
                        title="Blue:  Soil temperature 15cm (deg c). Mean of the 15 sensors located in each catchment. Red: Air temperature (deg c)"
                        rel="lightbox[graph]"><img
                            src="http://exadcon.rothamsted.ac.uk/trend/graph?panel=5175&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
                            alt="" style="width: 1162px; height: 390px;" /></a></td>
            </tr>
            <tr>
                <td colspan="1"> Line: Flow (litres/sec) Bars: Precipitation </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 500px;" border="1" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td style="background-color: rgb(51, 153, 0);">
                    <h5 class="rtecenter">Green Farmlet (Catchment 4)</h5>
                </td>
            </tr>
            <tr>
                <td><img src="http://exadcon.rothamsted.ac.uk/trend/graph?panel=5168&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
                        alt="" style="width: 1162px; height: 390px;" /></td>
            </tr>
            <tr>
                <td> Line: Flow (litres/sec) Bars: Precipitation</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 500px;" border="1" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td style="background-color: rgb(0, 102, 255);">
                    <h5 class="rtecenter">Blue Farmlet (Catchment 9)</h5>
                </td>
            </tr>
            <tr>
                <td><img src="http://exadcon.rothamsted.ac.uk/trend/graph?panel=6123&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
                        alt="" style="width: 1162px; height: 390px;" /></td>
            </tr>
            <tr>
                <td> Line: Flow (litres/sec) Bars: Precipitation</td>
            </tr>
        </tbody>
    </table>
    <p></p>
    <h2>2. Live Met data</h2>
    <p><strong><em>This interactive tool displays live meterological data from the Farm Platform's dedicated
                automatic weather station and allows users to plot trends over time</em></strong></p>
    <p></p>
    <p><iframe
            src="http://exadcon.rothamsted.ac.uk/livedata/collection.jsf?template=weather&amp;node=4826&amp;units=metric"
            style="width: 100%; height: 1000px;" height="14" width="47"></iframe></p>

</x-guest-layout>
