<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Agri-Modelling') }}
        </h2>
    </x-slot>
    <div class="p-3">
        <button
            class="shadow-primary-3 hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 active:bg-primary-600 active:shadow-primary-2 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong inline-block rounded-full bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30"
            type="button">
            Data Use
        </button>
        <button
            class="shadow-primary-3 hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 active:bg-primary-600 active:shadow-primary-2 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong inline-block rounded-full bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30"
            type="button">
            Input Data
        </button>
        <button
            class="shadow-primary-3 hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 active:bg-primary-600 active:shadow-primary-2 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong inline-block rounded-full bg-nw-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30"
            type="button">
            Model Data
        </button>
        <button
            class="shadow-primary-3 hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 active:bg-primary-600 active:shadow-primary-2 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong inline-block rounded-full bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30"
            type="button">
            Calibration
        </button>
        <button
            class="shadow-primary-3 hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 active:bg-primary-600 active:shadow-primary-2 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong inline-block rounded-full bg-nw-blue-900 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30"
            type="button">
            Modelled Data
        </button>
    </div>

    <div class="flex">
        <div class="border border-dotted border-gray-100 p-3 shadow-2">
            <p>The North Wyke Farm Platform provides a response to the needs of modellers who have long required more
                agri-environmental data for simulations regarding sustainable agriculture, providing data for agri-model
                input and calibration data to compare with simulated output.</p>
            <p>This website provides a guide to using the Farm Platform Data Portal for data, splitting it into input
                data and calibration data. We provide some examples of results produced using the models we have used.
            </p>
            <p>Please let us know if you have used the Farm Platform data for your modelling, we would appreciate your
                feedback on how easy or difficult you found the Data Portal.</p>
            <p>The aim is that the Data Portal supplies data on temperate high rainfall grassland livestock systems
                internationally for models to use the Farm Platform in their simulations.</p>

        </div>
        <div class="border border-dotted border-gray-100 p-3 shadow-2">

            <p>Rothamsted North Wyke has a long history of modelling experimental data, for example the <a
                    href="http://www.sciencedirect.com/science/article/pii/S0048969711005742"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    <font color="#0066cc">SIMSDairy</font>
                </a> model. Models currently being used with data from the farm platform include:</p>
            <ul>
                <li><a href="https://www.sciencedirect.com/science/article/pii/S0304380006003802"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        <font color="#0066cc">SPACSYS</font>
                    </a></li>
                <li><a href="http://www.nrel.colostate.edu/projects/daycent/"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        <font color="#0066cc">DayCent</font>
                    </a></li>
                <li><a href="https://iwaponline.com/hr/article/48/1/277-294/1702"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        <font color="#0066cc">SH2O-NW</font>
                    </a></li>
                <li><a href="https://www.sciencedirect.com/science/article/pii/S004896971731896X?via%3Dihub"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        <font color="#0066cc">The Landscape Model</font>
                    </a></li>
            </ul>

        </div>
    </div>
    <h2 class="h-12 content-center mt-4 bg-nw-blue-500 px-4 text-lg font-medium text-nw-blue-50">
        <button
            class="shadow-primary-3 border-3 border-nw-blue-0 hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 active:bg-primary-600 active:shadow-primary-2 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong inline-block border-spacing-4 rounded-full border bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30"
            type="button">
            Data Use
        </button> How to use the Data Portal and Guides for modelling
    </h2>
    <div class="p-3">
        <p>When using the Farm Platform Data Portal for the first time, a good familiarisation to the
            North Wyke Farm Platform and the data is to:</p>
        <ul>
            <li>
                <p>Read the background information on the establishment, design and continued
                    development of the Farm Platform provided in the User Guide available here: <a
                        href="https://repository.rothamsted.ac.uk/item/98y1x/the-north-wyke-farm-platform-design-establishment-and-development"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><u>Establishment
                            and Development of the NWFP</u>.</a></p>
            </li>
            <li>
                <p>Supporting documentation to the site can be found here:</p>
            </li>
        </ul>
        <p>- <a
                href="http://resources.rothamsted.ac.uk/sites/default/files/groups/North_Wyke_Farm_Platform/Harrod%20and%20Hogan%202008.pdf"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Soils
                of North Wyke</a></p>
        <p>- <a
                href="http://resources.rothamsted.ac.uk/sites/default/files/groups/North_Wyke_Farm_Platform/Draft%20report%20v5%20%2831%20Oct%2008%29.pdf"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Hydrological
                Assessment</a></p>
        <ul>
            <li>
                <p>Learn about the range of parameters measured, and data collection methods for all the
                    datasets available on the portal in dedicated User Guides, the links to which can be
                    found on the '<a
                        href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                        Guides, Information, Data Portal Updates and External Links</a>' webpage, such
                    as:</p>
            </li>
        </ul>
        <p> </p>
        <p>- <a
                href="https://repository.rothamsted.ac.uk/item/98y34/the-north-wyke-farm-platform-fine-resolution-15-minute-hydrology-and-water-quality-data"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                Guide to the 15 Minute Hydrology and Water Quality Data</a></p>
        <p><span style="font-size: 14px;">- </span><a
                href="https://repository.rothamsted.ac.uk/item/98y4x/the-north-wyke-farm-platform-fine-resolution-15-minute-soil-moisture-station-data"
                style="font-size: 14px;"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                Guide to the 15 Minute Soil Moisture Station Data</a></p>
        <p>- <a
                href="https://repository.rothamsted.ac.uk/item/98y4w/the-north-wyke-farm-platform-fine-resolution-15-minute-meteorological-data"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                Guide to the 15 Minute Meteorological Data</a></p>
        <p> </p>
        <ul>
            <li class="rteindent1">
                <p>First look at the datasets (both downloaded datasets and metadata) and assess if they
                    would be relevant for input to your model. To assist you in this reports on the
                    quality and summary statistics of the data at annual intervals can be found here:
                </p>
            </li>
        </ul>
        <p>- <a
                href="https://nwfp.rothamsted.ac.uk/fpdownload/QC_Reports/15_minute_Data_Reports_External/Annual_Reports/showfiles.aspx"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Annual
                reports</a></p>
        <ul>
            <li>
                <p>Input to your model one dataset at a time from the data portal (information on
                    datasets are supplied on this website).</p>
            </li>
            <li>
                <p>Explore changing dataset years or parameters and see what difference it makes. This
                    helps the user become familiar with the data format and values.</p>
            </li>
            <li>
                <p>Check the '<a
                        href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                        Guides, Information, Data Portal Updates and External Links</a>' webpage
                    <strong>Known Issues and Workarounds </strong>section for known problems with using
                    the data portal .
                </p>
            </li>
            <li>
                <p>When you are more familiar with the data and its format, if you have any questions,
                    consult the more detailed explanatory information provided in the data portal user
                    guides, including data conversion methods, sensor sensitivity, and potential
                    limitations of data. If you still have questions email the data query contact
                    address, but please remember the Farm Platform team can answer questions relating to
                    data, not modelling.</p>
            </li>
        </ul>
        <p>Reading the explanatory guides are a very important step, and not to be bypassed but the
            explanatory information may be absorbed and understood better when you have familiarised
            yourself with the datasets available.</p>
        </td>
    </div>
    <h2 class="h-12 content-center mt-4 bg-nw-blue-600 px-4 text-lg font-medium text-nw-blue-50">
        <button
            class="shadow-primary-3 border-3 border-nw-blue-0 hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 active:bg-primary-600 active:shadow-primary-2 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong inline-block border-spacing-4 rounded-full border bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30"
            type="button">
            Input Data
        </button> Datasets suitable for process model input
    </h2>
    <div class="p-3">
        <p>Soils information can be gained from:</p>
        <ul>
            <li>
                <p><a href="/sites/default/files/groups/North_Wyke_Farm_Platform/Harrod%20and%20Hogan%202008.pdf"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><u>Soils
                            of North Wyke</u></a> which contains % sand, silt, clay for available water
                    capacity determination</p>
            </li>
            <li>
                <p>Data Portal - Field Surveys - Soil Survey contains pH and bulk density</p>
            </li>
        </ul>
        <p>Weather data can be obtained from:</p>
        <ul>
            <li>
                <p>Data Portal – Time Series data - MET Station for whole of Farm Platform.</p>
            </li>
        </ul>
        <p>Field management data including fertilizer applications and silage cutting operations can be
            gained from:</p>
        <ul>
            <li>
                <p>Data Portal – Livestock, Field Event &amp; Survey data - Field Events datasets*.</p>
            </li>
            <li>
                <p>These should be used with <a
                        href="/sites/default/files/groups/North_Wyke_Farm_Platform/FP%20Technical%20case%20study%202%20HS%20Field%20Spreading%20Areas.pdf">Technical
                        case study </a><a
                        href="/sites/default/files/groups/North_Wyke_Farm_Platform/FP%20Technical%20case%20study%202%20HS%20Field%20Spreading%20Areas.pdf"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><u>2:
                            Field spreading area calculations</u></a>, to calculate the rate of
                    application.</p>
            </li>
        </ul>
        <p>Stock numbers per field can be gained from:</p>
        <ul>
            <li>
                <p>Data Portal - Livestock datasets</p>
            </li>
        </ul>
        <p>*<em>The field events files are described in farming operations terms, hence the Defra RB209
                Fertilizer Manual is useful for conversion. Ready- converted fertilizer to elemental
                amounts are included <a
                    href="/sites/default/files/groups/North_Wyke_Farm_Platform/Fertiliser%20conversion%20%28oxide%20to%20element%29.pdf"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><u>here</u></a><a
                    href="/sites/default/files/groups/Farm_Platform_National_Capability/DataPortal/Fertiliser%20conversion%20%28oxide%20to%20element%29.pdf"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                </a>for the fertilizer types used on the Farm Platform.</em></p>
    </div>

    <td style="width: 50px;"><img src="/sites/default/files/groups/Farm_Platform_National_Capability/modelling4but.png"
            alt="" style="width: 100px; height: 96px;" /></td>
    <td>
        <h5>Datasets suitable for process model calibration and validation</h5>
    </td>
    </tr>
    <tr>
        <td style="width: 50px;"> </td>
        <td>
            <h4>Crop Production</h4>
            <ul>
                <li>Data Portal – Field Surveys – Silage Cut Survey gives dry matter yield from the herbage
                    cut for silage production</li>
            </ul>
            <h4>Soil moisture sensor</h4>
            <ul>
                <li>Data Portal - Time Series data – Soil moisture &amp; Precipitation for each catchment
                </li>
            </ul>
            <h4>Flume runoff flow &amp; nutrients in runoff water</h4>
            <ul>
                <li>Data Portal - Time Series data – Water Flow and Properties for each catchment</li>
            </ul>
            <h4>Above-ground herbage nitrogen &amp; carbon</h4>
            <ul>
                <li>Data Portal – Livestock, Field Event &amp; Survey data – herbage survey</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td style="width: 50px;"> </td>
        <td><img src="/sites/default/files/groups/Farm_Platform_National_Capability/dataportal.png" alt=""
                style="width: 500px; height: 400px;" /></td>
    </tr>
    </tbody>
    </table>
    <table style="width: 1175px;" border="1" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td><img src="/sites/default/files/groups/Farm_Platform_National_Capability/modelling5but.png"
                        alt="" style="width: 100px; height: 96px;" /></td>
                <td>
                    <p>Extra data which may be useful in modelling is to be found on the <span
                            style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 14px; background-color: rgb(238, 238, 238);">'</span><a
                            href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information"
                            style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Helvetica, Arial, sans-serif, museo-sans; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(0, 98, 160); background-color: rgb(238, 238, 238);"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                            Guides, Information, Data Portal Updates and External Links</a><span
                            style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 14px; background-color: rgb(238, 238, 238);">'
                            webpage</span> in the '<strong>Supplementary Data, Information and File Downloads'
                        </strong>section. This supplementary file store is very useful for models using a daily
                        time-step since it contains statistical summaries of the 15-minute datasets, including daily
                        weather data, flume measurements and soil moisture, temperature and field precipitation. The
                        file store also contains GIS shape files for the farm platform fields.</p>
                    <p>Links to further sources of data, including datasets from the same North Wyke site as well as
                        other sites, are given on the webpage in the '<strong>Useful Links to External Data
                            Repositories and Associated Organisations' </strong>section.</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 1175px;" border="1" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><img src="/sites/default/files/groups/Farm_Platform_National_Capability/modelling6but.png"
                        alt="" style="width: 100px; height: 96px;" /></td>
                <td>
                    <p>Process modelling has been carried out using the data of the Farm Platform, here are some
                        results which could be used in comparison to your modelled output:</p>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><img src="/sites/default/files/groups/Farm_Platform_National_Capability/spacsysbut.png"
                        alt="" style="width: 100px; height: 96px;" /></td>
                <td>
                    <p>The SPACSYS model (Wu et al., 2007) is a field scale, weather-driven and daily-time-step
                        dynamic simulation model. The current version includes a plant growth and development
                        component, a nitrogen cycling component, a carbon cycling component, a phosphorus cycling
                        component, plus a soil water component that includes representation of water flow to field
                        drains as well as downwards through the soil layers, together with a heat transfer
                        component. The model has a capability to simulate the interaction of C, N, P, soil water and
                        temperature in the soil-plant-atmosphere continuum system.</p>
                    <p>The main processes concerning plant growth in the model are plant development, assimilation,
                        respiration, and partition of photosynthate and nitrogen from uptake estimated with various
                        mechanisms implemented in the model, plus N fixation for legume plants, and root growth and
                        development that is described in 3D root system by the following processes: branching,
                        extension, architecture, mortality, water uptake and nutrient uptake. An alternative 1D root
                        system is implemented to simplify processes involved in root growth and development. The
                        functionality on water and nitrogen uptake by roots is also quantified.</p>
                    <p>The model has been used to investigate a number of issues including nitrate leaching,
                        resource use efficiency by crops, root systems, GHG emissions and and the responses of
                        cropping/grassland systems on environmental changes. The model can address the questions,
                        such as, how to increase N and water use efficiency through manipulating genetic traits of
                        plant root architecture; what field managements to mitigate GHG emissions and diffuse
                        pollution; how response of plants/cropping systems to climate change and carbon sequestered
                        into soils with land use change.</p>
                    <p><em>Wu, L., McGechan, M. B., McRoberts, N., Baddeley, J. A., Watson, C. A., 2007. SPACSYS:
                            integration of a 3D root architecture component to carbon, nitrogen and water cycling -
                            model description. Ecol. Model. 200, 343-359. (<a
                                href="https://www.sciencedirect.com/science/article/abs/pii/S0304380006003802?via%3Dihub"
                                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">doi:10.1016/j.ecolmodel.2006.08.010</a>)</em>
                    </p>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><img src="/sites/default/files/groups/Farm_Platform_National_Capability/daycentbut.png"
                        alt="" style="width: 100px; height: 96px;" /></td>
                <td>
                    <p>DAYCENT is the daily time-step version of the CENTURY biogeochemical model (Parton et al.,
                        1994). DAYCENT simulates fluxes of C and N among the atmosphere, vegetation, and soil
                        (Parton et al., 1998). Submodels include soil water content and temperature by layer, plant
                        production and allocation of net primary production (NPP), decomposition of litter and soil
                        organic matter, mineralization of nutrients, N gas emissions from nitrification and
                        denitrification, and CH4 oxidation in non-saturated soils.</p>
                    <p>Operators create a schedule file which calls in modules for field management and makes it
                        possible to manage operations on a daily basis. Model outputs include: daily N-gas flux
                        (N2O, NOx, N2), CO2 flux from heterotrophic soil respiration, soil organic C and N, NPP, H2O
                        and NO3 leaching, and other ecosystem parameters.</p>
                    <p><em>Parton, W.J. and Rasmussen, P.E. 1994. Long term effects of crop management in
                            wheat/fallow: II. CENTURY model simulations. Soil Science Society of America Journal 58:
                            530-536.</em></p>
                    <p><em>Parton, W.J., Hartman, M., Ojima, D., Schimel, D. 1998. DAYCENT and its land surface
                            submodel: description and testing. Global Planetary Change, 19, 35-48.</em></p>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><img src="/sites/default/files/groups/Farm_Platform_National_Capability/SH20-NWbut.png"
                        alt="" style="width: 100px; height: 96px;" /></td>
                <td>
                    <p>SH2O-NW is a simple but effective soil water model to predict the soil moisture stored in the
                        root zone and determine field runoff from soil (Shepherd et al., 2002). The model has been
                        validated for the North Wyke Farm Platform (Shepherd et al., 2016), and is parsimonious
                        requiring available water capacity and soil runoff curve number plus meteorological data.
                    </p>
                    <p>Water availability in the root zone involves a water balance in which effective rainfall,
                        runoff and evapo-transpiration are the main factors. The model assumes that in the absence
                        of a water table, effective rainfall is the only source of water. The effective rainfall is
                        calculated from rainfall minus surface runoff. If the available water is below a critical
                        threshold, the crop demand cannot be met. The relative reduction in water use is related to
                        the ratio of the available water and the water holding capacity.</p>
                    <p><em>A. Shepherd, S.M. McGinn, G.C.L. Wyseure. 2002. Simulation of the effect of water
                            shortage on the yields of winter wheat in North-East England. <a
                                href="https://abdn.pure.elsevier.com/en/publications/simulation-of-the-effect-of-water-shortage-on-the-yields-of-winte"
                                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Ecological
                                Modelling, 147(1), 41-52.</a></em></p>
                    <p><em>A. Shepherd, W. Atuhaire, L. Wu, D. Hogan, R. Dunn and L. Cardenas (2016). Historic
                            record of pasture soil water and the influence of the North Atlantic Oscillation in
                            south-west England. Hydrology Research. (<a
                                href="https://iwaponline.com/hr/article/48/1/277/1702/Historic-record-of-pasture-soil-water-and-the"
                                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">doi:10.2166/nh.2016.195</a>)</em>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <p></p>

</x-guest-layout>
