
<main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="row gap-20 masonry pos-r" style="position: relative; height: 1855px;">
                <div class="masonry-sizer col-md-6">

                </div>
                <div class="masonry-item w-100" style="position: absolute; left: 0%; top: 0px;">
                    <div class="row gap-20">



                        <div class="col-md-3">
                            <a href="{{url('accounts-department')}}">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10">
                                        <h6 class="lh-1">Accounting Department</h6></div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed">

                                            </div>
                                            <div class="peer">
                                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{students()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        @permission('view_teachers')
                        <div class="col-md-3">
                            <a href="{{url('tcher')}}">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10">
                                        <h6 class="lh-1">Total Teachers</h6></div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed">

                                            </div>
                                            <div class="peer">
                                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{students()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        @endpermission


                        <div class="col-md-3">
                            <a href="{{url('addAdmin')}}">

                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10">
                                        <h6 class="lh-1">Admins</h6>
                                    </div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed">

                                            </div>
                                            <div class="peer">
                                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">{{admins()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{url('education-management')}}">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10">
                                        <h6 class="lh-1">Education Manager</h6>
                                    </div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed">
                                            </div>
                                            <div class="peer">
                                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{secondaryTeachers()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-md-3">
                            <a href="{{url('communication')}}">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10">
                                        <h6 class="lh-1">Communicator</h6>
                                    </div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed">
                                            </div>
                                            <div class="peer">
                                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{secondaryTeachers()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="masonry-item col-12" style="position: absolute; left: 0%; top: 124px;">
                    <div class="bd bgc-white">
                        <div class="peers fxw-nw@lg+ ai-s">

                            <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                                <div class="layers">
                                    <div class="layer w-100 mB-10"><h6 class="lh-1"><span class="badge">Other Infor</span></h6>
                                    </div>


                                </div>
                            </div>

                            <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Our Visitors</h3>
                                        <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                        <div id="visitor" style="height: 260px; width: 100%; max-height: 260px; position: relative;" class="c3">
                                            <svg width="287.65625" height="260" style="overflow: hidden;"><defs>
                                                    <clipPath id="c3-1535057489510-clip"><rect width="287.65625" height="236"></rect></clipPath>
                                                    <clipPath id="c3-1535057489510-clip-xaxis"><rect x="-31" y="-20" width="349.65625" height="40"></rect></clipPath>
                                                    <clipPath id="c3-1535057489510-clip-yaxis"><rect x="-29" y="-4" width="20" height="260"></rect></clipPath>
                                                    <clipPath id="c3-1535057489510-clip-grid"><rect width="287.65625" height="236"></rect></clipPath>
                                                    <clipPath id="c3-1535057489510-clip-subchart"><rect width="287.65625"></rect></clipPath></defs>
                                                <g transform="translate(0.5,4.5)">
                                                    <text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="143.828125" y="118" style="opacity: 0;">
                                                    </text>
                                                    <rect class="c3-zoom-rect" width="287.65625" height="236" style="opacity: 0;">

                                                    </rect>
                                                    <g clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip)" class="c3-regions" style="visibility: hidden;"></g>
                                                    <g clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip-grid)" class="c3-grid" style="visibility: hidden;">
                                                        <g class="c3-xgrid-focus">
                                                            <line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="236" style="visibility: hidden;"></line></g></g>
                                                    <g clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip)" class="c3-chart">
                                                        <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                                            <rect class=" c3-event-rect c3-event-rect-0" x="0.171875" y="0" width="287.65625" height="236"></rect></g>
                                                        <g class="c3-chart-bars">
                                                            <g class="c3-chart-bar c3-target c3-target-Other" style="opacity: 1; pointer-events: none;">
                                                                <g class=" c3-shapes c3-shapes-Other c3-bars c3-bars-Other" style="cursor: pointer;"></g></g>
                                                            <g class="c3-chart-bar c3-target c3-target-Desktop" style="opacity: 1; pointer-events: none;">
                                                                <g class=" c3-shapes c3-shapes-Desktop c3-bars c3-bars-Desktop" style="cursor: pointer;"></g></g>
                                                            <g class="c3-chart-bar c3-target c3-target-Tablet" style="opacity: 1; pointer-events: none;">
                                                                <g class=" c3-shapes c3-shapes-Tablet c3-bars c3-bars-Tablet" style="cursor: pointer;"></g></g>
                                                            <g class="c3-chart-bar c3-target c3-target-Mobile" style="opacity: 1; pointer-events: none;">
                                                                <g class=" c3-shapes c3-shapes-Mobile c3-bars c3-bars-Mobile" style="cursor: pointer;"></g></g></g>
                                                        <g class="c3-chart-lines">
                                                            <g class="c3-chart-line c3-target c3-target-Other" style="opacity: 1; pointer-events: none;">
                                                                <g class=" c3-shapes c3-shapes-Other c3-lines c3-lines-Other"></g>
                                                                <g class=" c3-shapes c3-shapes-Other c3-areas c3-areas-Other"></g>
                                                                <g class=" c3-selected-circles c3-selected-circles-Other"></g>
                                                                <g class=" c3-shapes c3-shapes-Other c3-circles c3-circles-Other" style="cursor: pointer;">

                                                                </g></g>
                                                            <g class="c3-chart-line c3-target c3-target-Desktop" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Desktop c3-lines c3-lines-Desktop"></g><g class=" c3-shapes c3-shapes-Desktop c3-areas c3-areas-Desktop"></g><g class=" c3-selected-circles c3-selected-circles-Desktop"></g><g class=" c3-shapes c3-shapes-Desktop c3-circles c3-circles-Desktop" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Tablet" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Tablet c3-lines c3-lines-Tablet"></g><g class=" c3-shapes c3-shapes-Tablet c3-areas c3-areas-Tablet"></g><g class=" c3-selected-circles c3-selected-circles-Tablet"></g><g class=" c3-shapes c3-shapes-Tablet c3-circles c3-circles-Tablet" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Mobile" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Mobile c3-lines c3-lines-Mobile"></g><g class=" c3-shapes c3-shapes-Mobile c3-areas c3-areas-Mobile"></g><g class=" c3-selected-circles c3-selected-circles-Mobile"></g><g class=" c3-shapes c3-shapes-Mobile c3-circles c3-circles-Mobile" style="cursor: pointer;"></g></g></g><g class="c3-chart-arcs" transform="translate(143.828125,113)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 1;">Our visitor</text><g class="c3-chart-arc c3-target c3-target-Other"><g class=" c3-shapes c3-shapes-Other c3-arcs c3-arcs-Other"><path class=" c3-shape c3-shape c3-arc c3-arc-Other" transform="scale(1,1)" style="fill: rgb(236, 239, 241); cursor: pointer; opacity: 1;" d="M-100.37399365227927,38.066834624016224A107.35,107.35 0 0,1 -49.88803251889861,-95.05370435387205L-40.59356907802323,-77.34458384080786A87.35,87.35 0 0,0 -81.67366879857097,30.974736883165505Z"></path></g><text dy=".35em" class="" transform="translate(-80.29919492182343,-30.45346769921296)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Desktop"><g class=" c3-shapes c3-shapes-Desktop c3-arcs c3-arcs-Desktop"><path class=" c3-shape c3-shape c3-arc c3-arc-Desktop" transform="scale(1,1)" style="fill: rgb(116, 90, 242); cursor: pointer; opacity: 1;" d="M-49.88803251889861,-95.05370435387205A107.35,107.35 0 0,1 -1.150658284380787e-13,-107.35L-9.362831964663413e-14,-87.35A87.35,87.35 0 0,0 -40.59356907802323,-77.34458384080786Z"></path></g><text dy=".35em" class="" transform="translate(-20.552429249015535,-83.38448328054933)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Tablet"><g class=" c3-shapes c3-shapes-Tablet c3-arcs c3-arcs-Tablet"><path class=" c3-shape c3-shape c3-arc c3-arc-Tablet" transform="scale(1,1)" style="fill: rgb(38, 198, 218); cursor: pointer; opacity: 1;" d="M71.18621736214938,80.35262881616767A107.35,107.35 0 0,1 -100.37399365227927,38.066834624016224L-81.67366879857097,30.974736883165505A87.35,87.35 0 0,0 57.923764197333476,65.38241385274566Z"></path></g><text dy=".35em" class="" transform="translate(-20.552429249015432,83.38448328054933)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Mobile"><g class=" c3-shapes c3-shapes-Mobile c3-arcs c3-arcs-Mobile"><path class=" c3-shape c3-shape c3-arc c3-arc-Mobile" transform="scale(1,1)" style="fill: rgb(30, 136, 229); cursor: pointer; opacity: 1;" d="M6.573291694423418e-15,-107.35A107.35,107.35 0 0,1 71.18621736214938,80.35262881616767L57.923764197333476,65.38241385274566A87.35,87.35 0 0,0 5.348644895276065e-15,-87.35Z"></path></g><text dy=".35em" class="" transform="translate(80.29919492182343,-30.45346769921297)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Other" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Other"></g></g><g class="c3-chart-text c3-target c3-target-Desktop" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Desktop"></g></g><g class="c3-chart-text c3-target c3-target-Tablet" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Tablet"></g></g><g class="c3-chart-text c3-target c3-target-Mobile" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Mobile"></g></g></g></g><g clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip-xaxis)" transform="translate(0,236)" style="visibility: visible; opacity: 0;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="287.65625" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H287.65625V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,217)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,192)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">15</tspan></text></g><g class="tick" transform="translate(0,168)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,143)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">25</tspan></text></g><g class="tick" transform="translate(0,119)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,95)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">35</tspan></text></g><g class="tick" transform="translate(0,70)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,46)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">45</tspan></text></g><g class="tick" transform="translate(0,21)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">50</tspan></text></g><path class="domain" d="M-6,1H0V236H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(287.65625,0)" style="visibility: hidden; opacity: 0;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,236)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,213)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,189)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,166)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,142)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,119)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,95)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,72)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,48)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,25)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V236H6"></path></g></g><g transform="translate(0.5,260.5)" style="visibility: hidden;"><g clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="287.65625" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(file:///C:/Users/Hyfos2/Downloads/Latest%20template/Material%20Pro%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template.html#c3-1535057489510-clip-xaxis)" style="visibility: hidden; opacity: 0;"><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H287.65625V6"></path></g></g><g transform="translate(0,240)"><g class="c3-legend-item c3-legend-item-Other" style="visibility: hidden; cursor: pointer; opacity: 1;"><text x="14" y="9" style="pointer-events: none;">Other</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(236, 239, 241); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Desktop" style="visibility: hidden; cursor: pointer; opacity: 1;"><text x="14" y="9" style="pointer-events: none;">Desktop</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(116, 90, 242); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Tablet" style="visibility: hidden; cursor: pointer; opacity: 1;"><text x="14" y="9" style="pointer-events: none;">Tablet</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(38, 198, 218); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Mobile" style="visibility: hidden; cursor: pointer;"><text x="14" y="9" style="pointer-events: none;">Mobile</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(30, 136, 229); pointer-events: none;"></line></g></g><text class="c3-title" x="143.828125" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 43.5px; left: 173.844px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name--Mobile"><td class="name"><span style="background-color:#1e88e5"></span>Mobile</td><td class="value">38.5%</td></tr></tbody></table></div></div>
                                    </div>
                                    <div>
                                        <hr class="m-t-0 m-b-0">
                                    </div>
                                    <div class="card-body text-center ">
                                        <ul class="list-inline m-b-0">
                                            <li>
                                                <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Mobile</h6> </li>
                                            <li>
                                                <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Desktop</h6> </li>
                                            <li>
                                                <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Tablet</h6> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 708px;">
                    <div class="bd bgc-white">
                        <div class="layers">
                            <div class="layer w-100 pX-20 pT-20">
                                <h6 class="lh-1"> <span class="badge">Monthly Fees Payment stats</span></h6>
                            </div>
                            <div class="layer w-100 p-20">
                                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">


                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0">

                                        </div>
                                    </div>
                                </div>
                                <canvas id="line-chart" height="151" width="568" class="chartjs-render-monitor" style="display: block; width: 568px; height: 151px;"></canvas>
                            </div>
                            <div class="layer bdT p-20 w-100">
                                <div class="peers ai-c jc-c gapX-20"><div class="peer">
                                        <span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span>
                                        <small class="c-grey-500 fw-600">APPL</small>
                                    </div>
                                    <div class="peer fw-600">
                                        <span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span>
                                        <small class="c-grey-500 fw-600">Average</small>
                                    </div>
                                    <div class="peer fw-600">
                                        <span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span>
                                        <small class="c-grey-500 fw-600">Sales</small>
                                    </div>
                                    <div class="peer fw-600">
                                        <span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span>
                                        <small class="c-grey-500 fw-600">Profit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="masonry-item col-md-6" style="position: absolute; left: 50%; top: 708px;">

                    <div class="bd bgc-white p-20">
                        <div class="layers">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Todo List</h6>
                            </div>
                            <div class="layer w-100">
                                <ul class="list-task list-group" data-role="tasklist"><li class="list-group-item bdw-0" data-role="task">
                                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                            <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                            <label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Call John for Dinner</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                            <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
                                            <label for="inputCall2" class="peers peer-greed js-sb ai-c">
                                                <span class="peer peer-greed">Book Boss Flight</span> <span class="peer">
                                                        <span class="badge badge-pill fl-r badge-success lh-0 p-10">2 Days</span>
                                                    </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task"><div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                            <input type="checkbox" id="inputCall3" name="inputCheckboxesCall" class="peer">
                                            <label for="inputCall3" class="peers peer-greed js-sb ai-c">
                                                <span class="peer peer-greed">Hit the Gym</span>
                                                <span class="peer"><span class="badge badge-pill fl-r badge-danger lh-0 p-10">3 Minutes</span>
                                                    </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                            <input type="checkbox" id="inputCall4" name="inputCheckboxesCall" class="peer">
                                            <label for="inputCall4" class="peers peer-greed js-sb ai-c">
                                                <span class="peer peer-greed">Give Purchase Report</span> <span class="peer">
                                                        <span class="badge badge-pill fl-r badge-warning lh-0 p-10">not important</span>
                                                    </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                            <input type="checkbox" id="inputCall5" name="inputCheckboxesCall" class="peer">
                                            <label for="inputCall5" class="peers peer-greed js-sb ai-c">
                                                <span class="peer peer-greed">Watch Game of Thrones Episode</span>
                                                <span class="peer">
                                                        <span class="badge badge-pill fl-r badge-info lh-0 p-10">Tomorrow</span></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                            <input type="checkbox" id="inputCall6" name="inputCheckboxesCall" class="peer">
                                            <label for="inputCall6" class="peers peer-greed js-sb ai-c">
                                                <span class="peer peer-greed">Give Purchase report</span> <span class="peer">
                                                        <span class="badge badge-pill fl-r badge-success lh-0 p-10">Done</span>
                                                    </span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
